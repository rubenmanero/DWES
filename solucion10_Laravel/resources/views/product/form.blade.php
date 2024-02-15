@extends('master')

@section('title', 'Administración de productos')

@section('header', 'Administración de productos')

@section('main_title', 'Insertar/modificar producto')

@section('content')
    @isset($product)
        <br><br>
        <form action="{{ route('product.update', ['product' => $product->id]) }}" method="POST">
            @method('PATCH')
    @else
        <form action="{{ route('product.store') }}" method="POST">
    @endisset
            @csrf
            <br>
            <table class='sinbordes'>
                <tr>
                    <td class='sinbordes'>Nombre del producto:</td>
                    <td class='sinbordes'><input type="text" name="name" value="{{ $product->name ?? '' }}" required></td>
                </tr>
                <tr>
                    <td class='sinbordes'>Descripción:</td>
                    <td class='sinbordes'><input type="text" name="description" value="{{ $product->description ?? '' }}" required></td>
                </tr>
                <tr>
                    <td class='sinbordes'>Precio:</td>
                    <td class='sinbordes'><input type="text" name="price" value="{{ $product->price ?? '' }}" required></td>
                </tr>
                <tr>
                    <td class='sinbordes'>Stock:</td>
                    <td class='sinbordes'><input type="text" name="stock" value="{{ $product->stock ?? '' }}" required></td>
                </tr>
                <tr>
                    <td class='sinbordes'>Proveedor:</td>
                    <td class='sinbordes'>
                        <select name="supplier_id">
                            @foreach($suppliers as $supplier)
                                <option value="{{ $supplier->id }}"
                                    @if( $supplier->id == ($product->supplier_id ?? ""))
                                        selected
                                    @endif
                                >{{ $supplier->name }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class='sinbordes'><a href="{{ route('product.index') }}">Volver al listado</a></td>
                    <td class='sinbordes'><input type="submit"></td>
                </tr>
            </table>
        </form>

        <br><br>
        <form action = "{{route('menu')}}" method="GET" class="centrado">
            @csrf
            <input type="submit" value="MENÚ PRINCIPAL">
        </form>
@endsection
