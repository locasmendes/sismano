@extends('layouts.app')
@push('head')
    @livewireStyles
@endpush
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Adicionar Aluno</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('alunos.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
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
    <form action="{{ route('alunos.store') }}" method="POST" >
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome:</strong>
                    <input type="text" name="firstName" class="form-control" placeholder="Nome do aluno">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Sobrenome:</strong>
                    <input type="text" name="lastName" class="form-control" placeholder="Sobrenome do aluno">
                </div>
            </div>
            @livewire('select-turma')
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
@push('scripts')
    @livewireScripts
@endpush
