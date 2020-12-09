@extends('layouts.templateback')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users</div>

                <div class="card-body ">
               <table id="users" class="table table-broidered table-striped">
                 <thead>
                     <tr>
                   <th >name </th>
                   <th>Lastname</th>
                   <th >Name_id</th>
                   <th >Email</th>
                      <th > Edit</th>
                      <th > DELETE  </th>
                     </tr>
                 </thead>

                      <tbody>
                   </tbody></table>
                </div></div>
                         
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#users').DataTable({
        headers: {
    'X-CSRF-Token': '{{ csrf_token() }}',
},
        processing: true,
        serverSide: true,
        ajax: '{{ url('admin/users') }}',
        columns: [
            {data: 'name', name: 'name'},
            {data: 'lastname', name: 'lastname'},
            {data: 'name_id', name: 'name_id'},
            {data: 'email', name: 'email'},
            {data: 'Edit', name: 'Edit'},
            {data: 'Delete', name: 'Delete'},
            
        ]
    });
});
</script>
@endsection