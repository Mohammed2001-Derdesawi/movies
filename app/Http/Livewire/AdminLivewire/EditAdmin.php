<?php

namespace App\Http\Livewire\AdminLivewire;

use App\Models\Admin;
use App\Models\Image;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\PopularQuestion;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Intervention\Image\Facades\ImageIntervention;

class EditAdmin extends Component
{

    use LivewireAlert;
    use WithFileUploads;

    
    public $admin;
    public $adminId;
    public $name;
    public $email;
    
    public $file;
    public $image;
    public $newImage;
    public $originalImage;
    public $statusImage = true;


    public $password;
    public $newPassword;
    public $confirmPassword;


    public $editRoles;
    public $dataRole;

    protected $listeners = ['editFileIUpload'];

    public function mount () {
        $this->adminId = request()->id;
        $this->admin = Admin::where('id' , $this->adminId)->first();
        $this->name = $this->admin->name;
        $this->email = $this->admin->email;
        $this->image = $this->admin->image;
        $this->originalImage = $this->admin->image;

    }



    public function render()
    {
        return view('livewire.admin-livewire.edit-admin' , [
            'admin' => $this->admin,
            'popular_questions' => PopularQuestion::where('admin_id' , $this->adminId)->get(),
            'roles' => Role::all(),
        ]);
    }


    public function editFileIUpload ($data) {
        $this->newImage = $data;
        $this->statusImage = false;
    }

    public function updateAdmin ($id) {
        
        $this->validate([
            'name' => 'required',
            'image' => 'mimes:jpeg,png,jpg|max:10000',
            'image' => 'required',
            'email' => 'required|email|unique:admins,email,'.$this->adminId,
            'password' => 'sometimes|nullable|required_with:newPassword,confirmPassword|same:'.$this->admin->password,
            'newPassword' => 'sometimes|nullable|required_with:confirmPassword|max:25|min:8',
            'confirmPassword' => 'sometimes|nullable|required_with:newPassword|max:25|min:8|same:newPassword',
        ] , [
            'password.same' => 'the password is wrong',
        ]);

        
        $data['name'] = $this->name;
        $data['email'] = $this->email;
        $data['password'] = Hash::make($this->newPassword);
        // $data['image'] = $this->file->getClientOriginalName();
        $this->admin->update($data);

        $image = Image::where('imageable_id' , $id)->where('imageable_type' , 'App\Models\Admin')->first();

        if($this->file == NULl) {
            $dataImage['path'] = $this->originalImage->path;
            // dd($this->originalImage->path);
        }

        elseif ($image->path) {
            if (File::exists('assets/adminPhoto/'.$image->path)) {
                unlink('assets/adminPhoto/'.$image->path);
            }

            $fileName = $this->file->getClientOriginalName();
            $dataImage['path'] = $fileName;
            // dd($dataImage);
            $path = public_path('/assets/adminPhoto/'.$fileName);
            ImageIntervention::make($this->file->getRealPath())->save($path , 100);
        }
        

        // $image->imageable()->associate($this->admin);
        $image->update($dataImage);


        $this->admin->syncRoles($this->dataRole);

        $this->alert('info', 'Updated Successfully 😎', [
            'position' => 'center',
            'timer' => 2000,
            'toast' => true,
            'timerProgressBar' => true,
            'width' => '400',
        ]);
    }
}
