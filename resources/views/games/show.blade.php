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
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">名前</th>
            <th scope="col">打席成績</th>
        </tr>
    </thead>
    <tbody>
        @foreach($results as $i => $result)
        <tr>
            <th scope="row">{{$i + 1}}</th>
            <td>{{$result[0]->member->name_first}} {{$result[0]->member->name_last}}</td>
            <td>
            @foreach($result as $result_one)
            {{$result_one->score->name}}&nbsp;
            @endforeach
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="return-button" style="text-align:center;">
    <a type="button" class="btn btn-dark" href="/games">戻る</a>
</div>

@endsection