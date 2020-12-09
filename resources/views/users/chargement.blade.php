<!DOCTYPE html>
<html lang="en">
<head>
    <style>
      .grid-5 {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
    color: rgb(243, 64, 64);
    justify-content: center;
    }
  .grid-2 {
    display: grid;
    grid-template-columns: 1fr 1fr;
    color: rgb(243, 64, 64);
    }
  .grid-3 {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    color: rgb(255, 56, 56);
     }
  .grid-4 {
    display: grid;
    grid-template-columns:1fr 1fr 1fr 1fr;
    color: rgb(243, 64, 64);
  }
  .grid{
    display: grid;
    grid-template-columns:repeat(13, 1fr);;
    color: rgb(243, 64, 64);
  }

  div input {
      padding: 10;
  }



    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <title>Document</title>
</head>

<body style="background-color: #dcdcdc ">
    <nav class="navbar navbar-inverse" style="background-color:black">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">saissie Dommage</a>
          </div>

        </div>
      </nav>
      {{$id_remorque}}
<form id="addDommage" action="{{action('DommageController@store',$id_remorque)}}" method="POST" >
    <div class="alert alert-success d-none" id="msg_div">
        <span id="res_message">dommage enregistré</span>
   </div>
    <input name="_token" type="hidden" value="pV1vWWdUqFDfYsBjKag43C3NvzbIC0lHtMnv9BpI">
        <div class="grid-2" style=" margin:4px 20px 4px 20px;background-color: #dcdcdc ;color:black ">
        <div class="grid" style="background-color:#a8e4a0;border-radius:7px ;">
            <label for="indentification" >indentification</label>
            <input type="text" style="margin: 0;width:180px;" name="indentification" value='{{$remorque->identification}}' placeholder="enter indentification">
            @csrf
            @if ($errors->has('indentification'))
            <strong>{{ $errors->first('indentification') }}</strong>
            @endif
            <label for="plomb">plomb</label>
            @csrf
            <input type="text" name="plomb" style="margin: 0;width:180px;" value='{{$remorque->plomb}}' placeholder="enter plomb ">
            @if ($errors->has('Plomb'))
            <strong>{{ $errors->first('Plomb') }}</strong>
            @endif
            <label for="Type">Type</label>
            @csrf
            <input type="text" name="Type" style="margin: 0 6px ;width:180px;" value='{{$remorque->type}}'  placeholder="enter Type ">
            @if ($errors->has('Type'))
            <strong>{{ $errors->first('Type') }}</strong>
            @endif
        </div>
    </div>
    <div style="padding:10px ;background-color:#f5f5f5 ;margin:0px"  >
            <label for="Dommage_Name" class="">Saissie Dommage</label>
            <div class="grid-5">
                    <div class="custom-control custom-radio" >
                    <input type="radio" class="form-check-input position-static"  name="Dommage_Name" value= "Porte ar">Porte ar
                    </div>
                    <!--Bavette-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Bavette">Bavette
                    </div>
                    <!--Tendeur de bache-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Tendeur de bache">Tendeur de bache
                    </div>
                    <!--Manivelle-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Manivelle">Manivelle
                    </div>
                    <!--Plaque de glissement-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Plaque de glissement">Plaque de glissement
                    </div>
                     <!--cremone-->
                     <div  class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Cremone">Cremone
                    </div>
                    <!--Joint de port ar -->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Joint de port ar">Joint de port ar
                    </div>
                    <!--Cordon tir-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Cordon tir">Cordon tir
                    </div >
                    <!--Coussin susp. pneuma.-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Coussin susp. pneuma.">Coussin susp. pneuma.
                    </div>
                    <!--Prise electrique-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Prise electrique">Prise electrique
                    </div>
                    <!--poignee-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Poignee">Poignee
                     </div>
                     <!--Charniere de porte -->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Charniere de porte">Charniere de porte
                    </div>
                    <!--Ridelle aluminium-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Ridelle aluminium">Ridelle aluminium
                    </div>
                    <!--Garde boue-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Garde boue">Garde boue
                    </div>
                    <!--Porte groupe frigo-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Porte groupe frigo">>Porte groupe frigo
                    </div>
                    <!--pare choc-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Pare choc">Pare choc
                     </div>
                     <!--Patte de douane-->
                     <div class="custom-control custom-radio">
                         <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Patte de douane">Patte de douane
                     </div>
                     <!--Rancher-->
                     <div class="custom-control custom-radio">
                         <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Rancher">Rancher
                     </div>
                     <!--Reservoir gasoile-->
                     <div class="custom-control custom-radio">
                         <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Reservoir gasoile">Reservoir gasoile
                     </div>
                     <!--Cache moteur gf-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Cache moteur gf">Cache moteur gf
                    </div>
                    <!-- support pare choc-->
                    <div class="custom-control custom-radio">
                    <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Support pare choc">Support pare choc
                    </div>
                    <!--Guide cremone-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Guide cremone">Guide cremone
                    </div>
                    <!--Planche rehausse-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Planche rehausse">Planche rehausse
                    </div>
                    <!--Porte extincteur -->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Porte extincteur">Porte extincteur
                    </div>
                    <!--Protect. condenseur gf-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Protect. condenseur gf">Protect. condenseur gf
                    </div>
                    <!--barre anti encastrement -->
                    <div class="custom-control custom-radio">
                         <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Barre anti encastrement">Barre anti encastrement
                    </div>
                    <!--Auberon-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Auberon">Auberon
                    </div>
                    <!--Protection latirale-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Protection latirale">Protection latirale
                    </div>
                    <br>
                    <br>
                    <!--Batterie gf-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Batterie gf">Batterie gf
                    </div>
                    <!--Montant ar -->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Montant ar">Montant ar
                    </div>
                    <!--Butoir-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Butoir">Butoir
                    </div>
                    <!--Pare cycliste-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Pare cycliste">Pare cycliste
                    </div>
                    <!--Montant av-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Montant av">Montant av
                    </div>
                    <!--Bandeau superieur gf-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Bandeau superieur gf">Bandeau superieur gf
                    </div>
                    <!--Traverse ar-->
                    <div class="custom-control custom-radio">
                         <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Traverse ar">Traverse ar
                    </div>
                    <!--Triangle-->
                    <div class="custom-control custom-radio">
                         <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Triangle">Triangle
                    </div>
                    <!--Bequille-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Bequille">Bequille
                    </div>
                    <!--Traverse av-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Traverse av">Traverse av
                    </div>
                    <!--Butoir-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Butoir">Butoir
                    </div>
                    <!--Feu stop-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Feu stop">Feu stop
                    </div >
                    <br>
                    <!--Sup platine bequille-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Sup platine bequille">Sup platine bequille
                    </div>
                    <!--Tablier frontal-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Tablier frontal">Tablier frontal
                    </div>
                    <br>
                    <!--Support feu stop-->
                     <div class="custom-control custom-radio">
                    <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Support feu stop">Support feu stop
                    </div>
                    <br>
                    <!--Tiran bequ court-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name"  value="Tiran bequ court" >Tiran bequ court
                    </div>
                    <!--Angle av-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Angle av">Angle av
                    </div>
                    <!--Tempéraute-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Temperaute">Temperaute
                    </div>
                    <!-- Cabochon pare choc-->
                     <div class="custom-control custom-radio">
                         <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Cabochon pare choc">Cabochon pare choc
                    </div>
                    <!--Paroi lisse -->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Paroi lisse">Paroi lisse
                    </div>
                    <!--Tiran bequ long-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Tiran bequ long">Tiran bequ long
                    </div>
                    <!--Main de frein-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Main de frein">Main de frein
                    </div>
                     <!--Etat neuf-->
                    <div class="custom-control custom-radio">
                         <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Etat neuf">Etat neuf
                    </div>
                     <!--Feu de gabrit -->
                     <div class="custom-control custom-radio">
                    <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Feu de gabrit ">Feu de gabrit
                    </div>
                    <!--Paroi ondulee-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Paroi ondulee">Paroi ondulee
                    </div>
                    <!--Sabot mobile-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Sabot mobile">Sabot mobile
                    </div>
                    <!--boitier mdf-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="boitier mdf">boitier mdf
                    </div>
                    <!--R.A.S-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="R.A.S">R.A.S
                    </div>
                    <!--feu led de gabrit -->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Feu led de gabrit">Feu led de gabrit
                    </div>
                    <!--Bache-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Bache">Bache
                    </div>
                    <!-- Sabot fix-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Sabot fix">Sabot fix
                    </div>
                    <!--Support mdf-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Support mdf">Support mdf
                    </div>
                    <!--Autre...-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Autre...">Autre...
                    </div>
                    <!-- Cabochon de feu de gabrit -->
                    <div class="custom-control custom-radio">
                         <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Cabochon de feu de gabrit">Cabochon de feu de gabrit
                    </div>
                    <!--Sangle-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Sangle">Sangle
                    </div>
                    <!--Pneumatique-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Pneumatique">Pneumatique
                    </div>
                    <!--Baguette / jonc av-->
                    <div class="custom-control custom-radio" >
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Baguette / jonc av">Baguette / jonc av
                    </div>
                    <br>
                    <!--Longeron-->
                    <div class="custom-control custom-radio">
                          <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Longeron">Longeron
                    </div>
                    <!--Bord de rive-->
                    <div class="custom-control custom-radio" >
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Bord de rive">Bord de rive
                    </div>
                    <!--Roue de secours-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Roue de secours">Roue de secours
                    </div>
                    <!--Toiture-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage_Name" value="Toiture">Toiture
                    </div>

                                @csrf
            </div>




                            @if ($errors->has('Dommage_Name'))
                            <strong>{{ $errors->first('Dommage_Name') }}</strong>
                            @endif
    </div>
    <div class="grid-2" style="padding:0 10px 0 10px;background-color:#f5f5f5 ;margin:0px">
        <div class="grid-3">
            <label for="Position"  style="color:black">Position:</label>
                       <!--G-->
                        <div class="custom-control custom-radio" >
                            <input type="radio" class="form-check-input position-static" name="Position" value= "D">D
                        </div>
                        <!--G-->
                        <div class="custom-control custom-radio" >
                            <input type="radio" class="form-check-input position-static" name="Position" value="G">G
                        </div>
                        @if ($errors->has('Position'))
                        <strong>{{ $errors->first('Position') }}</strong>
                        @endif
        </div>
        <div class="grid-4">
            <label for="Anciennete" style="color:black">Anciennete:</label>
                        <!--RC-->
                        <div class="custom-control custom-radio">
                            <input type="radio" class="form-check-input position-static" name="Anciennete" value= "RC">RC
                        </div>
                        <!--AG-->
                        <div class="custom-control custom-radio" >
                            <input type="radio" class="form-check-input position-static" name="Anciennete" value="AG">AG
                        </div>
                        <!--AC-->
                        <div class="custom-control custom-radio" >
                            <input type="radio" class="form-check-input position-static" name="Anciennete" value="AC">AC
                        </div>
                        @if ($errors->has('Anciennete'))
                        <strong>{{ $errors->first('Anciennete') }}</strong>
                        @endif
        </div>
    </div>

    <div class="grid" style="padding:0 10px 0 10px;background-color:#f5f5f5 ;margin:0px">
        <label for="Dommage"  style="color:black">Dommage:</label>
                    <!--CR-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage" value= "CR"> CR
                    </div>
                    <!--DF-->
                    <div class="custom-control custom-radio" >
                        <input type="radio" class="form-check-input position-static" name="Dommage" value="DF"> DF
                    </div>
                    <!--CS-->
                    <div class="custom-control custom-radio" >
                        <input type="radio" class="form-check-input position-static" name="Dommage" value="CS"> CS
                    </div>
                     <!--CP-->
                     <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage" value= "CP"> CP
                    </div>
                    <!--MA-->
                    <div class="custom-control custom-radio" >
                        <input type="radio" class="form-check-input position-static" name="Dommage" value="MA"> MA
                    </div>
                    <!--RG-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage" value="RG"> RG
                    </div>
                     <!--FR-->
                     <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage" value= "FR"> FR
                    </div>
                    <!--DH-->
                    <div class="custom-control custom-radio" >
                        <input type="radio" class="form-check-input position-static" name="Dommage" value="DH"> DH
                    </div>
                    <!--AC-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage" value="PF"> PF
                    </div>
                    <!--RAP-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Dommage" value= "RAP"> RAP
                    </div>
                    <!--RG/DF-->
                    <div class="custom-control custom-radio" >
                        <input type="radio" class="form-check-input position-static" name="Dommage" value="RG/DF"> DG/DF
                    </div>
                    <!--Autre-->
                    <div class="custom-control custom-radio" >
                        <input type="radio" class="form-check-input position-static" name="Dommage" value="Autre"> Autre..
                    </div>
                    @if ($errors->has('Dommage'))
                    <strong>{{ $errors->first('Dommage') }}</strong>
                    @endif
    </div>
    <div class="grid" style="padding:0 10px 0 10px;background-color:#f5f5f5 ;margin:0px">
        <label for="Detail"  style="color:black">Détail:</label>
                    <!--Seperieur-->
                    <div class="custom-control custom-radio" >
                        <input type="radio" class="form-check-input position-static" name="Detail" value="Séperieur">Séperieure
                    </div>
                    <!--Inferieur-->
                    <div class="custom-control custom-radio" >
                        <input type="radio" class="form-check-input position-static" name="Detail" value="Inférieur">Inférieur
                    </div>
                      <!--Avant-->
                      <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-statict" name="Detail" value= "Avant">Avant
                    </div>
                    <!--Arriere-->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="form-check-input position-static" name="Detail" value="Arriére">Arriere
                    </div>
                    <!--Latéral-->
                    <div class="custom-control custom-radio" >
                        <input type="radio" class="form-check-input position-static" name="Detail" value="Latéral">Latéral
                    </div>
                     <!--Autre-->
                     <div class="custom-control custom-radio" >
                        <input type="radio" class="form-check-input position-static" name="Detail" value="Autre">Autre..
                    </div>
                    @if ($errors->has('Detail'))
                    <strong>{{ $errors->first('Detail') }}</strong>
                    @endif
     </div>
    <div class="grid" style="padding:0 10px 0 10px;background-color:#f5f5f5 ;margin:0px">
     <label for="Unite"  style="color:black">Unité ou:</label>
                                <!--1-->
                                <div class="custom-control custom-radio" >
                                    <input type="radio" class="form-check-input position-static" name="Unite" value = "1">1
                                </div>
                                <!--4-->
                                <div class="custom-control custom-radio" >
                                    <input type="radio" class="form-check-input position-static" name="Unite" value="4">4
                                </div>
                                  <!--2000-->
                                  <div class="custom-control custom-radio" >
                                    <input type="radio" class="form-check-input position-static" name="Unite" value="2000">2 000
                                </div>
                                <!--4000-->
                                <div class="custom-control custom-radio" >
                                    <input type="radio" class="form-check-input position-static" name="Unite" value="4000">4 000
                                </div>
                                <!--6000-->
                                <div class="custom-control custom-radio" >
                                    <input type="radio" class="form-check-input position-static" name="Unite" value="6000">6 000
                                </div>
                                 <!--8000-->
                                 <div class="custom-control custom-radio" >
                                    <input type="radio" class="form-check-input position-static" name="Unite" value="8000">8 000
                                </div>
                                <!--10000-->
                                <div class="custom-control custom-radio" >
                                    <input type="radio" class="form-check-input position-static" name="Unite" value="10000">10000
                                </div>
                                 <!--12000-->
                                 <div class="custom-control custom-radio" >
                                    <input type="radio" class="form-check-input position-static" name="Unite" value="12000">12000
                                </div>
                                @if ($errors->has('Unite'))
                                <strong>{{ $errors->first('Unite') }}</strong>
                                @endif

    </div>
    <div class="grid" style="padding:0 10px 0 10px;background-color:#f5f5f5 ;margin:0px">
        <label for="Longeur"  style="color:black">Longeur:</label>
                                   <!--2-->
                                   <div class="custom-control custom-radio" >
                                       <input type="radio" class="form-check-input position-static" name="Longeur" value = "2">2
                                   </div>
                                   <!--1000-->
                                   <div class="custom-control custom-radio" >
                                       <input type="radio" class="form-check-input position-static" name="Longeur" value="1000">1 000
                                   </div>
                                     <!--3000-->
                                     <div class="custom-control custom-radio" >
                                       <input type="radio" class="form-check-input position-static" name="Longeur" value= "3000">3 000
                                   </div>
                                   <!--5000-->
                                   <div class="custom-control custom-radio" >
                                       <input type="radio" class="form-check-input position-static" name="Longeur" value="5000">5 000
                                   </div>
                                   <!--7000-->
                                   <div class="custom-control custom-radio" >
                                       <input type="radio" class="form-check-input position-static" name="Longeur" value="7000">7 000
                                   </div>
                                    <!--9000-->
                                    <div class="custom-control custom-radio" >
                                       <input type="radio" class="form-check-input position-static" name="Longeur" value="9000">9 000
                                   </div>
                                   <!--11000-->
                                   <div class="custom-control custom-radio" >
                                       <input type="radio" class="form-check-input position-static" name="Longeur" value="11000">11000
                                   </div>
                                    <!--Autre-->
                                    <div class="custom-control custom-radio" >
                                       <input type="radio" class="form-check-input position-static" name="Longeur" value="Autre">Autre
                                   </div>
                                   @if ($errors->has('Longeur'))
                                   <strong>{{ $errors->first('Longeur') }}</strong>
                                   @endif

       </div>
       <div style="padding:0 10px 0 10px;background-color:#f5f5f5 ;margin:0px">
        <label for="Largeur">Largeur:</label>
        @csrf
        <input type="text" style="border-radius:5px;" name="Largeur" placeholder="enter Largeur ">
        @if ($errors->has('Largeur'))
        <strong>{{ $errors->first('Largeur') }}</strong>
        @endif
        </div>
    <div style="padding:0 10px 0 10px;background-color:#f5f5f5 ;margin:0px">
    
        <button name ='action' value="add" type="submit" style="background: linear-gradient(to right, #2196f3, #f44336);font-family:Gill Sans" class=" btn-lg mr-5">Add Dommage</button>
        <button name ='action' value=" submit" type="submit" style="background:#ffb300 ;;"  class="btn btn-lg ml-5"> Submit </button>
      
    </div>


    </form>
    @show

    <script>
        //-----------------
        $(document).ready(function(){
        $('#send_form').click(function(e){
           e.preventDefault();
           /*Ajax Request Header setup*/
           $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });

           $('#send_form').html('Sending..');

           /* Submit form data using ajax*/
           $.ajax({
              url: "{{action('DommageController@store',$id_remorque)}}",
              method: 'post',
              data: $('#addDommage').serialize(),
              success: function(response){
                 //------------------------
                    $('#send_form').html('Submit');
                    $('#res_message').show();
                    $('#res_message').html(response.msg);
                    $('#msg_div').removeClass('d-none');

                    document.getElementById("addDommage").reset();
                    setTimeout(function(){
                    $('#res_message').hide();
                    $('#msg_div').hide();
                    },10000);
                 //--------------------------
              }
              error: function(response){




                }
            });
           });
        });
        //-----------------
        </script>
</body>
</html>
