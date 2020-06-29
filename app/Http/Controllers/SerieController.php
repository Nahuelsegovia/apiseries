<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class SerieController extends Controller
{
    public function crearSerie(Request $request){
        $serie = new App\Serie;
        $serie->titulo_serie = $request->tituloSerie;
        $serie->descripcion_serie = $request->descripcionSerie;
        $serie->donde_ver_serie = $request->dondeVerSerie;
        $serie->imagen_serie = $request->imagenSerie;
        $serie->cancion_serie = $request->cancionSerie;
        $serie->save();
        return $serie;
    }

    public function eliminarSerie(Request $id){
        $serie = App\Serie::find($id);
        $serie->delete();
        return '{{$serie}} se eliminó correctamente';
    }

    public function editarSerie(Request $request, $id){
        $serie = App\Serie::find($id);
        $serie->titulo_serie = $request->tituloSerie;
        $serie->descripcion_serie = $request->descripcionSerie;
        $serie->donde_ver_serie = $request->dondeVerSerie;
        $serie->imagen_serie = $request->imagenSerie;
        $serie->cancion_serie = $request->cancionSerie;
        $serie->save();

    }

    public function verSerie($id){
        $serie = App\Serie::find($id);
        return $serie;
    }

    public function verSeries(){
        $serie = App\Serie::limit(1)->inRandomOrder()->get();
        return $serie;
    }

}