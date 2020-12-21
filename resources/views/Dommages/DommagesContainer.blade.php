@extends('layouts.templateback')
@section('content')


<div class="container">
<div class="row">
    <i class="fab fa-accessible-icon">test </i>
    <a  href="{{route('saisieDommage',$id_container)}}" class="btn-lg btn-outline-info " >Add Dommage</a>

</div>
</div>
 <div class="row">
    <div class="col">

            <div class="card-header" style="background-color: blue">liste Containers </div>
            <div class="table-responsive">

    <table class="table table-striped " id="listeDommages">
        <thead>
            <th>Plomb</th>
            <th>Identification</th>
            <th>Type</th>
            <th>Dommage Name</th>
            <th>Position </th>
            <th>Anciennete</th>
            <th>Dommage</th>
            <th>Detail </th>
            <th>Unite</th>
            <th>Longeur</th>
            <th>Largeur</th>
            <th>Etat</th>
            <th>Dommage Image</th>
            <th>Delete</th>
        </thead>



        <tbody>


        </tbody>



    </table>
            </div>
        </div>
 </div>
</div>



@endsection

@section('scripts')
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">

$(document).ready(function() {
    $('#listeDommages').DataTable({
        headers: {
    'X-CSRF-Token': '{{ csrf_token() }}',
},
        processing: true,
        serverSide: true,
        ajax: '{{ route('listeDommagesContainer',$id_container) }}',
        columns: [

            {data: 'Plomb', name: 'Plomb'},
            {data: 'indentification', name: 'Identification'},
             {data: 'type', name: 'Type'},
             {data: 'DommageName', name: 'DommageName'},
             {data: 'Position', name: 'Position'},
             {data: 'Anciennete', name: 'Anciennete'},
             {data: 'Dommage', name: 'Dommage'},
             {data: 'Detail', name: 'Detail'},
             {data: 'Unite', name: 'Unite'},

             {data: 'Longeur', name: 'Longueur'},
             {data: 'Largeur', name: 'Largeur'},
             {data: 'etat', name: 'Etat'},
             {data: 'dommageImage', name: 'Image'},
             {data: 'Delete', name: 'Delete'},

        ],
        responsive: true,
    });
});
</script>
@endsection
