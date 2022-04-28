@extends('layouts.app')

@section('content')
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title"></h3>
        </div>

        <div class="card-body">
            <form action="{{ route('admin.sistema.pagamento.documentos.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <input type="text" class="form-control" id="descricao" name="descricao"
                        placeholder="Informe a descrição">
                </div>
                <div class="form-group">
                    <label for="preco">Preço</label>
                    <input type="text" class="form-control" id="preco" name="preco"
                        placeholder="Informe o valor">
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
    </div>

    <div class="card card-primary mt-3">
        <div class="card-header">
            <h3 class="card-title"></h3>
        </div>

        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Descrição</th>
                        <th scope="col">Preço</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($results as $item)
                        <tr>
                            <td>{{ $item->descricao }}</td>
                            <td>{{ $item->preco }}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
