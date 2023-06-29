@extends('../layouts/app')

@section('content')

<div class="name-group" style="text-align:center;">
    <h1>{{$game->tournament->name}}</h1>
</div>
<div class="game-group" style="text-align:center;">
    <h3>{{$game->name}}</h3>
</div>
<div class="date-group" style="text-align:center;">
    <h5>{{$game->date}}</h5>
</div>
<div class="return-button" style="text-align:center;">
    <a type="button" class="btn btn-dark" href="/games">戻る</a>
</div>

@endsection