<?php

namespace App\Http\Livewire\AdminLivewire;

use Livewire\Component;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class EditPermission extends Component
{

    use LivewireAlert;

    public $name;
    public $permissionId;
    public $permission;
    public $roles;
    public $permissionRoles;

    public $data;



    public function mount () {
        $this->permissionId = request()->id;
        $this->permission = Permission::where('id' , $this->permissionId)->first();
        $this->name = $this->permission->name;

        $this->roles = Role::all();
        $this->permissionRoles = Permission::findOrFail($this->permissionId)->roles;
    }

    public function render()
    {
        return view('livewire.admin-livewire.edit-permission' , [
            'roles' => Role::all(),
        ]);
    }




    public function update () {

        $this->validate([
            'name' => 'required|unique:permissions,name,'.$this->permissionId,
        ]);


        $permission = Permission::where('id' , $this->permissionId)->first();
        $permission->name = $this->name;
        $permission->guard_name = 'admin';

        foreach($this->roles as $role) {
            foreach($this->permissionRoles as $rolePermission) {
                if ($role->id == $rolePermission->id) {
                    $role->revokePermissionTo($this->permissionId);
                }
            }
            
        }

        $permission->assignRole($this->data);

        $permission->save();

        $this->alert('info', 'Done :)', [
            'position' => 'center',
            'timer' => 1500,
            'toast' => true,
            'timerProgressBar' => true,
            'width' => '200',
        ]);
    }
}
