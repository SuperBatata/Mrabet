@extends('layouts.templateback')
@section('content')

<div class="container-fluid " style="padding: 10px">
    <div class="row justify-content-center">
        <div class="col"></div>
        <div class="col justify-content-center">
            <a href="{{action('remorqueController@cRemorqueview',$idVoyage)}}" class="btn btn-primary">Add a new
                Remorque</a>
                
        </div>
        <div class="col justify-content-center">
            <div class="col justify-content-center">
                <a href="{{action('DommageController@index',$idVoyage)}}" class="btn btn-primary">Container List</a>
            </div>         
        </div><div class="col justify-content-center">
            <a href="{{action('remorqueController@validertache',$idVoyage)}}" class="btn btn-primary">validertache</a>
        </div></div>

    </div>
</div>


@if($etat=='phase1')

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card-header">phase1:liste Remorque </div>
                <table id="listeRemorques" class="table table-bordred table-striped">
                    
                    <thead>
                        <tr>
                        <th class="bg-danger">Identification</th>
                        <th class="bg-danger">Plomb</th>
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
                    <th class="bg-danger">Plomb</th>
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
</script>
@endsection