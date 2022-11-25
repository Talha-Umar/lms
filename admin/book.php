<?php
include 'others/header.php';
include 'others/topbar.php';
?>
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <?php include 'others/sidebar.php'; ?>
                    </div>

                    <div class="span9">
                  <form class="form-horizontal row-fluid" action="book.php" method="post">
                                        <div class="control-group">
                                            <label class="control-label" for="Search"><b>Search:</b></label>
                                            <div class="controls">
                                                <input type="text" id="title" name="title" placeholder="Enter Name/ID of Book" class="span8" required>
                                                <button type="submit" name="submit"class="btn">Search</button>
                                            </div>
                                        </div>
                                    </form>
                                    <br>
                                    <?php
                                    if(isset($_POST['submit']))
                                        {$s=$_POST['title'];
                                            $sql="select * from LMS.book where BookId='$s' or Title like '%$s%'";
                                        }
                                    else
                                        $sql="select * from LMS.book";

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
                                      <th>Availability</th>
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
                                $avail=$row['Availability'];
                            
                           
                            ?>
                                    <tr>
                                      <td><?php echo $bookid ?></td>
                                      <td><?php echo $name ?></td>
                                      <td><b><?php echo $avail ?></b></td>
                                        <td><center>
                                            <a href="bookdetails.php?id=<?php echo $bookid; ?>" class="btn btn-primary">Details</a>
                                            <a href="edit_book_details.php?id=<?php echo $bookid; ?>" class="btn btn-success">Edit</a>
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