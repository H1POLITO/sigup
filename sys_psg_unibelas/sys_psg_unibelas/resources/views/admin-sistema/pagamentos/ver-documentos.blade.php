@extends('layouts.app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pagamentos</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.sistema.dashboardPainel') }}">SIGPU</a></li>
                        <li class="breadcrumb-item active">pagos</li>
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
                                <i class="fas fa-credi-card"></i>
                            Pagamentos Efectuados
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Estudante</th>
                                        <th>Descrição</th>
                                        <th>Valor Pago</th>
                                        <th>Data e Hora</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($results as $item)
                                        <tr>
                                            <td>{{ $item->nome_completo }}</td>
                                            <td>{{ $item->descricao }}</td>
                                            <td>{{ $item->valor_pagar }}</td>
                                            <td>{{ $item->created_at }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
@endsection
