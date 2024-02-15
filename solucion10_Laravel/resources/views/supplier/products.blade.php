@extends("master")

@section("title", "Departamento de compras")

@section("header", "Departamento de compras")

@section("main_title", "Productos por proveedor")

@section("content")
    <table class='sinbordes'>
        <tr>
            <th>Proveedor</th><th>Contacto</th><th>Productos</th>
        </tr>
    @foreach ($supplierList as $supplier)
        <tr>
            <td>
                <ul class="sinpuntos">
                    <li><b>{{$supplier->name}}</b></li>
                    <li>{{$supplier->address}}</li>
                    <li>{{$supplier->city}}, {{$supplier->country}}</li>
                </ul>
            </td>
            <td>
                <ul class="sinpuntos">
                    <li><b>{{$supplier->contact->name}} {{$supplier->contact->surname}}</b></li>
                    <li>{{$supplier->contact->email}}</li>
                    <li>{{$supplier->contact->phone_number}}</li>
                </ul>
            </td>
            <td>
                <ul>
                    @foreach($supplier->products as $product)
                        <li>{{$product->name}}</li>
                    @endforeach
                </ul>
            </td>
        </tr>
    @endforeach
    </table>

    <br><br>
    <form action = "{{route('menu')}}" method="GET" class="centrado">
        @csrf
        <input type="submit" value="MENÚ PRINCIPAL">
    </form>
@endsection