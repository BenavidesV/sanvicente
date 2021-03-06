<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mi negocio') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                  <div>
                    <img src="{{URL::asset('/adi SV.jpg')}}" alt="San Vicente" height="200" width="200">
                      <!--<x-jet-application-logo class="block h-12 w-auto" />-->
                  </div>

                  <div class="mt-8 text-2xl">
                      Este es mi emprendimiento
                  </div>

                  <div class="mt-6 text-gray-500">
                  </div>
              </div>

              <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
                  <div class="p-6">
                      <div class="flex items-center">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-400"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                          <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="">Historia</a></div>
                      </div>

                      <div class="ml-12">
                          <div class="mt-2 text-sm text-gray-500">
                              {{ $user->history }}
                          </div>

                      </div>
                  </div>

                  <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
                      <div class="flex items-center">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-400"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                          <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="">Nuestra imagen</a></div>
                      </div>

                      <div class="ml-12">
                          <div class="mt-2 text-sm text-gray-500">
                              <img alt="user.name" class=" img-rounded card-img-top img" src="{{ asset($user->profile_photo_url) }}" style="min-width: 20px; min-height: 20px;"/>
                          </div>


                      </div>
                  </div>

                  <div class="p-6 border-t border-gray-200">
                      <div class="flex items-center">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-400"><path d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                          <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="">Comunidad</a></div>
                      </div>

                      <div class="ml-12">
                          <div class="mt-2 text-sm text-gray-500">
                              Trabajamos por mantener y fomentar en los visitantes y consumidores de nuestrios productos los valores humanos, la consevación de la naturaleza y el desarrollo sostenible.
                          </div>
                      </div>
                  </div>

                  <div class="p-6 border-t border-gray-200 md:border-l">
                      <div class="flex items-center">
                          <i class="fa fa-list" aria-hidden="true"></i>
                          <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">Encuentre nuestros productos escribiendo en la barra de búsqueda: </div>
                      </div>

                      <div class="ml-12">
                          <div class="mt-2 text-sm text-gray-500">
                            <a class="dropdown-item" href="/#portfolio"</a>
                              #{{$user->hashtag}}
                          </div>
                      </div>
                  </div>
              </div>

            </div>
        </div>
    </div>
</x-guest-layout>
