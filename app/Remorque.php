<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Remorque extends Model
{
    protected $primaryKey = 'id_remorque';

    protected $fillable = [
        'identification',
        'plomb',
        'type' ,
        'SCELLE',
        'vue1',
        'vue2',
        'vue3',
        'vue4',
        'chargeur_id',
         ];

         public function chargeur()
         {
            return  $this->belongsTo('App\Chargeur','chargeur_id','chargeur_id');
         }
         public function dommages()
         {
             return $this->hasMany('App\Dommage','idRemorque','id_remorque');
         }
         public function voyage()
         {
             return $this->belongsTo('App\voyage','voyage_id','idVoyage');
         }



}
