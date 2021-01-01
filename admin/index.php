<?php include "includes/admin_header.php";?>
    <div id="wrapper">

        <!-- Navigation -->
<?php include"includes/admin_navigation.php";?> 
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small>Welcome To Admin Sections: </small>
                            <?php echo $_SESSION['admin_firstname']; ?>
                        </h1>
                        
                        <!--<ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="admin_index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>-->
                        
                        <div class="icon-bar">
                            <div class="icon-bar-outer">
                               <div class="col-md-3">
                                   <div class="icon-container">
                                       <div class="icon"><a href="view_member.php"><i class="fas fas fa-users fa-10x"></i></a>
                                       <div class="icon-text"><h3>View All Member</h3></div>
                                       </div>
                                        
                                    </div>
                               </div>
                               
                               <div class="col-md-3">
                                   <div class="icon-container">
                                       <div class="icon"><a href="add_member.php"><i class="fas fa-user-plus fa-10x"></i></a>
                                       <div class="icon-text"><h3>Add Member</h3></div>
                                       </div>
                                        
                                    </div>
                               </div>
                               
                               <div class="col-md-3">
                                   <div class="icon-container">
                                       <div class="icon"><a href="report_member.php"><i class="fas fa-file-alt fa-10x"></i></a>
                                       <div class="icon-text"><h3>View All Report</h3></div>
                                       </div>
                                        
                                    </div>
                               </div>
                               
                               <div class="col-md-3">
                                   <div class="icon-container">
                                       <div class="icon"><a href="add_member_report.php"><i class="fas fa-copy fa-10x"></i></a>
                                       <div class="icon-text"><h3>Add Member Report</h3></div>
                                       </div>
                                        
                                    </div>
                               </div>    
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
        
        
<?php include"includes/admin_footer.php"?>