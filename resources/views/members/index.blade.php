@extends('../layouts/app')

@section('content')
<h1 class="d-flex justify-content-center">選手一覧</h1>
<div class="row">
@foreach($members as $member)
<div class="col-sm-3">
    <div class="card bg-light" style="text-align:center;">
        <div class="card-img-top">
            <h2>{{$member->name_first}} {{$member->name_last}}</h2>
        </div>
        <div class="card-body">
            <h5 class="card-title">{{$member->grade->name}}</h5>
            <p class="card-text">{{$member->type->name}}</p>
            <a href="/datas/{{$member->id}}" class="btn btn-primary">詳細</a>
        </div>
    </div>
</div>
@endforeach

<a href="/datas/create">メンバー追加</a>
</div>

@endsection