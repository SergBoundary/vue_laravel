@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lesson 1</div>

                <div class="card-body">
                    <prop-component :urldata="{{json_encode($url_data)}}"></prop-component>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
