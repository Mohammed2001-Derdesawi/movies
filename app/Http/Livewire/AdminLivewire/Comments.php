<?php

namespace App\Http\Livewire\AdminLivewire;

use App\Models\Comment;
use Livewire\Component;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Comments extends Component
{
    use WithPagination, LivewireAlert;


    public $sortBy = 1;
    public $search = '';

    public $commentId;


    protected $listeners = ['deleteComment' , 'changeStatusCommentEvent'];

    public function render()
    {
        // dd($this->currentUrl = url()->current());;


        $searchItem = '%'.$this->search.'%';

        return view('livewire.admin-livewire.comments' , [
            'comments' => Comment::with(['part' , 'user' , 'likes'])
            ->where('status' , $this->sortBy)
            ->search($searchItem) // this is myFunction in comment model class
            ->paginate(2, ['*'], 'page'),
            'commentsCount' => Comment::all()->count(),
        ]);
    }

    // public function updatingSearch()
    // {
    //     $this->resetPage();
    // }

    public function deleteComment ($id) {
        $this->commentId = $id;
    }


    public function changeStatusCommentEvent ($id) {
        $this->commentId = $id;
    }

    public function delete () {
        $comment = Comment::where('id' , $this->commentId)->first();
        $comment->delete();
        $this->alert('info', 'Comment Deleted Successfully 😆', [
            'position' => 'top-end',
            'timer' => 3000,
            'toast' => true,
            'timerProgressBar' => true,
            'width' => '400',
            // 'showConfirmButton' => true,
            // 'onConfirmed' => '',
        ]);
        $this->emit('closeModalDeleteComment');
    }


    public function changeStatusComment () {
        // dd($this->commentId);


        $comment = Comment::find($this->commentId);

        if($comment->status == 1) {
            $comment->status = 0;
        } else {
            $comment->status = 1;
        }

        $comment->save();

        $this->alert('info', 'Comment Status Updated Successfully 🤨', [
            'position' => 'top-end',
            'timer' => 3000,
            'toast' => true,
            'timerProgressBar' => true,
            'width' => '450',
        ]);
        $this->emit('closeStatusModalComment');

    }


    public function activeComments () {
        $this->sortBy = 1;
    }

    public function not_activeComments () {
        $this->sortBy = 0;
    }

}
