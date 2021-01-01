
<?php include "includes/admin_header.php";?>
    <div id="wrapper">

        <!-- Navigation -->
<?php include"includes/admin_navigation.php";?>       

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Welcome To Status Report Member Section
                          
                            
                        </h1>
                        
                       
                        
                        <?php
                        if(isset($_GET['source'])){
                            
                            $source = $_GET['source'];
                        
                        }else{
                                $source  = ''; 
                            }
                        
                        switch($source) {
                            case 'update_report';
                            include "includes/update_report.php";
                            break; 
                           
                                
                                default:
                                include "includes/report_all_member.php";
                                break;
                        }
                        
                        
                        ?>
                        
    
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
        
        
<?php include"includes/admin_footer.php"?>