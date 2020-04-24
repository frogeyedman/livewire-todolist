@extends('layouts.app')

@section('content')
    <div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">
            @livewire('todos')
        </div>
    </div>
@endsection
