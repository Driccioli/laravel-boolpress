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
        {{-- <form action="{{route('posts.destroy', $post)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="icon"><i class="bi bi-trash"></i></button>
        </form> --}}
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="bi bi-trash"></i>
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Deleting post...</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                Are you sure you want to delete this post?
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">WAIT NO-</button>
                <form action="{{route('posts.destroy', $post)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-primary">I'm sure. Delete it!</button>
                </form>
                </div>
            </div>
            </div>
        </div>
    </div>

@endsection