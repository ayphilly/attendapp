<!doctype html>
<html lang="en">
  <head>
    

    <title>Login || Attend</title>
    <?php echo $css;?>
  </head>
  <body>    

    <section>
      <div class="container-fluid bg">
        <div class="row  justify-content-center">
          <div class="col-12 text-center">
            <h4 class="display-2"> L O G I N </h2>
          </div>
          <hr class="hr-light-loq">
          <div class="col-10 col-sm-5 col-md-4">
            <form class="form-container" id="frmreview"  method="POST" action="<?php echo base_url().'home/enter_admin'?>">
              <div class="form-group">
                <label for="Username">Username</label> *
                <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                <span class="text-danger"><?php echo form_error("username"); ?></span>
              </div>
              <div class="form-group">
                <label for="Password">Password</label> *
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                <span class="text-danger"><?php echo form_error("password"); ?></span>
              </div>

              <p class="form-text"><a href="#">Forgot Password ? </a></p>
              <button class="btn btn-success btn-block" id="btn_review">Submit</button><br/>
              <a href='<?php echo base_url().'home'?>' class="btn btn-primary ">Back</a>
            </form>
            
          </div>          
        </div>        
      </div>
    </section>

    <?php echo $footer;?>
    

    
    <script>
            
            $(document).ready(function(){
              //alert('wewe');            
                $("#btn_review").click(function(e) {
                    e.preventDefault();
                    
                    var username = $.trim($("#username").val()); 
                    var password = $.trim($("#password").val());
                   
                    
    
                    if (username==''){
                        alert('Email address is required');
                        return;
                    }
                    else if (password==''){
                         alert('The Password is required');
                         return;
                    }
                     
                    var Values = "&username="+username+"&password="+password;
                    
                    //alert(Values);
                    //extrastrings="&ids="+checkValues;
                    $.ajax({
                        url: "<?php echo site_url('home/enter_admin'); ?>",
                        type: "POST",
                        data: $("#frmreview").serialize()+Values,
                        //data: checkValues,
                        success: function (data) {
                            //alert (data);
                            $('#msg').html('');
                            if (data == 1) {
                                alert('Admin Enter'); //return true;
                                window.location.href="<?php echo site_url('home/admin'); ?>"
                            }
                            else if (data == 0){
                                alert('Wrong Password');
                            }                            
                            else if (data == 2){
                                alert('No user with such credentials');
                            }
                            
                        }
                    });
                  })
                
            });
    
        </script>

    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
  </body>
</html>