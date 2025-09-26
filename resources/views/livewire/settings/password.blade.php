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
                        Update Your Password and Keep your account secure
                    </p>
                    <div class="row">

                        <x-action-message class="me-3" on="password-updated">
                            <div class="alert alert-success text-center" role="alert">
                                Saved
                            </div>
                        </x-action-message>

                        <form wire:submit="updatePassword" method="post">

                            <div class="col-12">
                                <h5 class="mb-3">Current Password</h5>
                                <div class="form-floating mb-3">
                                    <input wire:model="current_password" type="passowrd" class="form-control"
                                        id="floatingInput">
                                    <label for="floatingInput">Current Password</label>
                                    @error('current_password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>

                            <div class="col-12">
                                <h5 class="mb-3">New Password</h5>
                                <div class="form-floating mb-3">
                                    <input wire:model="password" type="passowrd" class="form-control"
                                        id="floatingInput">
                                    <label for="floatingInput">New Password</label>
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>

                            <div class="col-12">
                                <h5 class="mb-3">Confirm Password</h5>
                                <div class="form-floating mb-3">
                                    <input wire:model="confirm_password" type="passowrd" class="form-control"
                                        id="floatingInput">
                                    <label for="floatingInput">Confirm Password</label>
                                    @error('confirm_password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>

                            <button class="w-100 btn btn-primary btn-sm">Update Password</button>

                        </form>

                    </div>
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->

</div>
