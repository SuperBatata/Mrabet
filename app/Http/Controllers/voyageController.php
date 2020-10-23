<?php

namespace App\Http\Controllers;

use App\User;
use App\voyage;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\DB;


class voyageController extends Controller
{
    public function index(Request $request){

        if ($request->ajax())
        {

            $voyages =voyage::all();
            return DataTables::of($voyages)
            ->addColumn('Edit',function($row)
            {  $btn='<a href="edit/'.$row->idVoyage.'"><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil">Edit</span></button></p></a>';
                return $btn; })
            ->addColumn('Delete',function($row)
            {   $btn ='<a href="delete/'.$row->idVoyage.'" ><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash">Delete</span></button></p></a>';
                return $btn;})
                ->rawColumns(['Edit','Delete'])
            ->make(true);

        }


        return view('admin.Voyage.listVoyage');
    }



    public function add (Request $request){

    $this->validate( $request  ,[
    'nomVoyage' => 'required',
    'nomBateau' =>'required',
    'portDeChargement' =>'required',
    'portDeDechargement' =>'required',
    'responsablePhase1' =>'required',
    'responsablePhase2' =>'required',
    ]);
    //create Post
    $post = new voyage();
    $post->nomVoyage = $request->get('nomVoyage');
    $post->nomBateau = $request->input('nomBateau');
    $post->portDeChargement = $request->input('portDeChargement');
    $post->portDeDechargement = $request->input('portDeDechargement');
    $post->responsablePhase1 = $request->input('responsablePhase1');
    $post->responsablePhase2 = $request->input('responsablePhase2');
    $post->etat = 'phase1';
    $post->save();
       return redirect('cVoyage')->with("success","voyage ajouté");
}
    public function showVoyageForm()
    {
        $countries_iso= DB::select('select * from countries_iso  order By Country ASC ');
        return view('admin.Voyage.ajoutvoyage')->with(['countries_iso'=>$countries_iso]);
    }
    public function edit ($idVoyage)
    {
        $countries_iso= DB::select('select * from countries_iso  order By Country ASC ');
        $voyage = voyage::find($idVoyage);
        return  view('admin.Voyage.editvoyage',compact('voyage','idVoyage','countries_iso'));
    }

    public function update ( Request $request, $idVoyage)
    {
        $this->validate( $request  ,[
            'nomVoyage' => 'required',
            'nomBateau' =>'required',
            'portDeChargement' =>'required',
            'portDeDechargement' =>'required',
            'responsablePhase1' =>'required',
            'responsablePhase2' =>'required',
            ]);
            //create Post
            $post = voyage::find($idVoyage);
            $post->nomVoyage = $request->get('nomVoyage');
            $post->nomBateau = $request->input('nomBateau');
            $post->portDeChargement = $request->input('portDeChargement');
            $post->portDeDechargement = $request->input('portDeDechargement');
            $post->responsablePhase1 = $request->input('responsablePhase1');
            $post->responsablePhase2 = $request->input('responsablePhase2');

            $post->save();
            return redirect('cVoyageList')->with("success","voyage modifié");

    }
    public function Delete(Request $request, $idVoyage)

    {
        $post = voyage::find($idVoyage);
        $post->delete();
        return redirect('cVoyageList')->with("success","voyage suprimé");
    }





}
