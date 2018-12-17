@extends('layouts.main')

@section('content')
<div class="container">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif

        <example-component></example-component>
    
</div>
@endsection
