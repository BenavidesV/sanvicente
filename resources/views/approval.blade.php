<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-md-8">
                    <div class="card">
                      <x-slot name="header">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                          Aprobación pendiente
                        </h2>
                      </x-slot>
                      <div class="card-header">Esperando aprobación</div>

                      <div class="card-body">
                        Su registro está siendo estudiado.
                        <br />
                        Por favor revice más tarde o comuniquese con el administrador :)
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</x-app-layout>
