@extends('layouts.app')
@extends('layouts.error')

@section('content')
    <form action="{{route('posts.store')}}" method="post">

        @csrf

        <label for="title">Title</label>
        <input type="text" name="title" id="title">

        <label for="user">User</label>
        <input type="text" name="user" id="user">

        <label for="user">User Profile pic</label>
        <input type="text" name="userpic" id="userpic">

        <label for="content">Content</label>
        <textarea name="content" id="content" rows="4" cols="50">
            
        </textarea>

        <input type="submit" value="Submit">
    </form>    
@endsection