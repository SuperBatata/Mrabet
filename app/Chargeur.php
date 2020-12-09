<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chargeur extends Model
{

    protected $primaryKey='chargeur_id';
    protected $fillable =['nom_societe'];

    public function user ()
    {
        return $this->morphOne('App\User','profile');
    }

    public function remorques()
    {
        return $this->hasMany('App\Remorque','chargeur_id','chargeur_id');
    }
    public function containers()
    {
        return $this->hasMany('App\Container','chargeur_id','chargeur_id');
    }


    public function dissociateAll()
    {
        //setting the foreing key of evey associated remorque to null
        foreach ($this->remorques as $remorque)
        {
            $remorque->chargeur()->dissociate($this);
            $remorque->save();
        }

        foreach ($this->containers as $container)
        {
            $container->chargeur()->dissociate($this);
            $container->save();
        }

    }




}
