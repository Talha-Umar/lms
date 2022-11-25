<?php include 'others/header.php'; 
include 'others/topbar.php';
?>
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li><a href="index.php"><i class="menu-icon icon-home"></i>Home
                                </a></li>
                                 <li><a href="message.php"><i class="menu-icon icon-inbox"></i>Messages</a>
                                </li>
                                <li><a class="active" href="student.php"><i class="menu-icon icon-user active"></i>Manage Students </a>
                                </li>
                                <li><a href="book.php"><i class="menu-icon icon-book"></i>All Books </a></li>
                                <li><a href="addbook.php"><i class="menu-icon icon-edit"></i>Add Books </a></li>
                                <li><a href="requests.php"><i class="menu-icon icon-tasks"></i>Issue/Return Requests </a></li>
                                <li><a href="recommendations.php"><i class="menu-icon icon-list"></i>Book Recommendations </a></li>
                                <li><a href="current.php"><i class="menu-icon icon-list"></i>Currently Issued Books </a></li>
                            </ul>
                            <ul class="widget widget-menu unstyled">
                                <li><a href="logout.php"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    
                    <div class="span9">
                        <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Student Details</h3>
                            </div>
                            <div class="module-body">
                        <?php
                            $rno=$_GET['id'];
                            $sql="select * from LMS.user where RollNo='$rno'";
                            $result=$conn->query($sql);
                            $row=$result->fetch_assoc();    
                            
                                $name=$row['Name'];
                                $category=$row['Category'];
                                $email=$row['EmailId'];
                                $mobno=$row['MobNo'];


                                echo "<b><u>Name:</u></b> ".$name."<br><br>";
                                echo "<b><u>Category:</u></b> ".$category."<br><br>";
                                echo "<b><u>Roll No:</u></b> ".$rno."<br><br>";
                                echo "<b><u>Email Id:</u></b> ".$email."<br><br>";
                                echo "<b><u>Mobile No:</u></b> ".$mobno."<br><br>"; 
                            ?>
                            
                        <a href="student.php" class="btn btn-primary">Go Back</a>                             
                               </div>
                           </div>
                        </div>
                    </div>
                    <!--/.span9-->

                </div>
            </div>
            <!--/.container-->
        </div>
<?php include 'others/footer.php'; ?>