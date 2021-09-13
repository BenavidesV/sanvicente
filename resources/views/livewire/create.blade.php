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
              <div class="mb-4">
                <label for="exampleFormControlInput2" class="block text-gray-700 text-sm font-bold mb-2">Imagen:</label>
                <input type="file" name="image" id="image_" wire:model="image" >
                @error('image') <span class="text-red-500">{{ $message }}</span>@enderror
                <div wire:loading wire:target="image">Cargando...</div>
              </div>
              <label for="exampleFormControlInput1" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
              <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Ingrese el nombre del producto" wire:model="name">
              @error('name') <span class="text-red-500">{{ $message }}</span>@enderror
            </div>
            <div class="mb-4">
              <label for="exampleFormControlInput2" class="block text-gray-700 text-sm font-bold mb-2">Descripción:</label>
              <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput2" wire:model="description" placeholder="Ingrese una descripción"></textarea>
              @error('description') <span class="text-red-500">{{ $message }}</span>@enderror
            </div>
            <div class="mb-4">
              <label for="exampleFormControlInput2" class="block text-gray-700 text-sm font-bold mb-2">Palabras clave:</label>
              <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="keywords" wire:model="keywords" placeholder="Ingrese palabras clave para este producto"></textarea>
              @error('keywords') <span class="text-red-500">{{ $message }}</span>@enderror
              <select class="form-select form-select-sm" aria-label=".form-select-sm example" change="onChange($event)" id="category">
                <option selected disabled>Sugerencias de palabras clave</option>
                <option value="verduras, frutas, legumbres">Verduras, Frutas y Legumbres</option>
                <option value="lacteos">Lácteos</option>
                <option value="carnes">Carnes</option>
                <option value="hornamentales">Hornamentales</option>
                <option value="hogar">Hogar</option>

                <option value="hoteleria, hospedaje">Hotelería y hospedaje</option>
                <option value="soda, restaurante">Soda y restaurante</option>
                <option value="mecanicos">Mecánicos</option>
                <option value="limpieza">Limpieza</option>
                <option value="turismo">Turismo</option>
                <option value="tecnologia">Tecnología</option>
              </select>
            </div>
          </div>
        </div>
        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
          <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
            <button wire:click.prevent="store()" type="button" class="justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
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
<script>
document.getElementById('category').addEventListener('change', function() {
console.log('You selected: ', this.value);
var current_keywords=document.getElementById('keywords').value;
document.getElementById('keywords').value=current_keywords+", "+this.value;
});
</script>
