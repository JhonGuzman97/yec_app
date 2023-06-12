@extends('layouts.template')
@section('title','GodFather')

@section('content')
    
    
    <header class="text-white text-center">
        <h1><img src="img/goodfather_logo.png" width="70rem" alt="">Plan Padrino</h1>
        <hr class="new1">
    </header>

    <div class="text-white container">
        <form action="{{Route('goodfather.store')}}" method="POST" class="mb-3">
            @csrf
            <div class="col-12 mb-3">
                <label for="goodfather" class="control-label">Numero de Cedula Padrino</label>
                <select name="goodfather"  id="goodfather" class="form-control" >
                    <option value="">Seleccione un Formato...</option>
                    @foreach ($employees as $employee)
                        <option value="{{$employee->id}}" >{{$employee->name}}</option>   
                    @endforeach
                </select>
            </div>
            <div class="col-12 mb-3">
                <label for="format" class="control-label">Formato Revisado</label>
                <select name="format[]"  id="format" class="form-control" multiple="multiple">
                    <option value="">Seleccione un Formato...</option>
                    @foreach ($format as $item)
                        <option value="{{$item->id}}" >{{$item->name}}</option>   
                    @endforeach
                </select>
            </div>
            <div class="col-12 mb-3 text-center">
                <h4 class="text-center mb-3">Califica A Tus Ahijados</h4>
                <div class="form-check form-check-inline">
                    <label for="result" class="form-check-label"><i class="fa-regular fa-face-smile text-success icono-calificacion "></i></label>
                    <input type="radio" name="result" id="result" value="1" class="form-check-input m-2">
                </div>
                <div class="form-check form-check-inline">
                    <label for="result" class="form-check-label"><i class="fa-regular fa-face-meh text-warning icono-calificacion "></i></label>
                    <input type="radio" name="result" id="result" value="2" class="form-check-input m-2">
                </div>
                <div class="form-check form-check-inline">
                    <label for="result" class="form-check-label"><i class="fa-regular fa-face-sad-tear text-danger   icono-calificacion "></i></label>
                    <input type="radio" name="result" id="result" value="3" class="form-check-input m-2">
                </div>
            </div>
            <div class="col-12 mb-2">
                <label for="notes" class="control-label">Observaciones</label>
                <textarea name="notes" id="notes" class="form-control" cols="30" rows="3"></textarea>
            </div>
            <div class="col-12 text-center d-grid gap-2">
                <button class="btn btn-info btn-lg" type="submit">Enviar</button>
                <a href="{{route('menu.index')}}" class="btn btn-secondary btn-lg">Regresar</a>
            </div>
        </form>
        <div class="col-12 ">
            <div class="alert alert-info text-center text-white" role="alert">
                En <b class="text-info">HESEGO INGENIERIA</b> reportamos por <b class="text-info">CONVICCIÓN</b>
            </div>
        </div>
    </div>

    <script> 
        $(document).ready(function() {
            $('#format').select2();
            $('#goodfather').select2();
        });
    </script>
    

@endsection