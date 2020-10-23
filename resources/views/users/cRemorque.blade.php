@extends('layouts.templateback')
@section('content')
@if (count($errors) > 0)
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{$error}}</li>

    @endforeach
  </ul>
</div>

@endif
<div align="right" style="padding:20px">
  <a href="{{action('remorqueController@viewlist',$idVoyage)}}" class="btn btn-primary">voire la liste des remorues</a>
</div>
<div align="center" style="padding:20px">
    <a href="{{action('DommageController@postView1',$idVoyage)}}" class="btn btn-primary">Add a new Container</a>
</div>

<form action="{{action('remorqueController@add',$idVoyage)}}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="container-fluid justify-content-center">
    <div class="row">
      <div class="col-md">
        <div class="input-group ">
          <label for="identification">
            <h5>identification N°</h5>
          </label>
          <input type="text" class="form-control" name="identification" placeholder="enter identification">
        </div>
      </div>
      <div class="col-md">
        <div class="input-group">
          <label for="plomb">plomb:</label>
          <input type="text" class="form-control" name="plomb" placeholder="enter plomb ">
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col">
        <div class="btn-group" data-toggle="buttons">
          <label for="chargeur">chargeur:</label>
          <div class="btn btn-secondary">
            <input type="radio" name="chargeur" value="JOST" autocomplete="off" checked> JOST
          </div>
          <div class="btn btn-secondary">
            <input type="radio" name="chargeur" value="options" autocomplete="off"> GEFCO
          </div>
          <div class="btn btn-secondary">
            <input type="radio" name="chargeur" value="TRANSCAUSSE" autocomplete="off"> TRANSCAUSSE
          </div>
          <div class="btn btn-secondary">
            <input type="radio" name="chargeur" value="MILITZER" autocomplete="off"> MILITZER
          </div>
          <div class="btn btn-secondary">
            <input type="radio" name="chargeur" value="STEFOVER" autocomplete="off"> STEFOVER
          </div>
          <div class="btn btn-secondary">
            <input type="radio" name="chargeur" value="GLOBTRANS" autocomplete="off"> GLOBTRANS
          </div>
          <div class="btn btn-secondary">
            <input type="radio" name="chargeur" value="TRANSCARGO" autocomplete="off"> TRANSCARGO
          </div>
          <div class="btn btn-secondary">
            <input type="radio" name="chargeur" value="Autres" autocomplete="off"> Autres....
          </div>
          </label>
        </div>


      </div>



    </div>
    <br>
    <div class="row">
      <div class="col">
        <div class="btn-group" data-toggle="buttons">
          <label for="type">Remorque:</label>
          <div class="btn btn-secondary">
            <input type="radio" name="type" value="FOURGON" autocomplete="off" checked> FOURGON
          </div>
          <div class="btn btn-secondary">
            <input type="radio" name="type" value="FOURFON LISSE" autocomplete="off"> FOURFON LISSE
          </div>
          <div class="btn btn-secondary">
            <input type="radio" name="type" value="FRIGORIFIQUE" autocomplete="off"> FRIGORIFIQUE
          </div>
          <div class="btn btn-secondary">
            <input type="radio" name="type" value="SAVOYARDE/TAUTLINER" autocomplete="off"> SAVOYARDE/TAUTLINER
          </div>
          <div class="btn btn-secondary">
            <input type="radio" name="type" value="HAUTEUR 280" autocomplete="off"> HAUTEUR 280
          </div>
          <div class="btn btn-secondary">
            <input type="radio" name="type" value="Autres" autocomplete="off"> Autres....
          </div> 
          </label>
        </div>

        <div class="btn-group" data-toggle="buttons">
          <label for="SCELLE">Scelle:</label>
          <div class="btn btn-secondary">
            <input type="radio" name="SCELLE" value="Scelle Comercial" autocomplete="off" checked> Scelle Comercial
          </div>
          <div class="btn btn-secondary">
            <input type="radio" name="SCELLE" value="Scelle Douane" autocomplete="off">Scelle Douane
          </div>
          <div class="btn btn-secondary">
            <input type="radio" name="SCELLE" value="Scelle chargeur" autocomplete="off">Scelle chargeur
         
          </div>
          </label>
        </div>




      </div>


    </div>
    <br>

    <br>
    <div class="row justify-content-center">

      <input class="col d-inline-block border border-dark m-2" type="text" name="ID" placeholder="Container Iso"
        autocomplete="off">
      <div class="col  d-inline-block border border-dark m-2 "><input type="file" accept="image/*" name="vue1"></div>


    </div>
    <div class="row" style="padding-top:20px;">

      <div class="col h-25 d-inline-block border border-dark m-2 "><input type="file" accept="image/*" name="vue2">
      </div>
      <div class="col h-25 d-inline-block border border-dark m-2"><input type="file" accept="image/*" name="vue3"></div>
      <div class="col h-25 d-inline-block border border-dark m-2"><input type="file" accept="image/*" name="vue4"></div>

    </div>
    
  </div>
  <div class="row justify-content-center">
    
    <button name='action' value=" constat" type="submit" style="background:#ffb300 ;;" class="btn btn-lg ml-5">
      constat</button>
  </div>

</form>

@endsection