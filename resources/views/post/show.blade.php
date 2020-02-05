@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{$post->title}}</div>

                <div class="card-body">
                    <p>Author: {{$post->user->name}}</p>
                    <p>{{$post->content}}</p>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">Comments</div>

                <div class="card-body">
                    @foreach ($post->comments as $comment)
                    <p>{{$comment->user->name}}<br>
                        <small>{{\Carbon\Carbon::parse($comment->created_at)->format('d-m-Y')}}</small>
                        <br>
                        {{$comment->comment}}
                    </p>
                    <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
