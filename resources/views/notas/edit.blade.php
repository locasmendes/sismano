@extends('layouts.app')
@push('head')
@livewireStyles
@endpush
@section('content')
    @livewire('manipula-notas', ['alunoid' => $alunoid, 'disciplinaid' =>$disciplinaid])
@endsection
@push('scripts')
@livewireScripts
@endpush
