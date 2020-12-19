<?php

namespace App\Http\Controllers;

use App\Container as Container;
use App\voyage as Voyage;
use App\Remorque as Remorque;
use App\Dommage as Dommage;
use App\Chargeur;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ContainerController extends Controller
{
    public function index($idVoyage)
    {
        $chargeurs=Chargeur::all();
        return view('Container.AddForm',compact('idVoyage','chargeurs'));
    }


    public function addContainer(Request $request)
    {



            $container=new Container;

            $idVoyage = $request->input('idVoyage');
            $voyage= voyage::find($idVoyage);
            $phase= 'phase1';

            $container->phase=$phase;

    $container->height=$request->input('Height');
    $container->length=$request->input('Length');
    $container->type=$request->input('Type');
    $container->indentification = $request->input('indentification');
    $container->Plomb = $request->input('Plomb');
    $container->DommageName = $request->input('Dommage_Name');
    $container->Anciennete = $request->input('Anciennete');
    $container->Position = $request->input('Position');
    $container->Unite = $request->input('Unite');
    $container->Dommage = $request->input('Dommage');
    $container->Detail = $request->input('Detail');
    $container->id_voyage=$idVoyage;
    $container->chargeur=$request->input('Chargeur');
    $chargeur=Chargeur::where('nom_societe','=',$request->get('Chargeur'))->first();
    $container->chargeur()->associate($chargeur);


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
        $container->dommageImage = $filePath .'\\' . $name ;
    }
    $container->save();

       return redirect()->route('Rlist', [$idVoyage])->with("success","container ajouté");
    }
    public function containerList($idVoyage)
    {

        $find =voyage::find($idVoyage);
        $etat = $find->etat;
        $Container = Container::where('id_voyage',$idVoyage)->get();
        if (request()->ajax())
        {

            return DataTables::of($Container,$etat)
            ->addColumn('Edit',function($row)
            {
                $btn='<a href="'.action('ContainerController@editContainer',$row->id_container).'" class="btn btn-primary a-btn-slide-text"><span
                class="glyphicon glyphicon-edit" aria-hidden="true"></span>
            <span><strong>Edit</strong></span>';
            return $btn;
        })
            ->addColumn('Delete',function($row)
            {
                $btn='<a href="'.action('ContainerController@deleteContainer',$row->id_container).'"
                class="bg-danger btn btn-primary a-btn-slide-text"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                <span><strong>Delete</strong></span> ';
                return $btn;
            })
            ->addColumn('Preview_Constat',function($row)
            {
                $btn='<td><a href="'.action('ConstatController@show',$row->id_container).'" target="_blank"" >Click to preview  pdf </a>';
                return $btn;
            })
            ->addColumn('Download_Constat',function($row)
            {
                $btn='<a href="'.action('ConstatController@download',$row->id_container).'" target="_blank"" >Click to download  pdf </a>';
                return $btn;
            })
            ->addColumn('Liste_Dommages',function($row)
            {
                $btn='<a href="'.action('RemorqueController@showDamages',$row->id_container).'">Voir Dommages</a>';
                return $btn;
            })
            ->rawColumns(['Edit','Delete','Preview_Constat','Download_Constat','Liste_Dommages'])
            ->make(true);
    }
}

public function editContainer($id_container)
{

    $container=Container::find($id_container);
    $chargeurs=Chargeur::all()->pluck('nom_societe','nom_societe');
    return view('Container.EditContainerForm')->with('container',$container)
    ->with('chargeurs',$chargeurs);


}
public function deleteContainer($id_container)
{
    $container=Container::find($id_container);
    $id_voyage=$container->id_voyage;
    $container->delete();
    return redirect()->route('Rlist',$id_voyage)->with('success','container supprimé avec succès');


}
public function updateContainer (Request $request)
{

     $request->validate ([
        'indentification' => 'required',
        'Height' =>'required',
        'Length'=>'required',
        'Type'=>'required',
        'Plomb'=>'required',
        'Dommage_Name'=>'required',
        'Anciennete'=>'required',
        'Position'=>'required',
        'Unite'=>'required',
        'Dommage'=>'required',
        'Detail'=>'required',
        'Chargeur'=>'required',
    ]);

    $container=Container::find($request->input('id_container'));
    $container->height=$request->input('Height');
    $container->length=$request->input('Length');
    $container->type=$request->input('Type');
    $container->indentification = $request->input('indentification');
    $container->Plomb = $request->input('Plomb');
    $container->DommageName = $request->input('Dommage_Name');
    $container->Anciennete = $request->input('Anciennete');
    $container->Position = $request->input('Position');
    $container->Unite = $request->input('Unite');
    $container->Dommage = $request->input('Dommage');
    $container->Detail = $request->input('Detail');
    $container->chargeur=$request->input('Chargeur');
    $chargeur=Chargeur::where('nom_societe','=',$request->get('Chargeur'))->first();
    $container->chargeur()->associate($chargeur);
    $container->save();

    return redirect(route('Rlist',[$container->id_voyage]));


}


}
