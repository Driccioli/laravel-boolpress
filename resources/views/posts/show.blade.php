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
        @if ($post->created_at != $post->updated_at)
            <h6>Date updated: {{$post->updated_at}}</h6>
        @endif
        
        <p>{{$post->content}}</p>
        <a class="icon" href="{{route('posts.show', $post->id)}}"><i class="bi bi-zoom-in"></i></a>
        <a class="icon" href="{{route('posts.edit', $post)}}"><i class="bi bi-pencil-square"></i></a>
        <form action="{{route('posts.destroy', $post)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="icon"><i class="bi bi-trash"></i></button>
        </form>
    </div>

@endsection