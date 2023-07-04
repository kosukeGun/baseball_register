@extends('../layouts/app')

@section('content')
<h1 class="d-flex justify-content-center">試合登録</h1>
<form action="/games" method="POST">
    @csrf
    <div class="user-group">
        <input type="hidden" name="game[user_id]" value="{{$user->id}}">
    </div>
    <div class="tournament-group d-flex justify-content-center">
        <div class="row">
            <label for="tournament">大会名</label>
            <select class="form-control" name="game[tournament_id]">
                @foreach($tournaments as $tournament)
                    <option value="{{$tournament->id}}">{{$tournament->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="game-group d-flex justify-content-center">
        <div class="row">
            <label for="game">試合</label>
            <input type="text" name="game[name]" placeholder="準々決勝第3試合">
        </div>
    </div>
    <div class="date-group d-flex justify-content-center">
        <div class="row">
            <label for="date">日付</label>
            <input type="date" name="game[date]" value="{{$date}}">
        </div>
    </div>
    <div class="group-button d-flex justify-content-center">
        <button class="btn btn-success" type="submit">登録</button>
    </div>
</form>

@endsection