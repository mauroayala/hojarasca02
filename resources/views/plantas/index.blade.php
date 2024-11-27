@extends('layouts.app')

@section('content')
    <h1>PLantas</h1>
    <a href="{{ route('plantas.create') }}" class="btn btn-primary mb-2">Crear planta</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Fecha de Ingreso</th>
                <th>importe</th>
                <th>Activo</th>
                <th>Email</th>
                <th>Producto</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($plantas as $planta)
                <tr>
                    <td>{{ $planta->nombre }}</td>
                    <td>{{ $planta->tipo }}</td>
                    <td>{{ $planta->fecha_ingreso }}</td>
                    <td>{{ $planta->importe }}</td>
                    <td>{{ $planta->activo ? 'Sí' : 'No' }}</td>
                    <td>{{ $planta->email }}</td>
                    <td>{{ $planta->producto->nombre }}</td>
                    <td>
                        <a href="{{ route('empleados.show', $planta) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('empleados.edit', $planta) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('empleados.destroy', $planta) }}" method="POST" style="display: inline;" onsubmit="return confirm('¿Estás seguro de eliminar este cargo?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar este Producto</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection