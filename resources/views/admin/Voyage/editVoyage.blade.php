@extends('layouts.templateback')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('modifier Voyage') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{action('voyageController@update',$idVoyage)}}">

                        @csrf
                        <div class="form-group row">
                            <label for="nomVoyage" class="col-md-4 col-form-label text-md-right">{{ __('Nom du voyage') }}</label>

                            <div class="col-md-6">
                                <input id="nomVoyage" type="text" class="form-control @error('nomVoyage') is-invalid @enderror" name="nomVoyage" value="{{ $voyage->nomVoyage }}" required >

                                @error('nomVoyage')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nomBateau" class="col-md-4 col-form-label text-md-right">{{ __('Nom du bateau') }}</label>

                            <div class="col-md-6">
                                <input id="nomBateau" type="text" class="form-control @error('nomBateau') is-invalid @enderror" name="nomBateau" value="{{ $voyage->nomBateau }}" required autocomplete="nomBateau">

                                @error('nomBateau')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="portDeChargement" class="col-md-4 col-form-label text-md-right">{{ __('Port de Chargement') }}</label>

                            <div class="col-md-6">
                                <select id="cin" type="text" class="form-control @error('portDeChargement') is-invalid @enderror" name="portDeChargement"  required autocomplete="portDeChargement">
                                    @foreach ( $countries_iso as $iso )
                                    <option  value="{{$iso->ISO}}" label="{{$iso->ISO}} :  {{$iso->Country}}" {{ ($iso->ISO == $voyage->portDeChargement)?'selected':'' }}> </option>
                                        @endforeach
                                    @error('portDeChargement')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="portDeDechargement" class="col-md-4 col-form-label text-md-right">{{ __('Port de dechargement') }}</label>

                            <div class="col-md-6">
                                <select id="portDeDechargement" type="text" class="form-control @error('portDeDechargement') is-invalid @enderror" name="portDeDechargement"  required autocomplete="portDeDechargement">
                                @foreach ( $countries_iso as $iso )
                                <option  value="{{$iso->ISO}}" label="{{$iso->ISO}} :  {{$iso->Country}} " {{ ($iso->ISO == $voyage->portDeDechargement)?'selected':'' }} > </option>
                                    @endforeach
                                @error('portDeDechargement')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="responsablePhase1" class="col-md-4 col-form-label text-md-right ">{{ __('Responsable Phase 1') }}</label>

                            <div class="col-md-6">
                                <input id="responsablePhase1" type="text" class="form-control search1" name="responsablePhase1"  value="{{ $voyage->responsablePhase1}}" required autocomplete="off">
                                @error('responsablePhase1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="responsablePhase2" class="col-md-4 col-form-label text-md-right">{{ __('Responsable Phase 2') }}</label>

                            <div class="col-md-6">
                                <input id="responsablePhase2" type="text" class="form-control search1" name="responsablePhase2"  value="{{ $voyage->responsablePhase2 }}" required autocomplete="off">
                                @error('responsablePhase2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>

                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <br>
                                <br>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Modifier') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var route = "{{ url('autocomplete') }}";
    $('.search1').typeahead({
        source:  function (term, process) {
        return $.get(route, { term: term }, function (data) {
                return process(data);
            });
        }
    });
</script>
@endsection
