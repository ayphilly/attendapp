<!DOCTYPE html>
<html>
<head>
    <title>
        Admin-Adduser || Attend 
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
                            <li class="nav-item active">
                                <a class="nav-link" href='<?php echo base_url().'home/adduser'?>'>Add User<span class="sr-only"></span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href='<?php echo base_url().'home/login'?>'>Admin-Login<span class="sr-only"></span></a>
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
        <div class="container" id="sign">
            <div class="row center padding">
            <?php
                if ($this->uri->segment(2) == "inserted") {
                    echo "<span class='text-success'> information successful </span>";
                }
            ?>
                <div class="col-12">
                    <h5 class="display-3 text-center">Add-User</h3>                    
                </div>
                <hr>
                
                <form class="col-lg-12 col-md-12" id="form-review" action="<?php echo base_url().'home/adduserviaadmin'?>" method="POST">
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
                           <button type="submit" id="submit" class="btn btn-primary">Register</button>
                        </div>
                    </div>                                                         
                </form>
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
    <script>
        $(document).ready(function(){
            $('#submit').click(function(e){
                e.preventDefault();
                var firstname = $.trim($("#firstname").val());
                var midname = $.trim($("#midname").val());
                var lastname = $.trim($("#lastname").val());
                var number = $.trim($("#number").val());
                var mailaddr = $.trim($("#mailaddr").val());
                var city = $.trim($("#city").val());
                var position = $.trim($("#position").val());
                var gender = $.trim($("#gender").val());
                
                var Values = "&firstname="+firstname+"&midname="+midname+"&lastname="+lastname+"&number="+number+"&mailaddr="+mailaddr+"&city="+city+"&position="+position+"&gender="+gender;

                $.ajax({
                    url: "<?php echo site_url('home/adduserviaadmin'); ?>",
                    type: "POST",
                    data: $("#form-review").serialize()+Values,
                    //data: checkValues,
                    success: function (data) {
                        //alert (data);
                        $('#msg').html('');
                        if (data == 0) {
                            alert('New User Added'); //return true;
                            window.location.href="<?php echo site_url('home/Adduser'); ?>"
                        }
                        else if (data == 1){
                            alert('User With Credentials Available');
                        } 
                        else if (data == 2){
                            alert('check your form for errors');
                        }                            
                          
                    }
                })
            })
        })
    </script>
    
</body>
</html>