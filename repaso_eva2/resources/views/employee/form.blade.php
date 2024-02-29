@extends('master')

@section('title', 'Administración de empleados')

@section('header', 'Administración de empleados')

@section('main_title', 'Insertar/modificar empleado')

@section('content')
    @isset($employee)
        <br><br>
        <form action="{{ route('employee.update', ['employee' => $employee->id]) }}" method="POST">
            @method('PATCH')
    @else
        <form action="{{ route('employee.store') }}" method="POST">
    @endisset
        @csrf
        <br>
        <table class='sinbordes'>
            <tr>
                <td class='sinbordes'>Nombre del empleado:</td>
                <td class='sinbordes'><input type="text" name="name" value="{{ $employee->name ?? '' }}" required></td>
            </tr>
            <tr>
                <td class='sinbordes'>Apellidos:</td>
                <td class='sinbordes'><input type="text" name="surname" value="{{ $employee->surname ?? '' }}" required></td>
            </tr>
            <tr>
                <td class='sinbordes'>Departamento:</td>
                <td class='sinbordes'><input type="text" name="department" value="{{ $employee->department ?? '' }}" required></td>
            </tr>
            <tr>
                <td class='sinbordes'>Funciones:</td>
                <td class='sinbordes'><input type="text" name="functions" value="{{ $employee->functions ?? '' }}" required></td>
            </tr>
            <tr>
                <td class='sinbordes'><a href="{{ route('employee.index') }}">Volver al listado</a></td>
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
