<?php

namespace App\Http\Controllers;

use App\Chargeur;
use App\Container;
use App\Remorque;
use App\voyage;
use FFI\CData;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class remorqueController extends Controller
{    public function cRemorqueview($idVoyage)
    {
        $chargeurs=Chargeur::all();
        return view('users.cRemorque', compact('idVoyage','chargeurs'));
    }


    public function viewlist($idVoyage){

        $find =voyage::find($idVoyage);
        $etat = $find->etat;

        $Remorques = Remorque::where('voyage_id',$idVoyage)->get();


         if (request()->ajax())
        {

            return DataTables::of($Remorques,$etat)
            ->addColumn('Edit',function($row)
            {
                $btn='<a href="'.action('remorqueController@editRemorque',$row->id_remorque).'" class="btn btn-primary a-btn-slide-text"><span
                class="glyphicon glyphicon-edit" aria-hidden="true"></span>
            <span><strong>Edit</strong></span>';
            return $btn;
        })
            ->addColumn('Delete',function($row)
            {
                $btn='<a href="'.action('remorqueController@deleteRemorque',$row->id_remorque).'"
                class="bg-danger btn btn-primary a-btn-slide-text"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                <span><strong>Delete</strong></span> ';
                return $btn;
            })
            ->addColumn('Preview_Constat',function($row)
            {
                $btn='<a href="'.action('ConstatController@show',$row->id_remorque).'" target="_blank"" >Click to preview  pdf </a>';
                return $btn;
            })
            ->addColumn('Download_Constat',function($row)
            {
                $btn='<a href="'.action('ConstatController@download',$row->id_remorque).'" target="_blank"" >Click to download  pdf </a>';
                return $btn;
            })
            ->addColumn('Liste_Dommages',function($row)
            {
                $btn='<a href="'.action('RemorqueController@showDamages',$row->id_remorque).'">Voir Dommages</a>';
                return $btn;
            })
            ->rawColumns(['Edit','Delete','Preview_Constat','Download_Constat','Liste_Dommages'])
            ->make(true);

        }



    return view('users.listeRemorques',compact('Remorques','etat','idVoyage'));
    //return view('users.listDommages',compact('Remorques','state','idVoyage'));
    }


    public function add (Request $request ,$idVoyage){
        $this->validate( $request  ,[
        'identification' => 'required',
        'plomb' =>'required',
        'chargeur' =>'required',
        'type' =>'required',
        'SCELLE' =>'required',
        ]);
        //create Post
        $post = new Remorque();

      /* for ($i=1;$i<5;$i++) {
             if ($request->has('vue'.$i)) {
                 // Get image file
                 $image = $request->file('vue'.$i);
                 // Make a image name based on user name and current timestamp
                 $name =time().'_'. $image->getClientOriginalName();
                 // Define folder path
                 // $folder = '/uploads/images/';
                 // Make a file path where image will be stored [ folder path + file name + file extension]
                 //$filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
                 $filePath = public_path('images');
                 // Upload image
                 //$this->uploadone($image, $folder, 'public', $name);
                 // Set user profile image path in database to filePath
                 $request->file('vue'.$i)->move($filePath, $name);
                 $post->vue.$i = $filePath . $name ;
             }
         }*/
    if ($request->has('vue1')) {
  // Get image file
  $image = $request->file('vue1');
  // Make a image name based on user name and current timestamp
  $name =time().'_'. $image->getClientOriginalName();
  // Define folder path
  // $folder = '/uploads/images/';
  // Make a file path where image will be stored [ folder path + file name + file extension]
  //$filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
  $filePath = public_path('images');
  // Upload image
  //$this->uploadone($image, $folder, 'public', $name);
  // Set user profile image path in database to filePath
  $request->file('vue1')->move($filePath, $name);
  $post->vue1 =$name ;


}  if ($request->has('vue2')) {
    // Get image file
    $image = $request->file('vue2');
    // Make a image name based on user name and current timestamp
    $name =time().'_'. $image->getClientOriginalName();
    // Define folder path
    // $folder = '/uploads/images/';
    // Make a file path where image will be stored [ folder path + file name + file extension]
    //$filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
    $filePath = public_path('images');
    // Upload image
    //$this->uploadone($image, $folder, 'public', $name);
    // Set user profile image path in database to filePath
    $request->file('vue2')->move($filePath, $name);
    $post->vue2 =   $name ;
}  if ($request->has('vue3')) {
    // Get image file
    $image = $request->file('vue3');
    // Make a image name based on user name and current timestamp
    $name =time().'_'. $image->getClientOriginalName();
    // Define folder path
    // $folder = '/uploads/images/';
    // Make a file path where image will be stored [ folder path + file name + file extension]
    //$filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
    $filePath = public_path('images');
    // Upload image
    //$this->uploadone($image, $folder, 'public', $name);
    // Set user profile image path in database to filePath
    $request->file('vue3')->move($filePath, $name);
    $post->vue3 = $name ;

}  if ($request->has('vue4')) {
    // Get image file
    $image = $request->file('vue4');
    // Make a image name based on user name and current timestamp
    $name =time().'_'. $image->getClientOriginalName();
    // Define folder path
    // $folder = '/uploads/images/';
    // Make a file path where image will be stored [ folder path + file name + file extension]
    //$filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
    $filePath = public_path('images');
    // Upload image
    //$this->uploadone($image, $folder, 'public', $name);
    // Set user profile image path in database to filePath
    $request->file('vue4')->move($filePath, $name);
    $post->vue4 =  $name ;
}
        $voyage= voyage::find($idVoyage);
        $state= $voyage->etat;
        $etat=$state;

        $post->chargeur=$request->get('chargeur');
        $post->voyage_id =$idVoyage;
        $post->phase = $state;
        $post->identification = $request->get('identification');
        $post->plomb = $request->input('plomb');
        $post->type = $request->input('type');
        $post->SCELLE= $request->input('SCELLE');
        switch ($request->input('action')) {
            case 'createDommage':



                $chargeur=Chargeur::where('nom_societe',"=",$request->get('nom_societe')->first());
                $post->chargeur()->associate($chargeur);
                $post->save();

             if($state=="phase1")
                return redirect()->route('cDommagephase1', [ $post->id_remorque])->with("success","Remorque ajoutée");
               else if($state=="phase2")
                return redirect()->route('cDommagephase2', [ $post->id_remorque])->with("success","Remorque ajoutée");

                break;

            case 'constat':


                $chargeur=Chargeur::where('nom_societe',$request->get('chargeur'))->first();
                $post->chargeur()->associate($chargeur);
                $post->save();
               // return view('users.listeRemorques',compact('etat','idVoyage'))->with("success","Remorque ajoutée");
                return redirect()->route('Rlist',[$idVoyage]);
            break;
        }
    }
    public function deleteRemorque ( $id_remorque)

    {
        $post = Remorque::find($id_remorque);
        $idVoyage = $post->voyage_id;
        $find =\App\voyage::find($idVoyage);
        $etat = $find->etat;
        $Remorques = Remorque::where('voyage_id',$idVoyage)->get();
        $post->dommages()->delete();
     $post->delete();
        return   redirect()->route('Rlist', [$idVoyage])->with("success","Remorque suprimée");
   }
    public function cDommagephase1 ($id_remorque){
        $remorque =Remorque::find($id_remorque);
       return view('users.chargement',compact('remorque','id_remorque'));
    }
    public function cDommagephase2 ($id_remorque){
        $remorque =Remorque::find($id_remorque);
       return view('users.dechargement',compact('remorque','id_remorque'));
    }
	    public function editRemorque ($id_remorque)
    {
        $remorque = Remorque::find($id_remorque);
        $chargeurs=Chargeur::all()->pluck('nom_societe','nom_societe');
        return  view('users.editRemorque',compact('remorque','id_remorque','chargeurs'));
    }
    public function validertache ($idVoyage)
    {
        $voyage = voyage::find($idVoyage);
        if ($voyage->etat == 'phase1'){
            $voyage->etat = 'phase2';
            $voyage->save();

            foreach($voyage->remorques as $remorque )
            {
                $remorque->phase='phase2';
                $remorque->save();
            }
        }
        else{
            $voyage->etat = 'terminé';
            $voyage->save();
        }
        return   redirect()->route('vtache')->with("success","tache validé");
    }

    public function updateRemorque ( Request $request, $id_remorque)
    {
        $this->validate( $request  ,[
            'identification' => 'required',
            'plomb' =>'required',
            'chargeur' =>'required',
            'type' =>'required',
            'SCELLE' =>'required',
            ]);
            $post = Remorque::find($id_remorque);
        if ($request->has('vue1')) {
        // Get image file
        $image = $request->file('vue1');
        // Make a image name based on user name and current timestamp
        $name =time().'_'. $image->getClientOriginalName();
        // Define folder path
        // $folder = '/uploads/images/';
        // Make a file path where image will be stored [ folder path + file name + file extension]
        //$filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
        $filePath = public_path('images');
        // Upload image
        //$this->uploadone($image, $folder, 'public', $name);
        // Set user profile image path in database to filePath
        $request->file('vue1')->move($filePath, $name);
        $post->vue1 = $filePath .'\\' . $name ;
    }  if ($request->has('vue2')) {
        // Get image file
        $image = $request->file('vue2');
        // Make a image name based on user name and current timestamp
        $name =time().'_'. $image->getClientOriginalName();
        // Define folder path
        // $folder = '/uploads/images/';
        // Make a file path where image will be stored [ folder path + file name + file extension]
        //$filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
        $filePath = public_path('images');
        // Upload image
        //$this->uploadone($image, $folder, 'public', $name);
        // Set user profile image path in database to filePath
        $request->file('vue2')->move($filePath, $name);
        $post->vue2 = $filePath .'\\' . $name ;
    }  if ($request->has('vue3')) {
        // Get image file
        $image = $request->file('vue3');
        // Make a image name based on user name and current timestamp
        $name =time().'_'. $image->getClientOriginalName();
        // Define folder path
        // $folder = '/uploads/images/';
        // Make a file path where image will be stored [ folder path + file name + file extension]
        //$filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
        $filePath = public_path('images');
        // Upload image
        //$this->uploadone($image, $folder, 'public', $name);
        // Set user profile image path in database to filePath
        $request->file('vue3')->move($filePath, $name);
        $post->vue3 = $filePath .'\\' . $name ;

    }  if ($request->has('vue4')) {
        // Get image file
        $image = $request->file('vue4');
        // Make a image name based on user name and current timestamp
        $name =time().'_'. $image->getClientOriginalName();
        // Define folder path
        // $folder = '/uploads/images/';
        // Make a file path where image will be stored [ folder path + file name + file extension]
        //$filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
        $filePath = public_path('images');
        // Upload image
        //$this->uploadone($image, $folder, 'public', $name);
        // Set user profile image path in database to filePath
        $request->file('vue4')->move($filePath, $name);
        $post->vue4 = $filePath .'\\' . $name ;
    }
            $post->identification = $request->get('identification');
            $post->plomb = $request->input('plomb');
            $post->type = $request->input('type');
            $post->SCELLE= $request->input('SCELLE');
            $idVoyage =$post->voyage_id ;
            $chargeur=Chargeur::where('nom_societe',"=",$request->input('chargeur'))->first();
            $post->chargeur()->associate($chargeur);
            $post->chargeur=$request->input('chargeur');

            switch ($request->input('action')) {
                case 'createDommage':

                    $post->save();

                    return redirect()->route('cDommagephase1', [ $post->id_remorque])->with("success","Remorque modifier");
                    break;

                case 'constat':
                    $post->save();

                    return redirect()->route('Rlist', [$idVoyage])->with("success","Remorque modifiée");
                    break;
            }

    }

    public function showDamages($id_remorque)
    {


            $dommages=Remorque::find($id_remorque)->dommages;


        if (request()->ajax())
        {

            return DataTables::of($dommages)
            ->addColumn('Delete',function($row)
            {
                if ( !($row->remorque->phase=="phase2" && $row->etat=="phase1") )
                {$btn='
                <form   action="'.action('DommageController@deleteDommage').'" method="POST"}}>
                '.csrf_field().'
                <input type="hidden" name="id_dommage" value="'.$row->id_dommage.'"/>
                <button type="Submit"  class="btn btn-lg" style="background-color:transparent;outline:none"> <i class="fa fa-trash" aria-hidden="true" style="color:crimson"></i>
                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                </form>
                  ';
                return $btn;}

            })
            ->rawColumns(['Delete'])
            ->make(true);


     }
     return  view ('Dommages.DommagesRemorque',compact('dommages','id_remorque'));
    }


}
