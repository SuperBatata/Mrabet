<?php

namespace App\Http\Controllers;

use App\Remorque;
use App\voyage;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class remorqueController extends Controller
{    public function cRemorqueview($idVoyage)
    {
        return view('users.cRemorque', compact('idVoyage'));
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
                $btn='<td><a href="'.action('ConstatController@show',$row->id_remorque).'" target="_blank"" >Click to preview  pdf </a>';
                return $btn;
            })
            ->addColumn('Download_Constat',function($row)
            {
                $btn='<a href="'.action('ConstatController@download',$row->id_remorque).'" target="_blank"" >Click to download  pdf </a>';
                return $btn;
            })
            ->rawColumns(['Edit','Delete','Preview_Constat','Download_Constat'])
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
        $post->voyage_id =$idVoyage;
        $post->phase = $state;
        $post->identification = $request->get('identification');
        $post->plomb = $request->input('plomb');
        $post->chargeur = $request->input('chargeur');
        $post->type = $request->input('type');
        $post->SCELLE= $request->input('SCELLE');
        switch ($request->input('action')) {
            case 'createDommage':
                $id_remorque = $post->id_remorque;
                $post->save();
                return redirect()->route('cDommagephase1', [ $post->id_remorque])->with("success","Remorque ajouté");
                break;

            case 'constat':
                $post->save();
                return redirect()->route('addRemorque', [$idVoyage])->with("success","Remorque ajouté");
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
        $post->delete();
        return   redirect()->route('Rlist', [$idVoyage])->with("success","dommage suprimé");
   // return view('users.listeRemorques',compact('Remorques','etat','idVoyage'))->with("success","remorque suprimé");
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
        $Remorques = Remorque::find($id_remorque);

        return  view('users.editRemorque',compact('Remorques','id_remorque'));
    }
    public function validertache ($idVoyage)
    {
        $voyage = voyage::find($idVoyage);
        if ($voyage->etat == 'phase1'){
            $voyage->etat = 'phase2';
            $voyage->save();
        }
        
        else{
            $voyage->etat = 'terminé'; 
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
            $post->chargeur = $request->input('chargeur');
            $post->type = $request->input('type');
            $post->SCELLE= $request->input('SCELLE');
            $idVoyage =$post->voyage_id ;

            switch ($request->input('action')) {
                case 'createDommage':
                    $id_remorque = $post->id_remorque;
                    $post->save();
                    return redirect()->route('cDommagephase1', [ $post->id_remorque])->with("success","Remorque modifier");
                    break;
    
                case 'constat':
                    $post->save();
                    return redirect()->route('Rlist', [$idVoyage])->with("success","Remorque ajouté");
                    break;
            }
        
    }	
		
}
