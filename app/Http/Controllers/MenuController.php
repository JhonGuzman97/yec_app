<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(Request $request){
        $employee = Employee::all()->where('document',$request->document);
        if(count($employee)>0){
            //return($usuario);
            return  view('menu.index',compact('employee'));
        }else{
            return redirect()->route('welcome');;
        }
    }
}
