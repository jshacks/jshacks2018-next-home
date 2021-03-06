@extends('layout')

@section('content')
<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 intro-text">
            <h1>Next Home</h1>
            <p>Smart home assistant, that has accelerometer, gas, temperature, CO2 and other sensors. It helps predict and improve efficiency of the house in the future.

Also, it is provides disaster relief and alarm solutions to keep people in the house safe.</p>
            @auth
            <a href="/" class="btn btn-custom btn-lg page-scroll">Go to dashboard</a> </div>

            @else
            <a href="/login" class="btn btn-custom btn-lg page-scroll">Log in</a> </div>
            @endauth
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Get Touch Section -->
<div id="get-touch">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6 col-md-offset-1">
        <h3>Our code is open source - you have the chance to view it for free!</h3>
        <!-- <p>Get started today and complete our form to request your free estimate</p> -->
      </div>
      <div class="col-xs-12 col-md-4 text-center"><a href="https://github.com/jshacks/jshacks2018-next-home" class="btn btn-custom btn-lg page-scroll" target="_blank">View code</a></div>
    </div>
  </div>
</div>
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="row">
      <!-- <div class="col-xs-12 col-md-6"> <img src="img/team.jpg" class="img-responsive" alt=""> </div> -->
      <div class="col-xs-12 col-md-6"> <img src="img/team2.jpg" class="img-responsive" alt=""> </div>

      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h2>Who We Are</h2>
          <p>Our amazing team builds the next smart home for you. We put a lot of passion in what we do and we are having a lot of fun this weekend</p>
          <h3>Team members</h3>
          <div class="list-style">
            <div class="col-lg-12 col-sm-12 col-xs-12">
              <ul>
                 <li><strong>Marusic Diana</strong> [Backend and AI]
                <li><strong>Popa Vlad</strong> [JavaScript and AI]</li>
                <li><strong>Cotov Anastasia</strong> [Embedded Apps Engineer]</li>
                <li><strong>Lazar Iulian</strong> [Hardware Engineer]</li>
                <li><strong>Arsene Stefan</strong> [Hardware Engineer]</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Services Section -->
<div id="services">
  <div class="container">
    <div class="section-title">
      <h2>Sensors</h2>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="service-media"> <img src="img/sensors/sensor1.gif" alt=" "> </div>
        <div class="service-desc">
          <h3 class="text-center">MPU6050 - Accelerometer and Gyroscope</h3>
          <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.</p> -->
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-media"> <img src="img/sensors/sensor2.gif" alt=" "> </div>
        <div class="service-desc">
          <h3 class="text-center">Temperature and Gas Sensors</h3>
          <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-media"> <img src="img/sensors/sensor3.gif" alt=" "> </div>
        
        <div class="service-desc">
          <h3 class="text-center">Distance Sensor</h3>
          <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.</p> -->
        </div>
      </div>
    </div>
    
  </div>
</div>

</div>
@endsection