@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6 card p-5 mt-4">
                <h1>Welcome, {{Auth::user()->name}}</h1>
                <h6>Thanks for subcribe our channel.</h6>
            </div>
        </div>
    </div>
@endsection
