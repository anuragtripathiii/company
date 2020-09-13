<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
    <style type="text/css">
        .contain1{
            padding: 0;
        }
        .navbar{
            padding: 5px 17px;
        }
        nav{
            margin-top: 0;
        }
        nav img{
            width: 60px; 
            height: 60px; 
            border-radius: 50%; 
            display: block;
            margin: 5px;
            cursor: pointer;
            box-shadow: 0px 0px 0.5rem rgba(255,255,255,0.25);
            transition: all 0.4s; 
        }
        nav img:hover{
            transform: scale(1.1,1.1);
            box-shadow: 5px 5px 0.75rem rgba(255,255,255,0.5);
        }
        @media screen and (max-width: 768px){
            .navbar{
                padding: 3px 15px;
            }
        }
    </style>
</head>
<body>
    <a name="home"></a>
<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
    <img src="images/logo.png">
        <button class="navbar-toggler border ml-auto" data-toggle="collapse" data-target="#collapse_target" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapse_target">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item text-center">
                <a class="links" href="#home"><i class="fas fa-home mr-1"></i>HOME</a>
            </li>
            <li class="nav-item text-center">
                <a class="links" href="#about"><i class="fas fa-user mr-1"></i>ABOUT US</a>
            </li>
            <li class="nav-item text-center">
                <a class="links" href="#team"><i class="fas fa-users mr-1"></i>TEAM</a>
            </li>
            <li class="nav-item text-center">
                <a class="links" href="#service"><i class="fas fa-cogs mr-1"></i>SERVICES</a>
            </li>
            <li class="nav-item text-center">
                <a class="links" href="#contact"><i class="fas fa-address-book mr-1"></i>CONTACT US</a>
            </li>
        </ul>
    </div>
    </nav>
    
<div class="container-fluid contain1">
    <div id="demo3" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo3" data-slide-to="0" class="active"></li>
            <li data-target="#demo3" data-slide-to="1"></li>
            <li data-target="#demo3" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="img-fluid" src="images/poster1.png" alt="Los Angeles">
            </div>
            <div class="carousel-item">
                <img class="img-fluid" src="images/poster2.png" alt="Chicago">
            </div>
            <div class="carousel-item">
                <img class="img-fluid" src="images/poster3.png" alt="New York">
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo3" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo3" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>
<a name="team"></a>
<div class="team">
    <div class="container" style="max-width: 995px;">
        <p class="text-center teamhead">Meet The <span class="font-weight-bold">Team</span></p>
        <center><div class="line"></div></center>
        <div class="row mt-5">
            <div class="col-md-6 founder">
                <center>
                    <img src="images/1.png" class="member d-block">
                    <strong class="d-block mt-1 txt1">Name1</strong>
                    <p class="txt2">Designation1</p>
                </center>
            </div>
            <div class="col-md-6 mt-md-0 mt-5 founder">
                <center>
                    <img src="images/1.png" class="member">
                    <strong class="d-block mt-1 txt1">Name2</strong>
                    <p class="txt2">Designation2</p>
                </center>
            </div>
        </div>
        <div class="row mt-lg-0 mt-5 mb-5">
            <div class="col-lg-3 col-md-6 dev">
                <center>
                    <img src="images/1.png" class="member2 ml-lg-0 ml-md-5">
                    <strong class="d-block mt-1 txt1 ml-lg-0 ml-md-5">Name3</strong>
                    <p class="txt2 ml-lg-0 ml-md-5">Designation3</p>
                </center>
            </div>
            <div class="col-lg-3 col-md-6 dev mt-md-0 mt-5">
                <center>
                    <img src="images/1.png" class="member2 mr-lg-0 mr-md-5">
                    <strong class="d-block mt-1 txt1 mr-lg-0 mr-md-5">Name4</strong>
                    <p class="txt2 mr-lg-0 mr-md-5">Designation4</p>
                </center>
            </div>
            <div class="col-lg-3 col-md-6 dev mt-md-0 mt-5">
                <center>
                    <img src="images/1.png" class="member2 ml-lg-0 ml-md-5">
                    <strong class="d-block mt-1 txt1 ml-lg-0 ml-md-5">Name5</strong>
                    <p class="txt2 ml-lg-0 ml-md-5">Designation5</p>
                </center>
            </div>
            <div class="col-lg-3 col-md-6 dev mt-md-0 mt-5">
                <center>
                    <img src="images/1.png" class="member2 mr-lg-0 mr-md-5">
                    <strong class="d-block mt-1 txt1 mr-lg-0 mr-md-5">Name5</strong>
                    <p class="txt2 mr-lg-0 mr-md-5">Designation5</p>
                </center>
            </div>
        </div>
    </div>
</div>


<!--Anurag's code from here-->

<a name="service"></a>
<div class="anu-bg">
    <div class="container">
    <strong id="Services-title">Services</strong>
     
    <p>Tag line goes here some good lines here please</p>
    <center><div class="line"></div></center>
    <br>
        <!-- Services section -->
    <div class="row">
        <div class="col-md-6">
        <div class="card card1">
            <div class="card-body">
                <h4 class="card-title">Web</h4>
                <p><i style="color: aqua" class="fas fa-globe size"></i></p>
                <p class="card-text">Get all web related solutions </p>

            </div>
        </div>
        </div>


        <div class="col-md-6">
            <div class="card card1">
                <div class="card-body">
                    <h4 class="card-title">App</h4>
                    <p><i style="color: green" class="fab fa-app-store-ios size"></i></p>
                    <p class="card-text">Get all App related solutions </p>

                </div>
            </div>
        </div>

    </div>
        <div class="row">
        <div class="col-md-6">
            <div class="card card1">
                <div class="card-body">
                    <h4 class="card-title">Digital marketing</h4>
                    <p><i style="color: #cb9c00" class="fas fa-search-dollar size"></i></p>
                    <p class="card-text">Get all Digital marketing solutions </p>

                </div>
            </div>
        </div>



        <div class="col-md-6">
            <div class="card card1">
                <div class="card-body">
                    <h4 class="card-title">Design</h4>
                    <p><i style="color: tomato" class="fas fa-palette size"></i></p>
                    <p class="card-text">Get all Design related solutions </p>
                </div>
            </div>
        </div>
        </div>

</div>
</div>

<!-- About us section-->
<a name="about"></a>
<div class="service-bg">
    <h1 id="#aboutustitle">About us</h1>
     <center><div class="line"></div></center>
    <!--This section will be completed once I get what to write here-->
</div>
<!--Contact us begins here-->
<a name="contact"></a>
<div class="bg3-contactus">
    <div class="container">
        <h1 id="contact-us">
            Contact Us
        </h1>

         <center><div class="line mb-5"></div></center>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-map-marker-alt"></i></h5>
                        <p class="card-text">Address goes here ...here is address example #anurag</p>

                        &nbsp;
                        <h5 class="card-title"><i class="fas fa-phone-square-alt"> Call Us</i></h5>
                        <p class="card-text"><i class="fas fa-phone-square-alt"></i> Developer: 8349112391 <br><i class="fas fa-phone-square-alt"></i> Manager: 8839741615 </p>
                    </div>
            </div>
        </div>
            <div class="col-md-6">
                <div class="card mt-7">
                    <div class="card-title">

                        <?php
                        $Msg = "";
                        if(isset($_GET['error']))
                        {
                            $Msg = " Please Fill in the Blanks ";
                            echo '<div class="alert alert-danger">'.$Msg.'</div>';
                        }

                        if(isset($_GET['success']))
                        {
                            $Msg = " Your Message Has Been Sent ";
                            echo '<div class="alert alert-success">'.$Msg.'</div>';
                        }

                        ?>
                    </div>
                    <div class="card-body">
                        <form action="process.php" method="post">
                            <input type="text" name="UName" placeholder="Name" class="form-control mb-2">
                            <input type="email" name="Email" placeholder="Email" class="form-control mb-2">
                            <input type="text" name="Subject" placeholder="Subject" class="form-control mb-2">
                            <textarea name="msg" class="form-control mb-2" placeholder="Write The Message"></textarea>
                            <br>
                            <button class="btn btn-success" name="btn-send"> Send </button>
                        </form>
                    </div>
                </div></div>
        </div>
        </div>
    </div>
</div>
</body>
</html>
