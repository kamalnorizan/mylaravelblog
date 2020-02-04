@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @foreach ($posts as $post)
            <div class="card">
                <div class="card-header">{{$post->title}}</div>
                <div class="card-body">
                    {{Str::limit(strip_tags($post->content),50)}}
                <a href="/post/{{$post->id}}" class="btn btn-link">Read More...</a>
                </div>
            </div>
            <br>
            @endforeach
            <div class="d-flex justify-content-center">
                {{$posts->links()}}
            </div>
        </div>
    </div>
</div>
@endsection
