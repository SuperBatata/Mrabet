<?php

namespace App\Http\Controllers;

use App\Remorque;
use Illuminate\Http\Request;
use \App\voyage;
use \App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class TacheController extends Controller
{
    public function index(){
        $us =Auth::user()->name_id;
        $phase1 = voyage::where('responsablePhase1', $us) ->where('etat', 'phase1',)->get();
        $phase2 = voyage::where('responsablePhase2', $us)->where('etat', 'phase2',)->get();
    if (request()->ajax())
    {
        return DataTables::of($phase1)
        ->addColumn('Action',function($row)
        {
            $btn =   '<a href="'.action('TacheController@fairePhase2',$row->idVoyage).'"
            class="btn btn-success btn btn-primary a-btn-slide-text"><span
                class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
            <span><strong>View</strong></span></a>';
            return $btn;
        })
        ->rawColumns(['Action'])
        ->make(true);
    }

        return view('users.tache',compact('phase1','phase2'));
    }

    public function datatable_phase2()
    {   $us =Auth::user()->name_id;
        $phase2 = voyage::where('responsablePhase2', $us)->where('etat', 'phase2',)->get();
        if (request()->ajax())
        {
            return DataTables::of($phase2)
            ->addColumn('Action',function($row)
            {
                $btn =   '<a href="'.action('TacheController@fairePhase2',$row->idVoyage).'"
                class="btn btn-success btn btn-primary a-btn-slide-text"><span
                    class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                <span><strong>View</strong></span></a>';
                return $btn;
            })
            ->rawColumns(['Action'])
            ->make(true);
                 
        }

    
    }



    public function fairePhase1($idVoyage){
        return  view('users.cRemorque',compact('idVoyage'));
    }
    public function fairePhase2($idVoyage){
        $find =\App\voyage::find($idVoyage);
        $etat = $find->etat;
        $Remorque = \App\Remorque::where('voyage_id',$idVoyage)->get();
        return  view('users.listeRemorques',compact('idVoyage','Remorque','etat'));
    }






}
