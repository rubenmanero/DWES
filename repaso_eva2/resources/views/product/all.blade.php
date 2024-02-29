@extends("master")

@section("title", "Administración de productos")

@section("header", "Administración de productos")

@section("main_title", "Listado de productos")

@section("content")
    <table class='sinbordes'>
        <tr>
            <th>Producto</th><th>Descripción</th><th>Precio</th><th>Stock</th><th class='sinbordes'></th><th class='sinbordes'></th>
        </tr>
    @foreach ($productList as $product)
        <tr>
            <td class="hover"><a href="{{route('product.show', $product->id)}}" class="block">{{$product->name}}</a></td>
            <td>{{$product->description}}</td>
            <td class='derecha'>{{$product->price}}</td>
            <td class='derecha'>{{$product->stock}}</td>
            <td class='sinbordes centrado'>
                <a href="{{route('product.edit', $product->id)}}">Modificar</a>
            </td>
            <td class='sinbordes'>
                <form action = "{{route('product.destroy', $product->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="submit" value="Borrar">
                </form>
            </td>
        </tr>
    @endforeach
    </table><br>
    <a href="{{ route('product.create') }}">Nuevo artículo</a>

    <br><br>
    <form action = "{{route('menu')}}" method="GET" class="centrado">
        @csrf
        <input type="submit" value="MENÚ PRINCIPAL">
    </form>
@endsection