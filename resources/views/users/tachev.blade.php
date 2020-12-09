@extends('layouts.templateback')
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header" style="background :rgb(45, 192, 197)" >tache en valider</div>
            <div class="table-responsive">
                <table id="taches_valider" class="table table-bordred table-striped">
                    @if(session('success'))
                    <div class="alert alert-success">
                    </div>
                    @endif
                    <thead>
                    <tr>
                        <th scope="col">nom voyage</th>
                        <th>nom Bateau</th>
                        <th>port De Chargement</th>
                        <th>port De Dechargement</th>
                        <th>date De Chargement</th>
                        <th>date De Dechargement</th>
                        <th>etat</th>
                        <th>Action</th>
                        
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
    $('#taches_valider').dataTable(
      {
        headers: {
    'X-CSRF-Token': '{{ csrf_token() }}',
},
        processing: true,
        serverSide: true,
        ajax: '{{ route('tachev') }}',
        columns: [
            {data: 'nomVoyage', name: 'nomVoyage'},
            {data: 'nomBateau', name: 'nomBateau'},
            {data: 'portDeChargement', name: 'portDeChargement'},
            {data: 'portDeDechargement', name: 'portDeDechargement'},
            {data: 'datechargement', name: 'datechargement'},
            {data: 'datedechargement', name: 'datedechargement'},
            {data: 'etat', name: 'etat'},
            {data: 'Action', name: 'Action'},
            
        ],
        responsive: true,
    });

  
  

});
</script>
@endsection