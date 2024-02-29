@extends("master")

@section("title", "Administración de contactos")

@section("header", "Administración de contactos")

@section("main_title", "Listado de contactos")

@section("content")
    <table class='sinbordes'>
        <tr>
            <th>Nombre</th><th>Apellidos</th><th>Correo electrónico</th><th>Teléfono</th><th>Empleado de ventas</th><th class='sinbordes'></th><th class='sinbordes'></th>
        </tr>
    @foreach ($contactList as $contact)
        <tr>
            <td>{{$contact->name}}</td>
            <td>{{$contact->surname}}</td>
            <td>{{$contact->email}}</td>
            <td class='derecha'>{{$contact->phone_number}}</td>
            <td>{{$contact->employee->name}} {{$contact->employee->surname}}</td>
            <td class='sinbordes centrado'>
                <a href="{{route('contact.edit', $contact->id)}}">Modificar</a>
            </td>
            <td class='sinbordes'>
                <form action = "{{route('contact.destroy', $contact->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="submit" value="Borrar">
                </form>
            </td>
        </tr>
    @endforeach
    </table><br>
    <a href="{{ route('contact.create') }}">Nuevo contacto</a>
    <br><br>
    <form action = "{{route('menu')}}" method="GET" class="centrado">
        @csrf
        <input type="submit" value="MENÚ PRINCIPAL">
    </form>
@endsection