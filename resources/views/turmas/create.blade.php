@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Adicionar Disciplina</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('turmas.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('turmas.store') }}" method="POST" >
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Disciplina:</strong>
                    <input type="text" name="turma" class="form-control" placeholder="Nome da disciplina">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="turno"><strong>Período:</strong></label>
                    <select class="form-control" name="turno" id="turno">
                        <option value="matutino">Matutino</option>
                        <option value="vespertino">Vespertino</option>
                        <option value="noturno">Noturno</option>
                        <option value="integral">Integral</option>
                    </select>
                  </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Avaliações:</strong>
                    <input type="text" name="avaliacoes" class="form-control" placeholder="Avaliações">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
