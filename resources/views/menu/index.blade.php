@extends('layouts.template')
@section('title','Home')

@section('content')
    <header class="container text-center"> 
        
        <h1 class="text-white"><img src="img/logo.png" class="img-fluid" width="70rem" alt=""> Hesego Ingenieria</h1>
        <p class="text-white">Me <b class="importante">Cuido</b> por <b class="importante">Convicción</b> </p>
        <hr class="new1">
    </header>
    @foreach($employee as $emp)
        @if($emp->rol == 1)

        

        <div class="container">
            <div class="col-12 alert alert-secondary"> 
            <img src="../public/img/logo_yo_reporto.png" class="logo" alt=""> 
            <a href="{{route('yoreporto.index')}}" class="titulo">Yo Reporto</a>
        </div>
        <div class="col-12 alert alert-secondary"> 
            <img src="../public/img/goodfather_logo.png" class="logo" alt=""> 
            <a href="{{route('goodfather.index')}}" class="titulo">Plan Padrino</a>
        </div>
        </div>

        @else
        <div class="container">
            <div class="col-12 alert alert-secondary"> 
            <img src="../public/img/logo_yo_reporto.png" class="logo" alt=""> 
            <a href="{{route('yoreporto.index')}}" class="titulo">Yo Reporto</a>
        </div>
        </div>

        @endif
    @endforeach
@endsection