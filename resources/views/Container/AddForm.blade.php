@extends('layouts.templateback')
@section('content')

<div class="container-fluid " style="padding: 10px">
    <div class="row justify-content-center">
        <div class="col"></div>
        <div class="col justify-content-center">

{!! Form::open(['action'=>'ContainerController@addContainer','method'=>'POST']) !!}
{!! Form::hidden('idVoyage', $idVoyage) !!}


<div class="form-group">

    {!! Form::label('indentification', 'indentification') !!}
    {!! Form::text('indentification' )!!}
</div>
<div class="form-group">

{!! Form::label('Plomb', 'Plomb') !!}
    {!! Form::text('Plomb', ) !!}
</div>
<div class="form-group">

    <div class="form-group row">
        <label for="Chargeur" class="col-md-4 col-form-label text-md-right">{{ __('Chargeur') }}</label>

        <div class="col-md-6">
            <select id="Chargeur" type="text" class="form-control @error('Chargeur') is-invalid @enderror" name="Chargeur" required autocomplete="Chargeur">
                <option disabled selected  > Liste des Chargeurs </option>
                @foreach ( $chargeurs  as $chargeur )
            <option  value="{{$chargeur->nom_societe}}" label="{{$chargeur->nom_societe}}"> </option>
                @endforeach
            @error('Chargeur')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </select>
        </div>
        </div>


{!! Form::label('type', 'Type') !!}
{{ Form::select('Type',[
    'G'=>[
        'G0'=>'G0',
        'G1'=>'G1',
        'G2'=>'G2',
        'G3'=>'G3'],
    'V'=>[
        'V0'=>'V0',
        'V2'=>'V2',
        'V4'=>'V4'],
    'B'=>[
        'B0'=>'B0',
        'B1'=>'B1',
        'B3'=>'B3',
        'B4'=>'B4',
        'B5'=>'B5',
        'B5'=>'B5',
        'B6'=>'B6'],
    'S'=>[
        'S0'=>'S0',
        'S1'=>'S1',
        'S2'=>'S2',
        'R0'=>'R0'],
    'R'=>[
        'R1'=>'R1',
        'R2'=>'R2',
        'R3'=>'R3'],
    'H'=>[
        'H0'=>'H0',
        'H1'=>'H1',
        'H2'=>'H2',
        'H5'=>'H5',
        'H6'=>'H6'],
    'U'=>[
        'U0'=>'U0',
        'U1'=>'U1',
        'U2'=>'U2',
        'U3'=>'U3',
        'U4'=>'U4',
        'U5'=>'U5'],
    'P'=>[
        'P0'=>'P0',
        'P1'=>'P1',
        'P2'=>'P2',
        'P3'=>'P3',
        'P4'=>'P4',
        'P5'=>'P5'],
    'T'=>[
        'T0'=>'T0',
        'T1'=>'T1',
        'T2'=>'T2',
        'T3'=>'T3',
        'T4'=>'T4',
        'T5'=>'T5',
        'T6'=>'T6',
        'T7'=>'T7',
        'T8'=>'T8',
        'T9'=>'T9'],
    'A'=>[
        'A0'=>'A0']
],['class'=>'form-control'] ) }}
</div>
<div class="form-group">
{!! Form::label('Length', 'Length') !!}
{{Form::select('Length',[
    '2'=>'2 : 20 feet',
    '4'=>'4 : 40 feet',
    'L'=>'L : 45 feet',
    'M'=>'M : 48 feet',
    ],['class'=>'form-control'])}}
</div>
<div class="form-group">
{!! Form::label('Height', 'Height') !!}
{{Form::select('Height',[
    '2'=>'2 : 8 feet 6 inches',
    '5'=>'5 : 9 feet 6 inches "high cube "',
     ],['class'=>'form-control'])}}
</div>

<div class="form-group">
    {!! Form::label('Dommage_Name', 'Saisie Dommage') !!}
    {{Form::select('Dommage_Name',[
       'Porte ar'=> 'Porte ar',
       'Bavette'=>'Bavette',
       'Tendeur de bache'=> 'Tendeur de bache',
       'Manivelle'=>'Manivelle',
       'Plaque de glissement'=> 'Plaque de glissement',
       'Cremone'=>'Cremone',
       'Joint de port ar'=> 'Joint de port ar',
       'Cordon tir'=>  'Cordon tir',
       'Prise electrique'=>  'Prise electrique',
       'Poignee'=>  'Poignee',
       'Charniere de porte'=>  'Charniere de porte',
       'Ridelle aluminium'=>  'Ridelle aluminium',

       'Garde boue'=>  'Garde boue',

       'Porte groupe frigo'=> 'Porte groupe frigo',
       'Pare choc'=> 'Pare choc',
       'Patte de douane'=> 'Patte de douane',
       'Rancher'=> 'Rancher',
       'Reservoir gasoile'=> 'Reservoir gasoile',
       'Cache moteur gf'=> 'Cache moteur gf',

       'Support pare choc'=> 'Support pare choc',
       'Guide cremone'=> 'Guide cremone',
       'Planche rehausse'=> 'Planche rehausse',
       'Porte extincteur'=> 'Porte extincteur',
       'Protect. condenseur gf'=> 'Protect. condenseur gf',
       'Barre anti encastrement'=> 'Barre anti encastrement',

       'Auberon'=>  'Auberon',
       'Protection latirale'=>  'Protection latirale',
       'Batterie gf'=>  'Batterie gf',
       'Montant ar'=>  'Montant ar',
       'Butoir'=>  'Butoir',
       'Pare cycliste'=>  'Pare cycliste',


       'Montant av'=>  'Montant av',
             'Bandeau superieur gf'=>'Bandeau superieur gf',
             'Traverse ar'=>  'Traverse ar',
             'Triangle'=>  'Triangle',
             'Bequille'=>  'Bequille',
             'Traverse av'=>  'Traverse av',


             'Butoir'=>  'Butoir',
             'Feu stop'=>'Feu stop',
             'Sup platine bequille'=>'Sup platine bequille',
             'Tablier frontal'=>'Tablier frontal',
             'Support feu stop'=> 'Support feu stop',
             'Tiran bequ court'=>'Tiran bequ court',


             'Angle av'=>'Angle av',
             'Temperaute'=>'Temperaute',
             'Cabochon pare choc'=>'Cabochon pare choc',
             'Paroi lisse'=>   'Paroi lisse',
             'Tiran bequ long'=> 'Tiran bequ long',
             'Main de frein'=>'Main de frein',

             'Etat neuf'=>'Etat neuf',
             'Feu de gabrit'=>'Feu de gabrit',
             'Paroi ondulee'=>'Paroi ondulee',
             'Sabot mobile'=>'Sabot mobile',
             'boitier mdf'=>'boitier mdf',

             'R.A.S'=> 'R.A.S',
             'Feu led de gabrit'=>'Feu led de gabrit',
             'Bache'=>'Bache',
             'Sabot fix'=>        'Sabot fix',
             'Support mdf'=>'Support mdf',

             'Cabochon de feu de gabrit'=>'Cabochon de feu de gabrit',
             'Sangle'=>'Sangle',
             'Pneumatique'=>'Pneumatique',
             'Baguette / jonc av'=>'Baguette / jonc av',
             'Longeron'=>'Longeron',

             'Bord de rive'=>   'Bord de rive',
             'Roue de secours'=>    'Roue de secours',
             'Toiture'=>    'Toiture',


      ],['class'=>'form-control'])}}
    </div>
    <div class="form-group">
    {!! Form::label('Position', 'Position') !!}
    {{Form::select('Position',[
          'D'=>     'D',
               'G'=>'G',
         ],['class'=>'form-control'])}}
    </div>
    <div class="form-group">
    {!! Form::label('Anciennete', 'Anciennete') !!}
    {{Form::select('Anciennete',[
               'RC'=>'RC',
               'AG'=>'AG',
               'AC'=>'AC',

         ],['class'=>'form-control'])}}
    </div>
    <div class="form-group">
    {!! Form::label('Dommage', 'Dommage') !!}
    {{Form::select('Dommage',[
               'CR'=> 'CR',
               'DF'=>'DF',
               'CS'=>'CS',
               'CP'=>'CP',
               'MA'=>'MA',
               'RG'=>'RG',
               'FR'=>'FR',
    'DH'=>'DH',
    'PF'=>'PF',
    'RAP'=>'RAP',
    'DG/DF'=>'DG/DF',
    'Autre'=>'Autre..',
         ],['class'=>'form-control'])}}
    </div>
    <div class="form-group">
    {!! Form::label('Detail', 'Detail') !!}
    {{Form::select('Detail',[
   'Superieure'=>     'Superieure',
   'Inférieur'=> 'Inférieur',
   'Avant'=> 'Avant',
   'Arriere'=> 'Arriere',
   'Latéral'=> 'Latéral',
   'Autre'=> 'Autre..',


        ],['class'=>'form-control'])}}
    </div>
    <div class="form-group">
    {!! Form::label('Unite', 'Unite') !!}
    {{Form::select('Unite',[
          '1'=> '1',
          '4'=>'4',
          '2000'=>'2000',
          '4000'=>'4000',
          '6000'=>'6000',
          '8000'=>'8000',
          '10000'=>'10000',
          '12000'=>'12000',
        ],['class'=>'form-control'])}}
    </div>
<div class="form-group">
{!! Form::submit('ADD CONTAINER', ['class'=>'btn btn-primary form-group']) !!}
</div>
{{ Form::close() }}

</div>
    </div>
</div>
@endsection
