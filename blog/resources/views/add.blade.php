@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Добавить визитку</div>
                <div class="panel-body">
                    <div class="form" style="text-align: center; margin: auto;">
                        <form method="get" class="form-horisontal" action="{{ route('addCard') }}">
                            <fieldset>
                                <div>
                                    <textarea name="textOfVisitCard">

                                    </textarea>
                                </div>
                                <div>
                                    <input type="submit">
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection