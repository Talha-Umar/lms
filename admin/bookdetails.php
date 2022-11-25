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
                                <li><a href="student.php"><i class="menu-icon icon-user"></i>Manage Students </a>
                                </li>
                                <li><a class="active" href="book.php"><i class="menu-icon icon-book active"></i>All Books </a></li>
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

                    <div class="span9">
                        <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Book Details</h3>
                            </div>
                            <div class="module-body">
                        <?php
                            $x=$_GET['id'];
                            $sql="select * from LMS.book where BookId='$x'";
                            $result=$conn->query($sql);
                            $row=$result->fetch_assoc();    
                            
                                $bookid=$row['BookId'];
                                $name=$row['Title'];
                                $publisher=$row['Publisher'];
                                $year=$row['Year'];
                                $avail=$row['Availability'];

                                echo "<b>Book ID:</b> ".$bookid."<br><br>";
                                echo "<b>Title:</b> ".$name."<br><br>";
                                $sql1="select * from LMS.author where BookId='$bookid'";
                                $result=$conn->query($sql1);
                                
                                echo "<b>Author:</b> ";
                                while($row1=$result->fetch_assoc())
                                {
                                    echo $row1['Author']."&nbsp;";
                                }
                                echo "<br><br>";
                                echo "<b>Publisher:</b> ".$publisher."<br><br>";
                                echo "<b>Year:</b> ".$year."<br><br>";
                                echo "<b>Availability:</b> ".$avail."<br><br>";

                                
                        
                           
                            ?>
                            
                        <a href="book.php" class="btn btn-primary">Go Back</a>
                        <a href="edit_book_details.php?id=<?php echo $bookid;?>" class="btn btn-success">Edit Book</a>                             
                               </div>
                           </div>
                            </div>
                    <!--/.span3-->
                    <!--/.span9-->
                
                    <!--/.span3-->
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
<div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2022  UE Library Management System 
            </div>
        </div>
        
        <!--/.wrapper-->
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
      
    </body>

</html>
