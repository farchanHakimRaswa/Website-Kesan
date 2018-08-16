<!DOCTYPE html>
<html lang="en">

  <head>

    @include('include.link')
    <link rel="stylesheet" href="{{asset('css/help_people.css')}}">

    <title>Kesan PC</title>
  </head>

  <body>
   <!-- header -->
    @include('include.head')

    <div class="container" id="bottom-spacing">
      <div class="row">
        <div class="col-md-12 section-heading text-center">
          <h2>About</h2>
          <div class="row" id="jump-margin">
            <div class="col-md-8 col-md-offset-2 subtext ">
              <h3>Kesan application developed in Gadjah Mada University for research purpose</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="fh5co-person text-center ">
            <figure><img src="{{ asset('img/person1.jpg') }}" alt="Image"></figure>
            <h3>Neural Network</h3>
            <span class="fh5co-position">For Counting Payment</span>
            <p>In Development</p>
            
          </div>
        </div>
        <div class="col-md-4">
          <div class="fh5co-person text-center ">
            <figure><img src="{{ asset('img/person2.jpg') }}" alt="Image"></figure>
            <h3>Temperature Optimizer</h3>
            <span class="fh5co-position">Optimize exact temperature for efficiency</span>
            <p>In Development</p>
            
          </div>
        </div>
        <div class="col-md-4">
          <div class="fh5co-person text-center ">
            <figure><img src="{{ asset('img/person3.jpg') }}" alt="Image"></figure>
            <h3>Rfid Tag</h3>
            <span class="fh5co-position">Machine controlled Registration</span>
            <p>In Development</p>
          
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid" id="spacing-bottom">
    </div>
    <!-- Footer -->
    @include('include.footer') 
  </body>
</html>