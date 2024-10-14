@extends('layouts.myApp')
@section('content')
<div class="container">
   <h3>Details page</h3>
   <a href="{{ route('posts.index') }}" class="btn btn-primary float-end">Back</a>
   <table class="table table-hover-bordered">
        <tr>
            <td>Title:</td> <td>{{ $post->title }}</td>
        </tr>
        <tr>
            <td>Description:</td> <td>{{ $post->description }}</td>
        </tr>
        
   </table>
</div>
@endsection

