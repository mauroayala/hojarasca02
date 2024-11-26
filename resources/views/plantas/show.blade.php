@extends('layouts.app')

@section('content')
    <h1>Empleado</h1>
    <p><strong>Nombre:</strong> {{ $planta->nombre }}</p>
    <p><strong>Tipo:</strong> {{ $planta->tipo }}</p>
    <p><strong>Fecha de ingreso:</strong> {{ $planta->fecha_ingreso }}</p>
    <p><strong>Importe:</strong> {{ $planta->importe }}</p>
    <p><strong>Activo:</strong> {{ $planta->activo ? 'Sí' : 'No' }}</p>
    <p><strong>Email:</strong> {{ $planta->email }}</p>
    <p><strong>Producto:</strong> {{ $planta->producto->nombre }}</p>
    <a href="{{ route('plantas.index') }}" class="btn btn-primary">Volver</a>
@endsection