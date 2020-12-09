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
{{-- <form action="{{action('remorqueController@updateRemorque',$id_remorque)}}" method="POST" enctype="multipart/form-data"> --}}
 {!!Form::model($remorque,['action'=> ['remorqueController@updateRemorque',$id_remorque],'method'=>'POST','enctype'=>'multipart/form-data'])!!}

    @csrf
  <div class="container-fluid justify-content-center">
    <div class="row">
      <div class="col-md">
        <div class="input-group ">


          </label>
           {!!Form::label('identification', 'Identification')!!}
          {!!Form::text('identification',null,['class'=>'form-control'])!!}
        </div>
      </div>
      <div class="col-md">
        <div class="input-group">
            {!! Form::label('plomb','Plomb') !!}
            {!! Form::text('plomb',null,['class'=>'form-control']) !!}

        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col">
        <div class="btn-group" data-toggle="buttons">
          {{-- <label for="chargeur">chargeur:</label>
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
          </label> --}}

        </div>

        <div class="form-group row">
            <label for="chargeur" class="col-md-4 col-form-label text-md-right">{{ __('Chargeur') }}</label>

            <div class="col-md-6">
              {!! Form::select('chargeur', $chargeurs, $remorque->chargeur, ['class'=>'form-control']) !!}

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
      <div class="col">
        {!! Form::label('type','Type') !!}
    {!! Form::select('type', [
        'FOURGON',
        'FOURGON LISSE',
        'FRIGORIFIQUE',
        'SAVOYARDE/TAUTLINER',
        'HAUTEUR 280',
        'Autres',
    ], $remorque->type) !!}


        {{-- <div class="btn-group" data-toggle="buttons">
          <label for="type">Remorque:</label>
          <div class="btn btn-secondary">
            <input type="radio" name="type" value="FOURGON" autocomplete="off" checked> FOURGON
          </div>
          <div class="btn btn-secondary">
            <input type="radio" name="type" value="FOURGON LISSE" autocomplete="off"> FOURFON LISSE
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
        </div> --}}





      </div>


    </div>
    <br>

    <br>
    <div class="row justify-content-center">

      <input class="col d-inline-block border border-dark m-2" type="text" name="ID" placeholder="ID"
        autocomplete="off">
      <input class="col  d-inline-block border border-dark m-2" type="text" name="SCELLE" placeholder="SCELLE"
        autocomplete="off">

        <div class="btn-group" data-toggle="buttons">
          <label for="type">Scelle:</label>
          <div class="btn btn-secondary">
            <input type="radio" name="type" value="FOURGON" autocomplete="off" checked> Scelle Comercial
          </div>
          <div class="btn btn-secondary">
            <input type="radio" name="type" value="FOURFON LISSE" autocomplete="off">Scelle Douane
          </div>
          <div class="btn btn-secondary">
            <input type="radio" name="type" value="FRIGORIFIQUE" autocomplete="off">    Scelle chargeur

          </div>
          </label>
        </div>





      </div>
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


{{Form::close()}}
@endsection
