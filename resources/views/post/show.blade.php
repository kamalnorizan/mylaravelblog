@extends('layouts.app')

@section('head')

@endsection

@section('maintitle','Post Details')

@section('actionbutton')

@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{$post->title}}</h5>
            </div>
            <div class="ibox-content">
                <p>Author: {{$post->user->name}}</p>
                <p>{{$post->content}}</p>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Comments</h5>
            </div>
            <div class="ibox-content">
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
@endsection

@section('script')

@endsection
