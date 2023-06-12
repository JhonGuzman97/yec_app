<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Report;
use Illuminate\Http\Request;

class YoReportoController extends Controller
{
    public function index(){
        
        $employees = Employee::all();
        
        return view('yoreporto.index',compact('employees'));
    }
    public function store(Request $request){
        $reporte = new Report();
        $id = date("ymdhms")+substr($request ->documento, -4) ;

        if($request->hasFile('file')){
            $file = $request->file('file');
            $destinationPath = 'img/feature/';
            $filename = time() . "-" . $file->getClientOriginalName();
            $uploadsucces =  $request->file('file')->move($destinationPath,$filename);
            $reporte->img = $destinationPath . $filename;

        }
        $reporte->code = $id;
        $reporte->documento = $request->documento;
        $reporte->sede = $request->sede;
        $reporte->proceso = $request->proceso;
        $reporte->tipo_reporte = $request->reporte;
        $reporte->latitud = $request->latitud;
        $reporte->longitud = $request->longitud;
        $reporte->observacion = $request->notes;

        $reporte->save();
        return redirect()->route('welcome');
    }
}
