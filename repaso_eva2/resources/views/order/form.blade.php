@extends('master')

@section('title', 'Pedidos por empleado')

@section('header', 'Pedidos por empleado')

@section('main_title', 'Solicitar productos')

@section('content')
    <form action="{{ route('order.resume') }}" method="GET">
    @csrf
    <br>
    <table class='sinbordes'>
        <tr>
            <td class='sinbordes'>Empleado solicitante:</td>
            <td class='sinbordes'>
                <select name="employee_id">
                    @foreach($employees as $employee)
                        <option value="{{ $employee->id }}">{{ $employee->name }} {{ $employee->surname }}</option>
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td class='sinbordes superior'>Producto solicitado:</td>
            <td class='sinbordes'>
                @foreach($products as $product)
                    <input type="radio" name="product" value="{{ $product->id }}"
                    @if($product->id == 1)
                        checked
                    @endif
                    >{{ $product->name }}</radio><br>
                @endforeach
            </td>
        </tr>
        <tr>
            <td class='sinbordes'>Cantidad a comprar:</td>
            <td class='sinbordes'>
                <input type="number" name="cantidad" min="0" required>
                <input type="submit" value="Realizar pedido">
            </td>
        </tr>
    </table>
    </form>

    <br><br>
    <form action = "{{route('menu')}}" method="GET" class="centrado">
        @csrf
        <input type="submit" value="MENÚ PRINCIPAL">
    </form>
@endsection