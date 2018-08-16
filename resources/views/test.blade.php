
<!DOCTYPE html>
<html>
  <head>
     @include('include.link')
     <link rel="stylesheet" href="{{asset('css/help_people.css')}}">
      <link rel="stylesheet" href="{{asset('css/animate.css')}}">

    <title>List Of Rfids</title>
  </head>
  <body>
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
						<figure><img src="{{ asset('img/person1.jpg') }}" alt="Image"></figure> <!-- Foto Pegawai --> 
						<h3>Nama Pegawai</h3>
						<span class="fh5co-position">Warna Indeks Pekerja</span>
						<h4>Insentif Hitungan Kerja</h4>
						
					</div>
				</div>
				<div class="col-md-4">
				</div>
			</div>
		</div>
	</section>
@include('include.footer')
</body>
</html>