@extends('layouts.app')

@section('content')
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title"></h3>
        </div>

        <div class="card-body">
            <form action="{{ route('admin.sistema.pagamento.propinas.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="preco">Valor da Porpina</label>
                    <input type="text" class="form-control" id="preco" name="preco"
                        placeholder="Informe o valor da propina">
                </div>
                <div class="form-group">
                    <label for="password">Curso</label>
                    <select name="curso_id" id="curso_id" class="form-control">
                        <option value="">Seleccione o curso</option>
                        @foreach ($cursos as $curso)
                            <option value="{{ $curso->id }}">{{ $curso->descricao }}</option>
                        @endforeach
                    </select>
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
                        <th scope="col">Curso</th>
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
