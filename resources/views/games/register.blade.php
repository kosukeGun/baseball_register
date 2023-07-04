@extends('../layouts/app')

@section('content')
<h1 class="d-flex justify-content-center">成績登録</h1>
<form action="/games/create" method="POST">
    @csrf
    <div class="user-group">
        <input type="hidden" name="result[user_id]" value="{{$user->id}}">
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
    <div class="game-group d-flex justify-content-center">
        <div class="row">
            <label for="game">試合</label>
            <input type="text" name="game[name]" placeholder="準々決勝第3試合">
        </div>
    </div>
    
    <div class="group-button d-flex justify-content-center">
        <button class="btn btn-success" type="submit">追加</button>
    </div>
</form>

@endsection