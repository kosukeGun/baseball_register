@extends('../layouts/app')

@section('content')
<h1 class="d-flex justify-content-center">選手一覧</h1>
<div class="row">
@foreach($games as $game)
<div class="col-sm-3">
    <div class="card bg-light" style="text-align:center;">
        <div class="card-img-top">
            <h2>{{$game->tournament->name}}</h2>
        </div>
        <div class="card-body">
            <h3 class="card-title">{{$game->name}}</h5>
            <p class="card-text">{{$game->date}}</p>
            <a href="/games/{{$game->id}}" class="btn btn-primary">詳細</a>
        </div>
    </div>
</div>
@endforeach
</div>

@endsection