@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col banner-img">
            <img class="img-fluid" src="{!! asset('/img/world_peace.jpeg') !!}" alt="Peaceful Resistance">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="row justify-content-between">
                <div class="col-md-9">
                    <h1 class="display-5">
                        Peaceful Resistance
                        <small class="text-muted">- FemCorp</small>
                    </h1>
                </div>
                <div class="col-md-3">
                    <p class="display-5">$20/Day</p>
                </div>
            </div>
            <p class="lead">
                Dive into a world that has evolved beyond war. Battles that result in destruction and death are viewed
                as barbaric and primitive. Instead, the art of diplomacy has become the standard for rulers and is
                taught to everyone as a school requirement from Kindergarten to Bachelor's Degree. This education
                involves a thorough analysis of politics, diplomatic relations, and conflict resolution. The United
                Nations is the world's final authority on disputes and is represented by members of every country.
            </p>
            <p class="lead">
                The people in this society are more aware of the events happening around the world. Instead of a twenty
                four hour news cycle of the events for one country, the news reports on the world as a whole. This results
                in a greater turnout during the election season, and countries responding to other countries elections
                as well. Immersing oneself in this experience will provide an understanding of how important it is to
                understand the entire world around us and seek to make peace.
            </p>
            <p class="lead">
                So, go ahead. Plug in your VR headset and try today!
            </p>
            <p class="text-center mt-5">
                <a href="#" class="btn btn-outline-primary btn-block">Add to Cart</a>
            </p>
        </div>
    </div>
    <hr/>
    <div class="row">
        <div class="col">
            @include('partials.femcorp')
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h2>Other Packages by FemCorp</h2>
            <div class="row">
                <div class="col-md-6">
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
                <div class="col-md-6">
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
            </div>
        </div>
    </div>
@endsection