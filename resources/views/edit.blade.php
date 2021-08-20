
@extends('layout.layout')
@section('content')

<h1>Edit Description</h1>
<hr>
<form action="{{url('girls', [$girls->id])}}" method="POST">
    <input type="hidden" name="_method" value="PUT">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" value="{{$girls->name}}" class="form-control" id="name"  name="name" >
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" value="{{$girls->description}}" class="form-control" id="description" name="description" >
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