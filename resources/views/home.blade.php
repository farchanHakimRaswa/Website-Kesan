<!DOCTYPE html>
<html lang="en">

  <head>
    @include('include.link')
    <title>Kesan PC</title>
  </head>

  <body>
    @include('include.head')
    
    <!-- Page Content -->
    <div class="container" id="page-view">

      <!-- Jumbotron Header -->
      <header class="jumbotron my-4 special-jumb-front">
        <h1 class="display-3">Kansei Kesan</h1>
        <p class="lead">Web GUI for Kesan Application and RFID</p>
        <a href="{{ url('/main') }}" class="btn btn-success btn-lg">Tag Your RFID!</a>
      </header>
      <br>
      <!-- Page Features -->
      <div class="row text-center">

        <div class="col-lg-3 col-md-6 mb-4 ex-equal">
          <div class="card">
           
            <div class="card-body">
              <h4 class="card-title">Tag ID</h4>
              <p class="card-text">Use this menu to tag your registered RFID</p>
            </div>
            <div class="card-footer">
              <a href="{{ url('/main') }}" class="btn btn-success bottom-btn">Go here!</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4 ex-equal">
          <div class="card">
            
            <div class="card-body">
              <h4 class="card-title">Register RFID</h4>
              <p class="card-text">Use this menu to register new RFID tag</p>
            
            </div>
            <div class="card-footer">
              <a href="{{ url('/rfids/create') }}" class="btn btn-success bottom-btn">Go here!</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4 ex-equal">
          <div class="card">
            
            <div class="card-body">
              <h4 class="card-title">Data Pekerja</h4>
              <p class="card-text">Untuk melihat indeks pekerja, suhu optimal dan insentif</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-success bottom-btn">Go here!</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4 ex-equal">
          <div class="card">
            
            <div class="card-body">
              <h4 class="card-title">Ergonomi</h4>
              <p class="card-text">Menu untuk perhitungan</p>
              
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-success bottom-btn">Go here!</a>
            </div>
          </div>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
  </body>
  <!-- Footer -->
    @include('include.footer')

</html>
