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
                                    <th scope="col">Proof</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($proofs as $proof)
                                    <tr>
                                        <th scope="row">{!! $proof->id !!}</th>
                                        <td><img src="/public/images/{!! $proof->img !!}" alt="Proof" class="img-thumbnail"></td>
                                        <td>
                                           <form method="post" action="{{route('publishProofs',['id'=>$proof->id])}}">
                                               <button class="btn btn-success">Publish</button>
                                               @csrf
                                           </form>
                                        </td>
                                        <td>
                                            <form method="post" action="{{route('UnPublishProofs',['id'=>$proof->id])}}">
                                                <button class="btn btn-danger">Un Publish</button>
                                                @csrf
                                            </form>
                                        </td>
                                        <td>
                                           @if($proof->type == true)
                                               <p>Visible(true)</p>
                                               @elseif($proof->type == false)
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
