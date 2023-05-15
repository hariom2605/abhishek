<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title></title>
    <!-- GLOBAL MAINLY STYLES-->
   <link href="<?php echo base_url().'assets/vendors/bootstrap/dist/css/bootstrap.min.css' ?>" rel="stylesheet" />
    <link href="<?php echo base_url().'assets/vendors/font-awesome/css/font-awesome.min.css' ?>" rel="stylesheet" />
    
    <link href="<?php echo base_url().'assets/vendors/themify-icons/css/themify-icons.css' ?>" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
   
    <!-- THEME STYLES-->
    <link href="<?php echo base_url().'assets/css/main.min.css' ?>" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <!-- THEME STYLES-->
    <link href="assets/css/main.min.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
</head>

<body class="fixed-navbar">
    <div class="page-wrapper">
        <!-- START HEADER-->
     <?php $this->load->view('header/header') ?>
        <!-- END HEADER-->
        <!-- START SIDEBAR-->
      <?php $this->load->view('header/menu') ?> 
        <!-- END SIDEBAR-->
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->

            <div class="page-heading">
                <h1 class="page-title">Add Employee</h1>
               
            </div>
<div class="page-content fade-in-up">
<div class="row">
<div class="col-md-12">
      <?php if($this->session->flashdata('create')) { ?>
    <div role="alert" class="alert alert-success" id="success-alert">
     <span style="color:white"><?php echo $this->session->flashdata('create')?></span>
    </div>
    <?php } ?>
<div class="ibox">
<div class="ibox-body">
<form action="<?php echo base_url().'Login/employee'; ?>" method="POST" enctype="multipart/form-data">
<div class="row">
 <div class="col-sm-4 form-group">
 <label>Full Name</label>
 <input class="form-control" name="user" type="text" value="<?php echo set_value('user'); ?>">
 <span style="color:red;"><?php echo form_error('user'); ?></span>
 </div>
  <div class="col-sm-4 form-group">
<label>Email ID</label>
<input class="form-control" name="email" type="email" value="<?php echo set_value('email'); ?>">
<span style="color:red;"><?php echo form_error('email'); ?></span>
</div>
 <div class="col-sm-4 form-group">
<label>Username</label>
<input class="form-control" type="text" name="username" value="<?php echo set_value('username'); ?>">
<span style="color:red;"><?php echo form_error('username'); ?></span>
</div>

 <div class="col-sm-4 form-group">
<label>Password</label>
<input class="form-control" name="password" type="password" value="<?php echo set_value('password'); ?>">
<span style="color:red;"><?php echo form_error('password'); ?></span>
</div>
<div class="col-sm-4 form-group">
<label>Mobile Number</label>
<input class="form-control" type="text" name="number" value="<?php echo set_value('number'); ?>">
<span style="color:red;"><?php echo form_error('number'); ?></span>
</div>

<div class="col-sm-4 form-group">
<label>Profile Image</label>
<input class="form-control" type="file" name="picture" />

</div>


</div>
<div class="form-group">
<button class="btn btn-primary" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                   
                    
                </div>
               
              
                
            </div>
            <!-- END PAGE CONTENT-->
           
        </div>
    </div>
    <!-- BEGIN THEME CONFIG PANEL-->
   
    <!-- END THEME CONFIG PANEL-->
    <!-- BEGIN PAGA BACKDROPS-->
    
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS-->

 <script src="<?php echo base_url().'assets/vendors/jquery/dist/jquery.min.js'?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/vendors/popper.js/dist/umd/popper.min.js'?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/vendors/bootstrap/dist/js/bootstrap.min.js'?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/vendors/metisMenu/dist/metisMenu.min.js'?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js'?>" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS-->
    
    <!-- CORE SCRIPTS-->
    <script src="<?php echo base_url().'assets/js/app.min.js'?>" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    
 <script>
       $(".alert").delay(4000).slideUp(300, function() {
    $(this).alert('close');
});
    </script>



   
    <!-- PAGE LEVEL SCRIPTS-->
</body>

</html>