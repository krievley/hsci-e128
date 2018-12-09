@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col banner-img bg-white">
            <img class="img-fluid mx-auto d-block" src="{!! asset('/img/girls_night.png') !!}" alt="Pregnancy Break">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="row justify-content-between">
                <div class="col-md-10">
                    <h1 class="display-4">
                        Pregnancy Break
                        <small class="text-muted">- The Emperial Agency</small>
                    </h1>
                </div>
                <div class="col-md-2">
                    <p class="display-4">$1/Day</p>
                </div>
            </div>
            <p class="lead">

            </p>
            <p class="lead">

            </p>
            <p class="lead">
                Try this experience today! It's fun and easy.
            </p>
            <p class="text-center mt-5">
                <a href="#" class="btn btn-outline-primary btn-block">Add to Cart</a>
            </p>
        </div>
    </div>
    <hr/>
    <div class="row">
        <div class="col">
            @include('partials.empirial')
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h2>Other Packages by The Emperial Agency</h2>
            <div class="row">

            </div>
        </div>
    </div>
@endsection