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
                <div class="col-md-9">
                    <h1 class="display-5">
                        Pregnancy Break
                        <small class="text-muted">- The Emperial Agency</small>
                    </h1>
                </div>
                <div class="col-md-3">
                    <p class="display-5">$1/Day</p>
                </div>
            </div>
            <p class="lead">
                Pregnancy can have a lot of undesirable side effects. For example, you cannot eat certain foods, drink
                alcohol, or wear some of your favorite clothes. While motherhood is a blessing, and most women find
                these disadvantages well worth the while, it can still be nice to take a break and enjoy some of the
                things forbidden by pregnancy. This package was created with that concept in mind. Pregnant women can
                download this vacation and indulge in the things that they've been missing without any harm to the baby.
            </p>
            <p class="lead">
                Imagine yourself sipping a margarita on the beach, sporting you favorite swimsuit. This package comes
                with the ability to connect to your friends in a virtual world so that you can put on your
                favorite outfit and have a night out with your friends. Pregnancy is a beautiful gift, and you should
                be able to enjoy every aspect of it while still taking time for yourself.
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
                <div class="col-md-6">
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
                <div class="col-md-6">
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
            </div>
        </div>
    </div>
@endsection