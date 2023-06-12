<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Format;
use App\Models\Goodfather;
use Illuminate\Http\Request;

class GoodfatherController extends Controller
{
    public function index() {
        $employees = Employee::all()->where('rol',1);
        $format = Format::all();
        return view('goodfather.index',compact(['employees','format']));
    }

    public function store(Request $request){
        $i=0;     
        foreach($request->format as $format){
            $inspeccion = new Goodfather();
            $inspeccion->code=date("ymdhms")+substr($request ->goodfather, -4).$i;
            $inspeccion->goodfather = $request ->goodfather;
            $inspeccion->format = $format;
            $inspeccion->result = $request ->result;
            $inspeccion->note = $request ->notes;
            if(!$inspeccion->save()){
                return $inspeccion->getErrors();
            }  
            $i++;
        }
        return redirect()->route('welcome');
    }
}
