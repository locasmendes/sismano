@extends('layouts.sismano')
@push('style')
    @livewireStyles
@endpush
@section('body')
<div class="row justify-content-center" style="padding-top: 15vh;">
    <div class="col-md-4" style="    border-style: solid;
    border-width: thin;
    border-radius: 32px;
    border-color: white;
    box-shadow: 0 0 3px 1px #0000000f;
    padding: 10vh;">
        @livewire('indexwrapper', ['action' => true])
    </div>
</div>
@endsection
@push('scripts')
    @livewireScripts
@endpush
