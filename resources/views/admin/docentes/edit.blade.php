@extends('layouts.app')

@section('title')
    <div class="container-fluid">
    <hr>
        <h2 class="text-black-50">Editar Docente</h2>
        <hr>
    </div>
@endsection

@section('content')
    <div class="card-header text-right">
        <a href="{{ route('admin.docentes.index') }}" class="btn btn-sm btn-danger mb-3">CANCELAR</a>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.docentes.update', $docente) }}" method="POST" enctype="multipart/form-data">

                @csrf
                @method('PUT')
                <div class="form-group">
                    <label class="font-weight-bold">NOMBRE(S)</label>
                    <input type="text" class="form-control @error('nombres') is-invalid @enderror" name="nombres" value="{{ old('nombres', $docente->nombres) }}" placeholder="Ingrese el nombre del docente">
                            
                    <!-- Mensaje de error para el nombre -->
                    @error('nombres')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">APELLIDO(S)</label>
                    <input type="text" class="form-control @error('apellidos') is-invalid @enderror" name="apellidos" value="{{ old('apellidos', $docente->apellidos) }}" placeholder="Ingrese el apellido del docente">
                            
                    <!-- Mensaje de rror para el apellido -->
                    @error('apellidos')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">CEDULA DE IDENTIDAD</label>
                    <input type="text" class="form-control @error('ci') is-invalid @enderror" name="ci" value="{{ old('ci', $docente->ci) }}" placeholder="Ingrese el numero de cedula de identidad">
                            
                    <!-- Mensaje de rror para el ci -->
                    @error('celular')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">CELULAR</label>
                    <input type="number" class="form-control @error('celular') is-invalid @enderror" name="celular" value="{{ old('celular', $docente->celular) }}" placeholder="Ingrese el número de celular del docente">
                           
                    <!-- Mensaje de rror para el celular -->
                    @error('celular')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">CORREO ELECTRONICO</label>
                    <input type="text" class="form-control @error('correo') is-invalid @enderror" name="correo" value="{{ old('correo', $docente->correo) }}" placeholder="Ingrese el correo electrónico del docente">
                            
                    <!-- Mensaje de error para el correo -->
                    @error('correo')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-sm btn-success">GUARDAR</button>
            </form> 
        </div>
    </div>
@endsection