@extends('layouts.app')

@section('content')

    <div>
        <a href="{{route('posts.store')}}"><-Back</a>
        <h2>{{$post->title}}</h2>
        <div class="user p-3">
            <img src="{{$post->userpic}}" alt="pfp">
            {{$post->user}}
        </div>
        
        <h6>Date posted: {{$post->created_at}}</h6>
        <p>{{$post->content}}</p>
    </div>

@endsection