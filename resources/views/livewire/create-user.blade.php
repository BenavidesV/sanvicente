<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    <div class="fixed inset-0 transition-opacity">
      <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>
    <!-- This element is to trick the browser into centering the modal contents. -->
    <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>?
    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
      <form>
        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
          <div class="">
            <div class="mb-4">
              <label for="exampleFormControlInput1" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
              <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Enter Title" wire:model="name">
              @error('name') <span class="text-red-500">{{ $message }}</span>@enderror
            </div>
            <div class="block">
              <x-jet-label for="email" value="{{ __('Email') }}" />
              <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" wire:model="email" required autofocus />
              @error('email') <span class="text-red-500">{{ $message }}</span>@enderror
            </div>
            <div class="mt-4">
              <x-jet-label for="password" value="{{ __('Clave') }}" />
              <x-jet-input id="password" class="block mt-1 w-full"
              type="password" name="password" wire:model="password"
              required autocomplete="new-password" />
              @error('password') <span class="text-red-500">{{ $message }}</span>@enderror
            </div>
            <div class="mb-4">
              <label for="exampleFormControlInput1" class="block text-gray-700 text-sm font-bold mb-2">Cédula:</label>
              <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
              id="exampleFormControlInput1" placeholder="Ingrese su cédula" wire:model="identification">
              @error('identification') <span class="text-red-500">{{ $message }}</span>@enderror
            </div>
            <div class="mb-4">
              <label for="exampleFormControlInput1" class="block text-gray-700 text-sm font-bold mb-2">Dirección:</label>
              <address>
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="exampleFormControlInput1" placeholder="Ingrese su dirección" wire:model="address"></textarea>
              </address>
              @error('address') <span class="text-red-500">{{ $message }}</span>@enderror
            </div>
            <div class="mb-4">
              <label for="exampleFormControlInput1" class="block text-gray-700 text-sm font-bold mb-2">Teléfono:</label>
              <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
              id="exampleFormControlInput1" placeholder="Ingrese su teléfono" wire:model="phone">
              @error('phone') <span class="text-red-500">{{ $message }}</span>@enderror
            </div>
            <div class="mb-4">
              <label for="exampleFormControlInput1" class="block text-gray-700 text-sm font-bold mb-2">facebook:</label>
              <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" wire:model="social_network_1">
              @error('social_network_1') <span class="text-red-500">{{ $message }}</span>@enderror
            </div>
            <div class="mb-4">
              <label for="exampleFormControlInput1" class="block text-gray-700 text-sm font-bold mb-2">whatsapp:</label>
              <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" wire:model="social_network_2">
              @error('social_network_2') <span class="text-red-500">{{ $message }}</span>@enderror
            </div>
            <div class="mb-4">
              <label for="exampleFormControlInput1" class="block text-gray-700 text-sm font-bold mb-2">instagram:</label>
              <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" wire:model="social_network_3">
              @error('social_network_3') <span class="text-red-500">{{ $message }}</span>@enderror
            </div>
            <div class="mb-4">
              <label for="exampleFormControlInput1" class="block text-gray-700 text-sm font-bold mb-2">Otra red social:</label>
              <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" wire:model="social_network_4">
              @error('social_network_4') <span class="text-red-500">{{ $message }}</span>@enderror
            </div>
            <div class="mb-4">
              <label for="exampleFormControlInput1" class="block text-gray-700 text-sm font-bold mb-2">Hashtag (identificador de búsqueda):</label>
              <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" wire:model="hashtag">
              @error('hashtag') <span class="text-red-500">{{ $message }}</span>@enderror
            </div>
            <div class="mb-4">
              <label for="exampleFormControlInput1" class="block text-gray-700 text-sm font-bold mb-2">Historia y descripción del emprendimiento:</label>
              <textarea type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" wire:model="history"></textarea>
              @error('history') <span class="text-red-500">{{ $message }}</span>@enderror
            </div>
          </div>
        </div>
        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
          <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
            <button wire:click.prevent="store()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
              Guardar
            </button>
          </span>
          <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
            <button wire:click="closeModal()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
              Cancelar
            </button>
          </span>
        </div>
      </form>
    </div>
  </div>
</div>
