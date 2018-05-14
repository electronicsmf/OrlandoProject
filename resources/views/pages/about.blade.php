@extends('layouts.app')

@section('content')
<h1>{{$title}}</h1>
    <!--begin:AboutUs-->
    <section class="bg-primary-about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">We've got what you need!</h2>
                    <hr class="light">
                    <div id="para1" class="text-faded">
                            Orlando Appliance Repair is a locally owned and operated full service appliance repair and installation company, 
                            servicing Orlando City for more than 15 years.We have developed a reputation for detail, honesty, integrity, 
                            and reliability unmatched by our competitors. Your Orlando Appliance Repair team provides home appliance repair services unlike 
                            any other in the industry:
                    </div>
                    <a href="#services" class="page-scroll btn btn-default btn-xl sr-button">Schedule an Appointment</a>	
                </div>
            </div>  
        </div>
</section>
<div class="container">
        <div class="row">
                <div class="col-lg-12 text-center">
                     <img src="images/brands.png"/>
                </div>
        </div>
</div>  
<!--end:AboutUs-->
@endsection