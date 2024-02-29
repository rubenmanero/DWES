@extends('master')

@section('title', 'Pedidos por empleado')

@section('header', 'Pedidos por empleado')

@section('main_title', 'Producto solicitado')

@section('content')
    <p>Para: {{$product->supplier->contact->employee->name}} {{$product->supplier->contact->employee->surname}}</p><br>
    <h2 class="centrado"><b>{{ $product->name }}</b></h2>
    <ul>
        <li>Cantidad solicitada: {{ $amount }}</li>
        <li>Cantidad en stock: {{ $product->stock }}</li>
        <li>Proveedor: {{ $product->supplier->name }}</li>
        <li>Teléfono de contacto: {{ $product->supplier->contact->phone_number }}
            ({{ $product->supplier->contact->name }} {{ $product->supplier->contact->surname }})
        </li>
        <li>Empleado solicitante (ID): {{ $employee->id }}</li>
    </ul>

    <br><br>
    <form action = "{{route('menu')}}" method="GET" class="centrado">
        @csrf
        <input type="submit" value="MENÚ PRINCIPAL">
    </form>
@endsection