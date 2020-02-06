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
                            <a href="/post/{{$post->id}}" class="btn btn-primary btn-sm"><i class="fa fa-eye" alt="Show"></i></a>
                            <a href="/post/{{$post->id}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit" alt="Edit"></i></a>
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
                @include('post._form')
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
