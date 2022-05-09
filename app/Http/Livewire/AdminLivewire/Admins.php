<?php

namespace App\Http\Livewire\AdminLivewire;
use App\Models\Admin;
use Livewire\WithPagination;
use Illuminate\View\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Admins extends Component
{

    use WithPagination, LivewireAlert;


    public $adminId;
    public $search;
    public $sortBy = 1;

    protected $listeners = ['statusAdmin' , 'deleteAdmin'];

    public function render()
    {
        $searchItem = '%'.$this->search.'%';

        return view('livewire.admin-livewire.admins' , [
            'admins' => Admin::withCount(['populars_questions'])->with(['image'])
            ->where('status' , $this->sortBy)
            ->search($searchItem)
            ->paginate(10),

            'adminsCount' => Admin::all()->count(),
        ]);
    }


    public function statusAdmin ($id) {
        $this->adminId = $id;
    }

    public function changeStatusAdmin () {
        $admin = Admin::where('id' , $this->adminId)->first();

        if ($admin->status == 1) {
            $admin->status = 0;
        } else {
            $admin->status = 1;
        }

        $admin->save();

        $this->alert('info', 'Admin status Updated Successfully 😆', [
            'position' => 'top-end',
            'timer' => 3000,
            'toast' => true,
            'timerProgressBar' => true,
            'width' => '450',
        ]);
        $this->emit('closeStatusModalAdmin');
    }

    public function deleteAdmin ($id) {
        $this->adminId = $id;
    }


    public function destroyAdmin () {
        $admin = Admin::where('id' , $this->adminId)->first();

        $admin->delete();

        $this->alert('info', 'Admin deleted Successfully 😆', [
            'position' => 'top-end',
            'timer' => 3000,
            'toast' => true,
            'timerProgressBar' => true,
            'width' => '450',
        ]);
        $this->emit('closeDeleteModalAdmin');
    }




    public function editAdmin ($id) {
        $admin = Admin::where('id' , $id)->first();
        return redirect()->to('/dashboard/admin/edit/'.$id);
    }


    public function approvedAdmins () {
        $this->sortBy = 1;
    }

    public function not_approvedAdmins () {
        $this->sortBy = 0;
    }

}
