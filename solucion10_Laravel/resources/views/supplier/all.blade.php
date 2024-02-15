@extends("master")

@section("title", "Administración de proveedores")

@section("header", "Administración de proveedores")

@section("main_title", "Listado de proveedores")

@section("content")
    <table class='sinbordes'>
        <tr>
            <th>Proveedor</th><th>Dirección</th><th>Ciudad</th><th>País</th><th class='sinbordes'></th><th class='sinbordes'></th>
        </tr>
    @foreach ($supplierList as $supplier)
        <tr>
            <td>{{$supplier->name}}</td>
            <td>{{$supplier->address}}</td>
            <td>{{$supplier->city}}</td>
            <td>{{$supplier->country}}</td>
            <td class='sinbordes centrado'>
                <a href="{{route('supplier.edit', $supplier->id)}}">Modificar</a>
            </td>
            <td class='sinbordes'>
                <form action = "{{route('supplier.destroy', $supplier->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="submit" value="Borrar">
                </form>
            </td>
        </tr>
        <br>
    @endforeach
    </table><br>
    <a href="{{ route('supplier.create') }}">Nuevo proveedor</a>

    <br><br>
    <form action = "{{route('menu')}}" method="GET" class="centrado">
        @csrf
        <input type="submit" value="MENÚ PRINCIPAL">
    </form>
@endsection