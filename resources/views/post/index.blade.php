@extends('layouts.app')

@section('head')

@endsection

@section('maintitle','Posts')

@section('actionbutton')
<a class="btn btn-primary btn-sm" data-toggle="modal" href='#create_modal'>Create Post</a>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Post List</h5>
            </div>
            <div class="ibox-content">
                <table class="table table-hover">
                    <tr>
                        <td>
                            #
                        </td>
                        <td>
                            Title
                        </td>
                        <td>
                            Publish Date
                        </td>
                        <td>
                            Author
                        </td>
                        <td>
                            Action(s)
                        </td>
                    </tr>
                    @foreach ($posts as $key=>$post)
                    <tr>
                        <td>
                            {{$key+1+(10*($posts->currentPage()-1))}}
                        </td>
                        <td>
                            {{$post->title}}
                        </td>
                        <td>
                            {{$post->publish_at}}
                        </td>
                        <td>
                            {{$post->user->name}}
                        </td>
                        <td>
                            <a href="/post/{{$post->id}}" class="btn btn-primary btn-sm">Show</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
                <div class="d-flex justify-content-center">
                    {{$posts->links()}}
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="create_modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Create New Post</h4>
            </div>
            {!! Form::open(['method' => 'POST', 'route' => 'post.store']) !!}
            <div class="modal-body">
                {!! Form::hidden('user_id', Auth::user()->id) !!}

                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                    {{-- {!! Form::label('title', 'Title') !!} --}}
                    {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required', 'id'=>'mytitleid', 'placeholder'=>'Sila masukkan tajuk post','disabled']) !!}
                    <small class="text-danger">{{ $errors->first('title') }}</small>
                </div>
                <div class="form-group{{ $errors->has('publish_at') ? ' has-error' : '' }}">
                    {!! Form::label('publish_at', 'Publish Date') !!}
                    {!! Form::date('publish_at',date('Y-m-d'), ['class' => 'form-control', 'required' => 'required'])
                    !!}
                    <small class="text-danger">{{ $errors->first('publish_at') }}</small>
                </div>
                <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                    {!! Form::label('content', 'Content') !!}
                    {!! Form::textarea('content', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    <small class="text-danger">{{ $errors->first('content') }}</small>
                </div>
            </div>
            <div class="modal-footer">
                {{-- <div class="text-center"> --}}
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                {{-- </div> --}}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection

@section('script')

@endsection
