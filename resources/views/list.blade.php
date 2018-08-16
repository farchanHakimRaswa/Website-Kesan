<!DOCTYPE html>
<html>
  <head>
     @include('include.link')
     <link rel="stylesheet" href="{{asset('css/help_people.css')}}">

    <title>List Of Rfids</title>
  </head>
  <body>
    @include('include.head')
    
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif

     @if (\Session::has('alert'))
      <div class="alert alert-info">
        <p>{{ \Session::get('alert') }}</p>
      </div><br />

     @endif

     @if (\Session::has('fail'))
      <div class="alert alert-warning">
        <p>{{ \Session::get('fail') }}</p>
      </div><br />

     @endif
    <div class="container">
       <div class="row">
        <div class="col-md-12 section-heading text-center" id="special_section_heading">
          <h2 id="#contact-line">Tap Your RFID</h2>
          <div class="row" id="jump-margin">
          </div>
        </div>
      </div>

       <div class="row">
       <div class="col-xs-12 center-block" id="special_form_div">
      <form method="post" id="special_form" action="{{url('/update')}}" enctype="multipart/form-data">
      @csrf
            <img src="{{asset('img/rfid.svg')}}" height="150">
            <br>
            <br>
            <label for="Name">RFID Code:</label>
            <input type="text" class="form-control" name="id_name">
            <br>
            <button type="submit" class="btn btn-success">Submit</button> 
      </form>
      <br>
      <h6>For registering new RFID click this  <a href="{{ url('/rfids/create') }}"> link </a></h6>
      </div>
      </div>
    </div>
  
  </body>
   @include('include.footer')
</html>