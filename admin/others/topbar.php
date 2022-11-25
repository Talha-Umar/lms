 <div class="navbar navbar-fixed-top">
            <div class="navbar-inner" style="background: gray !important;">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.php" style="color:White;">LMS </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav pull-right">
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <?php 
                    $aid=$_SESSION['RollNo'];
                    $sql = "SELECT * FROM LMS.user WHERE RollNo='$aid'";
                     $result = mysqli_query($conn, $sql);
                       $row = mysqli_fetch_assoc($result);
                                ?>
                                
                                <img style="background: white;"  src="<?php 
                                    if($row['image']=='') {
                                     echo "images/user.jpg";
                                    } else{
                                     echo $row['image'];
                                    }
                                ?>" class="nav-avatar">
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.php">Your Profile</a></li>
                                    <!--li><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Account Settings</a></li-->
                                    <li class="divider"></li>
                                    <li><a href="logout.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
