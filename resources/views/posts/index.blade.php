@extends('layouts.myApp')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-center">
            <h3> Laravel 9 CRUD practice</h3>
            <div class="float-end">
                <a class="btn btn-success" href="{{ route('posts.create') }}">
                    Create new post
                </a>
            </div>
        </div>
    </div>
    @if($message=Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <table class="table table-borderd">
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th colspan="3">Actions</th>
        </tr>
        @foreach ($posts as $post )
        <tr>
            <td>{{ $post->title }}</td>
            <td>{{ $post->description }}</td>
            <td><a href="{{ route('posts.edit',$post->id) }}"class='btn btn-sm btn-primary'>Edit</a>  </td>
            <td><a href="{{ route('posts.show',$post->id) }}"class='btn btn-sm btn-info'>Show</a>  </td>
            <td>
                <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>  
    </div>
    @foreach ($ids as $id )
    {{ $id }} <br>
        
    @endforeach
</div>

@endsection