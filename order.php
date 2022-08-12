
<?php include('dbconnection.php');?>
<?php
//Code for Registration 
if(isset($_POST['order']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $edate=$_POST['date'];
    $ptype=$_POST['ptype'];
    $ammount=$_POST['paid'];
    $address=$_POST['add'];
    $msg=mysqli_query($con,"insert into booking(fname,lname,mobile,email,event_date,ptype,address,ammount) values('$fname','$lname','$mobile','$email','$edate','$ptype','$address','$ammount')");
if($msg>0)
{
    echo "<script>alert('Register successfully');</script>";
}
else{
    echo "not register";    
}
}
?>

<!DOCTYPE html>
<html lang="en">
  <?php include('include/header.php')?>

    <div class="site-blocks-cover overlay inner-page-cover" style="background-image: url('images/hero_bg_33.jpg');" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 text-center" data-aos="fade-up">
            <h1>"Boking here our best photogapher"</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section" data-aos="fade">
    <div class="container-fluid">
      
      <div class="row justify-content-center">
        <div class="col-md-7">
           
          <div class="row">
            <div class="col-lg-8 mb-5">
              <form method="post" action="" enctype="multipart/form-data">
               

                <div class="row form-group">
                  <div class="col-md-6 mb-3 mb-md-0">
                    <label class="text-black" for="fname">First Name</label>
                    <input type="text" name="fname" id="fname" class="form-control">
                  </div>
                  <div class="col-md-6">
                    <label class="text-black" for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname" class="form-control">
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-12">
                    <label class="text-black" for="Mobile">Mobile number</label> 
                    <input type="text" name="mobile" id="mob" class="form-control">
                  </div>
                </div>

                <div class="row form-group">
                  
                  <div class="col-md-12">
                    <label class="text-black" for="email">Email</label> 
                    <input type="email" name="email" id="email" class="form-control">
                  </div>
                </div>

                <div class="row form-group">
                  
                  <div class="col-md-12">
                    <label class="text-black" for="subject">Date Of Event</label> 
                    <input type="date" name="date" id="date" class="form-control">
                  </div>
                </div>
                 <div class="row form-group">
                  
                  <div class="col-md-12">
                    <label class="text-black" for="subject">Type of photography</label> 
                     <select class="form-control" name="ptype">
                        <option value="nature">---SELECT---</option>
                        <option value="nature">NATURE PHOTO</option>
                        <option value="portrait">MATERNITY PHOTOGRAPHY</option>
                        <option value="wedding">WEDDING PHOTO</option>
                        <option value="baby">BABY SHOOT</option>
                        <option value="prewedding">PRE-WEDDING PHOTO</option>
                        <option value="fashion">FASHION PHOTO</option>
                        <option value="product">PRODUCT SHOOT</option>
                     </select>
                  </div>
                </div>
                 <div class="row form-group">
                  
                  <div class="col-md-12">
                    <label class="text-black" for="subject">Advance Paid</label> 
                    <input type="text" name="paid" value="500 &#x20B9;" readonly="" class="form-control">
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-12">
                    <label class="text-black" for="message">Address</label> 
                    <textarea  name="add" id="message" cols="30" rows="7" class="form-control" placeholder="Write your address  here..."></textarea>
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-12">
                    <input type="submit" name="order" value="Book" class="btn btn-primary py-2 px-4 text-white">
                  </div>
                </div>

    
              </form>
            </div>
            <div class="col-lg-3 ml-auto">
              <div class="mb-3 bg-white">
                <p class="mb-0 font-weight-bold">Address</p>
                <p class="mb-4">Word no 07, Village Silpur, Tahsil-Kotma Distt-Anuppur, (M.P.)</p>

                <p class="mb-0 font-weight-bold">Phone</p>
                <p class="mb-4"><a href="#">+82  2484   9123</a></p>

                <p class="mb-0 font-weight-bold">Email Address</p>
                <p class="mb-0"><a href="#">Rajprajapati2080@gmail.com</a></p>

              </div>
              
            </div>
          </div>
        </div>
    
      </div>
    </div>
  <?php include('include/footer.php')?>
    
  </body>
</html>