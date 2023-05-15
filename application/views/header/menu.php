 <nav class="page-sidebar" id="sidebar">
            <div id="sidebar-collapse">
                <div class="admin-block d-flex">
                    <div>
                        <img src="<?php echo base_url().'assets/img/admin-avatar.png'?>" width="45px" />
                    </div>
                    <div class="admin-info">
<div class="font-strong"><?php echo ucwords($this->session->user) ?></div></div>
                </div>
                <ul class="side-menu metismenu">
                    <li>
                        <a class="active" href="<?php echo base_url().'Login/Dashboard' ?>"><i class="sidebar-item-icon fa fa-th-large"></i>
                            <span class="nav-label">Dashboard</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                            <span class="nav-label">Manage Employee</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="<?php echo base_url().'Login/employee/Add-emp' ?>">Add Employee</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url().'Login/getemp/view-user' ?>">View Employee</a>
                            </li>
                           
                            
                        </ul>
                    </li>
                    
                    
                   
                
                
                   
                
                  
                </ul>
            </div>
        </nav>