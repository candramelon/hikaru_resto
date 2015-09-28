 <aside class="left-side sidebar-offcanvas <?php if($_SESSION['menu_active'] == 3){ ?>collapse-left <?php } ?>">                
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="image" style="text-align:center; margin-bottom:10px; margin-top:10px;">
                        	<?php
                             $user_data = get_user_data();
							if($user_data[2]==""){
								$img = "../img/user/default.jpg";
							}else{
								$img = "../img/user/".$user_data[2];
							}
							?>
                            <img src="<?= $img ?>" class="img-circle" alt="User Image" />
                        </div>
                        <div class="info" style="text-align:center;">
                            <p style="color:#fff; ">
                                        <?php
                                       
                                        echo "Welcome, ".$user_data[0];
                                        ?>
                                </p>

                            <a style="color:#a0acbf;  "><?= $user_data[1]?></a>
                        </div>
                    </div>
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                   
                 <ul class="sidebar-menu">  
                  <li class="treeview <?php if(isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 1){ echo "active"; }?>">
                            <a href="#">
                                <i class="fa fa-list-alt"></i>
                                <span>Master</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="branch.php?page=list"><i class="fa fa-home"></i>Branch</a></li> 
                                <li><a href="building.php?page=list"><i class="fa fa-home"></i>Room</a></li> 
                                <li><a href="master_table.php?page=list"><i class="fa fa-cutlery"></i>Table</a></li>
                                <li><a href="menu.php?page=list"><i class="fa fa-glass"></i>Menu</a></li>
                                <li><a href="partner.php?page=list"><i class="fa fa-smile-o"></i>Partner</a></li>
                                <li><a href="member.php?page=list"><i class="fa fa-user"></i>Member</a></li>
                             
                            </ul>
                  </li>
                  
                  <li <?php if(isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 2){ echo "class='active'"; } ?>>
                            <a href="order.php">
                                 <i class="fa fa-cutlery"></i>
                                <span>Order</span>
                            </a>
                            
                  </li>
                  
                   <li <?php if(isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 3){ echo "class='active'"; } ?>>
                            <a href="transaction.php">
                                 <i class="fa fa-pencil-square-o"></i>
                                <span>Transaksi</span>
                            </a>
                            
                  </li>
                  <!--
                  <li <?php if(isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 8){ echo "class='active'"; } ?>>
                            <a href="transaction_new.php">
                                 <i class="fa fa-pencil-square-o"></i>
                                <span>Transaksi Baru</span>
                            </a>
                            
                  </li>
                  -->
                   <li <?php if(isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 5){ echo "class='active'"; } ?>>
                            <a href="reserved.php">
                                 <i class="fa fa-list-alt"></i>
                                <span>Reserved</span>
                            </a>
                            
                  </li>
                  
                  <li <?php if(isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 4){ echo "class='active'"; } ?>>
                            <a href="table.php">
                                 <i class="fa fa-asterisk"></i>
                                <span>Setting Table</span>
                            </a>
                            
                  </li>

                   <li <?php if(isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 5){ echo "class='active'"; } ?>>
                            <a href="purchase.php">
                                 <i class="fa fa-list-alt"></i>
                                <span>Pembelian</span>
                            </a>
                            
                  </li>

                  <li class="treeview <?php if(isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 6){ echo "active"; }?>">
                            <a href="#">
                                <i class="fa fa-list-alt"></i>
                                <span>Laporan</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                              <?php
                                if($_SESSION['user_type_id'] == 1 || $_SESSION['user_type_id'] == 2){
                              ?>
                                <li><a href="report_detail.php"><i class="fa fa-book"></i>Laporan Detail</a></li>
                                <?php

                              }
                              ?> 
                                <li><a href="report_harian.php"><i class="fa fa-book"></i>Laporan Harian</a></li>
                                
                             
                            </ul>
                  </li>
                  
                 
                             
                        
                    <?php
                    if($_SESSION['user_type_id'] == 1){
					?>
                 
                  
                  <li <?php if(isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 7){ echo "class='active'"; } ?>>
                            <a href="user.php">
                                <i class="fa fa-user"></i>
                                <span>User</span>
                               
                            </a>
                            
                  </li>
                 <?php
					}
				 ?>
              
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>