<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="flex justify-center items-center pb-4 border-b border-gray-300">
            <p class="text-xs">Masuk atau Mendaftar</p>
        </div>

        <div class="mt-7">
            <h3 class="text-gray-800 text-xl font-bold">Welcome to UmaBali!</h3>
        </div>
        <!-- Name -->
        <div class="mt-4">
            {{-- <x-input-label for="name" :value="__('Name')" /> --}}
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" placeholder="Your name" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            {{-- <x-input-label for="email" :value="__('Email')" /> --}}
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" placeholder="Email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            {{-- <x-input-label for="password" :value="__('Password')" /> --}}

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" placeholder="Password"/>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            {{-- <x-input-label for="password_confirmation" :value="__('Confirm Password')" /> --}}

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex flex-col items-center justify-center mt-4">
            
            <x-primary-button class="mt-2">
                {{ __('Register') }}
            </x-primary-button>

            <a class="underline mt-1.5 text-xs text-gray-600 hover:text-gray-900 rounded-md" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
        </div>
    </form>
</x-guest-layout>
