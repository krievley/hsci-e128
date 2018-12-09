@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col banner-img bg-white">
            <img class="img-fluid mx-auto d-block" src="{!! asset('/img/female_travel.png') !!}" alt="Safe Travels">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="row justify-content-between">
                <div class="col-md-8">
                    <h1 class="display-5">
                        Safe Travels
                        <small class="text-muted">- FemCorp</small>
                    </h1>
                </div>
                <div class="col-md-3">
                    <p class="display-5">$20/Day</p>
                </div>
            </div>
            <p class="lead">
                Many women are scared to travel alone or to specific places. They can be targets in areas based
                or their gender or certain physical characteristics. This virtual experience removes all of those fears by allowing
                virtual travel. There are many world destinations available including the Roman Coliseum and Egyptian
                Pyramids. There are many destinations at your fingertips with more added everyday. Say goodbye to fears
                of traveling and hello to Safe Travels.
            </p>
            <p class="lead">
                The content is not female specific and can be enjoyed by anyone who feels they are discriminated against
                while traveling. In addition, this package also offers some tips regarding local customs and phrases or
                gestures that should be avoided during your travels. Anyone traveling for business can use this package
                as a test for how to interact before their important meeting.
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