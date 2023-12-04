@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <br><br>
    CONSUMIMOS DATOS DE BD-MYSQL: senasa
    {{-- CÓDIGO EJEMPLO PARA CONSUMIR API-REST --}}
        @foreach ($planes as $plan)
        <div>
            <ul class="list-group mt-2 mb-4">
                <li class="list-group-item active">NRO CUENTA: {{$plan->nro_cuenta}}</li>
                <li class="list-group-item active">NRO CUENTA: {{$plan->nom_cuenta}}</li>
        </div>
        @endforeach
</div>
@endsection
