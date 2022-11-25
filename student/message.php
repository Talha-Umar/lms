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
                    <div class="span9">
                        <div style="height: 480px; overflow-y: scroll;">
                        <table class="table" id = "tables">
                                  <thead>
                                    <tr>
                                      <th>Message</th>
                                      <th>Date</th>
                                      <th>Time</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                    $rollno=$_SESSION['RollNo'];
                            $sql="select * from LMS.message where RollNo='$rollno' order by Date DESC,Time DESC";
                            $result=$conn->query($sql);
                            while($row=$result->fetch_assoc())
                            {
                                $msg=$row['Msg'];
                                $date=$row['Date'];
                                $time=$row['Time'];
                            
                           
                            ?>
                                    <tr>
                                      <td><?php echo $msg ?></td>
                                      <td><?php echo $date ?></td>
                                      <td><?php echo $time ?></td>
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