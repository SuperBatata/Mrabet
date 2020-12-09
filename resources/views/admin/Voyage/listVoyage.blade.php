@extends('layouts.templateback')
@section('content')

<div class="row ">
    <div class="col">

        @if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif
        <div class="card">
            <div class="card-header">Voyages</div>
<table id="mytable" class="table table-responsive table-bordered table-striped">

    <thead>
    <tr>
        <th scope="col">Navire</th>
        <th>Voyage</th>
        <th>port De Chargement</th>
        <th>port De Dechargement</th>
        <th>Date De Chargement</th>
        <th>Date De Dechargement</th>
        <th>etat</th>
        <th>Edit</th>
        <th>Delete</th>
   
    </tr>
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
    $('#mytable').DataTable({
        headers: {
    'X-CSRF-Token': '{{ csrf_token() }}',
},
        processing: true,
        serverSide: true,
        ajax: '{{ route('CVoyageList') }}',
        columns: [
            {data: 'nomVoyage', name: 'nomVoyage'},
            {data: 'nomBateau', name: 'nomBateau'},
            {data: 'portDeChargement', name: 'portDeChargement'},
            {data: 'portDeDechargement', name: 'portDeDechargement'},
            {data: 'datechargement', name: 'datechargement'},
            {data: 'datedechargement', name: 'datedechargement'},
            {data: 'etat', name: 'etat'},
            {data: 'Edit', name: 'Edit'},
            {data: 'Delete', name:'Delete'},
        ]
    });
});
</script>
@endsection