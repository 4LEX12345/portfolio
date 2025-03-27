<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form wire:submit="login">
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="text-[#333333] font-bold text-lg" />
            <x-text-input wire:model="form.email" id="email" class="block mt-1 w-full" type="email" name="email"
                required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="text-[#333333] font-bold text-lg" />

            <x-text-input wire:model="form.password" id="password" class="block mt-1 w-full" type="password"
                name="password" required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4 flex justify-between items-baseline">
            <label for="remember" class="inline-flex items-center">
                <input wire:model="form.remember" id="remember" type="checkbox"
                    class="rounded  border-gray-300  text-primaryColor shadow-sm focus:ring-primaryColor dark:focus:ring-primaryColor dark:focus:ring-offset-primaryColor"
                    name="remember">
                <span class="ms-2 text-[#333333] font-bold text-lg">{{ __('Remember me') }}</span>
            </label>
            @if (Route::has('password.request'))
            <a class="underline  text-sm text-gray-600 dark:text-gray-400 hover:text-primaryColor dark:hover:text-primaryColor rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primaryColor dark:focus:ring-offset-gray-800"
                href="{{ route('password.request') }}" wire:navigate>
                {{ __('Forgot your password?') }}
            </a>
            @endif
        </div>

        <div class="mt-2">
            <div class="text-center">
                <div>
                    <x-primary-button class="w-full text-center my-2">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
                <p class="text-sm text-gray-600">
                    Don't have account?
                    <a class="underline  text-sm text-gray-600 dark:text-gray-400 hover:text-primaryColor dark:hover:text-primaryColor rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primaryColor dark:focus:ring-offset-gray-800"
                        href="{{ route('register') }}" wire:navigate>
                        {{ __('Create Account') }}
                    </a>
                </p>


            </div>
        </div>
    </form>
</div>