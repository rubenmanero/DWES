@extends("master")

@section("title", "Gestión de empresa")

@section("header", "Gestión de empresa")

@section("main_title", "Registros de la base de datos")

@section("content")
    <form action = "{{route('product.index')}}" method="GET" class="centrado">
        @csrf
        <input type="submit" value="Productos en stock" class="grande">
    </form>

    <form action = "{{route('supplier.index')}}" method="GET" class="centrado">
        @csrf
        <input type="submit" value="Proveedores" class="grande">
    </form>

    <form action = "{{route('contact.index')}}" method="GET" class="centrado">
        @csrf
        <input type="submit" value="Contactos" class="grande">
    </form>

    <form action = "{{route('supplier.products')}}" method="GET" class="centrado">
        @csrf
        <input type="submit" value="Productos por proveedor" class="grande">
    </form>
@endsection