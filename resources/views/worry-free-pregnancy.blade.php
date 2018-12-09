@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col banner-img bg-white">
            <img class="img-fluid mx-auto d-block" src="{!! asset('/img/embryo.png') !!}" alt="Worry Free Pregnancy">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="row justify-content-between">
                <div class="col-md-9">
                    <h1 class="display-5">
                        Worry Free Pregnancy
                        <small class="text-muted">- World of I.T.</small>
                    </h1>
                </div>
                <div class="col-md-3">
                    <p class="display-5">$50/Day</p>
                </div>
            </div>
            <p class="lead">
                Pregnancy can result in loss of life for the mother or the baby, sometimes both. There
                are birth defects that can result in insufficient nutrients. Sometimes, women have to forego needed
                medication in order to protect their baby. All of these problems can be solved with a technology
                that allows babies to be gestated in incubators. Now, anyone can have a baby without any of the
                complications that are standard in pregnancy.
            </p>
            <p class="lead">
                This technology will sync to a wearable device for any parent who wishes to experience the baby's natural
                development, like kicking and growing. The baby will get to hear it's parent's voice thorough this
                wearable tech and even hear it's parent's heartbeat. You will love getting to feel your baby move and kick
                without worry for it's safety. The incubators are protected and administer the baby with all the
                nutrition it needs.
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
            </div>
        </div>
    </div>
@endsection