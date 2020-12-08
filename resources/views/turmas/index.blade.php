@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Disciplinas Cadastradas</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('turmas.create') }}" title="Cadastrar uma turma"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Disciplina</th>
            <th>Turno</th>
            <th>Alunos</th>
            <th>Criada em</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($turmas as $turma)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $turma->turma }}</td>
                <td>{{ $turma->turno }}</td>
                <td>{{ $turma->numeroalunos }}</td>
                <td>{{ date_format($turma->created_at, 'j/m/Y') }}</td>
                <td>
                    <form action="{{ route('turmas.destroy', $turma->id) }}" method="POST">

                        <a href="{{ route('turmas.show', $turma->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('turmas.edit', $turma->id) }}">
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>

                        @csrf
                        @method('DELETE')
                        @if ($turma->numeroalunos > 0)
                        <button type="submit" style="border: none; background-color:transparent;"
                            disabled
                            title="Você precisa remover os alunos primeiro"
                            >
                        <i class="fas fa-trash fa-lg text-muted"></i>
                        </button>
                        @else
                        <button type="submit" style="border: none; background-color:transparent;"
                        title="Remover turma"
                        >
                    <i class="fas fa-trash fa-lg text-danger"></i>
                    </button>
                        @endif
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $turmas->links() !!}

@endsection
