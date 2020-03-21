@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Lesson 1</div>
                <div class="card-body">
                    <prop-component :urldata="{{json_encode($url_data)}}"></prop-component>
                </div>
            </div>
        </div>
    </div><br>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Lesson 2</div>
                <div class="card-body">
                    <ajax-component></ajax-component>
                </div>
            </div>
        </div>
    </div><br>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Lesson 3</div>
                <div class="card-body">
                    <chartline-component></chartline-component>
                </div>
            </div>
        </div>
    </div><br>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Lesson 4</div>
                <div class="card-body">
                    <chartpie-component></chartpie-component>
                </div>
            </div>
        </div>
    </div><br>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Lesson 5</div>
                <div class="card-body">
                    <chartrandom-component></chartrandom-component>
                </div>
            </div>
        </div>
    </div><br>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Lesson 6</div>
                <div class="card-body">
                    <socket-component></socket-component>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
