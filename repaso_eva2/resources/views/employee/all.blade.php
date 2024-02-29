@extends("master")

@section("title", "Administración de empleados")

@section("header", "Administración de empleados")

@section("main_title", "Listado de empleados")

@section("content")
    <table class='sinbordes'>
        <tr>
            <th>Nombre</th><th>Apellidos</th><th>Departamento</th><th>Funciones</th><th class='sinbordes'></th><th class='sinbordes'></th>
        </tr>
    @foreach ($employeeList as $employee)
        <tr>
            <td>{{$employee->name}}</td>
            <td>{{$employee->surname}}</td>
            <td>{{$employee->department}}</td>
            <td>{{$employee->functions}}</td>
            <td class='sinbordes centrado'>
                <a href="{{route('employee.edit', $employee->id)}}">Modificar</a>
            </td>
            <td class='sinbordes'>
                <form action = "{{route('employee.destroy', $employee->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="submit" value="Borrar">
                </form>
            </td>
        </tr>
    @endforeach
    </table><br>
    <a href="{{ route('employee.create') }}">Nuevo empleado</a>
    <br><br>
    <form action = "{{route('menu')}}" method="GET" class="centrado">
        @csrf
        <input type="submit" value="MENÚ PRINCIPAL">
    </form>
@endsection