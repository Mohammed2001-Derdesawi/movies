<?php

namespace App\Http\Livewire\AdminLivewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Users extends Component
{
    use WithPagination;
    use LivewireAlert;

    public $userId;
    public $search;
    public $sortBy = 1;

    protected $listeners = ['deleteUser' , 'statusUser'];
    
    public function render()
    {
        $searchUser = '%'.$this->search.'%';

        return view('livewire.admin-livewire.users' , [
            'users' => User::withCount(['reviews' , 'comments'])
            ->with(['image'])
            ->where(function($query){
                $query->where('name' , 'like' , '%'.$this->search.'%')->orWhere('email' , 'like' , '%'.$this->search.'%');
            })
            // ->search($searchUser)
            ->where('status' , $this->sortBy)
            ->paginate(10),
            
            'usersCount' => User::all()->count(),
        ]);
    }

    public function deleteUser ($id) {
        $this->userId = $id;
    }


    public function delete () {
        // dd($this->userId);
        $user = User::where('id' , $this->userId)->first();
        $user->delete();
        $this->alert('info', 'User Deleted Successfully 😆', [
            'position' => 'top-end',
            'timer' => 3000,
            'toast' => true,
            'timerProgressBar' => true,
            'width' => '400',
        ]);
        $this->emit('closeDeleteModalUser');
    }

    
    public function statusUser ($id) {
        $this->userId = $id;
    } 

    public function changeStatus() {
        // dd($this->userId);

        $user = User::find($this->userId);

        if($user->status == 1) {
            $user->status = 0;
        } else {
            $user->status = 1;
        }

        $user->save();

        $this->alert('info', 'User Status Updated Successfully 🤨', [
            'position' => 'top-end',
            'timer' => 3000,
            'toast' => true,
            'timerProgressBar' => true,
            'width' => '450',
        ]);
        $this->emit('closeStatusModalUser');
    }


    public function approvedUsers () {
        $this->sortBy = 1;
    }

    public function not_approvedUsers () {
        $this->sortBy = 0;
    }
}
