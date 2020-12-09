@extends('layouts.templateback')
@section('content')
@if($etat!='terminé')
<div class="container-fluid " style="padding: 10px">
    <div class="row justify-content-center">
        <div class="col"></div>
        <div class="col justify-content-center">
            <a href="{{action('ContainerController@index',$idVoyage)}}" class="btn btn-primary">Add a new
                Container</a>

        </div>
        <div class="col justify-content-center">
            <a href="{{action('remorqueController@cRemorqueview',$idVoyage)}}" class="btn btn-primary">Add a new
                Remorque</a>

        </div>

        </div><div class="col justify-content-center">
            <a href="{{action('remorqueController@validertache',$idVoyage)}}" class="btn btn-primary">validertache</a>
        </div></div>

    </div>
</div>
@endif

@if($etat=='phase1')

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card-header">phase1:liste Remorque </div>
                <table id="listeRemorques" class="table table-bordred table-striped">

                    <thead>
                        <tr>
                        <th class="bg-danger">Identification</th>
                        <th class="bg-danger">plomb</th>
                        <th class="bg-danger">Type</th>
                        <th class="bg-danger">Chargeur</th>
                        <th class="bg-danger">Vue1</th>
                        <th class="bg-danger">Vue2</th>
                        <th class="bg-danger">Vue3</th>
                        <th class="bg-danger">Vue4</th>
                        <th class="bg-danger">Scelle</th>
                        <th class="bg-danger">Edit</th>
                        <th class="bg-danger">Delete</th>
                        <th class="bg-danger">Preview Constat</th>
                        <th class="bg-danger">Download Constat</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
        </div>
    </div>


    <div class="row">
        <div class="col">
            <div class="card-header">phase1:liste Containers </div>
            <table id="listContainer" class="table table-bordred table-striped">

                <thead>
                    <tr>
                    <th class="bg-primary">Type</th>
                    <th class="bg-primary">Chargeur</th>
                    <th class="bg-primary">Height</th>
                    <th class="bg-primary">Length</th>
                <th class="bg-primary">Identification</th>
                <th class="bg-primary">Plomb</th>
                <th class="bg-primary">DommageName</th>
                <th class="bg-primary">Position</th>
                <th class="bg-primary">Anciennete</th>
                <th class="bg-primary">Dommage</th>
                <th class="bg-primary">Detail</th>
                <th class="bg-primary">Unite</th>
                    <th class="bg-primary">Edit</th>
                    <th class="bg-primary">Delete</th>
                    <th class="bg-primary">Preview Constat</th>
                    <th class="bg-primary">Download Constat</th>

                </tr>
                </thead>
                <tbody>
                </tbody>
            </table></div>
    </div>






</div>
@elseif($etat=='phase2')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card-header">phase2:liste Remorque </div>
        <div class="table-responsive">
            <table id="listeRemorques" class="table table-bordred table-striped">
                <thead>
                <tr>
                    <th class="bg-danger">Identification</th>
                    <th class="bg-danger">plomb</th>
                    <th class="bg-danger">Type</th>
                    <th class="bg-danger">Chargeur</th>
                    <th class="bg-danger">Vue1</th>
                    <th class="bg-danger">Vue2</th>
                    <th class="bg-danger">Vue3</th>
                    <th class="bg-danger">Vue4</th>
                    <th class="bg-danger">Scelle</th>
                    <th class="bg-danger">Edit</th>
                    <th class="bg-danger">Delete</th>
                    <th class="bg-danger">Preview Constat</th>
                    <th class="bg-danger">Download Constat</th>
                    <div class="pull-right action-buttons">
                </tr>
                </thead>
                     <tbody>
                     </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card-header">phase2:liste Containers </div>
                <table id="listContainer" class="table table-bordred table-striped">

                    <thead>
                        <tr>
                        <th class="bg-danger">Type</th>
                        <th class="bg-primary">Chargeur</th>
                        <th class="bg-danger">Height</th>
                        <th class="bg-danger">Length</th>
                    <th class="bg-primary">Identification</th>
                    <th class="bg-primary">Plomb</th>
                    <th class="bg-primary">DommageName</th>
                    <th class="bg-primary">Position</th>
                    <th class="bg-primary">Anciennete</th>
                    <th class="bg-primary">Dommage</th>
                    <th class="bg-primary">Detail</th>
                    <th class="bg-primary">Unite</th>
                        <th class="bg-danger">Edit</th>
                        <th class="bg-danger">Delete</th>
                        <th class="bg-danger">Preview Constat</th>
                        <th class="bg-danger">Download Constat</th>

                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
        </div>
    </div>


</div>
</div>
@elseif($etat=='terminé')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card-header">liste Remorque </div>
        <div class="table-responsive">
            <table id="listeRemorques" class="table table-bordred table-striped">
                <thead>
                <tr>
                    <th class="bg-danger">Identification</th>
                    <th class="bg-danger">plomb</th>
                    <th class="bg-danger">Type</th>
                    <th class="bg-danger">Chargeur</th>
                    <th class="bg-danger">Vue1</th>
                    <th class="bg-danger">Vue2</th>
                    <th class="bg-danger">Vue3</th>
                    <th class="bg-danger">Vue4</th>
                    <th class="bg-danger">Scelle</th>
                    <th class="bg-danger">Edit</th>
                    <th class="bg-danger">Delete</th>
                    <th class="bg-danger">Preview Constat</th>
                    <th class="bg-danger">Download Constat</th>
                    <div class="pull-right action-buttons">
                </tr>
                </thead>
                     <tbody>
                     </tbody>
            </table>
        </div>
    </div>
</div>

    <div class="row">
        <div class="col">
            <div class="card-header">liste Containers </div>
            <div class="table-responsive">
                <table id="listContainer" class="table table-bordred table-striped">

                    <thead>
                        <tr>
                        <th class="bg-danger">Type</th>
                        <th class="bg-primary">Chargeur</th>
                        <th class="bg-danger">Height</th>
                        <th class="bg-danger">Length</th>
                    <th class="bg-primary">Identification</th>
                    <th class="bg-primary">Plomb</th>
                    <th class="bg-primary">DommageName</th>
                    <th class="bg-primary">Position</th>
                    <th class="bg-primary">Anciennete</th>
                    <th class="bg-primary">Dommage</th>
                    <th class="bg-primary">Detail</th>
                    <th class="bg-primary">Unite</th>
                        <th class="bg-danger">Edit</th>
                        <th class="bg-danger">Delete</th>
                        <th class="bg-danger">Preview Constat</th>
                        <th class="bg-danger">Download Constat</th>

                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
        </div>
    </div>

    </div>


</div>
</div>
@endif





@endsection





@section('scripts')
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#listeRemorques').DataTable({
        headers: {
    'X-CSRF-Token': '{{ csrf_token() }}',
},
        processing: true,
        serverSide: true,
        ajax: '{{ route('Rlist',$idVoyage) }}',
        columns: [

            {data: 'identification', name: 'identification'},
            {data: 'plomb', name: 'plomb'},
             {data: 'type', name: 'type'},
            {data: 'chargeur', name: 'chargeur'},
            {data: 'vue1', name: 'vue1'},
            {data: 'vue2', name: 'vue2'},
            {data: 'vue3', name: 'vue3'},
            {data: 'vue4', name: 'vue4'},
            {data: 'SCELLE', name: 'SCELLE'},
            {data: 'Edit', name: 'Edit'},
            {data: 'Delete', name: 'Delete'},
            {data: 'Preview_Constat', name: 'Preview_Constat'},
            {data: 'Download_Constat', name: 'Download_Constat'},

        ],
        responsive: true,
    });
});

    $(document).ready(function() {
        $('#listContainer').DataTable({
            headers: {
        'X-CSRF-Token': '{{ csrf_token() }}',
    },
            processing: true,
            serverSide: true,
            ajax: '{{ route('containerList',$idVoyage) }}',
            columns: [

                 {data: 'type', name: 'Type'},
                 {data: 'chargeur', name: 'Chargeur'},
                 {data: 'height', name: 'Height'},
                 {data: 'length', name: 'Length'},
                 {data: 'indentification', name: 'Identification'},
                 {data: 'Plomb', name: 'Plomb'},
                 {data: 'DommageName', name: 'DommageName'},
                 {data: 'Position', name: 'Position'},
                 {data: 'Anciennete', name: 'Anciennete'},
                 {data: 'Dommage', name: 'Dommage'},
                 {data: 'Detail', name: 'Detail'},
                 {data: 'Unite', name: 'Unite'},
                 {data: 'Edit', name: 'Edit'},
                 {data: 'Delete', name: 'Delete'},
                 {data: 'Preview_Constat', name: 'Preview_Constat'},
                 {data: 'Download_Constat', name: 'Download_Constat'},
            ],
            responsive: true,
        });
    });
    </script>
@endsection
