
@extends('layout.layout')
@section('content')
<h1>Add New Description</h1>
<hr>
<form action="/gitls" method="post">
{{ csrf_field() }}
    <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" class="form-control" id="name"  name="name">
    </div>
    <div class="form-group">
        <label for="description">Member Description</label>
        <input type="text" class="form-control" id="description" name="description">
    </div>
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection