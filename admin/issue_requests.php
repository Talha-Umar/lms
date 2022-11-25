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
                    <div class="span9">
                        <center>
                        <a href="issue_requests.php" class="btn btn-info">Issue Requests</a>
                        <a href="renew_requests.php" class="btn btn-info">Renew Request</a>
                        <a href="return_requests.php" class="btn btn-info">Return Requests</a>
                        </center>
                        <h1><i>Issue Requests</i></h1>
                        <div style="height: 410px; overflow-y: scroll;">
                        <table class="table" id = "tables">
                                  <thead>
                                    <tr>
                                      <th>Roll Number</th>
                                      <th>Book Id</th>
                                      <th>Book Name</th>
                                      <th>Availabilty</th>
                                      <th></th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                            $sql="select * from LMS.record,LMS.book where Date_of_Issue is NULL and record.BookId=book.BookId order by Time";
                            $result=$conn->query($sql);
                            while($row=$result->fetch_assoc())
                            {
                                $bookid=$row['BookId'];
                                $rollno=$row['RollNo'];
                                $name=$row['Title'];
                                $avail=$row['Availability'];
                            
                                
                            ?>
                                    <tr>
                                      <td><?php echo strtoupper($rollno) ?></td>
                                      <td><?php echo $bookid ?></td>
                                      <td><b><?php echo $name ?></b></td>
                                      <td><?php echo $avail ?></td>
                                      <td><center>
                                        <?php
                                        if($avail > 0)
                                        {echo "<a href=\"accept.php?id1=".$bookid."&id2=".$rollno."\" class=\"btn btn-success\">Accept</a>";}
                                         ?>
                                        <a href="reject.php?id1=<?php echo $bookid ?>&id2=<?php echo $rollno ?>" class="btn btn-danger">Reject</a>
                                    </center></td>
                                    </tr>
                               <?php } ?>
                               </tbody>
                                </table>
                            </div>
                            </div>
                    <!--/.span3-->
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
<?php include 'others/footer.php'; ?>