@extends('master')
@section('content')
    <!-- Site header -->
    <header class="page-header bg-img size-lg" style="background-image: url(assets/img/bg-banner2.jpg)">
      <div class="container no-shadow">
        <h1 class="text-center">Contact us</h1>
        <p class="lead text-center">Say hi, drop a letter, and follow us in social media websites.</p>
      </div>
    </header>
    <!-- END Site header -->


    <!-- Main container -->
    <main>

      <section>
        <div class="container">

          <div id="contact-map" style="height: 500px"></div>

          <br><br>

          <div class="row">
            <div class="col-sm-12 col-md-8">
              <h4>Contact form</h4>
              <form>
                <div class="form-group">
                  <input type="text" class="form-control input-lg" placeholder="Name">
                </div>

                <div class="form-group">
                  <input type="email" class="form-control input-lg" placeholder="Email">
                </div>

                <div class="form-group">
                  <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">Send</button>
              </form>
            </div>

            <div class="col-sm-12 col-md-4">
              <h4>Information</h4>
              <div class="highlighted-block">
                <dl class="icon-holder">
                  <dt><i class="fa fa-map-marker"></i></dt>
                  <dd>3652 Seventh Avenue, Los Angeles, CA</dd>

                  <dt><i class="fa fa-phone"></i></dt>
                  <dd>(+1) 987 654 3210</dd>

                  <dt><i class="fa fa-fax"></i></dt>
                  <dd>(+1) 123 456 7890</dd>

                  <dt><i class="fa fa-envelope"></i></dt>
                  <dd>hi@yoursite.com</dd>
                </dl>
              </div>

              <br>

              <ul class="social-icons size-sm text-center">
                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
              </ul>

            </div>
          </div>

        </div>
      </section>


    </main>
    <!-- END Main container -->

@stop