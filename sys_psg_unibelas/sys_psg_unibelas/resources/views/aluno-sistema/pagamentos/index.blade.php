@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12 offset-md-2 ">
            <div class="accordion mt-3" id="accordionExample">

                @foreach ($results as $item)
                    <div class="card">
                        <div class="card-header" id="heading{{ $item->id }}">
                            <h5 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                    data-target="#collapse{{ $item->id }}" aria-expanded="true"
                                    aria-controls="collapse{{ $item->id }}">
                                    {{ $item->descricao }}
                                </button>
                            </h5>
                        </div>

                        <div id="collapse{{ $item->id }}" class="collapse show"
                            aria-labelledby="heading{{ $item->id }}" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>
                                    Preço: {{ $item->preco }}
                                    <a href="{{ route('aluno.sistema.formpagar', [$item->id]) }}" class="btn btn-success">Pagar</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="alert alert-primary">
                    <h4>Pagamento de Propinas</h4>
                    <a href="{{ route('aluno.sistema.formpagar.propinas') }}" class="btn btn-success">Pagar</a>
                </div>


            </div>
        </div>
    </div>

@endsection
