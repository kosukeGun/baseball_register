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
<div class="row">
    <div class="col-sm-4">
        <div class="card text-center">
            <div class="card-header">ヒット数/打数</div>
            <div class="card-body">
                <p class="card-text">{{ count($results[0]) }}/{{ count($results[0]) + count($results[1]) + count($results[3]) + count($results[4]) }}</p>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card text-center">
            <div class="card-header">打率</div>   
            <div class="card-body">
                <p class="card-text">
                @if(count($results[0]) + count($results[1]) + count($results[3]) + count($results[4]) != 0)
                {{ sprintf('%.3f',count($results[0])/(count($results[0]) + count($results[1]) + count($results[3]) + count($results[4]))) }}
                @else
                ---
                @endif
                </p>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card text-center">
            <div class="card-header">三振数</div>
            <div class="card-body">
                <p class="card-text">{{ count($results[4]) }}</p>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card text-center">
            <div class="card-header">四死球数</div>
            <div class="card-body">
                <p class="card-text">{{ count($results[2]) }}</p>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card text-center">
            <div class="card-header">ホームラン数</div>
            <div class="card-body">
                <p class="card-text">{{ count($result_HR) }}</p>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card text-center">
            <div class="card-header">打点</div>
            <div class="card-body">
                <p class="card-text">{{ $rbi }}</p>
            </div>
        </div>
    </div>
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