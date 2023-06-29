@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
        <a type="button" class="d-flex justify-content-center top-btn btn btn-primary btn-lg col-sm-6" href="/games">戦歴データ</a>
        <a type="button" class="d-flex justify-content-center top-btn btn btn-danger btn-lg col-sm-6" href="/datas">選手データ</a>
        <a type="button" class="d-flex justify-content-center top-btn btn btn-success btn-lg col-sm-6">試合開始</a>
    </div>
</div>
@endsection
