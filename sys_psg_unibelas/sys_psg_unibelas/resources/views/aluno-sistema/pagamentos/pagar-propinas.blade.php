@extends('layouts.app')

@section('content')

    <?php

    $c_desab = '';

    $c_desab = verificaUltimoMes($ultimo_mes);

    function verificaUltimoMes($mes)
    {
        $i = 0;
        $c_desab = ['', '', '', '', '', '', '', '', '', '', '', ''];

        for ($i = 0; $i < $mes - 1; $i++) {
            $c_desab[$i] = 'disabled';
        }

        for ($i = $mes; $i < 12; $i++) {
            $c_desab[$i] = 'disabled';
        }

        return $c_desab;
    }

    ?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pagamento de Propinas</h1>
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
                            <form action="{{ route('aluno.sistema.pagamentos.propinas.pagar') }}" method="POST">
                                @csrf
                                <h4>Descrição: Pagamento de Propinas</h4>

                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Valor Mensal</label>
                                            <input type="text" value="{{ $results[0]->preco }}" class="form-control"
                                                disabled>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" value="1" class="form-control" name="quantidade">
                                <hr>
                                <div class="form-row">
                                    <div class="col-md-3">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" id="Check1" name="Check1" value="Janeiro"
                                                    <?php echo $c_desab[0]; ?> onchange="mostraC();">
                                                Janeiro
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" id="Check2" name="Check2" value="Fevereiro"
                                                    <?php echo $c_desab[1]; ?> onchange="mostraC1();">
                                                Fevereiro
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" id="Check3" name="Check3" value="Março"
                                                    <?php echo $c_desab[2]; ?> onchange="mostraC2();">
                                                Março
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" id="Check4" name="Check4" value="Abril"
                                                    <?php echo $c_desab[3]; ?> onchange="mostraC3();">
                                                Abril
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" id="Check5" name="Check5" value="Maio"
                                                    <?php echo $c_desab[4]; ?> onchange="mostraC4();">
                                                Maio
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" id="Check6" name="Check6" value="Junho"
                                                    <?php echo $c_desab[5]; ?> onchange="mostraC5();">
                                                Junho
                                            </label>
                                        </div>

                                    </div>

                                    <div class="col-md-3">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" id="Check7" name="Check7" value="Julho"
                                                    <?php echo $c_desab[6]; ?> onchange="mostraC6();">
                                                Julho
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" id="Check8" name="Check8" value="Agosto"
                                                    <?php echo $c_desab[7]; ?> onchange="mostraC7();">
                                                Agosto
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" id="Check9" name="Check9" value="Setembro"
                                                    <?php echo $c_desab[8]; ?> onchange="mostraC8();">
                                                Setembro
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" id="Check10" name="Check10" value="Outubro"
                                                    <?php echo $c_desab[9]; ?> onchange="mostraC9();">
                                                Outubro
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" id="Check11" name="Check11" value="Novembro"
                                                    <?php echo $c_desab[10]; ?> onchange="mostraC10();">
                                                Novembro
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" id="Check12" name="Check12" value="Dezembro"
                                                    <?php echo $c_desab[11]; ?> onchange="mostraC11();">
                                                Dezembro
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h4>Total a Pagar: <span id="total"> </span></h4>
                                        </div>
                                    </div>

                                </div>

                                <input type="hidden" id="mes" value="" name="mes" class="form-control">
                                <input type="hidden" id="qtdmes" value="" name="qtdmes" class="form-control">
                                <input type="hidden" id="meses" value="" name="meses">
                                <input type="hidden" name="aluno_id" value="{{ $aluno[0]->id }}">
                                <input type="hidden" name="config_propina_id" value="{{ $results[0]->id }}">
                                <input type="hidden" name="valor_pagar" value="{{ $results[0]->preco }}" id="valor_pagar">

                                <div class="form-group">
                                    <button name="pagar" class="form-control btn btn-success">Confirmar
                                        Pagamento</button>
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

@section('script-bottom')
    <script src="{{ URL::asset('assets/js/aluno-sistema/pagamentos/pagar-propinas.js') }}"></script>
@endsection
