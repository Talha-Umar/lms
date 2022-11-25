 <?php include 'others/header.php'; 
include 'others/topbar.php';
 ?>
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                         <?php include 'others/sidebar.php'; ?>
                    </div>
                    <!--/.span3-->

                    <div class="span9">
                        <div style="height: 430px; overflow-y: scroll;">
                        <table class="table" id = "tables">
                                  <thead>
                                    <tr>
                                      <th>Book Name</th>
                                      <th>Description</th>
                                      <th>Recommended By</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                            $sql="select * from LMS.recommendations";
                            $result=$conn->query($sql);
                            while($row=$result->fetch_assoc())
                            {
                                $bookname=$row['Book_Name'];
                                $description=$row['Description'];
                                $rollno=$row['RollNo'];
                            ?>
                                    <tr>
                                      <td><?php echo $bookname ?></td>
                                      <td><?php echo $description?></td>
                                      <td><b><?php echo strtoupper($rollno)?></b></td>

                                    </tr>
                               <?php } ?>
                               </tbody>
                                </table>
                            </div>
<br>
                                <center>
                                <a href="addbook.php" class="btn btn-success">Add a Book</a></center>
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
 <?php include 'others/footer.php'; ?>