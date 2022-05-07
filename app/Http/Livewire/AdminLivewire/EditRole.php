<?php

namespace App\Http\Livewire\AdminLivewire;

use Livewire\Component;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class EditRole extends Component
{

    use LivewireAlert;

    public $name;
    public $roleId;
    public $role;
    public $permissions;
    public $rolePermissions;

    public $data;


    public function mount () {
        $this->roleId = request()->id;
        $this->role = Role::where('id' , $this->roleId)->first();
        $this->name = $this->role->name;


        $this->permissions = Permission::all();
        $this->rolePermissions = Role::findOrFail($this->roleId)->permissions;
    }


    public function render()
    {
        return view('livewire.admin-livewire.edit-role' , [
            'permissions' => Permission::all(),
        ]);
    }


    public function update () {
        // dd($this->rolePermissions->id);
        $this->validate([
            'name' => 'required|unique:permissions,name,'.$this->roleId,
        ]);

        $role = Role::where('id' , $this->roleId)->first();
        $role->name = $this->name;
        $role->guard_name = 'admin';

        foreach($this->rolePermissions as $permissionId) {
            $role->revokePermissionTo($permissionId->id);
        }

        $role->givePermissionTo($this->data);
        $role->save();
        
        $this->alert('info', 'Done :)', [
            'position' => 'center',
            'timer' => 1500,
            'toast' => true,
            'timerProgressBar' => true,
            'width' => '200',
        ]);

    }
}
