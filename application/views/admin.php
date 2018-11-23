<!DOCTYPE html>
<html>
<head>
    <title>
        Admin || Attend 
    </title>
    <?php echo $css?>
    
</head>
<body>

    <!--Navbar start-->

    <section class="mynavv">
        <nav class="navbar navbar-expand-md navbar-light bg-light  sticky-top" id="navbar">
            <div class="container-fluid">
                    <a class="navbar-brand"><img src="<?php echo base_url('').'/assets/imaqe/logo.png';?>"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbardrop" aria-controls="navbardrop" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>                    
                    <div class="collapse navbar-collapse" id="navbardrop">
                        <ul class="navbar-nav ml-auto" id="mynav">
                            <li class="nav-item ">
                                <a class="nav-link" href='<?php echo base_url().'home'?>'>Home<span class="sr-only">(current)</span></a>
                            </li>                            
                            <li class="nav-item">
                                <a class="nav-link active" href='#'>Login<span class="sr-only"></span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href='#'>features<span class="sr-only"></span></a>
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

     
    <section>
        <div class="container" >
            <div class="row justify-content-center padding">
                <div class="col-8" id="admin">
                    <span class"text-success" >
                        <?php
                            if ($result){
                                foreach($result as $key){
                                    echo 'WELCOME '+ $key['Username'];
                                }
                                
                            
                            }
                        ?>
                    </span>
                    <a href="<?php echo base_url('').'home/mylist'?>"  class="btn btn-primary btn-lg btn-block text-white mbtn" role="button">Mark Attendance</a>

                    <a href='<?php echo base_url().'home/adduser'?>'  class="btn btn-secondary btn-lg btn-block text-white mbtn">Add New Member</a>

                    <a href="#"  class="btn btn-success btn-lg btn-block text-white mbtn">Mark Attendance</a>

                    <a href="#"  class="btn btn-warning btn-lg btn-block text-white mbtn">Mark Attendance</a>
                </div>                                
            </div>
        </div>
    </section>
    
    
    <!--

    
    <section>
        <footer>
            <div class="container-fluid padding">
                <div class="row text-center padding">
                    <div class="col-md-4">
                        <img class="" src="imaqe/logo.png"><br/><br/>
                        <hr class="hr-light">
                        <p>
                            We deliver stuffs from<br/>
                            point A to B at the <br/>
                            speed of Flash simply.<br/>
                            We deliver stuffs from<br/>
                            point A to B at the <br/>
                            speed of Flash simply.
                        </p>                        
                    </div>
                    <div class="col-md-4">
                        <hr class="hr-light">
                        <h5>Our Details</h5>
                        <hr class="hr-light">                        
                        <p>000-111-111</p>
                        <P>blancosentit@mail.com</P>
                        <P>Location</P>
                    </div>
                    <div class="col-md-4">
                        <hr class="hr-light">
                        <h5>Our Details</h5>
                        <hr class="hr-light">                        
                        <p>000-111-111</p>
                        <P>blancosentit@mail.com</P>
                        <P>Location</P>
                    </div>

                    <div class="col-12">
                        <hr class="hr-light-100"> 
                        <h5>  &copy; Powered By Blanco <i class="fas fa-bolt"></i></h5>                        
                    </div>
                </div>
            </div>
        </footer>
    </section>

    -->

    <?php echo $js?>
    
</body>
</html>