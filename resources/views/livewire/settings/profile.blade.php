<div>
    <x-layouts.app.breadcrum title="Setting" :breadcrums="['Setting', 'Profile']" />

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Change Your profile Settings</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">
                        update your username and email
                    </p>
                    <div class="row">

                        <x-action-message class="me-3" on="profile-updated">
                            <div class="alert alert-success text-center" role="alert">
                                Saved
                            </div>
                        </x-action-message>
                        <form wire:submit="updateProfileInformation" method="post">

                            <div class="col-12">
                                <h5 class="mb-3">Full Name</h5>
                                <div class="form-floating mb-3">
                                    <input wire:model="name" type="text" class="form-control" id="floatingInput">
                                    <label for="floatingInput">Full Name</label>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>

                            <div class="col-12">
                                <h5 class="mb-3">Email Address</h5>
                                <div class="form-floating mb-3">
                                    <input wire:model="email" type="email" class="form-control" id="floatingInput">
                                    <label for="floatingInput">Email Address</label>
                                    @error('anme')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <button class="w-100 btn btn-primary btn-sm">Update Profile</button>

                        </form>

                    </div>
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->

</div>
