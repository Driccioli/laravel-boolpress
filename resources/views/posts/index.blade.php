@extends('layouts.app')
@extends('layouts.error')

@section('content')
    
    <div class="container">
        <a class="" href="{{route('posts.create')}}">Create Post</a>
        <table class="table">
            <thead>
                <tr>
                    {{-- <th scope="col">#</th> --}}
                    <th scope="col">Date posted</th>
                    <th scope="col">Title</th>
                    <th scope="col">User</th>
                    <th scope="col">User pfp</th>
                    <th scope="col">Content</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        {{-- <th scope="row">{{$post->id}}</th> --}}
                        <td>{{$post->created_at}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->user}}</td>
                        <td><img src="{{$post->userpic}}" alt="{{$post->user}} pfp"></td>
                        <td>{{$post->content}}</td>
                        <td>
                            <a class="icon" href="{{route('posts.show', $post->id)}}"><i class="bi bi-zoom-in"></i></a>
                            <a class="icon" href="{{route('posts.edit', $post)}}"><i class="bi bi-pencil-square"></i></a>
                            <form action="{{route('posts.destroy', $post)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="icon"><i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection