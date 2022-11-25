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
                    	<center>
                           	<div class="card" style="width: 50%; padding: 10px;"> 
                                 <?php
                                $rollno = $_SESSION['RollNo'];
                                if (isset($_POST['submited'])) {
                $filename = $_FILES['imageUpload']['name'] ;
                $tempname = $_FILES['imageUpload']['tmp_name'] ; 
                $filesize = $_FILES['imageUpload']['size'] ;
                $fileextension = explode('.', $filename) ;
                $fileextension = strtolower(end($fileextension));

                $newfilename = uniqid().'images'.'.'.$fileextension ;
                $path = "../images/profiles/".$newfilename ;
                // echo ($userid);
             $sql4 = mysqli_query($conn,"UPDATE LMS.user SET image='$path'  WHERE RollNo='$rollno'");
            if (move_uploaded_file($tempname, $path) && $sql4)  {
             echo "<script>window.location.href='index.php';</script>";
             } else {
              echo "Error updating record: " . $con->error;
                }
        } 

                                $sql="select * from LMS.user where RollNo='$rollno'";
                                $result=$conn->query($sql);
                                $row=$result->fetch_assoc();

                                $name=$row['Name'];
                                $category=$row['Category'];
                                $email=$row['EmailId'];
                                $mobno=$row['MobNo'];
                                $image=$row['image'];
                                ?>  

                    			<form method="post" enctype="multipart/form-data" id="form">
        <div class="profile-pic-div">
           <img  src="<?php 
           if($row['image']=='') {
            echo "../images/user.jpg";
           } else{
            echo $row['image'];
           }
       ?>" id="photo">
           <input type="file" id="file" name="imageUpload" onchange="document.getElementById('form').submit();">
           <label for="file" id="uploadBtn" name="uploadBtn">Choose Photo</label>
        </div>
        <input type="hidden" name="submited" value="1" />
    </form>
                    			<div class="card-body">


                    				<i>
                    				<h1 class="card-title"><center><?php echo $name ?></center></h1>
                    				<br>
                    				<p><b>Email ID: </b><?php echo $email ?></p>
                    				<br>
                    				<p><b>Roll No: </B><?php echo $rollno ?></p>
                    				<br>
                    				<p><b>Category: </b><?php echo $category ?></p>
                    				<br>
                    				<p><b>Mobile number: </b><?php echo $mobno ?></p>
                    				</b>
                                </i>

                    			</div>
                    		</div>
                            <br>
                            <a href="edit_student_details.php" class="btn btn-primary">Edit Details</a>    
      					</center>              	
                    </div>
                    
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
<?php include 'others/footer.php'; ?>