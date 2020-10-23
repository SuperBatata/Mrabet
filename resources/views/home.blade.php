@extends('layouts.templateback')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-12">
            <div class="card">
               

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as  <b> {{ Auth::user()->name }} <b>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
