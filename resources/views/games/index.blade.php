@extends('../layouts/app')

@section('content')
<h1 class="d-flex justify-content-center">試合一覧</h1>
<div class="row">
@foreach($games as $game)
<div class="col-sm-12">
    <div class="card bg-light" style="text-align:center;">
        <button onclick="location.href='/games/{{$game->id}}'" class="btn btn-primary">
            <div class="card-img-top">
                <h2>{{$game->tournament->name}}</h2>
            </div>
            <div class="card-body">
                <h3 class="card-title">{{$game->name}}</h5>
                <p class="card-text">{{$game->date}}</p>
            </div>
        </button>
    </div>
</div>
@endforeach
</div>
<div class="return-button" style="text-align:center;">
    <a type="button" class="btn btn-dark" href="/home">戻る</a>
</div>

@endsection