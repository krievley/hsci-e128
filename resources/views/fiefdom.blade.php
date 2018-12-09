@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col banner-img">
            <img class="img-fluid" src="{!! asset('/img/kingdom.png') !!}" alt="Construct a Fiefdom">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="row justify-content-between">
                <div class="col-md-10">
                    <h1 class="display-4">
                        Construct a Fiefdom
                        <small class="text-muted">- The Emperial Agency</small>
                    </h1>
                </div>
                <div class="col-md-2">
                    <p class="display-4">$1/Day</p>
                </div>
            </div>
            <p class="lead">
                Experience medieval times by traveling to the past and immersing yourself in this vacation. Learn what
                it's like to rule by managing your own kingdom. You will need to manage the concerns of the nobility
                and the peasants while garnering respect and authority. You will also be faced with invaders of both
                the land and ideas. You must figure out what type of ruler you will be and what type of kingdom you
                wish to rule.
            </p>
            <p class="lead">
                This vacation places you in a different time with it's own set of challenges and rewards. You will
                enjoy getting to define your own rules and even conquer other lands if you wish. The experience
                should teach you a bit about how the world was run at one time and present you with many options
                for how you would like to experience that world.
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