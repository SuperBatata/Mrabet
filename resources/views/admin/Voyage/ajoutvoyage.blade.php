    @extends('layouts.templateback')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ajouter Voyage') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('CVoyage') }}">

                        @csrf

                        <div class="form-group row">
                            <label for="nomVoyage" class="col-md-4 col-form-label text-md-right">{{ __('Nom du voyage') }}</label>

                            <div class="col-md-6">
                                <input id="nomVoyage" type="text" class="form-control @error('nomVoyage') is-invalid @enderror" name="nomVoyage" >

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
                                <input id="nomBateau" type="text" class="form-control @error('nomBateau') is-invalid @enderror" name="nomBateau" required autocomplete="nomBateau">

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
                                    <option disabled selected  > Liste des Iso </option>
                                    @foreach ( $countries_iso as $iso )
                                <option  value="{{$iso->ISO}}" label="{{$iso->ISO}} :  {{$iso->Country}} "> </option>
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
                                <select id="portDeDechargement" type="text" class="form-control @error('portDeDechargement') is-invalid @enderror" name="portDeDechargement" required autocomplete="portDeDechargement">
                                    <option disabled selected  > Liste des Iso </option>
                                    @foreach ( $countries_iso as $iso )
                                <option  value="{{$iso->ISO}}" label="{{$iso->ISO}} :  {{$iso->Country}}"> </option>
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
                            <label for="responsablePhase1" class="col-md-4 col-form-label text-md-right">{{ __('Initiales inspecteur Phase 1') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" id="search" name="responsablePhase1" required autocomplete="off" >

                                @error('responsablePhase1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="responsablePhase2" class="col-md-4 col-form-label text-md-right">{{ __('Initiales inspecteur Phase 2') }}</label>
                            <div class="col-md-6">
                                <input  type="text" class="form-control search" name="responsablePhase2" autocomplete="off">
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
                                    {{ __('Ajouter') }}
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
    $( "#search" ).autocomplete({
    source: "livesearch",
    minLength: 1,
    select:function(event,ui) {
        location.href = ui.item.link;
    }
});
</script>

@endsection

