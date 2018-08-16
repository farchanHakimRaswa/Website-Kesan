<!DOCTYPE html>
 <!-- SCRIPT PHP BUAT KENDALI KE DATABASE KESAN " -->
       <?php
	 	function getURL($data) {
			$url ='http://kansei-kesan.tp.ugm.ac.id/rfid.php?isRFID=1&'. $data .'' ;
			return json_decode(file_get_contents($url));

		}

		function setRfidUrl($user, $tagrfid) {

			$url = 'http://kansei-kesan.tp.ugm.ac.id/rfid.php?user='. $user .'&tagrfid='.$tagrfid.'';
			return json_decode(file_get_contents($url));
		}


		// __main__

		$isSuccess= '202';
		$intensif = ' ';
		if(isset($_GET['rfidcode'])) {
			
			$rfidCode = str_replace(" ","",$_GET['rfidcode']);
			$url='http://kansei-kesan.tp.ugm.ac.id/rfid.php?isRFID=1&codeRfid='.$rfidCode.'';
			
 			$namaPegawai = getURL('codeRfid='.$rfidCode.'');

			if($_GET["rfidcode"] == '200' ||  $namaPegawai == NULL) {
		

				$namaPegawai = "RFID ANDA BELUM TERDAFTAR" ;
				$indeks =  ' ' ;
				$intensif = ' ';
				
			
			}else  {

				

				//MASUK KE INDEKS PEGAWAI
				
				$indeks2 = getURL('namaPegawai='.$namaPegawai.'');
				if($indeks2 == '2') $indeks2 = " RED ";
				else if($indeks2 == '1') $indeks2 = " YELLOW " ;
				else if($indeks2 == '0') $indkes2 = " GREEN " ;
				else $indeks2 = NULL; 
			
				$indeks = 'Indeks Pegawai : ' . $indeks2 . '';
				//MASUK KE INTENSIF PEGAWAI
			
				$intensif2 = getURL('insentifName='.$namaPegawai.'');
				$intensif = 'Intensif Hitung Pegawai : ' . $intensif2 . '';
				
				
			}


		}else if(isset($_GET['id_name']) && isset($_GET['id_rfid'])) {

			$namaPegawai = 'Pegawai baru : ' .$_GET['id_name'] . '';
			$indeks =  'Kode RFID : ' . $_GET['id_rfid'] . '' ;
			
			$rfidCode = str_replace(" ","",$_GET['id_rfid']);
			$url='http://kansei-kesan.tp.ugm.ac.id/rfid.php?isRFID=1&codeRfid='.$rfidCode.'';
			
 			$hasil = getURL('codeRfid='.$rfidCode.'');
			
			if($hasil == NULL) {

				$isSuccess = setRfidUrl( $_GET['id_name'], $rfidCode); 
			
				if($isSuccess == '200') {
					$intensif = 'Tidak Sukses Ditambahkan';
				
				}else {
					$intensif = 'Sukses Ditambahkan';
				
				}
			}else {
				$namaPegawai = "RFID ANDA TELAH TERDAFTAR DENGAN PEGAWAI LAIN" ;
				$isSuccess = '200';
			}
			

		}
		

	?>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <title>Kesan PC</title>


     @include('include.link')
     <link rel="stylesheet" href="{{asset('css/help_people.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">

  </head>

  <body>
   <!-- header -->
    @include('include.head')
   <section class="animated" >
		<div class="container" id="bottom-spacing">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate fadeInUp animated">RESULT of RFID SCAN</h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 subtext fadeInUp animated to-animate">
							<h3>Kesan application developed in Gadjah Mada University for research purpose</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
					<div class="fh5co-person text-center fadeInUp animated to-animate">
						<figure> <img src="{{ asset('img/person1.jpg') }}" alt="Image"></figure> <!-- Foto Pegawai --> 
						<h3><?php echo $namaPegawai ?> </h3>
						<h4><?php echo $indeks ?></h4>
						<h4><?php echo $intensif . ""?> </h4>
						<?php 
							if(($indeks==' ' && $intensif==' ' ) || ( $isSuccess == '200')) {
								echo '<a href="/rfids/create">Sign RFID</a>';
							}else {
								echo '<a href="/main">Back to Tag RFID</a>';
							}							

						?>
						
					</div>
				</div>
				<div class="col-md-4">
				</div>
			</div>

      
     
    </div>
</section>
    <div class="container-fluid" id="spacing-bottom">
    </div>
    <!-- Footer -->
    @include('include.footer') 
  </body>
</html>
