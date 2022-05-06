<?php

namespace App\Http\Controllers\admin;

use App\Models\Admin;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Events\TestBrodcastEvent;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\AuthAdminRequest;
use App\Http\Requests\AdminRegisterRequest;
use App\Events\SendForgotPasswordAdminEvent;
use App\Http\Requests\ForgotPasswordAdminRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Requests\UpdateForgotPasswordAdminRequest;

class AuthAdminController extends Controller
{
    use AuthenticatesUsers;
    // public function __construct()
    // {
    //     Auth::setDefaultDriver('admin');

    // }



    public function signin(AuthAdminRequest $request)
    {

        Auth::setDefaultDriver('admin');
        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password],$request->remember))
        {
            $admin=Auth::guard('admin')->user();
            // Auth::guard('admin')->login($admin);

             $this->authenticated($request,Auth::guard('admin')->user());
             $admin->tokens()->delete();
            // Auth::guard('admin')->logoutOtherDevices($request->password);
            //  auth()->getDefaultDriver()->logoutOtherDevices($request->password);
            // $this->authenticated($request,Auth::guard('admin')->user());




            //  return redirect()->intended(route('.seed'));
            // return dd($request->intended);
            // TestBrodcastEvent::dispatch('hello');

            return response()->json([
                'status'=>'200',
                'message'=>'login successful',
                'next'=>redirect()->intended('/seed')->getTargetUrl(),
            ]);

             }
        else
        return response()->json([
            'status'=>'422',
            'message'=>'password is incorrect'
        ]);

    }
    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated($request, $user)
    {



            Auth::logoutOtherDevices($request->password);



    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('admin');
    }


    public function signup(AdminRegisterRequest $request)
    {
        $admin=Admin::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);
        if(!$admin)
        return response()->json([
            'message'=>'somethig wrong!'
        ]);



    }
    public function loginpage()
    {
        $this->preventredirectBack();


        return view('admin.signin');
    }
    public function registerpage()
    {
       $this->preventredirectBack();

        return view('admin.signup');
    }
    public function getforgotpasswordpage()
    {
        $this->preventredirectBack();
        return view('admin.forgot');
    }

    public function preventredirectBack()
    {
        if(Auth::guard('admin')->check())
        {

            Auth::guard('admin')->logout();
            session()->flush();


        }
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

            // Mail::send('admindashboardlayout\forgetpasswordemail', ['email'=>$request->email,'token' => $token], function($message) use($request){
            //     $message->to('testmailderdesawi@gmail.com');
            //     $message->subject('Kasper Company|Request To change Password');
            // });

            return response()->json([
                'status'=>200,
                'message'=>'We have e-mailed your password reset link!'
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

                // Mail::send('admindashboardlayout\forgetpasswordemail', ['email'=>$request->email,'token' => $token], function($message) use($request){
                //     $message->to('testmailderdesawi@gmail.com');
                //     $message->subject('Kasper Company|Request To change Password');
                // });


            return response()->json([
                'status'=>200,
                'message'=>'We have e-mailed your password reset link!'
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
     public function logout()
     {
        Auth::guard('admin')->user()->tokens()->delete();
         if(Auth::guard('admin')->check())
         {
            Auth::guard('admin')->logout();
            session()->flush();
         }

         return redirect()->route('admin.login');
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
        return view('admin.updatepasswordform',compact('token','email'));

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
              abort(404);
         }
         $admin=Admin::where('email',$request->email)->first();
         $admin->update([
              'password'=>Hash::make($request->password),

         ]);
         DB::table('password_resets')->where('email',$request->email)->delete();
        //  $this->logout($admin);
        Auth::guard('admin')->logout($admin);
         return response()->json([
             'status'=>200,
             'message'=>'Password Updated Successful'
         ]);



     }

}
