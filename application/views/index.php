<!DOCTYPE html>
<html>
<head>
    <title>
        Home || Attend 
    </title>
    <?php echo $css;?>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
</head>
<body>

    <!--Navbar start-->

    <section class="mynavv">
        <nav class="navbar navbar-expand-md navbar-light bg-light  sticky-top" id="navbar">
            <div class="container-fluid">
                    <a class="navbar-brand"><img src="<?php echo base_url().'/assets/imaqe/logo.png'?>"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbardrop" aria-controls="navbardrop" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>                    
                    <div class="collapse navbar-collapse" id="navbardrop">
                        <ul class="navbar-nav ml-auto" id="mynav">
                            <li class="nav-item active">
                                <a class="nav-link" href='<?php echo base_url().'home'?>'>Home<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href='#sign'>Sign-Up<span class="sr-only"></span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href='<?php echo base_url().'home/login'?>'>Admin<span class="sr-only"></span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href='<?php echo base_url().'home/mylist'?>'>List<span class="sr-only"></span></a>
                            </li>                            
                            <li class="nav-item">
                                <a class="nav-link" href='#'>Main<span class="sr-only"></span></a>
                            </li>
                            <div class="line"></div>                   
                        </ul>
                        
                    </div>
            </div>          
            
        </nav>
    </section> 
    
    <!--Navbar end-->
    
    <!--Slider start-->
    <section>
            <div id="slides" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                    <li data-target="#slides" data-slide-to="0" class="active"></li>
                    <li data-target="#slides" data-slide-to="1"></li>
                    <li data-target="#slides" data-slide-to="2"></li>
                </ul>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?php echo base_url().'/assets/imaqe/1.jpg'?>" alt="First slide">
                        <div class="carousel-caption">
                            <h1 class="display-2 mytext"> | </h1>
                            <h3 >We Up in this</h3>
                            <button type="button" class="btn btn-outline btn-outline-light btn-lg">Demo</button>
                            <button type="button" class="btn btn-primary btn-lg">Start</button>
                        </div>
                    </div>

                    <div class="carousel-item">
                       <img class="d-block w-100" src="<?php echo base_url().'/assets/imaqe/2.jpg'?>" alt="Second slide">
                       <div class="carousel-caption">
                            <h1 class="display-2 mytext">W e l c o m e</h1>
                            <h3 >We Up in this</h3>
                            <button type="button" class="btn btn-outline btn-outline-light btn-lg">Demo</button>
                            <button type="button" class="btn btn-primary btn-lg">Start</button>
                        </div>
                    </div> 

                    <div class="carousel-item">
                       <img class="d-block w-100" src="<?php echo base_url().'/assets/imaqe/3.jpg'?>" alt="Third slide">
                       <div class="carousel-caption">
                            <h1 class="display-2 mytext">W e l c o m e</h1>
                            <h3 >We Up in this</h3>
                            <button type="button" class="btn btn-outline btn-outline-light btn-lg">Demo</button>
                            <button type="button" class="btn btn-primary btn-lg">Start</button>
                        </div>
                    </div>

                </div>
                <!--
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>-->
            </div>
        
    </section>
    <!--Slider end-->

    <section>
        <div class="container-fluid">
            <div class="row jumbotron ">
                <div class="col-xs-10 col-sm-10 col-md-9 col-lg-9 col-xl-10">
                    <p class="lead">

                        We deliver stuffs from point A to B at the 
                        speed of <strong>Flash</strong> simply.<br/>
                        We deliver stuffs from point A to B at the 
                        speed of <strong>Flash</strong> simply.                        
                    </p>
                </div>
                <div class="col-xs-12 col-sm-12 co-md-3 col-lg-3 col-xl-2">
                    <a href="#"><button type ="button" class="btn btn-outline-secondary btn-lg"> Click Me</button></a>
                </div>
            </div>
        </div>
    </section>   

   <section>
        <div class="container-fluid padding">
            <div class="row welcome text-center">
                <div class="col-12">
                    <h4 class="display-2" > Welcome </h2> 
                </div>
                <hr>
                <div class="col-12">
                    <p class="lead">
                        We deliver stuffs from point A to B at the 
                        speed of <strong>Flash</strong> simply.<br/>
                        We deliver stuffs from point A to B at the 
                        speed of <strong>Flash</strong> simply.
                    </p>
                </div>
            </div>
        </div>        
    </section>

    <!--features start-->
    <section>
        <div class="container-fluid padding">
            <div class="row text-center padding">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <i class="fas fa-address-book"></i>
                    <h3>Built</h3>
                    <p>Built from scratch</p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <i class="fas fa-angle-double-right"></i>
                    <h3>Built</h3>
                    <p>Built from scratch</p>
                </div>
                <div class=" col-sm-12 col-md-4">
                    <i class="fas fa-book"></i>
                    <h3>Built</h3>
                    <p>Built from scratch</p>
                </div>
            </div>
            <hr class="my-4">
        </div>        
    </section>
    <!-- e of features start-->
    
    <section>
        <div class="container" id="sign">
            <div class="row center padding">
            <?php
                if ($this->uri->segment(2) == "inserted") {
                    echo "<span class='text-success'> information successful </span>";
                }
            ?>
                <div class="col-12">
                    <h5 class="display-3 text-center">SIGN UP</h3>                    
                </div>
                
                <form class="col-lg-12 col-md-12" action="<?php echo base_url().'home/form_val'?>" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="firstname">Firstname</label>
                            <input name="firstname" type=" text" class="form-control" id="firstname" placeholder="Firstname">
                            <span class="text-danger"><?php echo form_error("firstname"); ?></span>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="midname">Middlename</label>
                            <input name="midname" type=" text" class="form-control" id="midname" placeholder="Middlename">
                            <span class="text-danger"><?php echo form_error("midname"); ?></span>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="lastname">Lastname</label>
                            <input name="lastname" type="text" id="lastname" class="form-control" placeholder="Lastname">
                            <span class="text-danger"><?php echo form_error("lastname"); ?></span>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Phone Number</label>
                            <input name="number" type="text" id="number" class="form-control" placeholder="Number">
                            <span class="text-danger"><?php echo form_error("number"); ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="mainaddr">E-Mail Address</label>
                        <input name="mailaddr" type="text" class="form-control" id="mailaddr" placeholder="E-Mail">
                        <span class="text-danger"><?php echo form_error("mailaddr"); ?></span>
                    </div>                    
                    <div class="form-group">
                        <label for="mainaddr"> Home Address</label>
                        <input name="mainaddr" type="text" class="form-control" id="mainaddr" placeholder="Apartment, studio, or floor">
                        <span class="text-danger"><?php echo form_error("mainaddr"); ?></span>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">City</label>
                            <input name="city" type="text" class="form-control" id="city">
                            <span class="text-danger"><?php echo form_error("city"); ?></span>
                        </div>
                        <div class="form-group col-md-4 ">
                            <label for="position">Position</label>
                            <select name="position" id="position" class="custom-select">
                                <option value="0" selected>Pastor</option>
                                <option value="Priest">Priest</option>
                                <option value="Usher">Usher</option>
                                <option value="Priest">Priest</option>
                                <option value="Usher">Usher</option>
                                <option value="Priest">Priest</option>
                                <option value="Usher">Usher</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="gender">Gender</label>
                            <select name="gender" id="gender" class="custom-select">
                                <option selected>Female</option>
                                <option>Male</option>
                             </select>
                        </div>
                    </div>  
                    		
                    <div class="form-group row">
                        <div class="col-sm-10">
                           <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </div>                                                         
                </form>
            </div>
        </div>
    </section>

    <!--members
    <section>
        <div class="container-fluid padding">
            <div class="row welcome text-center padding">
                <div class="col-12">
                    <h2 class="display-4">Meet Members</h2>
                </div>
                <hr>
            </div>
        </div>

        <div class="container-fluid padding">
            <div class="row  padding">
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="imaqe/team/team-v2-4.jpg">
                        <div class="card-body">
                            <h4 class="card-title">Jon Doe</h4>
                            <p class="card-text">
                                We deliver stuffs from point A to B at the 
                                speed of Flash simply.<br/> <br/>
                                
                                <a class="btn btn-outline-secondary" href="#">Profile</a>
                            </p>
                        </div>
                    </div>                    
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="imaqe/team/team-v2-4.jpg">
                        <div class="card-body">
                            <h4 class="card-title">Jon Doe</h4>
                            <p class="card-text">
                                We deliver stuffs from point A to B at the 
                                speed of Flash simply.<br/> <br/>
                                
                                <a class="btn btn-outline-secondary" href="#">Profile</a>
                            </p>
                        </div>
                    </div>                    
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="imaqe/team/team-v2-4.jpg">
                        <div class="card-body">
                            <h4 class="card-title">Jon Doe</h4>
                            <p class="card-text">
                                We deliver stuffs from point A to B at the 
                                speed of Flash simply.<br/> <br/>
                                
                                <a class="btn btn-outline-secondary" href="#">Profile</a>
                            </p>
                        </div>
                    </div>                    
                </div>
            </div>

        </div>
    </section>-->

    <section>
        <div class="container-fluid padding">
            <div class="row text-center padding">
                <div class="col-12">
                    <h3>Connect</h3>                    
                </div>
                <hr class="connect">
               
                <div class="col-12 social padding">
                    <a href=""><i class="fab fa-facebook"></i></a>
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-google-plus-g"></i></a>
                    <a href=""><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </section>

    

    <section>
    <?php echo $footer?> 
    </section>

    
    
</body>
</html>