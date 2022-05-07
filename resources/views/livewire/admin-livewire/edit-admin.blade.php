<div>
    <main class="main">
        <div class="container-fluid">
            <div class="row">
                <!-- main title -->
                <div class="col-12">
                    <div class="main__title">
                        <h2>Edit Admin</h2>
                    </div>
                </div>
                <!-- end main title -->

                <!-- profile -->
                <div class="col-12">
                    <div class="profile__content">
                        <!-- profile user -->
                        <div class="profile__user">
                            <div class="profile__avatar">
                                @if ($originalImage)
                                    <img src="{{ asset('assets/adminPhoto/'.$admin->image->path) }}" alt="">
                                @else
                                    <img src="{{asset('assets/admin/img/user.svg')}}" alt="">
                                @endif
                                
                            </div>
                            <!-- or red -->
                            <div class="profile__meta profile__meta--green">
                                <span>name : {{ $admin->name }}</span>
                                @if ($admin->status == 1)
                                <h3><span style="color: #49cea6;">(Approved)</span></h3>
                                @else
                                <h3><span style="color: #de5064;">(Not-Approved)</span></h3>
                                @endif
                            </div>
                        </div>
                        <!-- end profile user -->


                        <!-- profile btns -->
                        <div class="profile__actions">
                            <ul class="nav nav-tabs profile__tabs" id="profile__tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab"
                                        aria-controls="tab-1" aria-selected="true">Profile</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2"
                                        aria-selected="false">Popular Questions</a>
                                </li>
                            </ul>
                            <!-- end profile tabs nav -->
                        </div>
                        <!-- end profile btns -->
                    </div>
                </div>
                <!-- end profile -->

                <!-- content tabs -->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
                        <div class="col-12">
                            <div class="row">
                                <!-- details form -->
                                <div class="col-12 col-lg-12">
                                    <form wire:submit.prevent='updateAdmin({{ $admin->id }})' class="profile__form">
                                        <div class="row">

                                            <div class="col-6">
                                                <div class="col-12">
                                                    <h4 class="profile__title">Profile details</h4>
                                                </div>

                                                <div class="col-12">
                                                    <div class="profile__group">
                                                        <label class="profile__label" for="name">Name</label>
                                                        <input id="name" type="text" name="name" class="profile__input"
                                                            wire:model='name'>
                                                        @error('name')
                                                        <span style="color: #de5064;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="profile__group">
                                                        <label class="profile__label" for="email">Email</label>
                                                        <input id="email" type="text" name="email"
                                                            class="profile__input" wire:model='email'>
                                                        @error('email')
                                                        <span style="color: #de5064;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="profile__group">
                                                        <label class="profile__label" for="password">Old
                                                            Password</label>
                                                        <input id="password" type="password" name="password"
                                                            class="profile__input" wire:model='password'>
                                                        @error('password')
                                                        <span style="color: #de5064;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="profile__group">
                                                        <label class="profile__label" for="newPassword">New
                                                            Password</label>
                                                        <input id="newPassword" type="password" name="newPassword"
                                                            class="profile__input" wire:model='newPassword'>
                                                        @error('newPassword')
                                                        <span style="color: #de5064;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="profile__group">
                                                        <label class="profile__label" for="confirmPassword">Confirm New
                                                            Password</label>
                                                        <input id="confirmPassword" type="password"
                                                            name="confirmPassword" class="profile__input"
                                                            wire:model='confirmPassword'>
                                                        @error('confirmPassword')
                                                        <span style="color: #de5064;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-6" style="margin-top: 100px">
                                                <div class="col-12">
                                                    <div class="form__img">

                                                        <label for="form__img-upload">Upload cover</label>
                                                        <input id="form__img-upload" name="form__img-upload" type="file"
                                                            accept=".png, .jpg, .jpeg" wire:model='file'
                                                            wire:change='$emit("editFileChoosen")'>
                                                            
                                                        @error('newImage')
                                                        <span style="color: #de5064;">{{ $message }}</span>
                                                        @enderror

                                                        @if ($newImage)
                                                        <img src="{{ $newImage }}" alt="">
                                                        @endif

                                                        @if($statusImage)
                                                            @if ($originalImage)
                                                                <img src="{{ asset('assets/adminPhoto/'.$admin->image->path) }}" alt="">
                                                            @else
                                                                <img src="{{asset('assets/admin/img/user.svg')}}" alt="">
                                                            @endif
                                                        @endif
                                                        
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="col-12" wire:model='dataRole' wire:ignore>
                                                <select class="js-example-basic-multiple form__input" id="select2"
                                                    multiple="multiple">
                                                    @foreach ($roles as $role)
        
                                                    <option 
                                                    @foreach ($admin->roles as $editRole) 
                                                    @if($editRole->
                                                        id == $role->id)
                                                        {{ 'selected' }}
                                                        @endif
                                                        @endforeach 
                                                        value="{{ $role->id }}">
                                                        {{ $role->name }} </option>
        
                                                    @endforeach
        
                                                </select>
                                            </div>

                                            <div class="col-12">
                                                <button class="profile__btn" type="submit">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- end details form -->
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="2-tab">
                        <!-- table -->
                        <div class="col-12">
                            <div class="main__table">
                                <table class="main__table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>AUTHOR</th>
                                            <th>TEXT</th>
                                            {{-- <th>LIKE / DISLIKE</th> --}}
                                            <th>CRAETED DATE</th>
                                            <th>ACTIONS</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @php
                                            $i = 0;
                                        @endphp

                                        @foreach ($popular_questions as $popular_question)

                                        <tr>
                                            <td>
                                                <div class="main__table-text">{{ ++$i }}</div>
                                            </td>
                                            <td>
                                                <div class="main__table-text">{{ $popular_question->title }}</div>
                                            </td>
                                            <td>
                                                <div class="main__table-text">{{ $popular_question->admin->name }}</div>
                                            </td>
                                            <td>
                                                <div class="main__table-text">{{ $popular_question->description }}</div>
                                            </td>
                                            {{-- <td>
                                                <div class="main__table-text">12 / 7</div>
                                            </td> --}}
                                            <td>
                                                <div class="main__table-text">{{ $popular_question->created_at->format('D M Y') }}</div>
                                            </td>
                                            <td>
                                                <div class="main__table-btns">
                                                    <a href="#modal-view"
                                                        class="main__table-btn main__table-btn--view open-modal">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                            <path
                                                                d="M21.92,11.6C19.9,6.91,16.1,4,12,4S4.1,6.91,2.08,11.6a1,1,0,0,0,0,.8C4.1,17.09,7.9,20,12,20s7.9-2.91,9.92-7.6A1,1,0,0,0,21.92,11.6ZM12,18c-3.17,0-6.17-2.29-7.9-6C5.83,8.29,8.83,6,12,6s6.17,2.29,7.9,6C18.17,15.71,15.17,18,12,18ZM12,8a4,4,0,1,0,4,4A4,4,0,0,0,12,8Zm0,6a2,2,0,1,1,2-2A2,2,0,0,1,12,14Z" />
                                                        </svg>
                                                    </a>
                                                    <a href="#modal-delete"
                                                        class="main__table-btn main__table-btn--delete open-modal">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                            <path
                                                                d="M20,6H16V5a3,3,0,0,0-3-3H11A3,3,0,0,0,8,5V6H4A1,1,0,0,0,4,8H5V19a3,3,0,0,0,3,3h8a3,3,0,0,0,3-3V8h1a1,1,0,0,0,0-2ZM10,5a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1V6H10Zm7,14a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V8H17Z" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- end table -->

                        <!-- paginator -->
                        {{-- <div class="col-12">
                            <div class="paginator-wrap">
                                <span>10 from 23</span>

                                <ul class="paginator">
                                    <li class="paginator__item paginator__item--prev">
                                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                <path
                                                    d="M8.5,12.8l5.7,5.6c0.4,0.4,1,0.4,1.4,0c0,0,0,0,0,0c0.4-0.4,0.4-1,0-1.4l-4.9-5l4.9-5c0.4-0.4,0.4-1,0-1.4c-0.2-0.2-0.4-0.3-0.7-0.3c-0.3,0-0.5,0.1-0.7,0.3l-5.7,5.6C8.1,11.7,8.1,12.3,8.5,12.8C8.5,12.7,8.5,12.7,8.5,12.8z">
                                                </path>
                                            </svg></a>
                                    </li>
                                    <li class="paginator__item"><a href="#">1</a></li>
                                    <li class="paginator__item paginator__item--active"><a href="#">2</a></li>
                                    <li class="paginator__item"><a href="#">3</a></li>
                                    <li class="paginator__item"><a href="#">4</a></li>
                                    <li class="paginator__item paginator__item--next">
                                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path
                                                    d="M15.54,11.29,9.88,5.64a1,1,0,0,0-1.42,0,1,1,0,0,0,0,1.41l4.95,5L8.46,17a1,1,0,0,0,0,1.41,1,1,0,0,0,.71.3,1,1,0,0,0,.71-.3l5.66-5.65A1,1,0,0,0,15.54,11.29Z">
                                                </path>
                                            </svg></a>
                                    </li>
                                </ul>
                            </div>
                        </div> --}}
                        <!-- end paginator -->
                    </div>
                </div>
                <!-- end content tabs -->
            </div>
        </div>
    </main>
    <!-- end main content -->

    <!-- modal view -->
    <div id="modal-view" class="zoom-anim-dialog mfp-hide modal modal--view">
        <div class="comments__autor">
            <img class="comments__avatar" src="{{asset('assets/admin/img/user.svg')}}" alt="">
            <span class="comments__name">John Doe</span>
            <span class="comments__time">30.08.2018, 17:53</span>
        </div>
        <p class="comments__text">There are many variations of passages of Lorem Ipsum available, but the majority have
            suffered alteration in some form, by injected humour, or randomised words which don't look even slightly
            believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
            embarrassing hidden in the middle of text.</p>
        <div class="comments__actions">
            <div class="comments__rate">
                <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M21.3,10.08A3,3,0,0,0,19,9H14.44L15,7.57A4.13,4.13,0,0,0,11.11,2a1,1,0,0,0-.91.59L7.35,9H5a3,3,0,0,0-3,3v7a3,3,0,0,0,3,3H17.73a3,3,0,0,0,2.95-2.46l1.27-7A3,3,0,0,0,21.3,10.08ZM7,20H5a1,1,0,0,1-1-1V12a1,1,0,0,1,1-1H7Zm13-7.82-1.27,7a1,1,0,0,1-1,.82H9V10.21l2.72-6.12A2.11,2.11,0,0,1,13.1,6.87L12.57,8.3A2,2,0,0,0,14.44,11H19a1,1,0,0,1,.77.36A1,1,0,0,1,20,12.18Z" />
                    </svg>12</span>

                <span>7<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M19,2H6.27A3,3,0,0,0,3.32,4.46l-1.27,7A3,3,0,0,0,5,15H9.56L9,16.43A4.13,4.13,0,0,0,12.89,22a1,1,0,0,0,.91-.59L16.65,15H19a3,3,0,0,0,3-3V5A3,3,0,0,0,19,2ZM15,13.79l-2.72,6.12a2.13,2.13,0,0,1-1.38-2.78l.53-1.43A2,2,0,0,0,9.56,13H5a1,1,0,0,1-.77-.36A1,1,0,0,1,4,11.82l1.27-7a1,1,0,0,1,1-.82H15ZM20,12a1,1,0,0,1-1,1H17V4h2a1,1,0,0,1,1,1Z" />
                    </svg></span>
            </div>
        </div>
    </div>
    <!-- end modal view -->

    <!-- modal delete -->
    <div id="modal-delete" class="zoom-anim-dialog mfp-hide modal">
        <h6 class="modal__title">Comment delete</h6>

        <p class="modal__text">Are you sure to permanently delete this comment?</p>

        <div class="modal__btns">
            <button class="modal__btn modal__btn--apply" type="button">Delete</button>
            <button class="modal__btn modal__btn--dismiss" type="button">Dismiss</button>
        </div>
    </div>
    <!-- end modal delete -->

    @section('scripts')
    <script>
        window.Livewire.on('editFileChoosen' , () => {
            let inputFile = document.getElementById('form__img-upload');
            let file = inputFile.files[0];

            let reader = new FileReader();

            reader.onloadend = () => {
            window.livewire.emit('editFileIUpload' , reader.result);
            console.log(reader.result);
            }

            console.log(reader.readAsDataURL(file));
            // console.log(file.files[0]);
        })
    </script>



<script>
    $(document).ready(function () {
    $('#select2').select2({
        placeholder: "Select a Permission",
        allowClear: true
    });
    $('#select2').on('change', function (e) {
        @this.dataRole = $(this).val();
    });
});  
</script>
    @endsection
</div>