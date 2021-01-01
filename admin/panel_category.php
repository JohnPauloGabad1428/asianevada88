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
                            Welcome To Panel Section
                            <small>Author</small>
                        </h1>
                       
                    <div class="col-xs-6">
                       
                        <!--    INSERT FUNCTION --> 
                       <?php insert_panel(); ?>
                       
                       
                       
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="panel_name">Add Panel Navigation</label>
                                <input  type="text" name="panel_name"> 
                            </div>  
                        
                            <div class="form-group">
                                <label for="panel_link">Link</label>
                                <input  type="text" name="panel_link"> 
                            </div>  
                        
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="submit" value="Add Panel">
                            </div>
                        </form>
                        
                        <?php // UPDATE AND INCLUDE QUERY
                        
                        if(isset($_GET['edit'])){
                               
                            $panel_id = $_GET['edit'];
                            
                            include "includes/update_category.php";
                        
                        }?>
                         
                        
                    </div>
                        
                    <!-- TABLE -->  
                    <div class="col-xs-6">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Panel Name</th>
                                    <th>Link</th>
                                    <th>DELETE</th>
                                    <th>EDIT</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                            <!--    Find All Category  FUNCTION -->
                            <?php findAllCategory();?>
                            
                            <!--    DELETE FUNCTION -->
                            <?php deleteCategory(); ?>
                            </tbody>
                        </table>
                    </div>   
                        
    
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
        
        
<?php include"includes/admin_footer.php"?>