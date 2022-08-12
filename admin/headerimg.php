
<?php
session_start();
include'dbconnection.php';
//Checking session is valid or not
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['btn']))
{
// Posted Values    
$imgname=$_POST['name'];
$imgfile=$_FILES['img']["name"];    
$ptype=$_POST['photo'];
// get the image extension
// $extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
// // allowed extensions
// $allowed_extensions = array(".jpg",".jpeg",".png",".gif");
// // Validation for allowed extensions
// if(!in_array($extension,$allowed_extensions))
// {
// echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
// }
// else
// {
// //rename the image file
// $imgnewfile=md5($imgfile).$extension;  
// Code for move image into directory
move_uploaded_file($_FILES['img']["tmp_name"],"header_image/".$imgfile);
// Query for insertion data into database  
$query=mysqli_query($con,"insert into upload_photo(name,description,photo,big_photo,ptype) values('$imgname','$imgdesc','$imgfile','$imgfile1','$ptype')");
if($query)
{
echo "<script>alert('Data inserted successfully');</script>";
}
else
{
echo "<script>alert('Data not inserted');</script>";
}

}
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Admin | Update Profile</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
  </head>

  <body>

  <section id="container" >
    <?php
         include("include/header.php");
         include("include/aside.php");
    ?>
      <section id="main-content">
          <section class="wrapper">
          	<h3>upload header photo</h3>
             	
				<div class="row">
        
                  
                    
                  <div class="col-md-12">
                      <div class="content-panel">
                           <form class="form-horizontal style-form" name="form1" method="post" action="" onSubmit="return valid();" enctype="multipart/form-data">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Name </label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="name" required="">
                              </div>
                          </div>
                              <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;" >Upload photo(size 1900x1269)</label>
                              <div class="col-sm-10">
                                  <input type="file" class="form-control" name="img" required="">
                              </div>
                          </div>
                          
                              <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Photography type</label>
                              <div class="col-sm-10">
                               <select class="form-control" name="photo">
                                   <option value="nature">NATURE PHOTO</option>
                                   <option value="maternity">MATERNITY PHOTOGRAPHY</option>
                                   <option value="wedding">WEDDING PHOTO</option>
                                   <option value="baby">BABY SHOOT</option>
                                   <option value="prewedding">PRE-WEDDING PHOTO</option>
                                   <option value="fashion">FASHION PHOTO</option>
                                   <option value="product">PRODUCT SHOOT</option>
                                 </select>
                               </div>
                              </div>
            
                          <div style="margin-left:100px;">
                          <input type="submit" name="btn" value="Upload" class="btn btn-theme"></div>
                          </form>
                      </div>
                  </div>
              </div>
            <?php }?>
		</section>
      </section></section>
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