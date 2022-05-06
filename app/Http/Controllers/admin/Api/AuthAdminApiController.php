<?php

namespace App\Http\Controllers\admin\Api;

use App\Events\SendForgotPasswordAdminEvent;
use App\Models\Admin;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\AuthAdminRequest;
use App\Http\Requests\AdminRegisterRequest;
use App\Http\Requests\ForgotPasswordAdminRequest;
use App\Http\Requests\UpdateForgotPasswordAdminRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthAdminApiController extends Controller
{

    private $admin;


    public function __construct()
    {
        Auth::setDefaultDriver('admin');


    }
    public function admins()
    {
        $admin = Admin::where('id',1)->get();
        return response()->json([
            'admin'=>$admin
        ]);

    }

    public function signin(AuthAdminRequest $request)
    {

        $admin = Admin::where('email',$request->email)->first();
        if($admin)
        if (Hash::check($request->password, $admin->password)) {
            Auth::guard('admin')->login($admin);

            $this->admin=$admin;
            //  Auth::guard('admin')->logout($admin);

             Auth::logoutOtherDevices($request->password);
            // $this->authenticated($request,Auth::guard('admin')->user());

            // Auth::guard('admin')->logout($admin);
            $admin->tokens()->delete();
            $token=$admin->createToken('MovieApp')->accessToken;
                 return response()->json([
                'status'=>'200',
                'message'=>'login successful',
                'next'=>redirect()->intended('/seed')->getTargetUrl(),
                'token'=>$token,


            ]);
        }
        else
        return response()->json([
            'status'=>'422',
            'message'=>'password is incorrect'
        ]);


        // if(Auth::guard('admin_api')->attempt(['email' => $request->email, 'password' => $request->password],$request->remember))
        // {

        //     Auth::guard('admin_api')->login(Auth::guard('admin_api')->user());
        //     $admin=Auth::guard('admin_api')->user();
        //     //  $this->authenticated($request,Auth::guard('admin_api')->user());
        //     $token=$admin->createToken('MovieApp')->accessToken;




        //     return response()->json([
        //         'status'=>'200',
        //         'message'=>'login successful',
        //         'next'=>redirect()->intended('/seed')->getTargetUrl(),
        //         'token'=>$token,

        //     ]);

        //      }
        // else
        // return response()->json([
        //     'status'=>'422',
        //     'message'=>'password is incorrect'
        // ]);

    }
    // /**
    //  * The user has been authenticated.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  mixed  $user
    //  * @return mixed
    //  */
    // protected function authenticated($request, $user)
    // {



    //         Auth::logoutOtherDevices($request->password);



    // }

    // /**
    //  * Get the guard to be used during authentication.
    //  *
    //  * @return \Illuminate\Contracts\Auth\StatefulGuard
    //  */
    // protected function guard()
    // {
    //     return Auth::guard('admin');
    // }


    public function signup(AdminRegisterRequest $request)
    {
        $admin=Admin::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);
        $token=$admin->createToken('MovieApp')->accessToken;
        $this->admin=$admin;

        if($admin)
        return response()->json([
            'token'=>$token
        ]);

        return response()->json([
            'message'=>'Something Wrong'
        ]);




    }




    public function sendForgotPasswordEmail(ForgotPasswordAdminRequest $request)
     {
        $attemp=DB::table('password_resets')->where([
            'email' => $request->email,
          ]);

         $datecanuse=$attemp->latest()->value('created_at');
           if($attemp->count() <=3)
           {
            $token = Str::random(64);

            DB::table('password_resets')->insert([
                'email' => $request->email,
                'token' => $token,
                'created_at' => Carbon::now(),
              ]);
              $data=[
                'email'=>$request->email,
                'token'=>$token
            ];



              event(new SendForgotPasswordAdminEvent($data));

            return response()->json([
                'status'=>200,
                'message'=>'We have e-mailed your password reset link!',
                'token_reset'=>$token,
            ]);

           }
           else if (Carbon::now()->diffInMinutes($datecanuse) < 180 )
           {

             if( 3- Carbon::now()->diffInHours($datecanuse) > 1)
             $tryafter=3- Carbon::now()->diffInHours($datecanuse). " hour";
             else
             {
                $tryafter=180-Carbon::now()->diffInMinutes($datecanuse). " Minutes";
             }

            return response()->json([
                'status'=>444,
                'message'=> 'Please Try After ' .$tryafter
            ]);

        }
        else if ($tryafter=Carbon::now()->diffInMinutes($datecanuse) > 180 )
        {
            $attemp=DB::table('password_resets')->where([
                'email' => $request->email,
              ])->delete();




                $token = Str::random(64);

                DB::table('password_resets')->insert([
                    'email' => $request->email,
                    'token' => $token,
                    'created_at' => Carbon::now(),
                  ]);
            return response()->json([
                'status'=>200,
                'message'=>'We have e-mailed your password reset link!',
                'token_reset'=>$token,
            ]);

     }
           else
           {

            return response()->json([
                'status'=>444,
                'message'=>'too many attemps, please try again later'
            ]);



           }


     }
     public function logout($email=null,$admin=null)
     {

         if($admin==null && $email!=null)
         {
            $admin=Admin::where('email',$email)->first();
            if(!$admin)
            return response()->json([
                'status'=>404,
                'message'=>'invalid request!'
            ]);

         }

        $admin->tokens()->delete();
         if(Auth::guard('admin')->check())
         {


            Auth::guard('admin')->logout();
            session()->flush();

         }


         return ;
     }

     public function getshowresetPasswordform($email,$token)
     {

        $updatepassword=DB::table('password_resets')->where([
            'token' => $token,

          ])->first();
          if(!$updatepassword){
              return abort(404);
        }
        $now=Carbon::now();
        // $dateofexpired=$now->format('Y-m-d H:i:s');
        $date=$updatepassword->created_at;


        if($now->diffInHours($date) <4)
        return response()->json([
            'email'=>$email,
            'token_reset'=>$token
        ]);

        DB::table('password_resets')->where([
            'email'=>$email

        ])->delete();
        return abort(404);

     }

     public function adminUpdatePassword(UpdateForgotPasswordAdminRequest $request)
     {


         $token=$request->token;

         $updatepassword=DB::table('password_resets')->where([
             'email' => $request->email,
             'token' => $token,

           ])->first();
           if(!$updatepassword){
              return response()->json([
                 'status'=>404,
                 'message'=>'request is unavaliable'
              ]);
         }
         $admin=Admin::where('email',$request->email)->first();
         $admin->update([
              'password'=>Hash::make($request->password),

         ]);
         DB::table('password_resets')->where('email',$request->email)->delete();
         $this->logout($admin);
         return response()->json([
             'status'=>200,
             'message'=>'Password Updated Successful'
         ]);



     }

}
