@extends('layouts.main')

@section('title', 'Home')

@section('content')

<section class='container col-sm-9'>
    @if (session('success'))
    <div class="alert alert-success mt-3">
        {{ session('success') }}
    </div>
    @endif
    <h1 class="title text-center mt-5">Seja Bem Vindo!</h1>
</section>

@endsection