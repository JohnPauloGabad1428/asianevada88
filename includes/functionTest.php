<?php
//TEST AREA
//for report category
global $connection;
                $query = "SELECT * FROM report_categories";
                $select_all_reportCategory_query = mysqli_query($connection,$query);
                
                while($row = mysqli_fetch_assoc($select_all_reportCategory_query)){
                    $report_category_title = $row['report_category_title'];
                ?>
                <div class="col-lg-4">
                    <div class="box-inner-content">
                        <span></span>
                        <p><?php echo $report_category_title;?></p> 
                    </div>
                </div>  
                             
                <?php    
                  
                    
                } 

?>