<x-app-layout>
  <head>
      <meta charset="UTF-8">
      <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">

      <meta name="csrf-token" content="{{ csrf_token() }}">

      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
            integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

      <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
      {{--bxslider--}}

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      <link rel="stylesheet" href="{{mix('css/app.css')}}">
      <title>Administración | San Vicente - Ciudad Quesada'</title>
  </head>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="card">
                <x-slot name="header">
                  <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Usuarios actuales
                  </h2>
                </x-slot>
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-md-8">
                      <div class="card">
                        <div class="card-header">Lista de usarios inscritos</div>

                        <div class="card-body">

                          @if (session('message'))
                          <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                          </div>
                          @endif

                          <table class="table">
                            <tr>
                              <th>Nombre</th>
                              <th>Email</th>
                              <th></th>
                              <th></th>
                            </tr>
                            @forelse ($users as $user)
                            <tr>
                              <td>{{ $user->name }}</td>
                              <td>{{ $user->email }}</td>
                              <td><a href="{{ route('admin.user.profile', $user->id) }}"
                                class="btn btn-primary btn-sm">Editar</a></td>
                              <td><a href="/user/profile"
                                  class="btn btn-primary btn-sm">Eliminar</a></td>
                              </tr>
                              @empty
                              <tr>
                                <td colspan="4">No hay usuarios registrados.</td>
                              </tr>
                              @endforelse
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </x-app-layout>
