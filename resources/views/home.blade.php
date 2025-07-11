@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>{{ __('Dashboard') }}</span>
                    <a href="{{ route('tareas.create') }}" class="btn btn-primary btn-sm">Crear Tarea</a>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <a href="{{ route('tareas.index') }}" class="btn btn-primary">
                        Ir a Tareas
                    <a>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
