<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dommage extends Model
{
    protected $primaryKey = 'id_dommage';
    protected $fillable = [
        'id_dommage',
        'Plomb',
        'phase',
        'indentification',
        'type',
        'DommageName',
        'Position',
        'Anciennete',
        'Dommage',
        'Detail',
        'Unite',
        'Longeur',
        'Largeur',

         ];

         public function remorque()
         {
             return $this->belongsTo('App\Remorque','idRemorque','id_remorque');
         }
}
