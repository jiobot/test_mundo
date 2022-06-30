<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bodega;

class BodegaController extends Controller
{


    //retornamos todos los datos guardados en la tabla bodegas
    public function index(){

        return Bodega::paginate();
    }


    public function show($id){

        return Bodega::find($id);
    }


    public function create(Request $request){

        $bodega = new Bodega();
        $bodega->nombre = $request->input('nombre');
        $bodega->marca = $request->input('marca');
        $bodega->modelo = $request->input('modelo');
        $bodega->save();

        return json_encode(['msg'=>'agregado']);

    }


    public function destroy($id){

        Bodega::destroy($id);
        return json_encode(['msj'=>'removido']);
    }


    public function edit(Request $request, $id){

        $nombre = $request->input('nombre');
        $marca = $request->input('marca');
        $modelo = $request->input('modelo');

        Bodega::where('id', $id)->update(
            ['nombre'=>$nombre,
             'marca'=>$marca,
             'modelo'=>$modelo]
        );

        return json_encode(['msg'=>'editado']);
    }
}
