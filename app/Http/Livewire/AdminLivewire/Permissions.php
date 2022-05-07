<?php

namespace App\Http\Livewire\AdminLivewire;

use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Permissions extends Component
{

    use LivewireAlert , WithPagination;

    public $name;
    public $data;


    public function render()
    {
        return view('livewire.admin-livewire.permissions' , [
            'permissions' => Permission::withCount('roles')->paginate(5),
            'permissionsCount' => Permission::all()->count(),
            'roles' => Role::all(),
        ]);
    }


    
    public function save () {
        $this->validate([
            'name' => 'required|unique:permissions|max:15|min:5'
        ]);

        $permission = new Permission();
        $permission->name = $this->name;
        $permission->guard_name = 'admin';

        $permission->assignRole($this->data);

        $permission->save();
        $this->name = '';

        $this->alert('info', 'Created Successfully', [
            'position' => 'center',
            'timer' => 2000,
            'toast' => true,
            'timerProgressBar' => true,
            'width' => '400',
        ]);

    }

    public function edit ($id) {
        return redirect()->to('/dashboard/admin/edit/permission/'.$id);
    }

    public function delete ($id) {
        $permission = Permission::where('id' , $id)->first();
        $permission->delete();
        $this->alert('info', 'Done :)', [
            'position' => 'center',
            'timer' => 2000,
            'toast' => true,
            'timerProgressBar' => true,
            'width' => '200',
        ]);
    }
}
