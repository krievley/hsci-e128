@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col banner-img bg-white">
            <img class="img-fluid mx-auto d-block" src="{!! asset('/img/future_travel.png') !!}" alt="Travel in Style">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="row justify-content-between">
                <div class="col-md-9">
                    <h1 class="display-5">
                        Travel in Style
                        <small class="text-muted">- World of I.T.</small>
                    </h1>
                </div>
                <div class="col-md-3">
                    <p class="display-5">$50/Day</p>
                </div>
            </div>
            <p class="lead">
                Ever wanted to commute to work in a flying car? Tour Yellowstone by jetpack? Maybe you've been wanting
                to test our a hoverboard? All of these options and more are available with this vacation package. You
                shouldn't have to settle for the mudane, look to the future for your upcoming travel plans.
            </p>
            <p class="lead">
                We also have some options to take you out of this world. Drive your own personal spaceship to Mars, or
                explore some of the craters on the moon. You wouldn't have to worry about wearing a spacesuit in this
                virtual reality experience. Take your jet pack across the galaxy and vacation among the stars. Maybe
                you'd like a closer look at the sun? We have simulations on some of the top galaxy destinations.
            </p>
            <p class="lead">
                Experience the future! Download today!
            </p>
            <p class="text-center mt-5">
                <a href="#" class="btn btn-outline-primary btn-block">Add to Cart</a>
            </p>
        </div>
    </div>
    <hr/>
    <div class="row">
        <div class="col">
            @include('partials.world_of_it')
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h2>Other Packages by World of I.T.</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <img class="card-img-top" src="{!! asset('/img/cards/embryo.png') !!}" alt="Worry Free Pregnancy">
                        <div class="card-body">
                            <h5 class="card-title">Worry Free Pregnancy</h5>
                            <h6 class="card-subtitle mb-2 text-muted">World of I.T.</h6>
                            <p class="card-text">Explore a world where babies are grown in incubators.</p>
                            <a href="{!! route('worry_free_pregnancy') !!}" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <img class="card-img-top" src="{!! asset('/img/cards/robot_war.png') !!}" alt="Mechanical Warfare">
                        <div class="card-body">
                            <h5 class="card-title">Mechanical Warfare</h5>
                            <h6 class="card-subtitle mb-2 text-muted">World of I.T.</h6>
                            <p class="card-text">Introducing new technology that will change the battlefield.</p>
                            <a href="{!! route('mechanical_warfare') !!}" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection