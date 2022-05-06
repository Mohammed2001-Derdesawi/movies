<div>
    <!-- main content -->
    <main class="main">
        <div class="container-fluid">
            <div class="row">
                <!-- form -->
                <div class="col-12">
                    <form class="form" wire:submit.prevent='update'>
                        <div class="row">
                            <div class="col-12">
                                <div class="main__title">
                                    <h2>Edit Role</h2>
                                </div>
                            </div>
                            <div class="col-12 col-md-7 form__content" id="formToEdit">
                                <div class="row">
                                    <div class="col-12">
                                        <input type="text" id="name" name="name" wire:model='name' class="form__input"
                                            placeholder="Role Name">

                                        @error('name')
                                        <span style="color: #de5064;">{{ $message }}</span>
                                        @enderror

                                    </div>

                                    <div class="col-12" wire:model='data' wire:ignore>
                                        <select class="js-example-basic-multiple form__input" id="select2"
                                            multiple="multiple" style="height:200px">
                                            @foreach ($permissions as $permission)

                                            <option @foreach ($rolePermissions as
                                                $permissionRole) @if($permissionRole->id == $permission->id)
                                                {{ 'selected' }}
                                                @endif
                                                @endforeach value="{{ $permission->id }}">
                                                {{ $permission->name }} </option>

                                            @endforeach

                                        </select>
                                    </div>




                                    {{-- <div class="col-12">
                                        <input type="hidden" wire:model='statusForm' class="form__input">

                                    </div> --}}

                                    <div class="col-12 col-sm-6 col-lg-3">
                                        <button type="submit" class="form__input">Save</button>
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
        $(document).ready(function () {
        $('#select2').select2({
            placeholder: "Select a Permission",
            allowClear: true
        });
        $('#select2').on('change', function (e) {
            @this.data = $(this).val();
        });
    });  
    </script>

    @endsection
</div>