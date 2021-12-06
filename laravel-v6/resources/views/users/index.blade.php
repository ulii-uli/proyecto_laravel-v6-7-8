@extends('Layout/app')
@section('content')

<div class="panel-body">
  @if (session('mesage'))
  <div class="alert alert-info alert-dismissible text-white" role="alert">
    <span class="text-sm"> <a href="javascript:;" class="alert-link text-white">Excelente</a>. {{ session('mesage') }}.</span>
    <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @endif




  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Lista De Usuarios</h6>
              <div class="float-end">
              {{-- Button del modal --}}
                <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">Agregar</button>

              </div>
            </div>
          </div>
          <div class="card-body px-0 pb-2"></div>
            <div class="table-responsive p-0"></div>
              <div class="container">
                <!-- Inicio del Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hola 7w7 que hace </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cancelar"></button>

                      </div>
                      <div class="modal-body">


                        <div class="container">
                          <div class="row">
                            <form action="{{ route('user.store') }}" method="POST">
                              {{ csrf_field() }}
                              <div class="col-12">
                                <label class="col" for="">Ingrese su nombre</label>
                                <input class="from" type="text" name="name" value="" placeholder="Ingresa Tu Nombre" id="">
                              </div>
                              <div class="col-12">
                              <label class="col" for="">Ingrese su correo:</label>
                              <input class="from" type="email" name="email" value="" placeholder="Ingresa Tu correo " id="">
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar 7w7 </button>
                      </div>
                      </form>
                    </div>
                  </div>

                </div>

              </div>
              <!-- final del Modal-->

              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Clave</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nombre</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">email</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">opiones</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($users as $user)
                  <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                    <button type='button' class="btn btn-primary"><i class="far fa-eye"></i></button>
                    <button type='button' class="btn btn-success"><i class="fas fa-pen-square"></i></button>
                    
                        
                     <form action="{{ route('user.destroy', $user) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <input type="submit" value="Eliminar" class="btn btn-sm btn-danger" onClick="return confirm('estas seguro  a eliminar el registro?')">
                        
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>

              </table>
          
            </div>
          </div>
          @endsection