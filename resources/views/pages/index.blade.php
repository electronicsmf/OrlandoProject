@extends('layouts.app')

@section('content')
<header>
    <div class="header-content">
        <div class="header-content-inner">
            <h1 id="homeHeading">PROFESSIONAL, ORLANDO APPLIANCE REPAIR FOR YOU HOME OR BUSINESS</h1>
            <hr>
            <p>With Orlando Appliance Repair, you can rely on fast and skilled same day appliance repair service. Just give Us a Call, no strings attached!</p>
            <a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
        </div>
    </div>
</header>
<section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>APPLIANCE REPAIR</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <img src="images/cooktop.jpg" class="img-responsive brands" alt="image1">
                    <h4 class="text-center">Cooktops</h4>
                </div>
                <div class="col-md-3">
                    <img src="images/garbage-disposal.jpg" class="img-responsive brands" alt="image1">
                    <h4 class="text-center">Garbage Disposal</h4>
                </div>
                <div class="col-md-3">
                    <img src="images/stove.JPG" class="img-responsive brands" alt="image1">
                    <h4 class="text-center">Range / Stoves</h4>
                </div>
                <div class="col-md-3">
                    <img src="images/refrigator.jpg" class="img-responsive brands" alt="image1">
                    <h4 class="text-center">Refrigator</h4>
                </div>
                <div class="col-md-3">
                    <img src="images/alonefreezer.jpg" class="img-responsive brands" alt="image1">
                    <h4 class="text-center">Stand Alone Freezers</h4>
                </div>
                <div class="col-md-3">
                    <img src="images/wall-oven.jpg" class="img-responsive brands" alt="image1">
                    <h4 class="text-center">Wall Oven</h4>
                </div>
                <div class="col-md-3">
                    <img src="images/washer-dryer.jpg" class="img-responsive brands" alt="image1">
                    <h4 class="text-center">Washer and Dryer</h4>
                </div>
                <div class="col-md-3">
                    <img src="images/dishwasher.jpg" class="img-responsive brands" alt="image1">
                    <h4 class="text-center">Dish Washer</h4>
                </div>
                <div class="col-md-3">
                    <img src="images/ice-maker.jpg" class="img-responsive brands" alt="image1">
                    <h4 class="text-center">Ice Machine</h4>
                </div>
            </div>
        </div>  
    </section>
    
<!--<div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>This is laravel application from laravel</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
</div>-->        
@endsection