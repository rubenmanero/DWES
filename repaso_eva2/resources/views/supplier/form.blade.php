@extends('master')

@section('title', 'Administración de proveedores')

@section('header', 'Administración de proveedores')

@section('main_title', 'Insertar/modificar proveedor')

@section('content')
    @isset($supplier)
        <br><br>
        <form action="{{ route('supplier.update', ['supplier' => $supplier->id]) }}" method="POST">
            @method('PATCH')
    @else
        <form action="{{ route('supplier.store') }}" method="POST">
    @endisset
            @csrf
            <br>
            <table class='sinbordes'>
                <tr>
                    <td class='sinbordes'>Empresa:</td>
                    <td class='sinbordes'><input type="text" name="name" value="{{ $supplier->name ?? '' }}" required></td>
                </tr>
                <tr>
                    <td class='sinbordes'>Dirección:</td>
                    <td class='sinbordes'><input type="text" name="address" value="{{ $supplier->address ?? '' }}" required></td>
                </tr>
                <tr>
                    <td class='sinbordes'>Ciudad:</td>
                    <td class='sinbordes'><input type="text" name="city" value="{{ $supplier->city ?? '' }}" required></td>
                </tr>
                <tr>
                    <td class='sinbordes'>País:</td>
                    <td class='sinbordes'><input type="text" name="country" value="{{ $supplier->country ?? '' }}" required></td>
                </tr>
                <tr>
                    <td class='sinbordes'>Contacto:</td>
                    <td class='sinbordes'>
                        <select name="contact_id">
                            @foreach($contacts as $contact)
                                <option value="{{ $contact->id }}"
                                    @if( $contact->id == ($supplier->contact_id ?? ""))
                                        selected
                                    @endif
                                >{{ $contact->name }} {{ $contact->surname }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class='sinbordes'><a href="{{ route('supplier.index') }}">Volver al listado</a></td>
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
