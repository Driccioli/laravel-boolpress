@extends('layouts.app')

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
        <input type="text" name="content" id="content">

        <input type="submit" value="Submit">
    </form>    
@endsection