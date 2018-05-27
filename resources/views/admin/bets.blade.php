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
                            @foreach($bets as $bet)
                                <form method="post" action="{{route('updateBet',['id'=>$bet->id])}}">
                                    <div class="form-group">
                                        <label for="title">Title bet</label>
                                        <input type="text" class="form-control" id="title" name="title" value="{!! $bet->title !!}" required>

                                    </div>
                                    <div class="form-group">
                                        <label for="price">Price bet</label>
                                        <input type="number" class="form-control" id="price" name="price" value="{!! $bet->price !!}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description bet</label>
                                        <input type="text" class="form-control" id="description" name="description" value="{!! $bet->description !!}" required>
                                    </div>
                                    <button class="btn btn-success btn-lg">Updatee</button>
                                    {{csrf_field()}}
                                </form>
                            @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
