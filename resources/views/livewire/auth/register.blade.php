<div class="login-section bg--black-two">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-xl-10">
                <div class="login-content-box">
                    <div class="login-img-box order-lg-1">
                        <div class="text-center">
                            <span>Sign Up Your Account</span>
                            <h3>Welcome To XTrady</h3>
                            <a href="{{ route('register') }}" class="btn btn--base">
                                Back To Home
                                <i class="flaticon-arrow-upper-right"></i>
                            </a>
                        </div>
                    </div>
                    <form method="POST" wire:submit="register">
                        <div class="row row-gap-4">
                            <div class="col-12">
                                <input type="text" wire:model="name" class="form-control"
                                    placeholder="Your Full Name*">
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror

                            </div>
                            <div class="col-12">
                                <input type="email" wire:model="email" class="form-control"
                                    placeholder="Enter E-Mail*">
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <input type="password" wire:model="password" class="form-control"
                                    placeholder="Password*" >
                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <input type="password" wire:model="password_confirmation" class="form-control"
                                    placeholder="Confirm Password*" >
                            </div>
                           
                            <div class="col-12">
                                <div class="submit-button">
                                    <button type="submit" class="btn btn--base-two w-100">
                                        Sign Up
                                        <i class="flaticon-arrow-upper-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <p class="text-center">Already have an account?
                            <a href="{{ route('login') }}" class="text--base">Login</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
