 <div class="col-md-3">
                        <div class="box-outer-left">
                            <h3>Member Panel</h3>
                            <ul class="nav-panel">
                               <?php
                                $query = "SELECT * FROM panel_category ";
                                $select_all_panel = mysqli_query($connection, $query);
                                
                                while($row = mysqli_fetch_assoc($select_all_panel)){
                                $panel_nav_name = $row['panel_nav_name'];
                                $panel_link = $row['panel_link'];
                                
                                echo  "<li><a href='$panel_link'>$panel_nav_name</a><span></span></li>";
                                }
                                ?>

                        
                               
                               
                               <!-- <li class="" ><a href="dashboard.php">Dashboard</a><span class=""></span></li>
                                <li class="" ><a href="profile.html">Profile</a></li>
                                <li class="" ><a href="earning-commision.html">Earning Commision</a></li>
                                <li class="" ><a href="referral-member.html">Referral Member</a></li>
                                <li class="" ><a href="travel-supplier.html">Travel Supplier</a></li>
                                <li class="" ><a href="withdrawal-request.html">Withdrawal Request</a></li>
                                <li class="" ><a href="withdrawal-history.html">Withdrawal History</a></li>
                                <li class="" ><a href="NSO-services.html">NSO Services</a></li>
                                <li class="" ><a href="other-services.html">Other Services</a></li>-->
                             </ul>
                        
                        
                        </div>
                    
</div>