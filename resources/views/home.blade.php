@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">ADM - Ceisc</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Seja bem-vindo, {{ Auth::user()->name }}

                    <ul class="list-group" style="margin-top:10px">
                        <li class="list-group-item">
                            <button class="btn btn-primary"><span class="badge">{{ $quantidadeUsuarios }}</span></button>
                            <strong>Usuários</strong>
                        </li>

                        <li class="list-group-item">
                            <button class="btn btn-success"><span class="badge">0</span></button>
                            <strong>Aulas</strong>
                        </li>

                        <li class="list-group-item">
                            <button class="btn btn-danger"><span class="badge">0</span></button>
                            <strong>Cursos</strong>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
