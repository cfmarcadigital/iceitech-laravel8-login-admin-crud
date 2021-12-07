@extends('layouts.app')

@section('title')
    <div class="container-fluid">
    <hr>
        <h2 class="text-black-50">Administrar Docentes</h2>
        <hr>
    </div>
@endsection

@section('content')
    @if(session('mensaje'))
        <div class="alert alert-success">
            <strong>{{ session('mensaje') }}</strong>
        </div>
    @endif
    <div class="card-header">
        <a href="{{ route('admin.docentes.create') }}" class="btn btn-success btn-sm">REGISTRAR DOCENTE</a>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="card-body text-right">
                {{ $docentes->links() }}
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>NOMBRES</th>
                        <th>APELLIDOS</th>
                        <th>CEDULA DE IDENTIDAD</th>
                        <th>CELULAR</th>
                        <th>CORREO ELECTRONICO</th>
                        <th colspan="2">OPCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($docentes as $docente)
                    <tr>
                        <td>{{ $docente->nombres }}</td>
                        <td>{{ $docente->apellidos }}</td>
                        <td>{{ $docente->ci }}</td>
                        <td>{{ $docente->celular }}</td>
                        <td>{{ $docente->correo }}</td>
                        <th><a href="{{ route('admin.docentes.edit', $docente) }}" class="btn btn-primary btn-sm">EDITAR</a></th>
                        <th>
                            <form action="{{ route('admin.docentes.destroy',$docente) }}" method="POST">
                                @method('delete')
                                @csrf
                                <input type="submit" value="ELIMINAR" class="btn btn-danger btn-sm">
                            </form>
                        </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="card-body text-right">
                {{ $docentes->links() }}
            </div>
        </div>
    </div>
@endsection