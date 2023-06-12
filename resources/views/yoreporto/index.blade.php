@extends('layouts.template')
@section('title','Yo Reporto')

@section('content')
    <header class="text-white text-center">
        <h1><img src="img/logo_yo_reporto.png" width="70rem" height="100px" alt=""> Yo Reporto</h1>
        <hr class="new1">
    </header>

    <div class="text-white container">
        <form action="{{Route('yoreporto.store')}}" method="POST" class="mb-3" enctype="multipart/form-data">
            @csrf
            <div class="col-12 mb-3">
                <label for="documento" class="control-label">Numero de Cedula</label>
                <select name="documento"  id="documento" class="form-control" >
                    <option value="">Seleccione un Formato...</option>
                    @foreach ($employees as $employee)
                        <option value="{{$employee->id}}" >{{$employee->name}}</option>   
                    @endforeach
                </select>
            </div>
            <div class="col-12 mb-3">
                <label for="sede" class="control-label">Sede</label>
                <select name="sede" id="sede" class="form-control">
                    <option value="" hidden>Seleccione</option>
                    <option value="1">Jamundi</option>
                    <option value="2">Palmira</option>
                    <option value="3">Buga</option>
                    <option value="4">Tulua</option>
                    <option value="5">Zarzal</option>
                    <option value="6">Guamo</option>
                    <option value="7">Chaparral</option>
                </select>
            </div>
            <div class="col-12 mb-3">
                <label for="proceso" class="control-label">Proceso</label>
                <select name="proceso" id="proceso" class="form-control">
                    <option value="" hidden>Seleccione</option>
                    <option value="1">MTTO</option>
                    <option value="2">OYMM</option>
                    <option value="3">LYR</option>
                    <option value="4">OBRAS</option>
                    <option value="5">SILVICULTURA</option>
                    <option value="6">ARBORICULTURA</option>
                </select>
            </div>
            <div class="col-12 mb-3">
                <label for="reporte" class="control-label">Tipo de Reporte</label>
                <select name="reporte" id="reporte" class="form-control">
                    <option value="" hidden>Seleccione</option>
                    <option value="1">Condicion Insegura</option>
                    <option value="2">Acto Inseguro</option>
                    <option value="3">Incidente</option>
                    <option value="4">Hallazgo Relevante</option>
                </select>
            </div>
            <div class="col-12 mb-2">
                <label for="file" class="control-label">Foto</label>
                <input type="file" name="file" id="file" class="form-control" accept="image/*">
            </div>
            <div class="col-12 ">
                <div class="alert alert-info text-center text-white" role="alert">
                   Se Tomaran las coordenadas del dispositivo para reportar la ubicacion
                </div>
            </div>
            <div class="col-12 mb-3">
                <label for="documento" class="control-label">Latitud</label>
                <input type="text" name="latitud" class="form-control" id="latitud" readonly>
                <label for="documento" class="control-label">logitud</label>
                <input type="text" name="longitud" class="form-control" id="longitud" readonly>
            </div>
            <div class="col-12 mb-3">
                
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
        if ("geolocation" in navigator) {
            //check Geolocation available
            console.log("ok");
        } else {
            console.log("Geolocation not available!");
        }
        if ("geolocation" in navigator) {
            //check geolocation available
            //try to get user current location using getCurrentPosition() method
            navigator.geolocation.getCurrentPosition(function (position) {
                console.log(
                    "Found your location nLat : " +
                        position.coords.latitude +
                        " nLang :" +
                        position.coords.longitude
                );
            });
        } else {
            console.log("Browser doesn't support geolocation!");
        }
//user clicks button
        function cordenada() {
            if ("geolocation" in navigator) {
                //check geolocation available
                //try to get user current location using getCurrentPosition() method
                navigator.geolocation.getCurrentPosition(function (position) {
                    $("#latitud").val(position.coords.latitude);
                    $("#longitud").val(position.coords.longitude);
                });
            } else {
                console.log("Browser doesn't support geolocation!");
            }
        }
        cordenada();
        $(document).ready(function() {
            $('#documento').select2();

        });
    </script>
@endsection