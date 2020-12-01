@extends('layouts.sismano')
@section('body')
    <div class="container">
        <div class="row">
            <div class="col">
                <h3>Turmas</h3>
            </div>
        </div>
        <div class="row">
            <div class="col">Código</div>
            <div class="col">Curso</div>
            <div class="col">Turma</div>
            <div class="col">Turno</div>
            <div class="col">Alunos</div>
        </div>
        @if ($turmas)
            @foreach ($turmas as $turma)
                    <a href="{{ route('turma-view', ['idturma' => $turma->id]) }}" class="row">
                        <div class="col">{{ $turma->id }}</div>
                        <div class="col">{{ $turma->curso }}</div>
                        <div class="col">{{ $turma->turma }}</div>
                        <div class="col">{{ $turma->turno }}</div>
                        <div class="col">{{ rand(6, 19) }}</div>
                    </a>
            @endforeach
        @else
            <div>
                Nenhuma turma ainda
            </div>
        @endif
    </div>
@endsection
