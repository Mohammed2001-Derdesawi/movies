<div>
    <!-- main content -->
    <main class="main">
        <div class="container-fluid">
            <div class="row">
                <!-- main title -->
                <div class="col-12">
                    <div class="main__title">
                        <h2>Comments</h2>

                        <span class="main__title-stat">{{ $commentsCount }} Total</span>

                        <div class="main__title-wrap">
                            <!-- filter sort -->
                            <div class="filter" id="filter__sort">
                                <span class="filter__item-label">Sort by:</span>

                                <div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-sort"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <input type="button" value="Active">
                                    <span></span>
                                </div>
                                {{-- <select wire:model='sortBy'>
                                    <option value="1">Active</option>
                                    <option value="0">Not Active</option>
                                </select> --}}
                                <ul wire:model='sortBy' class="filter__item-menu dropdown-menu scrollbar-dropdown"
                                    aria-labelledby="filter-sort">
                                    <li wire:click='activeComments'>Active</li>
                                    <li wire:click='not_activeComments'>Not Active</li>
                                </ul>
                            </div>
                            <!-- end filter sort -->

                            <!-- search -->
                            <form action="#" class="main__title-form">
                                <input type="text" wire:model='search' placeholder="Key word..">
                                <button type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z">
                                        </path>
                                    </svg>
                                </button>
                            </form>
                            <!-- end search -->
                        </div>
                    </div>
                </div>
                <!-- end main title -->



                <!-- comments -->
                <div class="col-12">
                    <div class="main__table"> {{-- main__table-wrap --}}
                        <table class="main__table" wire:loading.class.delay='capacity-50'>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>ITEM</th>
                                    <th>AUTHOR</th>
                                    <th>TEXT</th>
                                    <th>STATUS</th>
                                    <th>LIKE / DISLIKE</th>
                                    <th>CRAETED DATE</th>
                                    <th>ACTIONS</th>
                                </tr>
                            </thead>

                            <tbody>
                            @forelse ($comments as $comment)
                                <tr>
                                    <td>
                                        <div class="main__table-text">{{ $comment->id }}</div>
                                    </td>
                                    <td>
                                        <div class="main__table-text">{{ $comment->part->partable_type }}</div>
                                    </td>
                                    <td>
                                        <div class="main__table-text">{{ $comment->user->name }}</div>
                                    </td>
                                    <td style="width: 500px">
                                        <div class="main__table-text">{{ $comment->body }}</div>
                                    </td>
                                    <td style="color: ">
                                        <div class="main__table-text"
                                            style="color: {{ $comment->status == '1' ? '#3dc1ae' : '#944158'}}">
                                            {{ $comment->status == '1' ? "Available for users" : "Not Available for
                                            users"}}
                                        </div>
                                    </td>
                                    <td>
                                        @php
                                        $mylike = 0;
                                        $Dislike = 0;

                                        foreach ($comment->likes as $like) {
                                        if($like->like == '1') {
                                        ++$mylike;
                                        } else {
                                        ++$Dislike;
                                        }
                                        }
                                        @endphp
                                        <div class="main__table-text">
                                            {{ $mylike }} / {{ $Dislike }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="main__table-text">{{ $comment->created_at->format('d M Y') }}</div>
                                    </td>
                                    <td>
                                        <div class="main__table-btns">

                                            @if($comment->status == 1)
                                            <a href="#modal-status" data-id="{{ $comment->id }}" id="commentStatus"
                                                class="main__table-btn main__table-btn--edit open-modal" style="background-color: #2b3336">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="fill: #3dc1ae">
                                                    <path
                                                        d="M5,18H9.24a1,1,0,0,0,.71-.29l6.92-6.93h0L19.71,8a1,1,0,0,0,0-1.42L15.47,2.29a1,1,0,0,0-1.42,0L11.23,5.12h0L4.29,12.05a1,1,0,0,0-.29.71V17A1,1,0,0,0,5,18ZM14.76,4.41l2.83,2.83L16.17,8.66,13.34,5.83ZM6,13.17l5.93-5.93,2.83,2.83L8.83,16H6ZM21,20H3a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Z" />
                                                </svg>
                                            </a>
                                            @else
                                            <a href="#modal-status" data-id="{{ $comment->id }}" id="commentStatus"
                                                class="main__table-btn main__table-btn--edit open-modal" style="background-color: #352b32">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="fill: #944158">
                                                    <path
                                                        d="M5,18H9.24a1,1,0,0,0,.71-.29l6.92-6.93h0L19.71,8a1,1,0,0,0,0-1.42L15.47,2.29a1,1,0,0,0-1.42,0L11.23,5.12h0L4.29,12.05a1,1,0,0,0-.29.71V17A1,1,0,0,0,5,18ZM14.76,4.41l2.83,2.83L16.17,8.66,13.34,5.83ZM6,13.17l5.93-5.93,2.83,2.83L8.83,16H6ZM21,20H3a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Z" />
                                                </svg>
                                            </a>
                                            @endif




                                            



                                            <a href="#modal-view" id="showComment" data-body='{{ $comment->body }}'
                                                data-nameUser='{{ $comment->user->name }}'
                                                data-date='{{ $comment->created_at->format(' d M Y') }}'
                                                data-like='{{ $mylike }}' data-x='{{ $Dislike }}'
                                                class="main__table-btn main__table-btn--view open-modal" style="background-color: #29303a">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="fill: #347bc3">
                                                    <path
                                                        d="M21.92,11.6C19.9,6.91,16.1,4,12,4S4.1,6.91,2.08,11.6a1,1,0,0,0,0,.8C4.1,17.09,7.9,20,12,20s7.9-2.91,9.92-7.6A1,1,0,0,0,21.92,11.6ZM12,18c-3.17,0-6.17-2.29-7.9-6C5.83,8.29,8.83,6,12,6s6.17,2.29,7.9,6C18.17,15.71,15.17,18,12,18ZM12,8a4,4,0,1,0,4,4A4,4,0,0,0,12,8Zm0,6a2,2,0,1,1,2-2A2,2,0,0,1,12,14Z" />
                                                </svg>
                                            </a>

                                            <a href="#modal-delete" data-id="{{ $comment->id }}" id="deleteComment"
                                                class="main__table-btn main__table-btn--delete open-modal"
                                                style="cursor: pointer">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path
                                                        d="M20,6H16V5a3,3,0,0,0-3-3H11A3,3,0,0,0,8,5V6H4A1,1,0,0,0,4,8H5V19a3,3,0,0,0,3,3h8a3,3,0,0,0,3-3V8h1a1,1,0,0,0,0-2ZM10,5a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1V6H10Zm7,14a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V8H17Z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <div class="row">
                                    <div class="col-6"></div>
                                    <div class="col-6">
                                        <table class="main__table">
                                            <p class="text-center" style="color: white">No Results</p>
                                        </table>
                                    </div>
                                </div>

                                @endforelse

                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-8">
                                <div class="paginator-wrap">
                                    <span>{{ count($comments) }} from {{ $commentsCount }}</span>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="paginator-wrap">
                                    <span>{{ $comments->onEachSide(1)->links('adminPaginate.pagination-links') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end comments -->
                
            </div>
        </div>
    </main>
    <!-- end main content -->








    <!-- modal view -->
    <div id="modal-view" class="zoom-anim-dialog mfp-hide modal modal--view">
        <div class="comments__autor">
            <img class="comments__avatar" src="{{asset('assets/admin/img/user.svg')}}" alt="">
            <span class="comments__name" id="nameUser"></span>
            <span class="comments__time" id="date"></span>
        </div>
        <p class="comments__text" id="body"></p>
        <div class="comments__actions">
            <div class="comments__rate">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M21.3,10.08A3,3,0,0,0,19,9H14.44L15,7.57A4.13,4.13,0,0,0,11.11,2a1,1,0,0,0-.91.59L7.35,9H5a3,3,0,0,0-3,3v7a3,3,0,0,0,3,3H17.73a3,3,0,0,0,2.95-2.46l1.27-7A3,3,0,0,0,21.3,10.08ZM7,20H5a1,1,0,0,1-1-1V12a1,1,0,0,1,1-1H7Zm13-7.82-1.27,7a1,1,0,0,1-1,.82H9V10.21l2.72-6.12A2.11,2.11,0,0,1,13.1,6.87L12.57,8.3A2,2,0,0,0,14.44,11H19a1,1,0,0,1,.77.36A1,1,0,0,1,20,12.18Z" />
                    </svg>
                    <span id="like"></span>
                </span>

                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M19,2H6.27A3,3,0,0,0,3.32,4.46l-1.27,7A3,3,0,0,0,5,15H9.56L9,16.43A4.13,4.13,0,0,0,12.89,22a1,1,0,0,0,.91-.59L16.65,15H19a3,3,0,0,0,3-3V5A3,3,0,0,0,19,2ZM15,13.79l-2.72,6.12a2.13,2.13,0,0,1-1.38-2.78l.53-1.43A2,2,0,0,0,9.56,13H5a1,1,0,0,1-.77-.36A1,1,0,0,1,4,11.82l1.27-7a1,1,0,0,1,1-.82H15ZM20,12a1,1,0,0,1-1,1H17V4h2a1,1,0,0,1,1,1Z" />
                    </svg>
                    <span id="Dislike" style="margin-left: 5px"></span>
                </span>
            </div>
        </div>
    </div>
    <!-- end modal view -->


    <!-- modal status -->
    <div id="modal-status" class="zoom-anim-dialog mfp-hide modal">
        <h6 class="modal__title">Status change</h6>

        <p class="modal__text">Are you sure about immediately change status?</p>
        {{-- <input type="text" value="" name="" id="idStatusComment"> --}}
        <div class="modal__btns">
            <button class="modal__btn modal__btn--apply" type="button" wire:click='changeStatusComment'>Apply</button>
            <button class="modal__btn modal__btn--dismiss" type="button">Dismiss</button>
        </div>
    </div>
    <!-- end modal status -->


    <!-- modal delete -->
    <div id="modal-delete" class="zoom-anim-dialog mfp-hide modal">
        <h6 class="modal__title">Comment delete</h6>

        <p class="modal__text">Are you sure to permanently delete this comment?</p>

        {{-- <input type="text" name="" value="" id="commentId"> --}}
        <div class="modal__btns">
            <button class="modal__btn modal__btn--apply" type="button" wire:click='delete'>Delete</button>
            <button class="modal__btn modal__btn--dismiss" type="button">Dismiss</button>
        </div>
    </div>
    <!-- end modal delete -->





    @section('scripts')
    <script>
        $(document).on( "click", '#showComment',function(e) {
    
    
        var body = $(this).data('body');
        var nameUser = $(this).data('nameUser');
        var date =$(this).data('date');
        var like = $(this).data('like');
        var Dislike = $(this).data('x');
    
        $("#body").text(body);
        $("#nameUser").text(nameUser);
        $("#date").text(date);
        $("#like").text(like);
        $("#Dislike").text(Dislike);

        console.log(Dislike);

        });
    
    </script>




    <script>
        $(document).on("click" , '#deleteComment' , function () {
            var commentId = $(this).data('id');
            // $('#commentId').val(commentId);
            Livewire.emit('deleteComment' , commentId);
        })
    </script>

    <script>
        window.Livewire.on('closeModalDeleteComment' , function () {
            $('#modal-delete').modal().toggle();
        })
    </script>











    <script>
        $(document).on("click" , '#commentStatus' , function () {
        var idStatusComment = $(this).data('id');
        // $('#idStatusComment').val(idStatusComment);
        Livewire.emit('changeStatusCommentEvent' , idStatusComment);
    })
    </script>

    <script>
        window.Livewire.on('closeStatusModalComment' , function () {
            $('#modal-status').modal().toggle();
        })
    </script>

    
    @endsection
</div>