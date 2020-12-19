<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class voyage extends Model
{protected $primaryKey = 'idVoyage';

    protected $fillable = [
        'nomVoyage',
        'nomBateau',
        'portDeChargement',
        'portDeDechargement',
        'etat',
        'datechargement',
        'datedechargement',

         ];

         public function Container()
         {
             return $this->hasMany('App\Container','id_voyage','idVoyage');
         }
         public function remorques()
         {
             return $this->hasMany('App\Remorque','voyage_id','idVoyage');
         }
}
