@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Личный кабинет</div>
                <div class="panel-body">
                    <a href="{{ route('add') }}">Добавить визитку</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection