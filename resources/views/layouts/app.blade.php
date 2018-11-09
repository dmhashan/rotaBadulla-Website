<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link rel="stylesheet" href="lib/bootstrap-4.1.2-dist/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
        <link rel="stylesheet" href="css\style.css">
        <link rel="stylesheet" href="css\style.old.css">
        <link rel="stylesheet" href="css\light_blue.css">
        <link rel="stylesheet" href="lib\font-awesome-4.7.0\css\font-awesome.min.css">

        <script src="lib/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="lib/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="lib/bootstrap-4.1.2-dist/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
        
        <title>@yield('title') | Rotaract Club Of Badulla </title>
    </head>
    <body>
        

    @include('layouts.topnav')

        <div class="container">
        <div class="row justify-content-md-center">
        <div class="col-md-auto">
            <img src="img/logo.jpg" width="300" alt="The Project">
        </div>
        </div>
        </div>
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
          
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a class="main-link" href="#">Home</a></li>
                <li class="nav-item dropdown">
                    <a class="main-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Avenues</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Club Services</a>
                        <a class="dropdown-item" href="#">Community Services</a>
                        <a class="dropdown-item" href="#">International Relations</a>
                        <a class="dropdown-item" href="#">Professional Development</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item active" href="#">All Avenues</a>
                    </div>
                </li>
                <li class="nav-item"><a class="main-link" href="#">Awards</a></li>
                <li class="nav-item"><a class="main-link" href="#">Publication</a></li>
                <li class="nav-item"><a class="main-link" href="#">Gallery</a></li>
                <li class="nav-item dropdown">
                    <a class="main-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About us</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">History</a>
                        <a class="dropdown-item" href="#">RCB Family</a>
                        <a class="dropdown-item" href="#">Advisory</a>
                    </div>
                </li>
                <li class="nav-item"><a class="main-link" href="#">Blog</a></li>
                <li class="nav-item"><a class="main-link" href="#">Contact us</a></li>
            </ul>
          </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    @yield('content')
                </div>
                <div class="col-sm-4">
                    <br>
                    <div class="card">
                        <div class="card-header">Find Us on Facebook</div>
                        <iframe name="fa392c93c3b8c2" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:page Facebook Social Plugin" style="border: medium none; visibility: visible; width: 340px; height: 500px;" src="https://www.facebook.com/v3.0/plugins/page.php?adapt_container_width=true&amp;app_id=113869198637480&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FbSTT5dUx9MY.js%3Fversion%3D42%23cb%3Df3367385dcc8bd6%26domain%3Ddevelopers.facebook.com%26origin%3Dhttps%253A%252F%252Fdevelopers.facebook.com%252Ff5179a6e474ca4%26relation%3Dparent.parent&amp;container_width=734&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Frotaractbadulla%2F&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline" class="" width="1000px" height="1000px" frameborder="0"></iframe>
                    </div>
                    <br>
                    <div class="card">
                        <div class="card-header">Our Strategic Partner</div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>