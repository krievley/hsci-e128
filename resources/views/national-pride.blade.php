@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col banner-img bg-grey">
            <img class="img-fluid mx-auto d-block" src="{!! asset('/img/national_pride.png') !!}" alt="National Pride">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="row justify-content-between">
                <div class="col-md-10">
                    <h1 class="display-4">
                        National Pride
                        <small class="text-muted">- The Emperial Agency</small>
                    </h1>
                </div>
                <div class="col-md-2">
                    <p class="display-4">$1/Day</p>
                </div>
            </div>
            <p class="lead">
                Most people know about the Grand Canyon and The Empire State Building as great destination spots when
                touring the country. But what about all those hole-in-the-wall places that only the locals know about?
                This country has a wealth of must see destinations and once in a lifetime experiences. Unfortunately,
                they often get overlooked because they are off the beaten path and virtually unknown. Thankfully, we
                are now able to offer a vacation experience that exposes these unknown treasures to the world.
            </p>
            <p class="lead">
                We've partnered with local travel experts to find and simulate the to often overlooked national treasures.
                This vacation will take you to places you have never heard of, and give you a better perspective of the
                country you live in. You will feel a sense of pride in your country as you uncover it's secrets and
                experience all of the things it has to offer.
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