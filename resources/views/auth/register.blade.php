<x-guest-layout>
    <div class="title_banner">
        <img src="{{ asset('img/title.jpg') }}" />
    </div>
    <x-auth-card>
        <x-slot name="logo">
            <div class="paga_title">会員登録</div>
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('お名前')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                <p class="error">
                    @error('name')
                    ※{{ $message }}
                    @enderror
                </p>
            </div>

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('メールアドレス')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                <p class="error">
                    @error('email')
                    ※{{ $message }}
                    @enderror
                </p>
            </div>

            <!-- Password -->
            <div>
                <x-label for="password" :value="__('パスワード')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                <p class="error">
                    @error('password')
                    ※{{ $message }}
                    @enderror
                </p>
            </div>

            <!-- Confirm Password -->
            <!--
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
            </div>
            -->

            <div class="flex items-center justify-end mt-2">
                <button class="w-full auth_button">
                    {{ __('登録する') }}
                </button>
            </div>
            <div class="mt-8 text-center">
                <a class="link" href="{{ route('login') }}">
                    {{ __('ログインはこちら') }}
                </a>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>