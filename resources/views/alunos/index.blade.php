@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Alunos cadastrados</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('alunos.create') }}" title="Cadastrar um aluno"> <i class="fas fa-plus-circle"></i>
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
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Disciplina</th>
            <th>Cadastrado em</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($alunos as $aluno)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $aluno->firstName }}</td>
                <td>{{ $aluno->lastName }}</td>
                <td><a href="{{ route('turmas.show', $aluno->turmaId ) }}">{{$disciplinas[$aluno->turmaId]->turma}}</a></td>
                <td>{{ date_format($aluno->created_at, 'j/m/Y') }}</td>
                <td>
                    <form action="{{ route('alunos.destroy', $aluno->id) }}" method="POST">

                        <a href="{{ route('alunos.show', $aluno->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('alunos.edit', $aluno->id) }}">
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $alunos->links() !!}

@endsection
