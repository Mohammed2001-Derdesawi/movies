<div>
    <!-- main content -->
    <main class="main">
        <div class="container-fluid">
            <div class="row">
                <!-- main title -->
                <div class="col-12">
                    <div class="main__title">
                        <h2>Users</h2>

                        <span class="main__title-stat">{{ $usersCount }} Total</span>

                        <div class="main__title-wrap">
                            <!-- filter sort -->
                            <div class="filter" id="filter__sort">
                                <span class="filter__item-label">Sort by:</span>

                                <div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-sort"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <input type="button">
                                    <span></span>
                                </div>
                                <ul class="filter__item-menu dropdown-menu scrollbar-dropdown"
                                    aria-labelledby="filter-sort">
                                    <li wire:click='approvedUsers'>Approved</li>
                                    <li wire:click='not_approvedUsers'>Not-Approved</li>
                                </ul>
                            </div>
                            <!-- end filter sort -->

                            <!-- search -->
                            <form action="#" class="main__title-form">
                                <input type="text" placeholder="Find user.." wire:model='search'>
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

                <!-- users -->
                <div class="col-12">
                    <div class="main__table">
                        <table class="main__table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>BASIC INFO</th>
                                    <th>USERNAME</th>
                                    <th>COMMENTS</th>
                                    <th>REVIEWS</th>
                                    <th>STATUS</th>
                                    <th>CRAETED DATE</th>
                                    <th>ACTIONS</th>
                                </tr>
                            </thead>

                            <tbody>

                                @forelse ($users as $user)
                                <tr>
                                    <td>
                                        <div class="main__table-text">{{ $user->id }}</div>
                                    </td>
                                    <td>
                                        <div class="main__user">
                                            <div class="main__avatar">
                                                <img src="{{asset('assets/admin/img/user.svg')}}" alt="">
                                            </div>
                                            <div class="main__meta">
                                                <h3>{{ $user->name }}</h3>
                                                <span>{{ $user->email }}</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="main__table-text">{{ $user->name }}</div>
                                    </td>
                                    <td>
                                        <div class="main__table-text">{{ $user->comments_count }}</div>
                                    </td>
                                    <td>
                                        <div class="main__table-text">{{ $user->reviews_count }}</div>
                                    </td>
                                    <td>
                                        @if($user->status == 1)
                                        <div class="main__table-text main__table-text--green">
                                            Approved
                                        </div>
                                        @else
                                        <div class="main__table-text main__table-text" style="color: #944158">
                                            Not-Approved
                                        </div>
                                        @endif

                                    </td>
                                    <td>
                                        <div class="main__table-text">{{ $user->created_at->format('D M Y') }}</div>
                                    </td>
                                    <td>
                                        <div class="main__table-btns">

                                            @if($user->status == 1)
                                            <a href="#modal-status" id="statusUser" data-id="{{ $user->id }}"
                                                class="main__table-btn main__table-btn--banned open-modal">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path
                                                        d="M12,13a1,1,0,0,0-1,1v3a1,1,0,0,0,2,0V14A1,1,0,0,0,12,13Zm5-4V7A5,5,0,0,0,7,7V9a3,3,0,0,0-3,3v7a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V12A3,3,0,0,0,17,9ZM9,7a3,3,0,0,1,6,0V9H9Zm9,12a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V12a1,1,0,0,1,1-1H17a1,1,0,0,1,1,1Z" />
                                                </svg>
                                            </a>
                                            @else
                                            <a href="#modal-status" id="statusUser" data-id="{{ $user->id }}"
                                                style=" background-color: #352b32"
                                                class="main__table-btn main__table-btn--banned open-modal">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    style="fill:#944158;">
                                                    <path
                                                        d="M12,13a1,1,0,0,0-1,1v3a1,1,0,0,0,2,0V14A1,1,0,0,0,12,13Zm5-4V7A5,5,0,0,0,7,7V9a3,3,0,0,0-3,3v7a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V12A3,3,0,0,0,17,9ZM9,7a3,3,0,0,1,6,0V9H9Zm9,12a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V12a1,1,0,0,1,1-1H17a1,1,0,0,1,1,1Z" />
                                                </svg>
                                            </a>
                                            @endif



                                            {{-- <a href="edit-user.html" class="main__table-btn main__table-btn--edit">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path
                                                        d="M5,18H9.24a1,1,0,0,0,.71-.29l6.92-6.93h0L19.71,8a1,1,0,0,0,0-1.42L15.47,2.29a1,1,0,0,0-1.42,0L11.23,5.12h0L4.29,12.05a1,1,0,0,0-.29.71V17A1,1,0,0,0,5,18ZM14.76,4.41l2.83,2.83L16.17,8.66,13.34,5.83ZM6,13.17l5.93-5.93,2.83,2.83L8.83,16H6ZM21,20H3a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Z" />
                                                </svg>
                                            </a> --}}



                                            <a href="#modal-delete" id="daleteUser" data-id='{{ $user->id }}'
                                                style="cursor: pointer"
                                                class="main__table-btn main__table-btn--delete open-modal">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path
                                                        d="M20,6H16V5a3,3,0,0,0-3-3H11A3,3,0,0,0,8,5V6H4A1,1,0,0,0,4,8H5V19a3,3,0,0,0,3,3h8a3,3,0,0,0,3-3V8h1a1,1,0,0,0,0-2ZM10,5a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1V6H10Zm7,14a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V8H17Z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <div class="col-12">
                                    <div class="main__table">
                                        <table class="main__table">
                                            <p style="color: white">no results</p>
                                        </table>
                                    </div>
                                </div>
                                @endforelse


                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-8">
                                <div class="paginator-wrap">
                                    <span>{{ count($users) }} from {{ $usersCount }}</span>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="paginator-wrap">
                                    <span>{{ $users->links('adminPaginate.pagination-links') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end users -->
            </div>
        </div>
    </main>
    <!-- end main content -->

    <!-- modal status -->
    <div id="modal-status" class="zoom-anim-dialog mfp-hide modal">
        <h6 class="modal__title">Status change</h6>

        <p class="modal__text">Are you sure about immediately change status?</p>
        {{-- <input type="text" value="" name="" id="idStatusUser"> --}}
        <div class="modal__btns">
            <button class="modal__btn modal__btn--apply" type="button" wire:click='changeStatus'>Apply</button>
            <button class="modal__btn modal__btn--dismiss" type="button">Dismiss</button>
        </div>
    </div>
    <!-- end modal status -->

    <!-- modal delete -->
    <div id="modal-delete" class="zoom-anim-dialog mfp-hide modal">
        <h6 class="modal__title">User delete</h6>

        <p class="modal__text">Are you sure to permanently delete this user?</p>
        {{-- <input type="text" id="idUser"> --}}

        <div class="modal__btns">
            {{-- <h1 style="color: white">{{ $userId }}</h1> --}}

            <button class="modal__btn modal__btn--apply" type="button" wire:click='delete'>Delete</button>
            <button class="modal__btn modal__btn--dismiss" type="button">Dismiss</button>
        </div>
    </div>
    <!-- end modal delete -->


    @section('scripts')
    <script>
        $(document).on("click" , '#daleteUser' , function(){
                var idUser = $(this).data('id');
                // $('#idUser').val(idUser);
                Livewire.emit('deleteUser' , idUser);
            })
    </script>

    <script>
        window.Livewire.on('closeDeleteModalUser' , function () {
            $('#modal-delete').modal().toggle();
        })
    </script>









    <script>
        $(document).on("click" , '#statusUser' , function(){
            var idStatusUser = $(this).data('id');
            // $('#idStatusUser').val(idStatusUser);
            Livewire.emit('statusUser' , idStatusUser);
        })
    </script>


    <script>
        window.Livewire.on('closeStatusModalUser' , function () {
        $('#modal-status').modal().toggle();
    })
    </script>
    @endsection


</div>