@extends('layouts.app')
@push('head')
@livewireStyles
@endpush

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>  {{ $turma->turma }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('turmas.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Disciplina:</strong>
                {{ $turma->turma }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Turno:</strong>
                {{ $turma->turno }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Avaliações:</strong>
                {{ $turma->avaliacoes }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Criado em:</strong>
                {{ date_format($turma->created_at, 'jS M Y') }}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Alunos</h2>
            </div>
        </div>
    </div>
    @livewire('show-alunos', ['disciplina' => $turma], key($turma->id))
@endsection
@push('scripts')
@livewireScripts
@endpush
