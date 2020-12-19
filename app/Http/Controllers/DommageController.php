<?php

namespace App\Http\Controllers;

use App\Quotation;
use App\Dommage;
use App\Post;
use App\Remorque;
use App\voyage;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;
use PhpParser\Node\Stmt\Echo_;

class DommageController extends Controller
{

    public function index($id_remorque){
        $find = \App\Remorque::find($id_remorque);
        $idVoyage= $find->voyage_id;
        $voyage= voyage::find($idVoyage);
        $etat= $voyage->etat;
        $Dommages = \App\Dommage::where('idRemorque', $id_remorque)->get();
        return view('users.listDommages',compact('Dommages','etat','id_remorque','idVoyage'));
        //return view('users.listDommages',compact('Dommages','id_remorque'));
    }
  /*  public function store (Request $request ,$id_remorque){

************Route became POST and cleaned the code a bit ,check the new function store   *******************
        $this->validate( $request  ,[
        'indentification' =>'required',
        'plomb' =>'required',
        'Detail' =>'required',
        'Dommage_Name' =>'required',
        'Type' =>'required',
        'Dommage' =>'required',
        'Largeur' =>'required',
        'Unite' =>'required',
        'Anciennete' =>'required',
        'Position' =>'required',
        'Longeur' =>'required',
        ]);
        //create Post
        $find = \App\Remorque::find($id_remorque);
        $idVoyage= $find->voyage_id;
        $voyage= voyage::find($idVoyage);
        $state= $voyage->etat;
        $etat=$voyage->etat;
        $post = new Dommage();
        $post->etat= $state;
        $post->idRemorque =$id_remorque;
        $post->indentification = $request->input('indentification');
        $post->Plomb = $request->input('plomb');
        $post->DommageName = $request->input('Dommage_Name');
        $post->Type = $request->input('Type');
        $post->Anciennete = $request->input('Anciennete');
        $post->Position = $request->input('Position');
        $post->Unite = $request->input('Unite');
        $post->Longeur = $request->input('Longeur');
        $post->Largeur = $request->input('Largeur');
        $post->Dommage = $request->input('Dommage');
        $post->Detail = $request->input('Detail');
        if ($request->has('dommageImage')) {
            // Get image file

            $image = $request->file('dommageImage');
            // Make a image name based on user name and current timestamp
            $name =time().'_'. $image->getClientOriginalName();
            // Define folder path
            // $folder = '/uploads/images/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            //$filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            $filePath = public_path('dommageImage');
            // Upload image
            //$this->uploadone($image, $folder, 'public', $name);
            // Set user profile image path in database to filePath
            $request->file('dommageImage')->move($filePath, $name);
            $post->dommageImage = $filePath .'\\' . $name ;

        }

        $find = \App\Remorque::find($id_remorque);
        $idVoyage= $find->voyage_id;
        switch ($request->input('action')) {
            case 'add':

                $post->save();

                return redirect()->route('cDommagephase1', [ $id_remorque])->with("success","Remorque ajouté");
                break;
            case 'dda':

                    $post->save();

                    return redirect()->route('cDommagephase2', [ $id_remorque])->with("success","Remorque ajouté");
                    break;

            case 'submit':
                $post->save();
                return view('users.listeRemorques',compact('etat','idVoyage'))->with("success","Remorque ajouté");
                break;
        }

    }*/


    public function store(Request $request)
    {
        $this->validate( $request  ,[
            'indentification' =>'required',
            'plomb' =>'required',
            'Detail' =>'required',
            'Dommage_Name' =>'required',
            'Type' =>'required',
            'Dommage' =>'required',
            'Largeur' =>'required',
            'Unite' =>'required',
            'Anciennete' =>'required',
            'Position' =>'required',
            'Longeur' =>'required',
            ]);
            //create Post
            $remorque = \App\Remorque::find($request->input('id_remorque'));

            $dommage = new Dommage();
            $dommage->etat= $remorque->phase;
            $dommage->remorque()->associate($remorque);
            $dommage->indentification = $request->input('indentification');
            $dommage->Plomb = $request->input('plomb');
            $dommage->DommageName = $request->input('Dommage_Name');
            $dommage->Type = $request->input('Type');
            $dommage->Anciennete = $request->input('Anciennete');
            $dommage->Position = $request->input('Position');
            $dommage->Unite = $request->input('Unite');
            $dommage->Longeur = $request->input('Longeur');
            $dommage->Largeur = $request->input('Largeur');
            $dommage->Dommage = $request->input('Dommage');
            $dommage->Detail = $request->input('Detail');
            if ($request->has('dommageImage')) {
                // Get image file

                $image = $request->file('dommageImage');
                // Make a image name based on user name and current timestamp
                $name =time().'_'. $image->getClientOriginalName();
                // Define folder path
                // $folder = '/uploads/images/';
                // Make a file path where image will be stored [ folder path + file name + file extension]
                //$filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
                $filePath = public_path('dommageImage');
                // Upload image
                //$this->uploadone($image, $folder, 'public', $name);
                // Set user profile image path in database to filePath
                $request->file('dommageImage')->move($filePath, $name);
                $dommage->dommageImage = $filePath .'\\' . $name ;

            }
            $dommage->save();

            return redirect()->route('listeDommages',[$request->input('id_remorque')])->with('success','dommage ajouté avec succès');

    }
    public function editDommage ($id_dommage)
    {
        $Dommages = Dommage::find($id_dommage);
        return  view('users.editDommages',compact('Dommages','id_dommage'));
    }

    public function updateDommage ( Request $request, $id_dommage)
    {
       $this->validate( $request  ,[
            'indentification' =>'required',
            'plomb' =>'required',
            'Detail' =>'required',
            'Dommage_Name' =>'required',
            'Type' =>'required',
            'Dommage' =>'required',
            'Largeur' => 'required',
            'Unite' =>'required',
            'Anciennete' =>'required',
            'Position' =>'required',
            'Longeur' =>'required',
            ]);

            $post = Dommage::find($id_dommage);
            $post->indentification = $request->input('indentification');
            $post->Plomb = $request->input('plomb');
            $post->DommageName = $request->input('Dommage_Name');
            $post->type = $request->input('Type');
            $post->Anciennete = $request->input('Anciennete');
            $post->Position = $request->input('Position');
            $post->Unite = $request->input('Unite');
            $post->Longeur = $request->input('Longeur');
            $post->Largeur = $request->input('Largeur');
            $post->Dommage = $request->input('Dommage');
            $post->Detail = $request->input('Detail');
            if ($request->has('dommageImage')) {
                // Get image file
                $image = $request->file('dommageImage');
                // Make a image name based on user name and current timestamp
                $name =time().'_'. $image->getClientOriginalName();
                // Define folder path
                // $folder = '/uploads/images/';
                // Make a file path where image will be stored [ folder path + file name + file extension]
                //$filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
                $filePath = public_path('dommageImage');
                // Upload image
                //$this->uploadone($image, $folder, 'public', $name);
                // Set user profile image path in database to filePath
                $request->file('dommageImage')->move($filePath, $name);
                $post->dommageImage = $filePath .'\\' . $name ;

            }
            $id_remorque=$post->idRemorque;

            $post->save();
            return redirect()->route('DList', [$id_remorque])->with("success","dommage modifié");

    }
    /*public function deleteDommage(Request $request, $id_dommage)
        *******replaced by deleteDommage ************
    {
        $post = Dommage::find($id_dommage);
        $id_remorque=$post->idRemorque;
        $post->delete();
        return redirect()->route('DList', [$id_remorque])->with("success","dommage suprimé");
    }*/
    public function validerTache ( $id_remorque)

    {
        $post = Remorque::find($id_remorque);
        $idVoyage = $post->voyage_id;
        $Remorques = Remorque::where('voyage_id',$idVoyage)->get();
        return   redirect()->route('Rlist', [$idVoyage])->with("success","contenaire valider");}

        public function postView1($id_remorque)
    {
  $Dommages= \App\Dommage::all();
  $remorque = \App\Remorque::find($id_remorque);
  $idVoyage= $remorque->voyage_id;
  $voyage= voyage::find($idVoyage);
  $phase= $voyage->etat;

  if($phase=='phase1')
    {
    return view('users.chargement',compact('remorque','id_remorque','Dommages'));
    }
    elseif ($phase=='phase2')
    {
        return view('users.dechargement',compact('remorque','id_remorque','Dommages'));
    }
  }

  public function saisieDommage($id_remorque)
  {
    $remorque = \App\Remorque::find($id_remorque);
    return view('Dommages.SaisieDommage',compact('remorque','id_remorque'));
  }

  public function deleteDommage(Request $request)
  {

    $dommage=Dommage::find($request->input('id_dommage'));
    $dommage->delete();
    return redirect()->back()->with('success','dommage supprimé avec succès');
  }


}
