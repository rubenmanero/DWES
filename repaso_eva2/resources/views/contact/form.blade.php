@extends('master')

@section('title', 'Administración de contactos')

@section('header', 'Administración de contactos')

@section('main_title', 'Insertar/modificar contacto')

@section('content')
    @isset($contact)
        <br><br>
        <form action="{{ route('contact.update', ['contact' => $contact->id]) }}" method="POST">
            @method('PATCH')
    @else
        <form action="{{ route('contact.store') }}" method="POST">
    @endisset
        @csrf
        <br>
        <table class='sinbordes'>
            <tr>
                <td class='sinbordes'>Nombre del contacto:</td>
                <td class='sinbordes'><input type="text" name="name" value="{{ $contact->name ?? '' }}" required></td>
            </tr>
            <tr>
                <td class='sinbordes'>Apellidos:</td>
                <td class='sinbordes'><input type="text" name="surname" value="{{ $contact->surname ?? '' }}" required></td>
            </tr>
            <tr>
                <td class='sinbordes'>Correo electrónico:</td>
                <td class='sinbordes'><input type="text" name="email" value="{{ $contact->email ?? '' }}" required></td>
            </tr>
            <tr>
                <td class='sinbordes'>Teléfono:</td>
                <td class='sinbordes'><input type="text" name="phone_number" value="{{ $contact->phone_number ?? '' }}" required></td>
            </tr>
            <tr>
                <td class='sinbordes'>Empleado de ventas:</td>
                <td class='sinbordes'>
                    <select name="employee_id">
                        @foreach($employees as $employee)
                            <option value="{{ $employee->id }}"
                                @if( $employee->id == ($contact->employee_id ?? ""))
                                    selected
                                @endif
                            >{{ $employee->name }} {{ $employee->surname }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td class='sinbordes'>Empresa:</td>
                <td class='sinbordes'>
                    <select name="supplier_id">
                        @foreach($suppliers as $supplier)
                            <option value="{{ $supplier->id }}"
                                @if( $supplier->id == ($contact->supplier_id ?? ""))
                                    selected
                                @endif
                            >{{ $supplier->name }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td class='sinbordes'><a href="{{ route('contact.index') }}">Volver al listado</a></td>
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
