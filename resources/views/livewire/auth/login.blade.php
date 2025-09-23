{{-- <div class="flex flex-col gap-6">
    <x-auth-header :title="__('Log in to your account')" :description="__('Enter your email and password below to log in')" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form method="POST" wire:submit="login" class="flex flex-col gap-6">
        <!-- Email Address -->
        <flux:input
            wire:model="email"
            :label="__('Email address')"
            type="email"
            required
            autofocus
            autocomplete="email"
            placeholder="email@example.com"
        />

        <!-- Password -->
        <div class="relative">
            <flux:input
                wire:model="password"
                :label="__('Password')"
                type="password"
                required
                autocomplete="current-password"
                :placeholder="__('Password')"
                viewable
            />

            @if (Route::has('password.request'))
                <flux:link class="absolute end-0 top-0 text-sm" :href="route('password.request')" wire:navigate>
                    {{ __('Forgot your password?') }}
                </flux:link>
            @endif
        </div>

        <!-- Remember Me -->
        <flux:checkbox wire:model="remember" :label="__('Remember me')" />

        <div class="flex items-center justify-end">
            <flux:button variant="primary" type="submit" class="w-full">{{ __('Log in') }}</flux:button>
        </div>
    </form>

    @if (Route::has('register'))
        <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-600 dark:text-zinc-400">
            <span>{{ __('Don\'t have an account?') }}</span>
            <flux:link :href="route('register')" wire:navigate>{{ __('Sign up') }}</flux:link>
        </div>
    @endif
</div> --}}

<div class="login-section bg--black-two">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-xl-10">
                <div class="login-content-box">
                    <div class="login-img-box">
                        <div class="text-center">
                            <span>Sign in Your Account</span>
                            <h3>Welcome To XTrady</h3>
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
