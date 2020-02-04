@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$post->title}}</div>

                <div class="card-body">
                    <p>Author: {{$post->user->name}}</p>
                   <p>{{$post->content}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

