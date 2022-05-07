<div>
    <!-- main content -->
    <main class="main">
        <div class="container-fluid">
            <div class="row">
                <!-- main title -->
                <div class="col-12">
                    <div class="main__title">
                        <h2>Permissions</h2>
                    </div>
                </div>
                <!-- end main title -->

                <!-- reviews -->
                <div class="col-12">
                    <div class="main__table">
                        <table class="main__table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Permission Name</th>
                                    <th>Roles Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($permissions as $permission)

                                <tr>
                                    <td>
                                        <div class="main__table-text">{{ $permission->id }}</div>
                                    </td>
                                    <td>
                                        <div class="main__table-text">{{ $permission->name }}</div>
                                    </td>
                                    <td>
                                        <div class="main__table-text">{{ $permission->roles_count }}</div>
                                    </td>

                                    <td>
                                        <div class="main__table-btns">

                                            <a wire:click='edit({{ $permission->id }})'
                                                class="main__table-btn main__table-btn--edit">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path
                                                        d="M5,18H9.24a1,1,0,0,0,.71-.29l6.92-6.93h0L19.71,8a1,1,0,0,0,0-1.42L15.47,2.29a1,1,0,0,0-1.42,0L11.23,5.12h0L4.29,12.05a1,1,0,0,0-.29.71V17A1,1,0,0,0,5,18ZM14.76,4.41l2.83,2.83L16.17,8.66,13.34,5.83ZM6,13.17l5.93-5.93,2.83,2.83L8.83,16H6ZM21,20H3a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Z" />
                                                </svg>
                                            </a>



                                            <a wire:click='delete({{ $permission->id }})' style="cursor: pointer"
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


                        <div class="row">
                            <div class="col-8">
                                <div class="paginator-wrap">
                                    <span>{{ count($permissions) }} from {{ $permissionsCount }}</span>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="paginator-wrap">
                                    <span>{{ $permissions->links('adminPaginate.pagination-links') }}</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- end reviews -->

                <!-- form -->
                <div class="col-12">
                    <form class="form" wire:submit.prevent='save'>
                        <div class="row">
                            <div class="col-12">
                                <div class="main__title">
                                    <h2>Add New Permission</h2>
                                </div>
                            </div>
                            <div class="col-12 col-md-7 form__content" id="formToEdit">
                                <div class="row">
                                    <div class="col-12">
                                        <input type="text" id="name" name="name" wire:model='name' class="form__input"
                                            placeholder="Permission Name">

                                        @error('name')
                                        <span style="color: #de5064;">{{ $message }}</span>
                                        @enderror

                                    </div>


                                    <div class="col-12" wire:ignore>
                                        <select wire:model='data' id="select2"
                                            class="js-example-basic-multiple form__input" multiple="multiple">
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

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
            placeholder: "Select a Roles",
            allowClear: true
        });
        $('#select2').on('change', function (e) {
            @this.data = $(this).val();
        });
    });  
    </script>

    @endsection
</div>