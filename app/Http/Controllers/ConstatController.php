<?php

namespace App\Http\Controllers;

use App\Dommage;
use App\Remorque;
use App\voyage;

use Illuminate\Http\Request;
use PDF;
 

class ConstatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($remorque_id)
    {
        $remorque=Remorque::where('id_remorque',$remorque_id)->first();
        $dommages_phase_1= Dommage::where('idRemorque',$remorque['id_remorque'])->where('etat','phase1')->get();
        $dommages_phase_2= Dommage::where('idRemorque',$remorque['id_remorque'])->where('etat','phase2')->get();
      
       // $liste_dommages= Dommage::where('idRemorque',$remorque['id_remorque'])->orderBy('id_dommage', 'asc')->get();
        
       $liste_dommages=array();
           
        $flag=true;
       

       while (count($dommages_phase_1) || count($dommages_phase_2))
        {       
            if (   $flag && count($dommages_phase_1))
               
                {
                        array_push($liste_dommages,$dommages_phase_1->shift());
                        $flag=!$flag;
               }
            else  if( !$flag && !count($dommages_phase_2))
            {
                 array_push($liste_dommages,$dommages_phase_2->shift());
                $flag=!$flag;
            }
                
        ;} 
       
       $voyage=voyage::where('idVoyage',$remorque['voyage_id'])->first();
        
        $data=compact('liste_dommages','voyage','remorque');
        
        $pdf = PDF::loadView('Pdf.PdfTemplate',compact('data')) ;
        return $pdf->stream(); 
    }

    public function download($remorque_id)
    {

         $remorque=Remorque::where('id_remorque',$remorque_id)->first();
         $dommages_phase_1= Dommage::where('idRemorque',$remorque['id_remorque'])->where('etat','phase1')->get();
         $dommages_phase_2= Dommage::where('idRemorque',$remorque['id_remorque'])->where('etat','phase2')->get();
       
        // $liste_dommages= Dommage::where('idRemorque',$remorque['id_remorque'])->orderBy('id_dommage', 'asc')->get();
         
        $liste_dommages=array();
            
         $flag=true;
        
 
        while (count($dommages_phase_1) || count($dommages_phase_2))
         {       
             if (   $flag && count($dommages_phase_1))
                
                 {
                         array_push($liste_dommages,$dommages_phase_1->shift());
                         $flag=!$flag;
                }
             else  if( !$flag && !count($dommages_phase_2))
             {
                  array_push($liste_dommages,$dommages_phase_2->shift());
                 $flag=!$flag;
             }
                 
         ;} 
        
 
      
 
         $voyage=voyage::where('idVoyage',$remorque['voyage_id'])->first();
        
            $data=compact('liste_dommages','voyage','remorque');

        $pdf = PDF::loadView('Pdf.PdfTemplate',compact('data')) ;
         return $pdf->download($data['voyage']['created_at']->format('d/m/yy').".pdf");  
          
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
