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
    CONSUMIMOS DATOS DE API-REST: https://jsonplaceholder.typicode.com/users
    {{-- CÓDIGO EJEMPLO PARA CONSUMIR API-REST --}}
        @foreach ($usuariosArray as $usuario)
        <div>
            <ul class="list-group mt-2 mb-4">
                <li class="list-group-item active">USUARIO: {{$usuario['name']}}</li>
                <li class="list-group-item">MAIL: {{$usuario['email']}}</li>
                <li class="list-group-item">DIRECCIÓN: {{$usuario['address']['street']}}</li>

                {{-- //<td>{{ is_null($usuario['address']['street']->first()) ? '' : number_format($orders[$i]->simese->last()['simese'],'0', ',','.') }}</td> --}}

                @if ($usuario['address']['zipcode'] == '92998-3874')
                    CODIGO 92998-3874
                @else
                    OTRO CODIGO
                @endif

                <li class="list-group-item">CÓDZIP: {{$usuario['address']['zipcode']}}</li>
                <li class="list-group-item">TELÉFONO: {{$usuario['phone']}}</li>
                <li class="list-group-item">WEB: {{$usuario['website']}}</li>
        </div>
        @endforeach

        {{-- CONSUMIMOS DATOS DE BD-MYSQL
        @foreach ($usuariosArray2 as $usuario2)
        <div>
            <ul class="list-group mt-2 mb-4">
                <li class="list-group-item active">NRO CUENTA: {{$usuario2->'nro_cuenta'}}</li>
                <li class="list-group-item active">NRO CUENTA: {{$usuario2->'nom_cuenta'}}</li>
        </div>
        @endforeach --}}
</div>
@endsection
