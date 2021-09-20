@extends('layouts.app')

@section('content')
    <div class="single-post p-5">
        <button type="button" class="btn btn-primary action-button">
            <a class="button-link back" href="{{route('posts.store')}}"><-Back</a>
        </button>
        <h2>{{$post->title}}</h2>
        <div class="user pt-3 pb-3">
            <img class="pfp" src="{{$post->userpic}}" alt="pfp">
            {{$post->user}}
        </div>
        
        <h6>Date posted: {{$post->created_at}}</h6>
        @if ($post->created_at != $post->updated_at)
            <h6>Date updated: {{$post->updated_at}}</h6>
        @endif
        
        <p>{{$post->content}}</p>
        <button type="button" class="btn btn-primary action-button">
            <a class="button-link" href="{{route('posts.edit', $post)}}"><i class="bi bi-pencil-square"></i></a>
        </button>
        {{-- <form action="{{route('posts.destroy', $post)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="icon"><i class="bi bi-trash"></i></button>
        </form> --}}
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary action-button" data-toggle="modal" data-target="#modal-{{$post->id}}">
            <i class="bi bi-trash"></i>
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="modal-{{$post->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content modal-dark">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Deleting post...</h5>
                </div>
                <div class="modal-body">
                Are you sure you want to delete this post?
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">WAIT NO-</button>
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