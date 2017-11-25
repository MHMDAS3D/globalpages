@extends('master')
@section('content')
<style>
  .arrow {

    bottom: 0;
    left: 50%;
    margin-left:-20px;
  }

  .bounce {
    -webkit-animation-name: bounce;
    -moz-animation-name: bounce;
    -o-animation-name: bounce;
    animation-name: bounce;
  }
  .animated{-webkit-animation-fill-mode:both;
    -moz-animation-fill-mode:both;
    -ms-animation-fill-mode:both;
    -o-animation-fill-mode:both;

    animation-iteration-count: infinite;
    -moz-animation-iteration-count: infinite;
    -webkit-animation-iteration-count: infinite;

    animation-fill-mode:both;
    -webkit-animation-duration:2s;
    -moz-animation-duration:2s;
    -ms-animation-duration:2s;
    -o-animation-duration:2s;
    animation-duration:2s;
  }


  @-webkit-keyframes bounce {
    0%, 20%, 50%, 80%, 100% {-webkit-transform: translateY(0);}	40% {-webkit-transform: translateY(-30px);}
    60% {-webkit-transform: translateY(-15px);}
  }

  @-moz-keyframes bounce {
    0%, 20%, 50%, 80%, 100% {-moz-transform: translateY(0);}
    40% {-moz-transform: translateY(-30px);}
    60% {-moz-transform: translateY(-15px);}
  }

  @-o-keyframes bounce {
    0%, 20%, 50%, 80%, 100% {-o-transform: translateY(0);}
    40% {-o-transform: translateY(-30px);}
    60% {-o-transform: translateY(-15px);}
  }
  @keyframes bounce {
    0%, 20%, 50%, 80%, 100% {transform: translateY(0);}
    40% {transform: translateY(-30px);}
    60% {transform: translateY(-15px);}
  }
  /* Next & previous buttons */
  .prev, .next {
      cursor: pointer;
      position: absolute;
      top: 50%;
      width: auto;

      padding: 16px;
      color: white;
      font-weight: bold;
      font-size: 42px;
      transition: 0.6s ease;
      border-radius: 0 3px 3px 0;
  }

  /* Position the "next button" to the right */
  .next {
      right: 0;
      border-radius: 3px 0 0 3px;
  }

  /* On hover, add a black background color with a little bit see-through */
  .prev:hover, .next:hover {
      background-color: rgba(0,0,0,0.8);
  }

</style>
    <!-- Site header -->
@foreach($sliders as $slider)
<header class="site-header size-lg text-center mySlides" style="background-image: url('upload/{{$slider->img_link}}')">
  <a class="prev" style="
    left: 0;
" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
  <div class="container">
    <div class="col-xs-12">
      <br><br><br>
      {{$slider->text_en}}


      <br><br><br><br><br>

    </div>

  </div>
  <div class="arrow animated bounce">
    <img width="40" height="40" alt="" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iNTEycHgiIGhlaWdodD0iNTEycHgiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA1MTIgNTEyIiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxwYXRoIGZpbGw9IiNGRkZGRkYiIGQ9Ik0yOTMuNzUxLDQ1NS44NjhjLTIwLjE4MSwyMC4xNzktNTMuMTY1LDE5LjkxMy03My42NzMtMC41OTVsMCwwYy0yMC41MDgtMjAuNTA4LTIwLjc3My01My40OTMtMC41OTQtNzMuNjcyDQoJbDE4OS45OTktMTkwYzIwLjE3OC0yMC4xNzgsNTMuMTY0LTE5LjkxMyw3My42NzIsMC41OTVsMCwwYzIwLjUwOCwyMC41MDksMjAuNzcyLDUzLjQ5MiwwLjU5NSw3My42NzFMMjkzLjc1MSw0NTUuODY4eiIvPg0KPHBhdGggZmlsbD0iI0ZGRkZGRiIgZD0iTTIyMC4yNDksNDU1Ljg2OGMyMC4xOCwyMC4xNzksNTMuMTY0LDE5LjkxMyw3My42NzItMC41OTVsMCwwYzIwLjUwOS0yMC41MDgsMjAuNzc0LTUzLjQ5MywwLjU5Ni03My42NzINCglsLTE5MC0xOTBjLTIwLjE3OC0yMC4xNzgtNTMuMTY0LTE5LjkxMy03My42NzEsMC41OTVsMCwwYy0yMC41MDgsMjAuNTA5LTIwLjc3Miw1My40OTItMC41OTUsNzMuNjcxTDIyMC4yNDksNDU1Ljg2OHoiLz4NCjwvc3ZnPg0K" />
  </div>
</header>
@endforeach
<header class="site-header size-lg text-center mySlides" style="background-image: url('https://static.pexels.com/photos/408503/pexels-photo-408503.jpeg')">
  <a class="prev" style="
    left: 0;
" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
  <div class="container">
    <div class="col-xs-12">
      <br><br><br>
      <h2>We offer <mark>1,259</mark> job vacancies right now!</h2>
      <h5 class="font-alt">Find your desire one in a minute</h5>
      <br><br><br><br><br>
    </div>

  </div>

  <div class="arrow animated bounce">
    <img width="40" height="40" alt="" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iNTEycHgiIGhlaWdodD0iNTEycHgiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA1MTIgNTEyIiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxwYXRoIGZpbGw9IiNGRkZGRkYiIGQ9Ik0yOTMuNzUxLDQ1NS44NjhjLTIwLjE4MSwyMC4xNzktNTMuMTY1LDE5LjkxMy03My42NzMtMC41OTVsMCwwYy0yMC41MDgtMjAuNTA4LTIwLjc3My01My40OTMtMC41OTQtNzMuNjcyDQoJbDE4OS45OTktMTkwYzIwLjE3OC0yMC4xNzgsNTMuMTY0LTE5LjkxMyw3My42NzIsMC41OTVsMCwwYzIwLjUwOCwyMC41MDksMjAuNzcyLDUzLjQ5MiwwLjU5NSw3My42NzFMMjkzLjc1MSw0NTUuODY4eiIvPg0KPHBhdGggZmlsbD0iI0ZGRkZGRiIgZD0iTTIyMC4yNDksNDU1Ljg2OGMyMC4xOCwyMC4xNzksNTMuMTY0LDE5LjkxMyw3My42NzItMC41OTVsMCwwYzIwLjUwOS0yMC41MDgsMjAuNzc0LTUzLjQ5MywwLjU5Ni03My42NzINCglsLTE5MC0xOTBjLTIwLjE3OC0yMC4xNzgtNTMuMTY0LTE5LjkxMy03My42NzEsMC41OTVsMCwwYy0yMC41MDgsMjAuNTA5LTIwLjc3Miw1My40OTItMC41OTUsNzMuNjcxTDIyMC4yNDksNDU1Ljg2OHoiLz4NCjwvc3ZnPg0K" />
  </div>
</header>


    <section class="bg-alt">
      <header class="section-header">
        <h2>search here</h2>
        <p>Here's the most popular categories</p>
      </header>

        <form class="header-job-search">

            <div class="col-md-3 ">
              <input type="text" class="form-control" placeholder="search for company">

            </div>
          <div class="form-group col-md-3">
            <select class="form-control" id="sel1" name="cat" >
              <option  selected disabled hidden> Select Category </option>
@foreach($cats as $cat )
              <option value="{{$cat->id}}">{{$cat->name_en}}</option>
  @endforeach
            </select>
          </div>
          <div class="form-group col-md-3">
            <select class="form-control" id="sel1" name="governate">
              <option selected disabled hidden> Select Governate </option>
              @foreach($Governonates as $Governonate)
              <option value="{{$Governonate->id}}" >{{$Governonate->name_en}}</option>
          @endforeach
            </select>
          </div>
          <div class="form-group col-md-3">
            <select class="form-control" id="sel1">
              <option selected disabled hidden> Select Area </option>
              @foreach($areas as $area)
              <option value="{{$area->id}}">{{$area->name_en}}</option>

                @endforeach
            </select>
          </div>
<div style="text-align: center;" >
              <button style=" height: 70px; width: 24%;" class="btn btn-primary" type="submit">Find jobs</button>
</div>

        </form>
    </section>
    <!-- END Site header -->
    <style>
      .mySlides {display:none;}
    </style>

    <!-- Main container -->
    <main>

      <section class="bg-alt">

        <div class="container">
          <header class="section-header">
            <span>Categories</span>
            <h2>Popular categories</h2>
            <p>Here's the most popular categories</p>
          </header>

          <div class="category-grid">
            <a href="job-list" >
              <i class="fa fa-laptop"></i>
              <h6>Technology</h6>
              <p>Designer, Developer, IT Service, Front-end developer, Project management</p>
            </a>
            <a href="job-list">
              <i class="fa fa-line-chart"></i>
              <h6>Accounting</h6>
              <p>Finance, Tax service, Payroll manager, Book keeper, Human resource</p>
            </a>

            <a href="job-list">
              <i class="fa fa-medkit"></i>
              <h6>Medical</h6>
              <p>Doctor, Nurse, Hospotal, Dental service, Massagist</p>
            </a>

            <a href="job-list">
              <i class="fa fa-cutlery"></i>
              <h6>Food</h6>
              <p>Restaurant, Food service, Coffe shop, Cashier, Waitress</p>
            </a>

            <a href="job-list-2.blade.php">
              <i class="fa fa-newspaper-o"></i>
              <h6>Media</h6>
              <p>Journalism, Newspaper, Reporter, Writer, Cameraman</p>
            </a>

            <a href="job-list">
              <i class="fa fa-institution"></i>
              <h6>Government</h6>
              <p>Federal, Law, Human resource, Manager, Biologist</p>
            </a>
          </div>

        </div>
      </section>
      <!-- END Categories -->


      <section>
        <div class="container">
          <header class="section-header">
            <span>Latest</span>
            <h2>Recent jobs</h2>
          </header>

          <div class="row item-blocks-connected">

            <!-- Job item -->
            @foreach($jobs as $job)
            <div class="col-xs-12">
              <a class="item-block" href="job-detail">
                <header>
                  <img src="upload/{{$job->img_link}}" alt="">
                  <div class="hgroup">

                    <h4> Name : {{$job->company_name_en}}</h4>
                    <h5> Job Title :{{$job->title_en}}</h5>
                    <br>
                    <p style="color: #0b0b0b"> Description :{{$job->desc_en}}</p>
                  </div>

                  <div class="header-meta">
                    <span class="location">{{$job->address_en}}</span>
                    <span class="label label-success">Salary : {{$job->salary}} S.P</span>
                  </div>
                </header>
              </a>
            </div>
            @endforeach
            <!-- END Job item -->

          </div>

          <br><br>
          <p class="text-center"><a class="btn btn-info" href="job-list">Browse all jobs</a></p>
        </div>
      </section>
      <!-- END Recent jobs -->


      <!-- Facts -->
      <section class="bg-img bg-repeat no-overlay section-sm" style="background-image: url(assets/img/bg-pattern.png)">
        <div class="container">

          <div class="row">
            <div class="counter col-md-3 col-sm-6">
              <p><span data-from="0" data-to="6890"></span>+</p>
              <h6>Jobs</h6>
            </div>

            <div class="counter col-md-3 col-sm-6">
              <p><span data-from="0" data-to="1200"></span>+</p>
              <h6>Members</h6>
            </div>

            <div class="counter col-md-3 col-sm-6">
              <p><span data-from="0" data-to="36800"></span>+</p>
              <h6>Resume</h6>
            </div>

            <div class="counter col-md-3 col-sm-6">
              <p><span data-from="0" data-to="15400"></span>+</p>
              <h6>Company</h6>
            </div>
          </div>

        </div>
      </section>
      <!-- END Facts -->


      <!-- How it works -->
      <section>
        <div class="container">

          <div class="col-sm-12 col-md-6">
            <header class="section-header text-left">
              <span>Workflow</span>
              <h2>How it works</h2>
            </header>

            <p class="lead">Pellentesque et pulvinar orci. Suspendisse sed euismod purus. Pellentesque nunc ex, ultrices eu enim non, consectetur interdum nisl. Nam congue interdum mauris, sed ultrices augue lacinia in. Praesent turpis purus, faucibus in tempor vel, dictum ac eros.</p>
            <p>Nulla quis felis et orci luctus semper sit amet id dui. Aenean ultricies lectus nunc, vel rhoncus odio sagittis eu. Sed at felis eu tortor mattis imperdiet et sed tortor. Nullam ac porttitor arcu. Vivamus tristique elit id tempor lacinia. Donec auctor at nibh eget tincidunt. Nulla facilisi. Nunc condimentum dictum mattis.</p>


            <br><br>
            <a class="btn btn-primary" href="page-typography">Learn more</a>
          </div>

          <div class="col-sm-12 col-md-6 hidden-xs hidden-sm">
            <br>
            <img class="center-block" src="assets/img/how-it-works.png" alt="how it works">
          </div>

        </div>
      </section>
      <!-- END How it works -->


      <!-- Categories -->



      <!-- Newsletter -->
      <section class="bg-img text-center" style="background-image: url(assets/img/bg-facts.jpg)">
        <div class="container">
          <h2><strong>Subscribe</strong></h2>
          <h6 class="font-alt">Get weekly top new jobs delivered to your inbox</h6>
          <br><br>
          <form class="form-subscribe" action="#">
            <div class="input-group">
              <input type="text" class="form-control input-lg" placeholder="Your eamil address">
              <span class="input-group-btn">
                <button class="btn btn-success btn-lg" type="submit">Subscribe</button>
              </span>
            </div>
          </form>
        </div>
      </section>
      <!-- END Newsletter -->


    </main>
    <!-- END Main container -->


    <!-- Site footer -->

@stop

