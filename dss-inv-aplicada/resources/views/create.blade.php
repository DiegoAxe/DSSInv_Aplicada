@extends("layouts.layout")

@section('head')
    <link rel="stylesheet" href="{{ asset('css/create-style.css') }}">
@endsection


@section("content")

<form action="{{route('cliente.store')}}" method="POST">
    @csrf
    <h1>Ingresando Nuevo Cliente</h1>
    <div>
        <label for="Nombres">Nombres:</label>
        <input type="text" name="Nombres" id="Nombres" placeholder="Ej. Carlos Alexander" required>
    </div>

    <div>
        <label for="Apellidos">Apellidos:</label>
        <input type="text" name="Apellidos" placeholder="Ej. Ramirez Alvarado" required>
    </div>

    <div>
        <label for="Edad">Edad:</label>
        <input type="number" name="Edad" min="1" max="99" placeholder="Ej. 22" required>
    </div>

    <div>
        <label for="Salario">Salario:</label>
        <input type="number" step = "0.01" name="Salario" placeholder="Ej. 400" required>    
    </div>


    <div>
        <input type="submit" value="Guardar" class="btn">
    </div>
</form>
@endsection