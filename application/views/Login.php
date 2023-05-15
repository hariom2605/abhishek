<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Employee</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="<?php echo base_url().'assets/vendors/bootstrap/dist/css/bootstrap.min.css' ?>" rel="stylesheet" />
    <link href="<?php echo base_url().'assets/vendors/font-awesome/css/font-awesome.min.css' ?>" rel="stylesheet" />
    <link href="<?php echo base_url().'assets/css/pages/auth-light.css' ?>" rel="stylesheet" />
    <link href="<?php echo base_url().'assets/vendors/themify-icons/css/themify-icons.css' ?>" rel="stylesheet" />

   
</head>

<body class="bg-silver-300">
    <div class="content">
            <?php if($this->session->flashdata('SUCCESSMSG')) { ?>
    <div role="alert" class="alert alert-danger" id="success-alert">
                                    <button data-dismiss="alert" class="close" type="button"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
     <?php echo $this->session->flashdata('SUCCESSMSG')?>
                            </div>
                        <?php } ?>
<form id="login-form" action="" method="post">
            <h2 class="login-title">Log in</h2>
<div class="form-group">
<div class="input-group-icon right">
<div class="input-icon"><i class="fa fa-envelope"></i></div>
<input class="form-control" type="text" name="user" placeholder="Enter User Name" autocomplete="off">
</div>
</div>
<div class="form-group">
<div class="input-group-icon right">
<div class="input-icon"><i class="fa fa-lock font-16"></i></div>
<input class="form-control" type="password" name="pwd" placeholder="Password">
</div>
</div>
<div class="form-group">
                <button  class="btn btn-info btn-block" type="submit" name="submit">Login</button>
            </div>
           
          
        
        </form>
    </div>
    <!-- BEGIN PAGA BACKDROPS-->
   <!--  <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div> -->
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS -->
    <script src="<?php echo base_url().'assets/vendors/jquery/dist/jquery.min.js' ?>"  type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/vendors/popper.js/dist/umd/popper.min.js' ?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/vendors/bootstrap/dist/js/bootstrap.min.js' ?>" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS -->
    <script src="<?php echo base_url().'assets/vendors/jquery-validation/dist/jquery.validate.min.js' ?>" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="<?php echo base_url().'assets/js/app.js'?> " type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->

    <script>
       $(".alert").delay(4000).slideUp(300, function() {
    $(this).alert('close');
});
    </script>
   
  
</body>

</html>