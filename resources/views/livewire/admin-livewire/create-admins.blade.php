<div>
    <!-- main content -->
    <main class="main">
        <div class="container-fluid">
            <div class="row">
                <!-- main title -->
                <div class="col-12">
                    <div class="main__title">
                        <h2>Add new item</h2>
                    </div>
                </div>
                <!-- end main title -->

                <!-- form -->
                <div class="col-12">
                    <form class="form" enctype="multipart/form-data" wire:submit.prevent='store'>
                        <div class="row">
                            <div class="col-12 col-md-5 form__cover">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-md-12">
                                        <div class="form__img">

                                            <label for="form__img-upload">Upload cover</label>
                                            <input id="form__img-upload" name="form__img-upload" type="file"
                                                accept=".png, .jpg, .jpeg" wire:model='file'
                                                wire:change='$emit("fileChoosen")'>

                                            @if ($image)
                                            <img src="{{ $image }}" alt="">
                                            @endif
                                        </div>
                                        @error('image')
                                        <span style="color: #de5064;">{{ $message }}</span>
                                        @enderror

                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-7 form__content">
                                <div class="row">
                                    <div class="col-12">
                                        @error('name')
                                        <span style="color: #de5064;">{{ $message }}</span>
                                        @enderror
                                        <input type="text" wire:model='name' name="name" id="name" class="form__input"
                                            placeholder="Name">

                                    </div>

                                    <div class="col-12">
                                        @error('email')
                                        <span style="color: #de5064;">{{ $message }}</span>
                                        @enderror
                                        <input type="email" wire:model='email' id="email" name="email"
                                            class="form__input" placeholder="Email">

                                    </div>

                                    <div class="col-12">
                                        @error('password')
                                        <span style="color: #de5064;">{{ $message }}</span>
                                        @enderror
                                        <input type="password" id="password" wire:model='password' name="password"
                                            id="password" class="form__input" placeholder="Password">

                                    </div>

                                    <div class="col-12" wire:ignore>
                                        <select wire:model='dataRole' id="select2"
                                            class="js-example-basic-multiple form__input" multiple="multiple">
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="form__btn">Store</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end form -->
            </div>
        </div>
    </main>
    <!-- end main content -->

    @section('scripts')
    <script>
        window.Livewire.on('fileChoosen' , () => {
            let inputFile = document.getElementById('form__img-upload');
            let file = inputFile.files[0];

            let reader = new FileReader();

            reader.onloadend = () => {
            window.livewire.emit('fileIUpload' , reader.result);
            console.log(reader.result);
            }

            console.log(reader.readAsDataURL(file));
            // console.log(file.files[0]);
        })
    </script>



    <script>
        $(document).ready(function () {
            
        $('#select2').select2({
            placeholder: "Select a Roles",
            allowClear: true
        });

        $('#select2').on('change', function (e) {
        @this.dataRole = $(this).val();
        });

        });  
    </script>
    @endsection
</div>