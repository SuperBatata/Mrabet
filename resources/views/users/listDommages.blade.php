@extends('layouts.templateback')
@section('content')




<div align="center" style="padding:20px">
    <a href="{{action('DommageController@postView1',$idVoyage)}}" class="btn btn-primary">Add a new Container</a>
</div>

@if($state=='phase1')
<div class="row">
    <div class="col">
        <div>
            <div class="card-header">liste Dommage phase 1</div>
            <table id="mytable" class="table table-bordred table-striped">
                <tr>
                    <th class="bg-danger">indentification</th>
                    <th class="bg-danger">idVoyage</th>
                    <th class="bg-danger">plomb</th>
                    <th class="bg-danger">Type</th>
                    <th class="bg-danger">Dommage_Name</th>
                    <th class="bg-danger">Position</th>
                    <th class="bg-danger">Anciennete</th>
                    <th class="bg-danger">Dommage</th>
                    <th class="bg-danger">Detail</th>
                    <th class="bg-danger">Unite</th>
                    <th class="bg-danger">Longeur</th>
                    <th class="bg-danger">Largeur</th>
                    <th class="bg-danger">phase</th>
                    <th class="bg-danger">Edit</th>
                    <th class="bg-danger">Delete</th>
                    @foreach ($Dommages as $Dommage)
                <tr>
                    <td>{{$Dommage['indentification']}}</td>
                    <td>{{$Dommage['idVoyage']}}</td>
                    <td>{{$Dommage['Plomb']}}</td>
                    <td>{{$Dommage['type']}}</td>
                    <td>{{$Dommage['DommageName']}}</td>
                    <td>{{$Dommage['Position']}}</td>
                    <td>{{$Dommage['Anciennete']}}</td>
                    <td>{{$Dommage['Dommage']}}</td>
                    <td>{{$Dommage['Detail']}}</td>
                    <td>{{$Dommage['Unite']}}</td>
                    <td>{{$Dommage['Longeur']}}</td>
                    <td>{{$Dommage['Largeur']}}</td>
                    <td>{{$Dommage['etat']}}</td>
                    <div class="pull-right action-buttons">
                        <td><a href="{{action('DommageController@editDommage',$Dommage->id_dommage)}}"
                                class="btn btn-primary a-btn-slide-text"><span class="glyphicon glyphicon-edit"
                                    aria-hidden="true"></span>
                                <span><strong>Edit</strong></span> </td>
                        <td><a href="{{action('DommageController@deleteDommage',$Dommage->id_dommage)}}"
                                class="bg-danger btn btn-primary a-btn-slide-text"><span
                                    class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                <span><strong>Delete</strong></span></td>

                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>


@elseif($state=='phase2')
<div class="row justify-content-center">
    <div class="col">
        <div class="card-header">liste Dommage phase 1</div>
        <div class="table-responsive">

            <table id="mytable" class="table table-bordred table-striped">
                <tr>
                    <th class="bg-danger">indentification</th>
                    <th class="bg-danger">idVoyage</th>
                    <th class="bg-danger">plomb</th>
                    <th class="bg-danger">Type</th>
                    <th class="bg-danger">Dommage_Name</th>
                    <th class="bg-danger">Position</th>
                    <th class="bg-danger">Anciennete</th>
                    <th class="bg-danger">Dommage</th>
                    <th class="bg-danger">Detail</th>
                    <th class="bg-danger">Unite</th>
                    <th class="bg-danger">Longeur</th>
                    <th class="bg-danger">Largeur</th>
                    <th class="bg-danger">phase</th>
                </tr>
                @foreach ($Dommages as $Dommage)
                @if($Dommage['etat']=='phase1')
                <td>{{$Dommage['indentification']}}</td>
                <td>{{$Dommage['idVoyage']}}</td>
                <td>{{$Dommage['Plomb']}}</td>
                <td>{{$Dommage['type']}}</td>
                <td>{{$Dommage['DommageName']}}</td>
                <td>{{$Dommage['Position']}}</td>
                <td>{{$Dommage['Anciennete']}}</td>
                <td>{{$Dommage['Dommage']}}</td>
                <td>{{$Dommage['Detail']}}</td>
                <td>{{$Dommage['Unite']}}</td>
                <td>{{$Dommage['Longeur']}}</td>
                <td>{{$Dommage['Largeur']}}</td>
                <td>{{$Dommage['etat']}}</td>
                </tr>
                @endif
                @endforeach
            </table>
        </div>
    </div>
</div>
<br>
<br>
<div class="row ">
    <div class="col">
        <div class="card-header ">liste Dommage phase 2</div>
        <div class="table-responsive">

            <table id="mytable" class="table table-bordred table-striped">
                <tr>
                    <th class="bg-primary">indentification</th>
                    <th class="bg-primary">idVoyage</th>
                    <th class="bg-primary">plomb</th>
                    <th class="bg-primary">Type</th>
                    <th class="bg-primary">Dommage_Name</th>
                    <th class="bg-primary">Position</th>
                    <th class="bg-primary">Anciennete</th>
                    <th class="bg-primary">Dommage</th>
                    <th class="bg-primary">Detail</th>
                    <th class="bg-primary">Unite</th>
                    <th class="bg-primary">Longeur</th>
                    <th class="bg-primary">Largeur</th>
                    <th class="bg-primary">phase</th>
                    <th class="bg-primary">Edit</th>
                    <th class="bg-primary">Delete</th>
                    @foreach ($Dommages as $Dommage)
                    @if($Dommage['etat']=='phase2')
                <tr>
                    <td>{{$Dommage['indentification']}}</td>
                    <td>{{$Dommage['idVoyage']}}</td>
                    <td>{{$Dommage['Plomb']}}</td>
                    <td>{{$Dommage['type']}}</td>
                    <td>{{$Dommage['DommageName']}}</td>
                    <td>{{$Dommage['Position']}}</td>
                    <td>{{$Dommage['Anciennete']}}</td>
                    <td>{{$Dommage['Dommage']}}</td>
                    <td>{{$Dommage['Detail']}}</td>
                    <td>{{$Dommage['Unite']}}</td>
                    <td>{{$Dommage['Longeur']}}</td>
                    <td>{{$Dommage['Largeur']}}</td>
                    <td>{{$Dommage['etat']}}</td>
                    <div class="pull-right action-buttons">
                        <td><a href="{{action('DommageController@editDommage',$Dommage->id_dommage)}}"
                                class="btn btn-primary a-btn-slide-text"><span class="glyphicon glyphicon-edit"
                                    aria-hidden="true"></span>
                                <span><strong>Edit</strong></span> </td>
                        <td><a href="{{action('DommageController@deleteDommage',$Dommage->id_dommage)}}"
                                class="bg-danger btn btn-primary a-btn-slide-text"><span
                                    class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                <span><strong>Delete</strong></span></td>
                        @endif
                </tr>
                @endforeach
                </tr>
            </table>
        </div>
    </div>
</div>
@endif


<div align="center" style="padding:20px">
    <a href="{{action('DommageController@validerTache',$idVoyage)}}" class="btn btn-warning">valider la tache</a>
</div>
</div>

</div>

@endsection