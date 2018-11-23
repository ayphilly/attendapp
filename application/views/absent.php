<!doctype html>
<html lang="en">
  <head>
    

    <title>Absent || List</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <?php echo $css ;?>
  </head>
  <body>
    <section>      
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
                 <li class="nav-item">
                    <a class="nav-link" href='<?php echo base_url().'home'?>'>Sign-Up<span class="sr-only">(current)</span></a>
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

    <section>
      <div class="container-fluid bg">
        <div class="row  justify-content-center">         
         
          <div class="col-xl-10 col-sm-5 col-md-4" >
            
              <table class="table table-sm table-dark table-hover table-bordered " style="margin-top: 100px;" id="ytable">
                  <caption class="text-white">
                    List of Absentees <br/><br/>
                    <a href="<?php echo base_url().'home/mylist';?>" id="back" class="btn btn-warning text-white">Back</a><br/><br/>
                    <a href="<?php echo base_url().'home/mail';?>" id="warn" class="btn btn-success ">Send Message</a>
                  </caption>
                  <thead class="thead">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Firstname</th>
                        <!--<th scope="col">Middlename</th>-->
                        <th scope="col">Lastname</th>
                        <th scope="col">E-Mail</th>                        
                    </tr>                      
                  </thead>
                  <tbody>
                    <?php
                      if($result) {                  
                        
                        foreach($result as $key){
                    ?>    
                          <tr>
                            <th scope="row"><?php echo $key['id'];?></td>
                            <td><?php echo $key['Firstname'];?></td>
                            
                            <td><?php echo $key['Lastname'];?></td>                            
                            <td>
                            <?php echo $key['E-mail'];?>                      
                            </td>
                          </tr>                        
                    <?php
                      }
                     }
                    ?>                                      
                    
                  </tbody>                 
                 
              </table>            
          </div>          
        </div>        
      </div>
    </section>

    <?php echo $footer ?>
    <script>
      $(document).ready(function(){;
        //alert('wrweerwrwer')
        $('#warn').click(function(){
          alert ('Do You Want TO Send Messages?');
          $(this).addClass('btn-primary');
        })

       
      })
    </script>
   
   

    <!--<script>
            
            $(document).ready(function(){
                         
                $("#mark").click(function(e) {
                   
                    //e.preventDefault();                      
                    
                    //alert(Values);
                    //extrastrings="&ids="+checkValues;
                    $.ajax({
                        url: "<?php echo site_url('home/mylist'); ?>",
                        type: "POST",
                        data: $("table").serialize(),
                        //data: checkValues,
                        success: function (data) {
                            //alert (data);
                            $('#msg').html('');
                            if (data == 0) {
                                alert('Marked Present'); //return true; 
                                $('.texty').text('Already Present');                               
                                window.location.href="<?php echo site_url('home/mylist'); ?>"
                                
                                
                            }
                            else if (data == 1){
                              alert('Wronq'); //return false;
                              window.location.href="<?php echo site_url('home/mylist'); ?>"                                
                            }                            
                            
                            
                        }
                    });
                  })
                
            });
    
        </script>-->
  </body>
</html>