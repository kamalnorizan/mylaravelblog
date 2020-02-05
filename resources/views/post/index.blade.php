@extends('layouts.app')

@section('head')

@endsection

@section('maintitle','Posts')

@section('actionbutton')

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
@endsection

@section('script')

@endsection
