<meta charset="utf-8">
 <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" >
<!-- Fixed navbar -->
 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/') }}">Kesan</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
         <li class="{{ Request::is('/') ? 'active' : '' }}">
          <a href="{{ url('/') }}">Home</a>
            </li>
        <li class="{{ Request::is('rfids*') ? 'active' : '' }}">
          <a href="{{ url('/rfids') }}">Rfid</a>
            </li>
        <li class="{{ Request::is('about') ? 'active' : '' }}">
          <a href="{{ url('/about') }}">About</a>
            </li>
        <li class="{{ Request::is('contact_us') ? 'active' : '' }}">
          <a href="{{ url('/contact_us') }}">Contact Us</a>
            </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>