<?php include 'others/header.php';?>
<!--/ .header -->
<!-- Topbar -->
<?php include 'others/topbar.php';?>
<!--/ .Topbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <!-- sidebar -->
                        <?php include 'others/sidebar.php'; ?>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->

                    <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Send a message</h3>
                            </div>
                            <div class="module-body">

                                    <br >

                                    <form class="form-horizontal row-fluid" action="message.php" method="post">
                                        <div class="control-group">
                                            <label class="control-label" for="Rollno"><b>Receiver Roll No:</b></label>
                                            <div class="controls">
                                                <input type="text" id="RollNo" name="RollNo" placeholder="RollNo" class="span8" required>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="Message"><b>Message:</b></label>
                                            <div class="controls">
                                                <input type="text" id="Message" name="Message" placeholder="Enter Message" class="span8" required>
                                            </div>
                                            <hr>
                                        <div class="control-group">
                                            <div class="controls">
                                                <button type="submit" name="submit"class="btn">Add Message</button>
                                            </div>
                                        </div>
                                    </form>
                            </div>
                        </div>

                        
                        
                    </div><!--/.content-->
                </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>

<?php
if(isset($_POST['submit']))
{
    $rollno=$_POST['RollNo'];
    $message=$_POST['Message'];

$sql1="insert into LMS.message (RollNo,Msg,Date,Time) values ('$rollno','$message',curdate(),curtime())";

if($conn->query($sql1) === TRUE){
echo "<script type='text/javascript'>alert('Success')</script>";
}
else
{//echo $conn->error;
echo "<script type='text/javascript'>alert('Error')</script>";
}
    
}
?>
    <!-- footer -->
<?php include 'others/footer.php'; ?>
<!--/ .footer -->