<?php

namespace App\Http\Livewire\AdminLivewire;

use App\Models\Admin;
use App\Models\Image;

use Livewire\Component;
use Livewire\WithFileUploads;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Intervention\Image\Facades\ImageIntervention;

class CreateAdmins extends Component
{

    use WithFileUploads;
    use LivewireAlert;

    public $name;
    public $email;
    public $password;
    public $image;
    public $file;

    public $dataRole;

    protected $listeners = ['fileIUpload'];

    public function fileIUpload ($data) {
        $this->image = $data;
    }



    public function render()
    {
        return view('livewire.admin-livewire.create-admins' , [
            'roles' => Role::all(),
        ]);
    }



    public function updated($field) {
        $this->validateOnly($field , [
            'name' => 'required|max:20|min:5',
            'email' => 'required|unique:admins|email',
            'password' => 'required|max:25|min:8',
            'image' => 'mimes:jpeg,png,jpg|max:10000',
            'image' => 'required',
        ]);
    }

    public function store () {
        // dd($this->file->getClientOriginalName());
        $this->validate([
            'name' => 'required|max:20|min:5',
            'email' => 'required|unique:admins|email',
            'password' => 'required|max:25|min:8',
            'image' => 'mimes:jpeg,png,jpg|max:10000',
            'image' => 'required',
        ]);

        $admin = new Admin();
        $admin->name = $this->name;
        $admin->email = $this->email;
        $admin->password = Hash::make($this->password);
        $admin->status = 0;


        $admin->assignRole($this->dataRole);


        $admin->save();


        $image = new Image();
        $fileName = $this->file->getClientOriginalName();
        $image->path = $fileName;
        $path = public_path('/assets/adminPhoto/'.$fileName);
        ImageIntervention::make($this->file->getRealPath())->save($path , 100);

        $image->imageable()->associate($admin);
        $image->save();

        $this->alert('info', 'Admin Created Successfully 😎', [
            'position' => 'top-end',
            'timer' => 3000,
            'toast' => true,
            'timerProgressBar' => true,
            'width' => '450',
        ]);

        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->image = '';
        $this->file = '';

    }
    
}
