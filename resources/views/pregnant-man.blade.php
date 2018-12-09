@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col banner-img">
            <img class="img-fluid" src="{!! asset('/img/baby_daddy.png') !!}" alt="The Pregnant Man">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="row justify-content-between">
                <div class="col-md-8">
                    <h1 class="display-4">
                        The Pregnant Man
                        <small class="text-muted">- FemCorp</small>
                    </h1>
                </div>
                <div class="col-md-4">
                    <p class="display-4">$20/Day</p>
                </div>
            </div>
            <p class="lead">
                Ever wonder what it would be like if men were the ones to get pregnant instead of the women? This VR
                experience will allow you to experience not only that concept, but the implications of it as
                well. When you dive into this experience you will notice that the healthcare industry has completely
                changed as regards to pregnancy. More men have specialized in the pregnancy field, birth control is free
                and readily available, and there is no political agenda regarding abortions. Some aspects are still
                recognizable though, men are encouraged to follow a special diet and exercise while pregnant, and there
                are still concerns about the baby's health and birth defects.
            </p>
            <p class="lead">
                Another key difference is that men have taken on the primary responsibility for child rearing. Because
                of this, more companies have employer sponsored daycare on-site so that working men have free access
                to childcare. This also promotes a healthy bond between father and child because the father can visit
                the child regularly for it's feeding schedule without the need of extraneous devices or upset. Men are
                also given a year's paid maternity leave to ensure healthy children and adults.
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
                        <img class="card-img-top" src="{!! asset('/img/cards/female_travel.png') !!}" alt="Safe Travels">
                        <div class="card-body">
                            <h5 class="card-title">Safe Travels</h5>
                            <h6 class="card-subtitle mb-2 text-muted">FemCorp</h6>
                            <p class="card-text">Travel anywhere in the world without worrying about personal safety.</p>
                            <a href="{!! route('save_travels') !!}" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
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
            </div>
        </div>
    </div>
@endsection