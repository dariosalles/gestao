@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Menu') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                        <div class="row">

                            <div class="col-sm">
                                <span style="font-size: 0.7em; color: seagreen;">
                                    <a href="{{ route('pedidos') }}"><i class="fas fa-clipboard-list fa-9x"></i></a>
                                </span>
                                <h3>Pedidos</h3>
                            </div>

                            <div class="col-sm">
                                <span style="font-size: 0.7em; color: seagreen;">
                                        <a href="{{ route('clientes') }}"><i class="fas fa-user-friends fa-9x"></i></a>
                                </span>
                                <h3>Clientes</h3>
                            </div>

                            <div class="col-sm">
                                <span style="font-size: 0.7em; color: seagreen;">
                                        <a href="{{ route('produtos') }}"><i class="fas fa-cube fa-9x"></i></a>
                                </span>
                                <h3>Produtos</h3>
                            </div>

                            <div class="col-sm">
                                <span style="font-size: 0.7em; color: seagreen;">
                                        <a href="{{ route('relatorios') }}"><i class="fas fa-chart-line fa-9x"></i></a>
                                </span>
                                <h3>Relatórios</h3>
                            </div>

                       </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
