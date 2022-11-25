<?php include 'others/header.php';
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
                        <form class="form-horizontal row-fluid" action="current.php" method="post">
                                        <div class="control-group">
                                            <label class="control-label" for="Search"><b>Search:</b></label>
                                            <div class="controls">
                                                <input type="text" id="title" name="title" placeholder="Enter Book Name/Book Id." class="span8" required>
                                                <button type="submit" name="submit"class="btn">Search</button>
                                            </div>
                                        </div>
                                    </form>
                                    <br>
                                    <?php
                                    $rollno = $_SESSION['RollNo'];
                                    if(isset($_POST['submit']))
                                        {$s=$_POST['title'];
                                            $sql="select * from LMS.record,LMS.book where RollNo = '$rollno' and Date_of_Issue is NOT NULL and Date_of_Return is NULL and book.Bookid = record.BookId and (record.BookId='$s' or Title like '%$s%')";

                                        }
                                    else
                                        $sql="select * from LMS.record,LMS.book where RollNo = '$rollno' and Date_of_Issue is NOT NULL and Date_of_Return is NULL and book.Bookid = record.BookId";

                                    $result=$conn->query($sql);
                                    $rowcount=mysqli_num_rows($result);

                                    if(!($rowcount))
                                        echo "<br><center><h2><b><i>No Results</i></b></h2></center>";
                                    else
                                    {

                                
                                    ?>
                    <div style="height: 430px; overflow-y: scroll;">
                        <table class="table" id = "tables">
                                  <thead>
                                    <tr>
                                      <th>Book id</th>
                                      <th>Book name</th>
                                      <th>Issue Date</th>
                                      <th>Due date</th>
                                      <th></th>
                                    </tr>
                                  </thead>
                                  <tbody>

                                <?php

                            
                            //$result=$conn->query($sql);
                            while($row=$result->fetch_assoc())
                            {
                                $bookid=$row['BookId'];
                                $name=$row['Title'];
                                $issuedate=$row['Date_of_Issue'];
                                $duedate=$row['Due_Date'];
                                $renewals=$row['Renewals_left'];
                            
                            ?>

                                    <tr>
                                      <td><?php echo $bookid ?></td>
                                      <td><?php echo $name ?></td>
                                      <td><?php echo $issuedate ?></td>
                                      <td><?php echo $duedate ?></td>
                                        <td><center>
                                        <?php 
                                         if($renewals)
                                            echo "<a href=\"renew_request.php?id=".$bookid."\" class=\"btn btn-success\">Renew</a>";
                                        ?>
                                        <a href="return_request.php?id=<?php echo $bookid; ?>" class="btn btn-primary">Return</a>
                                        </center></td>
                                    </tr>
                            <?php }} ?>
                                    </tbody>
                                </table>
                            </div>
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
<?php include 'others/footer.php'; ?>