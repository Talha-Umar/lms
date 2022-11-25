<?php
require('dbconn.php');

$id=$_GET['id'];

$roll=$_SESSION['RollNo'];

$sql1 = "SELECT * FROM LMS.record WHERE RollNo='$roll' AND BookId='$id'";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) { 
echo "<script type='text/javascript'>alert('Request Already Sent.')</script>";
    header( "Refresh:0.01; url=book.php", true, 303);
}
else {

$sql="insert into LMS.record (RollNo,BookId,Time) values ('$roll','$id', curtime())";

if($conn->query($sql) === TRUE)
{
echo "<script type='text/javascript'>alert('Request Sent to Admin.')</script>";
header( "Refresh:0.01; url=book.php", true, 303);
}

}




?>