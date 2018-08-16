<?php
      @      
      $handle = fopen( '/dev/ttyUSB0', 'rn' ); # Open device for Read access
      //print $handle;
      
      
      if($handle) {
        $tagid = fgets( $handle ); # Read data from device
        //print $tagid; # Display data
        fclose ($handle); # Close device file
        $notConnect = " ARDUINO FOUND ";

      }else if(!$handle) {
        $notConnect = " ARDUINO NOT FOUND " ;
        $tagid = NULL;
      }
      //$tagid = '30'; # Debug sek
      header( "refresh:5;" ); #Buat nge Refresh

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>RFID</title>
    <link rel="stylesheet" href="{{asset('css/heroic.css')}}">
    @include('include.link')
   
  </head>
  <body>
    @include('include.head')
    
      <div class="container">
       <div class="row">
        <div class="col-md-12 section-heading text-center">
          <h2 class="to-animate">Registering New RFID</h2>
          <div class="row" id="jump-margin">
            <div class="col-md-8 col-md-offset-2 subtext to-animate">
              <h4>Wait the page to load your id after tapping</h4>
            </div>
          </div>
        </div>
      </div>
      
      <div class="row">
       <div class="col-xs-12 center-block" id="special_form_div">
        <img src="{{asset('img/rfid.svg')}}" height="150">
      <form method="get" action="{{url('/parse')}}" enctype="multipart/form-data">
      @csrf
        <br>
        <br>
        <label for="Name">Username:</label>
        <br>
        <input type="text" class="form-control" id="specific-form-control" name="id_name">
        <br>
        <label for="Name">RFID Code:</label>
        <br>
        <input type="text" class="form-control" id="specific-form-control" name="id_rfid" value="<?php echo  $tagid  ?>">
        <br>
         <button type="submit" class="btn btn-success">Submit</button>
      </form>
</div>
</div>
          
    </div>
   
  </body>
   @include('include.footer')
</html>
