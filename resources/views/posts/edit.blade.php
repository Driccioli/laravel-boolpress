@extends('layouts.app')
@extends('layouts.error')

@section('content')
    <form action="{{route('posts.update', $post)}}" method="POST">

        @csrf
        @method('PUT')

        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{$post->title}}">

        <label for="user">User</label>
        <input type="text" name="user" id="user" value="{{$post->user}}">

        <label for="user">User Profile pic</label>
        <input type="text" name="userpic" id="userpic" value="{{$post->userpic}}">

        <label for="content">Content</label>
        <textarea name="content" id="content" rows="4" cols="50">
        {{$post->content}}
        </textarea>

        <input type="submit" value="Submit">
    </form>    
@endsection