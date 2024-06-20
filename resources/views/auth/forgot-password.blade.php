<x-guest-layout>
     <x-secondary-button>
<a class="no-underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Go back') }}
                </a>
</x-secondary-button>

                <br>

                <br>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? Enter your email address you want to recover and we will email you a password reset link so you can reset your password.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
       
        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Proceed') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
