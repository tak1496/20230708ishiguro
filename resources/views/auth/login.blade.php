<x-guest-layout>
    <div class="title_banner">
        <img src="{{ asset('img/title.jpg') }}" />
    </div>
    <x-auth-card>
        <x-slot name="logo">
            <div class="paga_title">ログイン</div>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class=" mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('メールアドレス')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                <p class="error">
                    @error('email')
                    ※{{ $message }}
                    @enderror
                </p>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('パスワード')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                <p class="error">
                    @error('password')
                    ※{{ $message }}
                    @enderror
                </p>
            </div>

            <div class="flex items-center justify-end mt-4">
                <button class="w-full auth_button">
                    {{ __('ログインする') }}
                </button>
            </div>
            <div class="mt-8 text-center">
                <a class="link" href="{{ route('register') }}">
                    {{ __('会員登録はこちら') }}
                </a>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>