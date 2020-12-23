<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div>
                <x-jet-label for="identification" value="{{ __('Identificación') }}" />
                <x-jet-input id="identification" class="block mt-1 w-full" type="number" name="identification" :value="old('identification')" required autofocus autocomplete="identification" />
            </div>

            <div>
                <x-jet-label for="name" value="{{ __('Nombre') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Clave') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirmación de la clave') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
            <div>
                <x-jet-label for="address" value="{{ __('Dirección') }}" />
                <x-jet-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus autocomplete="address" />
            </div>
            <div>
                <x-jet-label for="phone" value="{{ __('Teléfono') }}" />
                <x-jet-input id="phone" class="block mt-1 w-full" type="number" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
            </div>
            <div>
                <x-jet-label for="social_network_1" value="{{ __('facebook') }}" />
                <x-jet-input id="social_network_1" class="block mt-1 w-full" type="text" name="social_network_1" :value="old('social_network_1')" required autofocus autocomplete="social_network_1" />
            </div>
            <div>
                <x-jet-label for="social_network_2" value="{{ __('whatsapp') }}" />
                <x-jet-input id="social_network_2" class="block mt-1 w-full" type="text" name="social_network_2" :value="old('social_network_2')" required autofocus autocomplete="social_network_2" />
            </div>
            <div>
                <x-jet-label for="social_network_3" value="{{ __('instagram') }}" />
                <x-jet-input id="social_network_3" class="block mt-1 w-full" type="text" name="social_network_3" :value="old('social_network_3')" required autofocus autocomplete="social_network_3" />
            </div>
            <div>
                <x-jet-label for="social_network_4" value="{{ __('Otra red social') }}" />
                <x-jet-input id="social_network_4" class="block mt-1 w-full" type="text" name="social_network_4" :value="old('social_network_4')" required autofocus autocomplete="social_network_4" />
            </div>
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Ya tiene cuenta?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Registrar') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
