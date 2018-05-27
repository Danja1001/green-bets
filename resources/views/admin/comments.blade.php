@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Comment</th>
                                    <th scope="col">Publish</th>
                                    <th scope="col">UnPublish</th>
                                    <th>Type</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($comments as $comment)
                                <tr>
                                    <th scope="row">{!! $comment->id !!}</th>
                                    <td>{!! $comment->name !!}</td>
                                    <td>{!! $comment->email !!}</td>
                                    <td>{!! $comment->comment !!}</td>
                                    <td>
                                        <form method="post" action="{{route('publishComment',['id'=>$comment->id])}}">
                                            <button class="btn btn-success">Publish
                                            </button>
                                            @csrf
                                        </form>

                                    </td>
                                    <td>
                                        <form method="post" action="{{route('UnPublishComment',['id'=>$comment->id])}}">
                                            <button class="btn btn-danger">Un Publish</button>
                                            @csrf
                                        </form>
                                    </td>
                                    <td>
                                        @if($comment->type == true)
                                            <p>Visible(true)</p>
                                            @elseif($comment->type == false)
                                        <p>Visible(false)</p>
                                            @endif
                                    </td>
                                </tr>
                                    @endforeach
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
