@extends('../layouts/app')

@section('content')
<h1 class="d-flex justify-content-center">成績登録</h1>
<form action="/games/create" method="POST">
    @csrf
    <div class="user-group">
        <input type="hidden" name="result[game_id]" value="{{$game->id}}">
    </div>
    <div class="member-group d-flex justify-content-center">
        <div class="row">
            <label for="tournament">メンバー</label>
            <select class="form-control" name="result[member_id]">
                @foreach($user->members as $member)
                    <option value="{{$member->id}}">{{$member->name_first}} {{$member->name_last}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="score-group d-flex justify-content-center">
        <div class="row">
            <label for="tournament">成績</label>
            <select class="form-control" name="result[score_id]">
                @foreach($scores as $score)
                    <option value="{{$score->id}}">{{$score->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="rbi-group d-flex justify-content-center">
        <div class="row">
            <label for="tournament">打点</label>
            <select class="form-control" name="result[rbi]">
                @for($i = 0; $i < 5; $i++)
                    <option value="{{$i}}">{{$i}}</option>
                @endfor
            </select>
        </div>
    </div>
    <div class="group-button d-flex justify-content-center">
        <button class="btn btn-success" type="submit">追加</button>
    </div>
</form>

@endsection