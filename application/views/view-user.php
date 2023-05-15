<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Employee</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="<?php echo base_url() .'assets/vendors/bootstrap/dist/css/bootstrap.min.css'?>" rel="stylesheet" />
    <link href="<?php echo base_url() .'assets/vendors/font-awesome/css/font-awesome.min.css'?>" rel="stylesheet" />
    <link href="<?php echo base_url().'assets/vendors/themify-icons/css/themify-icons.css'?>" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="<?php echo base_url().'assets/vendors/DataTables/datatables.min.css'?>" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="<?php echo base_url().'assets/css/main.min.css'?>" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
</head>

<body class="fixed-navbar">
    <div class="page-wrapper">
        <!-- START HEADER-->
       <?php $this->load->view('header/header')?>
        <!-- END HEADER-->
        <!-- START SIDEBAR-->
      <?php $this->load->view('header/menu')?>
        <!-- END SIDEBAR-->
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
         <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">View Employee</div>
                    </div>
                    <div class="ibox-body">
                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                     <th class="text-center">Sr No.</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Email ID</th>
                                    <th class="text-center">Username</th>
                                  
                                    <th class="text-center">Mobile Number</th>
                                    <th class="text-center">User Img</th>
                                     <th class="text-center">Action</th>
                                </tr>
                            </thead>
                           
                            <tbody>
         <?php 
         $j=1;          
foreach($strusers as $user)
{
?>                       
<tr>
<td class="text-center"><?php echo $j; ?></td>
<td class="text-center"><?php echo $user['name']; ?></td>
<td class="text-center"><?php echo $user['email']; ?></td>
<td class="text-center"><?php echo $user['username']; ?></td>
<td class="text-center"><?php echo $user['mobile_number']; ?></td>
<td class="text-center"><img src="<?php echo base_url().'assets/upload/'.$user['img'] ?>" style="width:70px;height:70px;"></td>
<td class="text-center">
<a class="btn btn-warning" href="<?php echo base_url()?>Login/edit/<?php echo base64_encode($user['emp_id']); ?>">Update</a>
<a class="btn btn-danger" href="<?php echo base_url()?>Login/delete/<?php echo base64_encode($user['emp_id']); ?>">Delete </a>

</td>
                                </tr>
                              
                   <?php $j++; }  ?>            
                               
                                
                            </tbody>
                        </table>
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
    <script src="<?php echo base_url() .'assets/vendors/jquery/dist/jquery.min.js' ?>" type="text/javascript"></script>
    <script src="<?php echo base_url() .'assets/vendors/popper.js/dist/umd/popper.min.js'?>" type="text/javascript"></script>
    <script src="<?php echo base_url() .'assets/vendors/bootstrap/dist/js/bootstrap.min.js'?>" type="text/javascript"></script>
    <script src="<?php echo base_url() .'/assets/vendors/metisMenu/dist/metisMenu.min.js'?>" type="text/javascript"></script>
    <script src="<?php echo base_url() .'assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js'?>" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="<?php echo base_url() .'assets/vendors/DataTables/datatables.min.js'?>" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="<?php echo base_url() .'assets/js/app.min.js'?>" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script type="text/javascript">
        $(function() {
            $('#example-table').DataTable({
                pageLength: 10,
                //"ajax": './assets/demo/data/table_data.json',
                /*"columns": [
                    { "data": "name" },
                    { "data": "office" },
                    { "data": "extn" },
                    { "data": "start_date" },
                    { "data": "salary" }
                ]*/
            });
        })
    </script>
</body>

</html>