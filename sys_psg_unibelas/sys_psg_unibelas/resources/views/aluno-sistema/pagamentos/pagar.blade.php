@extends('layouts.app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pagamento de {{ $results->descricao }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">SIGPU</a></li>
                        <li class="breadcrumb-item active">Pagamentos</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-exclamation-triangle"></i>
                                Dados do Aluno
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <h3>Nome Completo: {{ $aluno[0]->nome_completo }}</h3>
                            <p>
                                Nº BI: {{ $aluno[0]->num_bi }} <br>
                                Nº Processo: {{ $aluno[0]->num_processo }} <br>
                                Curso: {{ $aluno[0]->curso }} <br>
                                Turma: {{ $aluno[0]->turma }} <br>
                                Turno: {{ $aluno[0]->turno }} <br>
                            </p>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

            </div>

            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-exclamation-triangle"></i>
                                Dados de Pagamento
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{ route('aluno.sistema.docs.pagar') }}" method="POST">
                                @csrf
                                <h4>Descrição: {{ $results->descricao }}</h4>

                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Valor a Pagar</label>
                                            <input type="text" name="valor_pagar" value="{{ $results->preco }}"
                                                class="form-control" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Quantidade</label>
                                            <input type="text" value="1" class="form-control" name="quantidade">
                                        </div>
                                    </div>
                                    <input type="hidden" name="aluno_id" value="{{ $aluno[0]->id }}">
                                    <input type="hidden" name="config_pagamento_id" value="{{$results->id}}">
                                    <input type="hidden" name="valor_pagar" value="{{ $results->preco }}">
                                    <div class="form-group">
                                        <button name="pagar" class="form-control btn btn-success">Confirmar
                                            Pagamento</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

            </div>
        </div>
    </section>

@endsection
