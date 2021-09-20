@extends('layouts.app')
@extends('layouts.error')

@section('content')
    <form class="p-5 single-post" action="{{route('posts.store')}}" method="post">

        @csrf
        <button type="button" class="btn btn-primary action-button">
            <a class="button-link back" href="{{route('posts.store')}}"><-Back</a>
        </button>

        <div class="form-group mt-2">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" id="title">
        </div>

        <div class="form-group">
            <label for="user">User</label>
            <input class="form-control" type="text" name="user" id="user">
        </div>

        <div class="form-group">
            <label for="user">User Profile pic (must be an URL)</label>
            <input class="form-control" type="text" name="userpic" id="userpic">
        </div>
        
        <div class="form-group">
            <label for="content">Post Content</label>
            <textarea class="form-control" name="content" id="content" rows="4">
            
            </textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>    
@endsection