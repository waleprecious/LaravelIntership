@extends('layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <h2>Welcome</h2>
            <h5>Photo of me:</h5>
            <div class="faking"><img src="{{asset('/images/lake.jpg')}}" height="200" width="400" style="float:left"></div>
            <p>Welcome...</p>
        </div>
    </div>
</div>

@stop