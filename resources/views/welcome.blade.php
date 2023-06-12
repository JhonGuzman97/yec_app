@extends('layouts.template')
@section('title','Home')

@section('content')
    <header class="container text-center"> 
        
        <h1 class="text-white"><img src="img/logo.png" width="70rem" alt=""> Hesego Ingenieria</h1>
        <p class="text-white">Me <b class="importante">Cuido</b> por <b class="importante">Convicción</b> </p>
        <hr class="new1">
    </header>
    
    <div class="container">
        <div class="col-12 alert alert-info"> 
            <p class="text-center">Bienvenido a YEC</p>
            <p class="text-white">La Herramienta YEC fue diseñada para reportar novedades encontradas en los 
                diferentes procesos con los que cuenta <b class="text-info">Hesego Ingenieria</b>
            </p>
            <h3 class="text-center">Tienes Alguna Novedad?</h3>
            <p class="text-white text-center">Que esperas para reportarla</p>

        </div>
        <form action="{{Route('menu.index')}}" method="POST">
            @csrf
            <div class="col-12 mb-2">
                <label for="documento" class="control-label">Ingrese Su Numero de Documento</label>
                <input type="password" name="document" id="document" class="form-control">
            </div>
            <div class="col-12 text-center d-grid gap-2">
                <button class="btn btn-info btn-lg" type="submit">Ingresar</button>
            </div>
        </form>
    </div>
    
@endsection