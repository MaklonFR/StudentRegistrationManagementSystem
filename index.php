<?php //include "includes/conn.php";?>
<?php
      if (!isset($_SESSION)) 
        {
        session_start();       
        }
  	   if(isset($_SESSION['admin'])){
    	  header('location: home?view=dashboard');
  	  }
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.templatehouse.net/aprox/page-sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Jun 2021 16:21:00 GMT -->
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>PPDB SMKN 1 KUWUS | Admin Login</title>    
         <!-- favicon -->
         <link rel="shortcut icon" href="images/logo.ico">
        <!-- Bootstrap-->
        <link href="lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!--Common Plugins CSS -->
        <link href="css/plugins/plugins.css" rel="stylesheet">
        <!--fonts-->
        <link href="lib/line-icons/line-icons.css" rel="stylesheet">
        <link href="lib/font-awesome/css/fontawesome-all.min.css" rel="stylesheet">

        <link href="css/style.css" rel="stylesheet">
        
    </head>
    <body class='bg-light'>

        <div class="page-wrapper" id="page-wrapper">

            <main class="content">

                <div class="container flex d-flex">
                    <div class='row flex align-items-center'>
                        <div class='col-lg-4 mt-60 mb-60 col-md-6 col-sm-12 ml-auto mr-auto'>
                            <div class="bg-white shadow-sm overflow-hidden rounded">
                                <div class="p-4 text-center bg-primary-active text-white">
                                <img src="images/logo1.ico" width="75" alt="" class=" img-fluid rounded-circle">
                                    <h5 class='text-center h5 pt-10 mb-0 text-white'>ADMIN <br>PPDB SMKN 1 KUWUS</h5>
                                </div>
                                <div class="p-3 pt-30 pb-30 bg-white-active">
                                    <form id="frm">
                                        <div class="input-icon-group">
                                            <div class="d-flex flex flex-row">
                                                <label class="flex d-flex mr-auto" for='pass'>Username</label>
                                            <div class="flex d-flex ml-auto justify-content-end">
                                            </div>
                                           </div>
                                            <div class='input-icon-append'>
                                                <i class="fa fa-user"></i>
                                                <input id="user" name="user" placeholder="Username" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="input-icon-group">
                                           <div class="d-flex flex flex-row">
                                               <label class="flex d-flex mr-auto" for='pass'>password</label>
                                            <div class="flex d-flex ml-auto justify-content-end">
                                            </div>
                                           </div>
                                            <div class='input-icon-append'>
                                                <i class="fa fa-lock"></i>
                                                <input id="pass" name="pass" placeholder="Password" type="password" class="form-control">
                                            </div>
                                        </div>
                                        <div class="customUi-checkbox  pb-2">
                                            <input id="check-remember" type="checkbox" name="agree">
                                            <label for="check-remember">
                                                <span class="label-checkbox"></span>
                                                <span class="label-helper">Centang disni!</span>
                                            </label>
                                        </div>
                                        <button type="button" class="btn btn-gradient-primary btn-block btn-lg login">Sign In</button>
                                        
                                       
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- main end-->
                <footer class="content-footer bg-light b-t">
                    <div class="d-flex flex align-items-center pl-15 pr-15">
                        <div class="d-flex flex p-3 mr-auto ml-auto justify-content-center">
                            <div class="text-muted">© Copyright 2021. PPDB SMKN 1 Kuwus</div>
                        </div>
                    </div>
                </footer><!-- footer end-->
            </main><!-- page content end-->
        </div><!-- app's main wrapper end -->


        <!-- Common plugins -->
        <script type="text/javascript" src="js/plugins/plugins.js"></script> 
        <script type="text/javascript" src="js/appUi-custom.js"></script> 

        <script type="text/javascript" src="lib/bootstrap-notify/bootstrap-notify.min.js"></script>

<script>  
 $(function()
  {
  //Code Ajax Login Akun
     $(".login").on('click', function(){
       var data = $("#frm").serialize();  
       var email      = $("#user").val();
       var password   = $("#pass").val();
        //alert(email);
        if (email=="")
        {
             $.notify({
            // message
            message: '<strong>Username </strong> belum diisi!',
            icon: 'fa fa-question mr-2 alert-thumb'
        }, {
            // settings
            type: 'danger',
            showProgressbar: false,
            newest_on_top: true,
            allow_dismiss: true
        });
        return;
        }
        if (password=="")
        {
             $.notify({
            // message
            message: '<strong>Password </strong> belum diisi!',
            icon: 'fa fa-question mr-2 alert-thumb'
        }, {
            // settings
            type: 'danger',
            showProgressbar: false,
            newest_on_top: true,
            allow_dismiss: true
        });
        return;
        }

        $.ajax({ 
        type : 'POST',
        url  : 'check_login.php',
        data : data,
           success :  function(response)
           {      
             // alert(response);
            //return;
            if(response == "OK")
            {
                setTimeout(function() {
                    $.notify({
                    // message
                    message: '<strong>Berhasil </strong> Login!',
                    icon: 'fa fa-check mr-2 alert-thumb'
                        }, {
                  // settings
                     type: 'success',
                     showProgressbar: true,
                     newest_on_top: true,
                     allow_dismiss: true
                  });
                },500);
                setTimeout(' window.location.href = "home?view=dashboard"; ',4000);
            } 
            else
            {
            $.notify({
            // message
            message: '<strong>Username atau Password </strong> tidak sesuai!',
            icon: 'fa fa-question mr-2 alert-thumb'
            }, {
            // settings
            type: 'danger',
            showProgressbar: false,
            newest_on_top: true,
            allow_dismiss: true
            });
             return;
            }

          }
      
      });
    });

});

</script>

    </body>

<!-- Mirrored from preview.templatehouse.net/aprox/page-sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Jun 2021 16:21:00 GMT -->
</html>
