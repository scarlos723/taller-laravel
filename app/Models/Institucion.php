<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    use SoftDeletes;

    protected $table='institucion';
    protected $fillable=[ // campos para asignacion masiva
      'nombre',

    ];

    protected $guarded= [ // campos para proteger
      'codigo',
      'cuenta_bancaria',
    ];

    public function rector(){
      return $this->hasOne(RectorModel::class,'institucion_id');
    }

    public function docentes(){
      return $this->hasMany(DocenteModel::class,'institucion_id');
    }
}
