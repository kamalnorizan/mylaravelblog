@extends('layouts.app')

@section('head')

@endsection

@section('maintitle','Edit')

@section('actionbutton')

@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Edit Post </h5>
            </div>
            <div class="ibox-content">
                {!! Form::model($post, ['route' => ['post.update', $post->id], 'method' => 'PUT']) !!}

                    @include('post._form')

                    <div class="btn-group pull-right">

                        {!! Form::submit("Update", ['class' => 'btn btn-primary']) !!}
                    </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

@endsection
