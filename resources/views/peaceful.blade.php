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
                <div class="col-md-8">
                    <h1 class="display-4">
                        Peaceful Resistance
                        <small class="text-muted">- FemCorp</small>
                    </h1>
                </div>
                <div class="col-md-4">
                    <p class="display-4">$20/Day</p>
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

            </div>
        </div>
    </div>
@endsection