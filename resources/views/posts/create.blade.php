@extends('layouts.myApp')
@section('content')
<div class="container">
<div class="row">
    <div class="col-lg-12">
        <h3>Add new post</h3>
    </div>
    <div class="float-end">
        <a href="{{ route('posts.index') }}" class="btn btn-primary">Back</a>  
    </div>   
</div>
@if ($errors->any())
<div class="alert alert-danger">
<ul>
    @foreach ($errors->all() as $error )
        <li>{{ $error }}</li>    
    @endforeach
</ul>
</div>
@endif

<form action="{{ route('posts.store') }}"method="POST">
    @csrf
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <strong>Title</strong>
                <input type="text" name="title" id="title" class="form-control">
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <strong>Description</strong>
                <input type="text" name="description" id="description" class="form-control">

            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
</form>
</div>

