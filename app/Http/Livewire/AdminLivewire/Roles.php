<?php

namespace App\Http\Livewire\AdminLivewire;

use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Roles extends Component
{
    use LivewireAlert , WithPagination;
    
    

    public $name;
    public $statusForm;
    public $editRoleId;

    public $data;



    public function render()
    {
        return view('livewire.admin-livewire.roles' , [
            'roles' => Role::withCount('permissions')->paginate(5),
            'permissions' => Permission::all(),
            'rolesCount' => Role::all()->count(),
        ]);
    }

    public function save () {

        $this->validate([
            'name' => 'required|unique:roles|max:15|min:5'
        ]);

        $role = new Role();
        $role->name = $this->name;
        $role->guard_name = 'admin';


        $role->givePermissionTo($this->data);

        $role->save();
        $this->name = '';
        $this->data = [];

        $this->alert('info', 'Created Successfully', [
            'position' => 'center',
            'timer' => 2000,
            'toast' => true,
            'timerProgressBar' => true,
            'width' => '400',
        ]);

    }

    public function edit ($id) {

        return redirect()->to('/dashboard/admin/edit/role/'.$id);
    }


    public function update () {

        $this->validate([
            'name' => 'required|unique:roles,name,'.$this->editRoleId,
        ]);


        dd($this->dataEdit);

        $this->statusForm = 'edit';
        $role = Role::where('id' , $this->editRoleId)->first();
        $role->name = $this->name;
        $role->guard_name = 'Admin';
        $role->save();
        $this->name = '';
        $this->statusForm = '';

        $this->alert('info', 'Done :)', [
            'position' => 'center',
            'timer' => 2000,
            'toast' => true,
            'timerProgressBar' => true,
            'width' => '200',
        ]);
    }

    public function delete ($id) {
        $role = Role::where('id' , $id)->first();
        $role->delete();
        $this->alert('info', 'Done :)', [
            'position' => 'center',
            'timer' => 2000,
            'toast' => true,
            'timerProgressBar' => true,
            'width' => '200',
        ]);
    }
}
