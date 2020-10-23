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
        'responsablePhase1',
        'responsablePhase2',
        'etat',

         ];
}
