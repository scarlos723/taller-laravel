<?php

namespace App\Services;
use App\Models\Institucion as Inst;
use App\Http\Controllers\Controller; 

class InstitucionService extends Controller
{
    public function listarInstitucion():Inst{

        $institucion = Inst::with(['docentes','rector'])->all();
        //$institucion = Inst::get()->all();

        return $institucion;
    }

    public function registrarInstitucion($data):Inst{

        $institucion = Inst::make([   //funcion de asignacion masiva
            'nombre'=>$data['nombre'],
            //'codigo'=>$data['codigo'],
        ]);
    
        //$institucion = Inst::make([$data]); //si sabemos que en la data los nombres coinciden con los de la BD

        $institucion->codigo = $data['codigo']; //como el codigo no es un valor de asignacion masiva debe ser declarado asi

        $institucion->save();
        return $institucion;
    }

    public function actualizarInstitucion($data):Inst{

        $institucion = Inst::findOrFail($id);
    
        //$institucion = Inst::make([$data]); //si sabemos que en la data los nombres coinciden con los de la BD

        $institucion->codigo = $data['codigo']; //como el codigo no es un valor de asignacion masiva debe ser declarado asi

        $institucion->save();
        return $institucion;
    }

   
}