<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Container extends Model
{
  protected  $primaryKey='id_container';

  protected  $fillable=[
        'type',
        'height',
        'length',
        'Plomb',
        'phase',
        'indentification',
        'DommageName',
        'Position',
        'Anciennete',
        'Dommage',
        'Detail',
        'Unite',
        'chargeur',
  ];

  public function voyage()
  {
     return  $this->belongsTo('App\voyage','idVoyage','id_voyage');
  }
  public function dommages ()
  {
      return $this->hasMany('App\Dommage','id_container','id_container');
  }

  public function chargeur()
  {
      return $this->belongsTo('App\Chargeur','chargeur_id','chargeur_id');
  }

}
