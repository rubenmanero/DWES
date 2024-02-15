@extends("master")

@section("title", "Administración de productos")

@section("header", "Administración de productos")

@section("main_title", "Detalle de producto")

@section("content")
    <table class='sinbordes'>
        <tr>
            <th class='sinbordes derecha mitad'>Producto:</th>
            <td class='sinbordes mitad'>{{ $product->name }}</td>
        </tr>
        <tr>
            <th class='sinbordes derecha mitad'>Precio:</th>
            <td class='sinbordes mitad'>{{ $product->price }}</td>
        </tr>
        <tr>
            <th class='sinbordes derecha mitad'>Cantidad en stock:</th>
            <td class='sinbordes mitad'>{{ $product->stock }}</td>
        </tr>
        <tr>
            <th class='sinbordes derecha mitad'>Proveedor:</th>
            <td class='sinbordes mitad'>{{ $supplier->name }}</td>
        </tr>
        <tr>
            <th class='sinbordes derecha mitad'>Contacto:</th>
            <td class='sinbordes mitad'>{{ $supplier->contact->name }}</td>
        </tr>
        <tr>
            <th class='sinbordes derecha mitad'>Teléfono:</th>
            <td class='sinbordes mitad'>{{ $supplier->contact->phone_number }}</td>
        </tr>
    </table>

    <br><br>
    <a href="{{ route('product.index') }}" class='centrado'>Volver al listado</a>

    <br><br>
    <form action = "{{route('menu')}}" method="GET" class="centrado">
        @csrf
        <input type="submit" value="MENÚ PRINCIPAL">
    </form>
@endsection