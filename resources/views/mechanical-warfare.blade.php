@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col banner-img bg-white">
            <img class="img-fluid mx-auto d-block" src="{!! asset('/img/robot_war.png') !!}" alt="Mechanical Warfare">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="row justify-content-between">
                <div class="col-md-9">
                    <h1 class="display-5">
                        Mechanical Warfare
                        <small class="text-muted">- World of I.T.</small>
                    </h1>
                </div>
                <div class="col-md-3">
                    <p class="display-5">$50/Day</p>
                </div>
            </div>
            <p class="lead">
                Take control of a robot and fight the enemy. There are a variety of choices, suits, drones, even robots
                that look like animals. You can soar as a robot eagle and capture photos of enemy territory. At the same
                time you can control a mechanical suit to run large distances without getting tired. Fire a heavy rocket
                with the push of a button. Or if you prefer hand to hand, you can battle others in mechanical suits
                to see who has the greater skill.
            </p>
            <p class="lead">
                Robots are getting more and more sophisticated. Enjoy some of the destructive capabilities without
                consequences by downloading this vacation. You can practice strategy and tactics through the use
                of advanced technology. This vacation also makes you consider resource management since you start each
                battle with a limited number of robots.
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
                        <img class="card-img-top" src="{!! asset('/img/cards/future_travel.png') !!}" alt="Travel in Style">
                        <div class="card-body">
                            <h5 class="card-title">Travel in Style</h5>
                            <h6 class="card-subtitle mb-2 text-muted">World of I.T.</h6>
                            <p class="card-text">Hoverboards, flying cars, and jet packs are the new ways to travel.</p>
                            <a href="{!! route('travel_in_style') !!}" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection