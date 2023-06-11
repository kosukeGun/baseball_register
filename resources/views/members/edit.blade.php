@extends('../layouts/app')

@section('content')
<h1 class="d-flex justify-content-center">選手データ更新</h1>
<form action="/datas/{{$member->id}}" method="POST">
    @method('PUT')
    @csrf
    <div class="group-name">
        <div class="row">
            <div class="col-sm-6 d-flex justify-content-center">
                <div class="row">
                    <label for="name_first">苗字</label>
                    <input type="text" name="member[name_first]" value="{{$member->name_first}}">
                </div>
            </div>
            <div class="col-sm-6 d-flex justify-content-center">
                <div class="row">
                    <label for="name_last">名前</label>
                    <input type="text" name="member[name_last]" value="{{$member->name_last}}">
                </div>
            </div>
        </div>
    </div>
    <div class="group-grade d-flex justify-content-center">
        <div class="row">
            <label for="grade">学年</label>
            <select class="form-control" name="member[grade_id]">
            @foreach($grades as $grade)
                    <option value="{{$grade->id}}" 
                    @if($grade->id==$member->grade->id) selected @endif>
                    {{$grade->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="group-mail d-flex justify-content-center">
        <div class="row">
            <label for="mail">メールアドレス</label>
            <input type="text" name="member[mail]" placeholder="name@example.com" value="{{$member->mail}}">
        </div>
    </div>
    <div class="group-type d-flex justify-content-center">
        <div class="row">
            <label for="type">タイプ</label>
            <select class="form-control" name="member[type_id]">
                @foreach($types as $type)
                    <option value="{{$type->id}}" 
                    @if($type->id==$member->type->id) selected @endif>
                    {{$type->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="group-button d-flex justify-content-center">
        <button class="btn btn-success" type="submit">更新</button>
    </div>
</form>

@endsection