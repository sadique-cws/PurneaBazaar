<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

<<<<<<< HEAD
        <div class="mb-0 text-sm text-gray-600">
=======
        <div class="mb-4 text-sm text-gray-600">
>>>>>>> e4a8f6efdc602f3f196cfdc25a1bf4fe6af1d277
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
<<<<<<< HEAD
        <x-auth-session-status class="mb-0" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-0" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}" class="mt-n5">
=======
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
>>>>>>> e4a8f6efdc602f3f196cfdc25a1bf4fe6af1d277
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
