@extends("layouts.layout")

@section('head')
    <link rel="stylesheet" href="{{ asset('css/index-style.css') }}">
@endsection

@section("content")

<h1><a href="{{ route('cliente.create') }}" class="btn">Ingresar Cliente</a></h1>

<table>
    <tr>
        <th>ID</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Edad</th>
        <th>Salario</th>
        <th>Acciones</th>
    </tr>
    @foreach ($clientes as $cli)
    <tr>
        <td>{{ $cli->id }}</td>
        <td>{{ $cli->Nombres }}</td>
        <td>{{ $cli->Apellidos }}</td>
        <td>{{ $cli->Edad }}</td>
        <td>${{ $cli->Salario }}</td>
        <td class="btns">
            <a href="{{ route('cliente.edit', ['id' => $cli->id]) }}">
                <button type="button" class="btn-second">Modificar</button>
            </a>
            <form action="{{ route('cliente.destroy', ['id' => $cli->id]) }}" method="POST">
                @method('DELETE')
            <button type="submit" class="btn-second">Eliminar</button>
            </form>
        </td>
    </tr>
        
    @endforeach
    
</table>

@endsection