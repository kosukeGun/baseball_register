@extends('../layouts/app')

@section('content')

@foreach($members as $member)
<div class="card" style="width: 18rem;">
    <div class="card-img-top">
        <h2 style="text-align:center">{{$member->name_first}} {{$member->name_last}}</h2>
    </div>
    <div class="card-body">
        <h5 class="card-title">{{$member->grade->name}}</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>
@endforeach

@endsection