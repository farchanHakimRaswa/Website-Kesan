<?php
      // Percobaan
     
      //$tagid = '30'; # Debug sek
      header( "refresh:5;" ); #Buat nge Refresh
      //$notConnect = "ARDUINO FOUND"; # buad debug otomatis pindah
      //$tagid = 'FE2AB972'; # buad debug pake username pindah

?>


<!DOCTYPE html>
<html lang="en">
  
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kesan PC</title>


     @include('include.link')
     <link rel="stylesheet" href="{{asset('css/help_people.css')}}">
  </head>

  <body>
   <!-- header -->
    @include('include.head')


    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif

    <div class="container" id="bottom-spacing">
      <div class="row">
        <div class="col-md-12 section-heading text-center">
          <h2 class="to-animate">Scan RFID</h2>
          <div class="row" id="jump-margin">
            <div class="col-md-8 col-md-offset-2 subtext to-animate">
              <h3>Kesan application developed in Gadjah Mada University for research purpose</h3>
            </div>
          </div>
        </div>
      </div>
     
       <div class="row">
          <div class="col-md-3">
          </div>
          <div class="col-md-6">
            <div class="fh5co-person text-center">
                <figure>
                  <img src="{{ asset('img/rfid.svg') }}" alt="Image">
                </figure>
 	
	<!-- BUAT PILIH COMPORT ARDUINO TERLEBIH DAHULU -->
	<form  method="get" action="{{ url('/main') }}">
		<select name="comport">
			<option>Pilih Comport</option>
			<?php 
			 	 $data =  shell_exec('ls /dev/tty*');
				 $oparray = preg_split('/\s+/', trim($data));
				 $count_array = count($oparray);
				 for ($x = 0; $x < $count_array ; $x++){ 
			?>
					<option><?php print_r($oparray[$x]); ?> </option>
				
   				<?php } ?>				
		</select>


		<?php
			if(isset($_GET['comport'])) {

				$comport = $_GET['comport'];
				@
      				$handle = fopen( ''.$comport.'', 'rn' ); # Open device for Read access
      				//print $handle;
      
      				// akhir dari line yang diubah
      				if($handle) {
        				$tagid = fgets( $handle ); # Read data from device
        				//print $tagid; # Display data
        				fclose ($handle); # Close device file
       		 			$notConnect = "ARDUINO FOUND";

      				}else if(!$handle) {
        				$notConnect = " ARDUINO NOT FOUND " ;
        				$tagid = NULL;
      				}
			}else {
				$notConnect = " ARDUINO NOT FOUND " ;
        			$tagid = NULL;
			}
			
			

		?>
		<input type="submit" value="REFRESH ARDUINO" name="ok_submit" />
	
	</form>
  
    <!-- JIKA PAKE MANUAL PAKE BUTTON BUAT PINDAH NYA -->
                <form  method="get" action="{{ url('/parse') }}" id="form" enctype="multipart/form-data">
                  @csrf
                  <label for="Name" > <?php echo  $notConnect;  ?> </label>
                  <br>
                  <br>
                <input type="text" name="rfidcode" placeholder="RFID CODE" value="<?php echo  $tagid  ?>" id="spacing-left">  
                <br/>
                <br>
                <button type="submit" class="btn btn-success" name="input_button" >Input</button>  

    <!-- JIKA PAKE ARDUUINO LANSGUNG OTOMATIS KE PARSE.BLADE.PHP -->
    <?php 
	
      if($notConnect == "ARDUINO FOUND" && $tagid != NULL) {
        echo '<meta http-equiv="refresh" content="1;url=/parse?rfidcode='.$tagid. '" />';
        
      }

    ?>
                </form>
            <br>
            <h6>For registering new RFID click this  <a href="{{ url('/rfids/create') }}"> link </a></h6>
            </div>
          </div>
          <div class="col-md-3">
          </div>
       </div>
        
  </div>

</body>
    <div class="container-fluid" id="spacing-bottom">
    </div>
    <!-- Footer -->
    @include('include.footer') 
  </body>
</html>
