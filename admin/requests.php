 <?php include 'others/header.php';
include 'others/topbar.php';
  ?>
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                         <?php include 'others/sidebar.php'; ?>
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="span3">
                        <center>
                            <a href="issue_requests.php" class="btn btn-info" ><image width="100px" src="images/book2.png"></image><p>Issue Requests</p></a>
                        </center>
                    </div>
                    <div class="span3">
                        <center>
                            <a href="renew_requests.php" class="btn btn-info"><image width="100px" src="images/book3.png"></image><p>Renew Request</p></a>
                        </center>
                    </div> 
                    <div class="span3">
                        <center>
                            <a href="return_requests.php" class="btn btn-info"><image width="100px" src="images/book4.png"></image><p>Return Requests</p></a>
                        </center>
                    </div>
                    <!--/.span3-->
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
 <?php include 'others/footer.php'; ?>