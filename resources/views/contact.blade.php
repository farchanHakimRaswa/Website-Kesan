<!DOCTYPE html>
<html lang="en">

  <head>

     @include('include.link')
    <link rel="stylesheet" href="{{asset('css/help_people.css')}}">

    <title>Kesan PC</title>

  </head>

  <body>
    @include('include.head')
    <div class="container">
    <div class="row">
        <div class="col-md-12 section-heading text-center" id="special_section_heading">
          <h2>CONTACT US</h2>
          <div class="row" id="jump-margin">
            <div class="col-md-8 col-md-offset-2 subtext ">
              <h3>Feel free to submit your response</h3>
            </div>
          </div>
        </div>
      </div>

      <div class="row" id="special-div-row" >
            <form class="form-horizontal well col-lg-6 col-lg-offset-3" id="form-width" >
                <fieldset>
                    <legend>Contact Form</legend>
                    <div class="form-group">
                        <label class="col-lg-3">Your Name</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" id="name" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3">Your Email</label>
                        <div class="col-lg-9">
                            <input type="email" class="form-control" id="email" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3">Your Message</label>
                        <div class="col-lg-9">
                            <textarea class="form-control" id="message" rows="4" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-9 col-lg-offset-3">
                            <button type="submit" id="submit" class="form-control btn btn-success">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
      </div>
    @include('include.footer')
  </body>
</html>