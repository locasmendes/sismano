@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>  {{ $aluno->firstName }} {{ $aluno->lastName }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('alunos.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cadastrado em:</strong>
                {{ date_format($aluno->created_at, 'j/m/Y') }}
            </div>
        </div>
    </div>
    <table class="table table-bordered table-responsive-lg">
    <tr>
        <th>Disciplina</th>
    <th colspan="{{$disciplinas[$aluno->turmaId]->avaliacoes}}">Notas</th>
    </tr>
    <tr>
        <td><a href="{{ route('turmas.show', $aluno->turmaId ) }}">{{$disciplinas[$aluno->turmaId]->turma}}</a></td>
        <td>{{rand(5, 10)}}</td>
        <td>{{rand(5, 10)}}</td>
        <td>{{rand(5, 10)}}</td>
    </tr>
    </table>
@endsection
