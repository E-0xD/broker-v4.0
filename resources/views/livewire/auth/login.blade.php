<div class="login-section bg--black-two">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-xl-10">
                <div class="login-content-box">
                    <div class="login-img-box">
                        <div class="text-center">
                            <span>Sign in Your Account</span>
                            <h3>Welcome To {{config('app.name')}}</h3>
                            <a href="{{ route('home') }}" class="btn btn--base">
                                Back To Home
                                <i class="flaticon-arrow-upper-right"></i>
                            </a>
                        </div>
                    </div>
                    <form method="POST" wire:submit="login">
                        <div class="row row-gap-4">

                            <div class="col-12">
                                <input type="email" wire:model="email" class="form-control"
                                    placeholder="Enter E-Mail*">
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-12">
                                <input type="password" wire:model="password" class="form-control"
                                    placeholder="Password*">
                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="d-flex flex-wrap row-gap-4 justify-content-between">
                                    <div class="form--check">
                                        <input class="form-check-input" wire:model="remember" type="checkbox"
                                            value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Remember Me
                                        </label>
                                    </div>
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="forgot-text">Forgot
                                            Password?</a>
                                    @endif
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="submit-button">
                                    <button type="submit" class="btn btn--base-two w-100">
                                        Sign In
                                        <i class="flaticon-arrow-upper-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <p class="text-center">Already have an account?
                            <a href="{{ route('register') }}" class="text--base">Register</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
