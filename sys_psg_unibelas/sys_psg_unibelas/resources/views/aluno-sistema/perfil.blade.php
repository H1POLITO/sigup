@extends('layouts.app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ Auth::user()->nome_completo }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">SIGPU</a></li>
                        <li class="breadcrumb-item active">Perfil</li>
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
                                {{ Auth::user()->nome_completo }}
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
                                Email: {{ $aluno[0]->email }} <br>
                            </p>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>

@endsection

