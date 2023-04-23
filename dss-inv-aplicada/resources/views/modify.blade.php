@extends("layouts.layout")


@section('head')
<link rel="stylesheet" href="{{ asset('css/create-style.css') }}">
@endsection

@section("content")

<form action="{{route('cliente.update', ['id' => $cliente->id])}}" method="POST">
    @csrf
    @method('PATCH')
    <h1>Modificando a {{ $cliente->Nombres . " " . $cliente->Apellidos }}</h1>
    <div>
        <label for="Nombres">Nombres:</label>
        <input type="text" name="Nombres" value="{{ $cliente->Nombres }}" required>
    </div>

    <div>
        <label for="Apellidos">Apellidos:</label>
        <input type="text" name="Apellidos" value="{{ $cliente->Apellidos }}" required>
    </div>

    <div>
        <label for="Edad">Edad:</label>
        <input type="number" name="Edad" min="1" max="99" value="{{ $cliente->Edad }}" required>
    </div>

    <div>
        <label for="Salario">Salario:</label>
        <input type="number" step = "0.01" name="Salario" value="{{ $cliente->Salario }}" required>
    </div>


    <div>
        <input type="submit" value="Guardar" class="btn">
    </div>
</form>
@endsection
