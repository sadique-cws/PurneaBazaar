<<<<<<< HEAD
@extends('public.master')

@section('content')
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
           
=======
@extends('public/master')
@section('content')
<x-guest-layout class="mb-5">
    <x-auth-card class="mb-5">
        <x-slot name="logo">
            
>>>>>>> e4a8f6efdc602f3f196cfdc25a1bf4fe6af1d277
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-0" :errors="$errors" />

<<<<<<< HEAD
        <form method="POST" action="{{ route('register') }}" class="mt-n5">
=======
        <form method="POST" action="{{ route('register') }}">
>>>>>>> e4a8f6efdc602f3f196cfdc25a1bf4fe6af1d277
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

@endsection