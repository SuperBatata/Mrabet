<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Remorque extends Model
{
    protected $primaryKey = 'id_remorque';
    protected $fillable = [
        'identification',
        'plomb',
        'chargeur',
        'type' ,
        'SCELLE',
        'vue1',
        'vue2',
        'vue3',
        'vue4',

         ];
}
