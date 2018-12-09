@extends('layouts.main')

@section('content')
    <div class="banner-text">
        <h1 class="display-4 text-center">Virtual Reality Vacation Packages</h1>
        <p class="lead text-center">
            Explore new worlds and ideas from the comfort of your own home.
        </p>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="{!! asset('/img/cards/baby_daddy.png') !!}" alt="The Pregnant Man">
                <div class="card-body">
                    <h5 class="card-title">The Pregnant Man</h5>
                    <h6 class="card-subtitle mb-2 text-muted">FemCorp</h6>
                    <p class="card-text">Want to try out a world where the men are responsible for child bearing?</p>
                    <a href="{!! route('pregnant_man') !!}" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="{!! asset('/img/cards/girls_night.png') !!}" alt="Pregnancy Break">
                <div class="card-body">
                    <h5 class="card-title">Pregnancy Break</h5>
                    <h6 class="card-subtitle mb-2 text-muted">The Emperial Agency</h6>
                    <p class="card-text">Take a break from your pregnancy by experiencing a world without that baby bump.</p>
                    <a href="{!! route('pregnancy_break') !!}" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="{!! asset('/img/cards/embryo.png') !!}" alt="Worry Free Pregnancy">
                <div class="card-body">
                    <h5 class="card-title">Worry Free Pregnancy</h5>
                    <h6 class="card-subtitle mb-2 text-muted">World of I.T.</h6>
                    <p class="card-text">Explore a world where babies are grown in incubators.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="{!! asset('/img/cards/female_travel.png') !!}" alt="Safe Travels">
                <div class="card-body">
                    <h5 class="card-title">Safe Travels</h5>
                    <h6 class="card-subtitle mb-2 text-muted">FemCorp</h6>
                    <p class="card-text">Travel anywhere in the world without worrying about personal safety.</p>
                    <a href="{!! route('save_travels') !!}" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="{!! asset('/img/cards/national_pride.png') !!}" alt="National Pride">
                <div class="card-body">
                    <h5 class="card-title">National Pride</h5>
                    <h6 class="card-subtitle mb-2 text-muted">The Emperial Agency</h6>
                    <p class="card-text">Discover more of the country you love. Exciting lands await.</p>
                    <a href="{!! route('national_pride') !!}" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="{!! asset('/img/cards/future_travel.png') !!}" alt="Travel in Style">
                <div class="card-body">
                    <h5 class="card-title">Travel in Style</h5>
                    <h6 class="card-subtitle mb-2 text-muted">World of I.T.</h6>
                    <p class="card-text">Hoverboards, flying cars, and jet packs are the new ways to travel.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="{!! asset('/img/cards/world_peace.jpeg') !!}" alt="Peaceful Resistance">
                <div class="card-body">
                    <h5 class="card-title">Peaceful Resistance</h5>
                    <h6 class="card-subtitle mb-2 text-muted">FemCorp</h6>
                    <p class="card-text">What would the world be like without war? Find out now.</p>
                    <a href="{!! route('peaceful') !!}" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="{!! asset('/img/cards/kingdom.png') !!}" alt="Construct a Fiefdom">
                <div class="card-body">
                    <h5 class="card-title">Construct a Fiefdom</h5>
                    <h6 class="card-subtitle mb-2 text-muted">The Emperial Agency</h6>
                    <p class="card-text">Build your kingdom by conquering and defending your territory.</p>
                    <a href="{!! route('fiefdom') !!}" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="{!! asset('/img/cards/robot_war.png') !!}" alt="Mechanical Warfare">
                <div class="card-body">
                    <h5 class="card-title">Mechanical Warfare</h5>
                    <h6 class="card-subtitle mb-2 text-muted">World of I.T.</h6>
                    <p class="card-text">Introducing new technology that will change the battlefield.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
    </div>
@endsection