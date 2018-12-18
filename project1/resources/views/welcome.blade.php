<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UCSC PDC</title>

    <!-- Bootstrap core CSS -->
    {{-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> --}}

    <!-- Custom styles for this template -->
    {{-- <link href="css/small-business.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>



  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark {{-- fixed-top --}}"><img src="Images/logo.png">
                <a class="navbar-brand " href="{{ url('/') }}">
                    {{-- {{ config('app.name', 'Laravel') }} --}}
                    &nbsp&nbspProfessional Development Center
                </a>
      <div class="container">
        {{-- <a class="navbar-brand" href="#">Start Bootstrap</a> --}}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">

            {{-- News --}}
            <li class="btn btn-link">
              <a class="nav-link" href="{{url('/visitor_reg1')}}">News <span class="sr-only">(current)</span></a>
            </li>
            {{-- News --}}
            <li class="btn btn-link">
              <a class="nav-link" href="{{url('/form_test1')}}">Upcoming Events <span class="sr-only">(current)</span></a>
            </li>
            
            <li class="btn btn-primary">
              <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Heading Row -->
      <div class="row my-4">
        <div class="col-lg-8">
          {{-- <img class="img-fluid rounded" src="http://placehold.it/900x400" alt=""> --}}
          {{-- //////////corousel////////// --}}
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="Images/1111111.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="Images/3333333.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="Images/5555555.jpg" alt="Third slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
            </div>
            {{-- //////////corousel////////// --}}
        </div>
        <!-- /.col-lg-8 -->
        <div class="col-lg-4">
          <h1>Welcome to PDC of UCSC</h1>
          <p class="font-italic">The Professional Development Centre (PDC) is one of the centers at UCSC, established to ensure the quality of career competencies of UCSC undergraduates by enhancing professional skills, morality, ethical awareness and ethical behaviour.{{-- This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want! --}}</p>
          <a class="btn btn-primary btn-sm" href="http://ucsc.cmb.ac.lk/pdc/" target="_blank">Read more!</a>
        </div>
        <!-- /.col-md-4 -->
      </div>
      <!-- /.row -->

      <!-- Call to Action Well -->
      <a href="{{ url('/visitor_reg') }}">
      <div class="card text-white bg-secondary my-4 text-center">        
          <div class="card-body">
            <p class="card-text">Join with the Proffessional Development Center of University of Colombo School of Computing</p>
          </div>       
      </div>
      </a>

      <!-- Content Row -->
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card h-80">
            <div class="card-body">
              <h3 class="card-title">Staff Members</h3><hr>
              <ul class="list-group ">
                {{-- <li class="list-group-item disabled" style="border: none">Coordinator</li> --}}
                <p style="line-height: 1.0;font-size: 17px;font-style: italic;">Coordinator</p>                  
                <p style="padding-left: 50px; line-height: 0.3;font-size: 15px">Dr. (Mrs.) Lasanthi N.C De Silva</p>
                <p style="line-height: 1.0;font-size: 17px;font-style: italic">Team PDC</p>
                <p style="padding-left: 50px; line-height: 0.3;font-size: 15px">Dr. (Mrs) H. N. D. Thilini</p>
                <p style="padding-left: 50px; line-height: 0.3;font-size: 15px">Ms. G. Kokila. K Perera</p>
                <p style="padding-left: 50px; line-height: 0.3;font-size: 15px">Mr. Gihan Jasinghe</p>
                <p style="padding-left: 50px; line-height: 0.3;font-size: 15px">Ms. Waruni Samarawickrama</p>                
                
              </ul>
            </div>
            {{-- <div class="card-footer">
              <a href="#" class="btn btn-primary">More Info</a>
            </div> --}}
          </div>
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-8 mb-4">
          <div class="card h-100">              
                <div class="card-body">
                  <h3 class="card-title">Contact Details</h3><hr>
                  <div class="row">
                    <div class="col-md-7">
                      <ul class="list-group ">
                        <p style="line-height: 1.0;font-size: 17px;font-style: italic">Address</p>
                        <p style="padding-left: 50px; line-height: 0.3">Professional Development Centre,</p>
                        <p style="padding-left: 50px; line-height: 0.3">University of Colombo School of Computing,</p>
                        <p style="padding-left: 50px; line-height: 0.3">35, Reid Avenue ,Colombo 7</p>
                        <p style="line-height: 1.0;font-size: 17px;font-style: italic">Email</p>                          
                        <p style="padding-left: 50px; line-height: 0.3"><a href="mailto:pdc@ucsc.cmb.ac.lk">pdc@ucsc.cmb.ac.lk</a></p>                       
                        
                        {{-- <li class="list-group-item disabled" style="border: none">Fax</li>
                          <p style="padding-left: 50px; line-height: 0.7">+94-1-2587239</p> --}}
                      </ul>
                  </div>
                  <div class="col-md-5">
                    <p style="line-height: 1.0;font-size: 17px;font-style: italic">Telephone</p>
                    <p style="padding-left: 50px; line-height: 0.3">+94 -011-2158912 / 2158969</p>
                    <p style="line-height: 1.0;font-size: 17px;font-style: italic">Fax</p>
                    <p style="padding-left: 50px; line-height: 0.3">+94-1-2587239</p>
              
                  </div>
            </div>
          </div>
        </div>
        <!-- /.col-md-4 -->
        

      </div>
      <!-- /.row -->

    </div>
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; UCSC PDC</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    {{-- <script src="vendor/jquery/jquery.min.js"></script> --}}
    {{-- <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> --}}

  </body>

</html>