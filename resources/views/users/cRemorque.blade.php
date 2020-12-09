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
<form action="{{action('remorqueController@add',$idVoyage)}}" method="POST" enctype="multipart/form-data" >
    @csrf
<div class="container justify-content-center">
    <div class="row">
        <div class="col-md">
          <div class="input-group ">
            <label for="identification"><h5>identification N°</h5></label>
            <input type="text" class="form-control" name="identification" placeholder="enter identification">
          </div>
        </div>
        <div class="col-md">
          <div class="input-group">
            <label for="plomb">plomb</label>
            <input type="text" class="form-control" name="plomb" placeholder="enter plomb ">
          </div>
        </div>
      </div>
      <br>
	<div class="row">
		<div class="span12">
            {{-- <div class="btn-group" data-toggle="buttons">
                <label for="chargeur" style="margin-right: 20px ;margin-top: 6px"><h5> chargeur:</h5></label>
                <div class="btn btn-secondary">
                  <input type="radio" name="chargeur" value="JOST" autocomplete="off" checked> JOST
                </div>
                <div class="btn btn-secondary">
                  <input type="radio" name="chargeur" value="options"  autocomplete="off"> GEFCO
                </div>
                <div class="btn btn-secondary">
                  <input type="radio" name="chargeur" value="TRANSCAUSSE"  autocomplete="off">  TRANSCAUSSE
                </div>
                <div class="btn btn-secondary">
                    <input type="radio" name="chargeur" value="MILITZER"  autocomplete="off">  MILITZER
                </div>
                <div class="btn btn-secondary">
                    <input type="radio"  name="chargeur"value="STEFOVER"  autocomplete="off">  STEFOVER
                </div>
                <div class="btn btn-secondary">
                    <input type="radio" name="chargeur" value="GLOBTRANS" autocomplete="off">  GLOBTRANS
                  </div>
                  <div class="btn btn-secondary">
                    <input type="radio" name="chargeur"  value="TRANSCARGO" autocomplete="off">  TRANSCARGO
                  </div>
                  <div class="btn btn-secondary">
                    <input type="radio" name="chargeur" value="Autres" autocomplete="off">  Autres....
                  </div>
                </label>
            </div> --}}


            <div class="form-group row">
                <label for="chargeur" class="col-md-4 col-form-label text-md-right">{{ __('Chargeur') }}</label>

                <div class="col-md-6">
                    <select id="chargeur" type="text" class="form-control @error('chargeur') is-invalid @enderror" name="chargeur" required autocomplete="chargeur">
                        <option disabled selected  > Liste des Chargeurs </option>
                        @foreach ( $chargeurs  as $chargeur )
                    <option  value="{{$chargeur->nom_societe}}" label="{{$chargeur->nom_societe}}"> </option>
                        @endforeach
                    @error('chargeur')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </select>
                </div>
                </div>






        </div>
    </div>
    <br>
    <div class="row">
		<div class="span12">
            <div class="btn-group" data-toggle="buttons">
                <label for="type" style="margin-right: 44px ;margin-top: 6px"><h5>type:     </h5></label>
                <div class="btn btn-secondary">
                  <input type="radio" name="type" value="FOURGON" autocomplete="off" checked> FOURGON
                </div>
                <div class="btn btn-secondary">
                  <input type="radio" name="type" value="FOURFON LISSE"  autocomplete="off"> FOURFON LISSE
                </div>
                <div class="btn btn-secondary">
                  <input type="radio" name="type" value="FRIGORIFIQUE"  autocomplete="off">  FRIGORIFIQUE
                </div>
                <div class="btn btn-secondary">
                    <input type="radio" name="type" value="SAVOYARDE/TAUTLINER"  autocomplete="off">  SAVOYARDE/TAUTLINER
                </div>
                <div class="btn btn-secondary">
                    <input type="radio" name="type" value="HAUTEUR 280"  autocomplete="off">  HAUTEUR 280
                </div>
                  <div class="btn btn-secondary">
                    <input type="radio" name="type" value="Autres" autocomplete="off">  Autres....
                  </div>
                </label>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="row" style="height: 500px;">
        <input class="col h-25 d-inline-block border border-dark m-1" type="text" name="ID" placeholder="ID" autocomplete="off">
        <input class="col h-25 d-inline-block border border-dark m-1" type="text" name="SCELLE" placeholder="SCELLE" autocomplete="off">
        <div class="col h-25 d-inline-block border border-dark m-1 "><input  type="file" accept="image/*" name="vue1"></div>
        <div class="col h-25 d-inline-block border border-dark m-1 "><input type="file" accept="image/*"  name="vue2"></div>
        <div class="col h-25 d-inline-block border border-dark m-1"><input type="file" accept="image/*"  name="vue3"></div>
        <div class="col h-25 d-inline-block border border-dark m-1"><input type="file" accept="image/*"  name="vue4"></div>
    </div>
</div>
<div class="row justify-content-center">
  <button name ='action' value="createDommage" type="submit" style="background: linear-gradient(to right, #2196f3, #f44336);font-family:Gill Sans" class=" btn-lg mr-5">Proceed to adding Dommages</button>
  <button name ='action' value="constat" type="submit" style="background:#ffb300 ;;"  class="btn btn-lg ml-5"> Submit </button>
</div>

</form>

@endsection
