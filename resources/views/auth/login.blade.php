<x-guest-layout>
    <div class="w-full h-full flex">
        <div class="w-1/2">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div>
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                        required autofocus autocomplete="username" />
                </div>
                <div class="mt-4">
                    <x-label for="password" value="{{ __('Password') }}" />
                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="current-password" />
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-checkbox id="remember_me" name="remember" />
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                    @endif

                    <x-button class="ms-4">
                        {{ __('Log in') }}
                    </x-button>
                </div>
            </form>
        </div>
        <div class="w-1/2 flex justify-center py-2">
            <x-v1.long-image-card
            message="¿No tienes una cuenta creada?"
            imgUrl="https://img.freepik.com/foto-gratis/vista-superior-pirata-informatico-irreconocible-que-realiza-ciberataque-noche_1098-18706.jpg?t=st=1720037808~exp=1720041408~hmac=f3e592c1d59374d71444a14bd826643177d312045bd0120c79073829325b48a2&w=740"
        >
            <x-slot name="btn">
                <x-v1.btn>
                    <span>Enviar</span>
                </x-v1.btn>
            </x-slot>
        </x-v1.long-image-card>
        </div>
    </div>
</x-guest-layout>