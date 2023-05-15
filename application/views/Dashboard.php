<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Dashboard</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="<?php echo base_url().'assets/vendors/bootstrap/dist/css/bootstrap.min.css' ?>" rel="stylesheet" />
    <link href="<?php echo base_url().'assets/vendors/font-awesome/css/font-awesome.min.css' ?>" rel="stylesheet" />
    <link href="<?php echo base_url().'assets/css/pages/auth-light.css' ?>" rel="stylesheet" />
    <link href="<?php echo base_url().'assets/vendors/themify-icons/css/themify-icons.css' ?>" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="<?php echo base_url().'assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css' ?>" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="<?php echo base_url().'assets/css/main.min.css' ?>" rel="stylesheet" />
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
            <div class="page-content fade-in-up">
                <div class="row">
                      <div class="col-lg-4 col-md-6">
                        <div class="ibox bg-danger color-white widget-stat">
                            <div class="ibox-body">
<h2 class="m-b-5 font-strong"><?php echo $total_emp ?></h2>
                                <div class="m-b-5">Total Employee </div>

                           
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="ibox bg-success color-white widget-stat">
                            <div class="ibox-body">
 <h2 class="m-b-5 font-strong"><?php echo $total_project ?></h2>
                                <div class="m-b-5">Total Project</div>

                             
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="ibox bg-info color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong">1250</h2>
                                <div class="m-b-5">Total Department</div>

                             
                            </div>
                        </div>
                    </div>
                 
                  
                </div>
                <div class="row">
                   
                    <div class="col-lg-6">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Statistics</div>
                            </div>
                            <div class="ibox-body">
                                <div class="row align-items-center">
                                   <canvas id="myChart" style="height:160px;"></canvas>
                                    
                                  
                                </div>
                             
                            </div>
                        </div>
                    </div>
                
               
                
                    <div class="col-lg-6">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Current Users</div>
                              
                            </div>
                            <div class="ibox-body">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Customer</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th width="91px">Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="invoice.html">AT2584</a>
                                            </td>
                                            <td>@Jack</td>
                                            <td>$564.00</td>
                                            <td>
                                                <span class="badge badge-success">Shipped</span>
                                            </td>
                                            <td>10/07/2017</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="invoice.html">AT2575</a>
                                            </td>
                                            <td>@Amalia</td>
                                            <td>$220.60</td>
                                            <td>
                                                <span class="badge badge-success">Shipped</span>
                                            </td>
                                            <td>10/07/2017</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="invoice.html">AT1204</a>
                                            </td>
                                            <td>@Emma</td>
                                            <td>$760.00</td>
                                            <td>
                                                <span class="badge badge-default">Pending</span>
                                            </td>
                                            <td>10/07/2017</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="invoice.html">AT7578</a>
                                            </td>
                                            <td>@James</td>
                                            <td>$87.60</td>
                                            <td>
                                                <span class="badge badge-warning">Expired</span>
                                            </td>
                                            <td>10/07/2017</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="invoice.html">AT0158</a>
                                            </td>
                                            <td>@Ava</td>
                                            <td>$430.50</td>
                                            <td>
                                                <span class="badge badge-default">Pending</span>
                                            </td>
                                            <td>10/07/2017</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="invoice.html">AT0127</a>
                                            </td>
                                            <td>@Noah</td>
                                            <td>$64.00</td>
                                            <td>
                                                <span class="badge badge-success">Shipped</span>
                                            </td>
                                            <td>10/07/2017</td>
                                        </tr>
                                    </tbody>
                                </table>
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
    <script src="<?php echo base_url().'assets/vendors/chart.js/dist/Chart.min.js'?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js'?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js'?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/vendors/jvectormap/jquery-jvectormap-us-aea-en.js'?>" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="<?php echo base_url().'assets/js/app.min.js'?>" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script src="<?php echo base_url().'assets/js/scripts/dashboard_1_demo.js'?>" type="text/javascript"></script>

<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["IT", "Sales", "Content Writer", "Digital marketing"],
    datasets: [{
      backgroundColor: [
        "#2ecc71",
        "#3498db",
        "#95a5a6",
        "#9b59b6",
        "#f1c40f",
        "#e74c3c",
        "#34495e"
      ],
      data: [<?php echo $it; ?>,<?php echo $sales; ?>,<?php echo $writer; ?>, <?php echo $digital; ?>]
    }]
  }
});

</script>


</body>

</html>