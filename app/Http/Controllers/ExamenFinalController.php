<?php

namespace App\Http\Controllers;
use App\Models\ExamenFinal;
use Illuminate\Http\Request;

class ExamenFinalController extends Controller
{
    public function index()
    {
        $datos = ExamenFinal::orderBy('id_transportistas', 'asc')->paginate(6);
        // $datos = DB::table('transportistas')->paginate(10);
        //$datos=Transportista::all();
        return view('layouts.home',compact('datos', $datos));

    }

    public function create(){

    }
    public function store (Request  $request){


    }

    public function Show(){

    }

    public function edit ($id_transportistas){

    }

    public function update (Request $request, $id_transportistas)
    {
    }
    public function delete($id_transportistas)
    {



        }

}
