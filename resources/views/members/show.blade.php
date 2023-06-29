@extends('../layouts/app')

@section('content')

<div class="name-group" style="text-align:center;">
    <h1>{{$member->name_first}} {{$member->name_last}}</h1>
</div>
<div class="grade-group" style="text-align:center;">
    <h3>{{$member->grade->name}}</h3>
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