<?php
session_start();
include'dbconnection.php';
// checking session is valid for not 
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{

// for deleting user
if(isset($_GET['id']))
{
$adminid=$_GET['id'];
$msg=mysqli_query($con,"delete from upload_photo where id='$adminid'");
if($msg)
{
echo "<script>alert('Data deleted');window.location.href='Manage_gallery.php';</script>";
}
}
 if (isset($_GET['approve'])) {
        $note_approve = mysqli_real_escape_string($con,$_GET['approve']);
        $approve_query = "UPDATE upload_photo SET status='approved' WHERE id='$note_approve'";
        $run_approve_query = mysqli_query($con, $approve_query) or die (mysqli_error($con));
        if (mysqli_affected_rows($con) > 0) {
            echo "<script>alert('photo approved successfully'); window.location.href='Manage_gallery.php';</script>";
        }
        else {
         echo "<script>alert('error occured.try again!');</script>";   
        }
        }
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Admin | Manage_gallery</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
     <!-- fancybox CSS library -->
    <link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css">
    <!-- JS library -->
    <script src="//code.jquery.com/jquery-3.1.1.min.js"></script>
    <!-- fancybox JS library -->
    <script src="fancybox/jquery.fancybox.js"></script>
    <script type="text/javascript">
        $("[data-fancybox]").fancybox({ });
    </script>
    <style type="text/css">
</style>
  </head>

  <body>
 <?php
         include("include/header.php");
         include("include/aside.php");
    ?>
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Manage Gallery</h3>
				<div class="row">
				
                  
	                  
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> All Image Details </h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th>Sno.</th>
                                  <th class="hidden-phone">Image</th>
                                  <th class="hidden-phone">Big_Image</th>
                                  <th> Name </th>
                                  <th>Description</th>
                                  <th>Status</th>
                                  <th>Phototype</th>
                                  <th>Approve</th>

                              </tr>
                              </thead>
                              <tbody>
                              <?php $ret=mysqli_query($con,"select * from upload_photo");
							  $cnt=1;
							  while($row=mysqli_fetch_array($ret))
							  {?>
                              <tr>
                              <td><?php echo $cnt;?></td>
                                   <td><a href="image/<?php echo $row['photo'];?>" data-fancybox="group">
                                    <img src="image/<?php echo $row['photo'];?>" height="50px" width="50px"/></a>
                                  </td>
                                   <td><a href="image/big_image/<?php echo $row['big_photo'];?>" data-fancybox="group">
                                    <img src="image/big_image/<?php echo $row['big_photo'];?>" height="50px" width="50px"/></a></td>
                                  <td><?php echo $row['name'];?></td>
                                  <td><?php echo $row['description'];?></td>
                                  <td><?php echo $row['status'];?></td>
                                  <td><?php echo $row['ptype'];?></td>
                                  <td><a href="Manage_gallery.php?approve=<?php echo $row['id'];?>"> 
                                     <button class="btn-primary btn-xs" onClick="return confirm('Do you really want to Approve this photo?');"><i class='fa fa-times' style='color: red;'></i>Approve</button></a></td>
                                  <td>
                                     
                                     <a href="update_gallery.php?uid=<?php echo $row['id'];?>"> 
                                     <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                     <a href="Manage_gallery.php?id=<?php echo $row['id'];?>"> 
                                     <button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash-o "></i></button></a>
                                  </td>
                              </tr>
                              <?php $cnt=$cnt+1; }?>
                             
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
		</section>
      </section
  ></section>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/common-scripts.js"></script>
  <script>
      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
<?php } ?>