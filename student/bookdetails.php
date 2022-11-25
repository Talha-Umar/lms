<?php 
include 'others/header.php';
include 'others/topbar.php';
?>
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                       <?php include 'others/sidebar.php'; ?>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    
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
                        <!-- <a href="issue_request.php?id=<?php echo $bookid; ?>" class="btn btn-success">Issue</a> -->                         
                               </div>
                           </div>
                            </div>
                    <!--/.span3-->
                    <!--/.span9-->
                
                    <!--/.span3-->
                    <!--/.span9-->
                </div>
                    
                    <!--/.span9-->
                </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->

<?php include 'others/footer.php'; ?>