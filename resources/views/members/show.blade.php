@extends('../layouts/app')

@section('content')

<div class="name-group" style="text-align:center;">
    <h1>{{$member->name_first}} {{$member->name_last}}</h1>
</div>
<div class="grade-group" style="text-align:center;">
    <h3>{{$member->grade->name}}</h3>
</div>
<div class="type-group" style="text-align:center;">
    <h4>{{$member->type->name}}</h4>
</div>
<div class="hit-ratio-group" style="text-align:center;">
    <label for="hit-ratio">打率</label>
    @if(count($results[0]) + count($results[1]) + count($results[3]) + count($results[4]) != 0)
    {{ sprintf('%.3f',count($results[0])/(count($results[0]) + count($results[1]) + count($results[3]) + count($results[4]))) }}
    @else
    ---
    @endif
</div>
<div class="strikeout-group" style="text-align:center;">
    <label for="strikeout">三振数</label>
    {{ count($results[4]) }}
</div>
<div class="fdb-group" style="text-align:center;">
    <label for="fdb">四死球数</label>
    {{ count($results[2]) }}
</div>
<div class="homerun-group" style="text-align:center;">
    <label for="homerun">ホームラン数</label>
    {{ count($result_HR) }}
</div>
<div class="rbi-group" style="text-align:center;">
    <label for="rbi">打点</label>
    {{ $rbi }}
</div>
<div class="edit-button" style="text-align:center;">
    <a type="button" class="btn btn-info" href="/datas/{{$member->id}}/edit">編集</a>
</div>
<div class="delete-button" style="text-align:center;">
    <form action="{{route('datas.destroy', ['member' => $member])}}" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger">削除</button>
    </form>
</div>
<div class="return-button" style="text-align:center;">
    <a type="button" class="btn btn-dark" href="/datas">戻る</a>
</div>

@endsection