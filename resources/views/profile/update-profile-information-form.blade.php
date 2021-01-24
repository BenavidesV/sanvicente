<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Información de perfil') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Actualice su información de perfil y email.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden"
                            wire:model="photo"
                            x-ref="photo"
                            x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <x-jet-label for="photo" value="{{ __('Foto') }}" />

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="rounded-full h-20 w-20 object-cover">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview">
                    <span class="block rounded-full w-20 h-20"
                          x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Seleccione una nueva imagen') }}
                </x-jet-secondary-button>

                @if ($this->user->profile_photo_path)
                    <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        {{ __('Remover imagen') }}
                    </x-jet-secondary-button>
                @endif

                <x-jet-input-error for="photo" class="mt-2" />
            </div>
        @endif
        <!-- identification -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="identification" value="{{ __('Cédula') }}" />
            <x-jet-input id="identification" type="number" class="mt-1 block w-full" wire:model.defer="state.identification" autocomplete="identification" />
            <x-jet-input-error for="identification" class="mt-2" />
        </div>

        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Nombre') }}" />
            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" />
            <x-jet-input-error for="name" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
            <x-jet-input-error for="email" class="mt-2" />
        </div>

        <!-- Phone -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="phone" value="{{ __('Teléfono') }}" />
            <x-jet-input id="phone" type="number" class="mt-1 block w-full" wire:model.defer="state.phone" autocomplete="phone" />
            <x-jet-input-error for="phone" class="mt-2" />
        </div>
        <!-- Red social 1 -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="social_network_1" value="{{ __('facebook') }}" />
            <x-jet-input id="social_network_1" type="text" class="mt-1 block w-full" wire:model.defer="state.social_network_1" autocomplete="social_network_1" />
            <x-jet-input-error for="social_network_1" class="mt-2" />
        </div>
        <!-- Red social 2 -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="social_network_2" value="{{ __('whatsapp') }}" />
            <x-jet-input id="social_network_2" type="text" class="mt-1 block w-full" wire:model.defer="state.social_network_2" autocomplete="social_network_2" />
            <x-jet-input-error for="social_network_2" class="mt-2" />
        </div>
        <!-- Red social 3 -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="social_network_3" value="{{ __('instagram') }}" />
            <x-jet-input id="social_network_3" type="text" class="mt-1 block w-full" wire:model.defer="state.social_network_3" autocomplete="social_network_3" />
            <x-jet-input-error for="social_network_3" class="mt-2" />
        </div>
        <!-- Red social 4 -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="social_network_4" value="{{ __('Otra red social') }}" />
            <x-jet-input id="social_network_4" type="text" class="mt-1 block w-full" wire:model.defer="state.social_network_4" autocomplete="social_network_4" />
            <x-jet-input-error for="social_network_4" class="mt-2" />
        </div>
        <!-- Hashtag -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="hashtag" value="{{ __('Hashtag (identificador de búsqueda)') }}" />
            <x-jet-input id="hashtag" type="text" class="mt-1 block w-full" wire:model.defer="state.hashtag" autocomplete="hashtag" />
            <x-jet-input-error for="hashtag" class="mt-2" />
        </div>
        <!-- Historia del negocio -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="history" value="{{ __('Muestre al mundo como es su negocio') }}" />
            <textarea id="history" rows=15 type="text" class="mt-1 block w-full" wire:model.defer="state.history" autocomplete="history"></textarea>
            <x-jet-input-error for="history" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Guadada.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Guardar') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
