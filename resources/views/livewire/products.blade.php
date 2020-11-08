<x-slot name="header">
  <h2 class="font-semibold text-xl text-gray-800 leading-tight">
    Manage todos (Laravel 8 Jetstream Livewire CRUD Example - Tutsmake.com)
  </h2>
</x-slot>
<div class="py-12">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
      @if (session()->has('message'))
      <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
        <div class="flex">
          <div>
            <p class="text-sm">{{ session('message') }}</p>
          </div>
        </div>
      </div>
      @endif
      <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Crear producto</button>
      @if($isOpen)
      @include('livewire.create')
      @endif
      <table class="table-fixed w-full">
        <thead>
          <tr class="bg-gray-100">
            <th class="px-4 py-2">Nombre</th>
            <th class="px-4 py-2">Descripción</th>
            <th class="px-4 py-2">Imagen</th>
            <th class="px-4 py-2">Palabras clave</th>
            <th class="px-4 py-2">Acción</th>
          </tr>
        </thead>
        <tbody>
          @foreach($products as $product)
          <tr>
            <td class="border px-4 py-2">{{ $product->name }}</td>
            <td class="border px-4 py-2">{{ $product->description}}</td>
            <!--<td class="border px-4 py-2">{{ $product->image}}</td>-->
            <td class="border px-4 py-2">URL</td>
            <td>
              @foreach(explode(',', $product->keywords) as $keyword)
              {{$keyword}},
              @endforeach
            </td>
            <td class="border px-4 py-2">
              <button wire:click="edit({{ $product->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
              <button wire:click="delete({{ $product->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
