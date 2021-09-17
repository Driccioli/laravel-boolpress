@extends('layouts.app')
@extends('layouts.error')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>

    @foreach ($allPosts as $post)
        <div class="card">
            <h2>{{$post->title}}</h2>
            <h6>{{$post->user}}</h6>
            {{-- <img class="pfp" src="{{$post->userpic}}" alt="profile pic"> --}}
            <p>{{$post->content}}</p>
        </div>
    @endforeach
@endsection
