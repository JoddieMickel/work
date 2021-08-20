
@extends('layout.layout')
@section('content')

<h1>Description {{ $girls->name }}</h1>
<div class="jumbotron text-center">
    <p>
        <strong>Name:</strong> {{ $girls->name }}<br>
        <strong>Description:</strong> {{ $girls->description }}
    </p>
</div>
@endsection