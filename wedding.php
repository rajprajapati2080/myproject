<!DOCTYPE html>
<html lang="en">
  <?php include('include/header.php')?>
    <div class="site-blocks-cover overlay inner-page-cover" style="background-image: url('images/weddingcover.jpg');" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 text-center" data-aos="fade-up">
            <h1>Wedding Photography</h1>
            <p class="caption">36 Pictures / Nature</p>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section"  data-aos="fade">
    <div class="container">
      
      <div class="row no-gutters" id="lightgallery">
         <?php
        include'dbconnection.php';
         $ret=mysqli_query($con,"select * from upload_photo WHERE ptype='wedding'");
                              while($row=mysqli_fetch_array($ret))
                              {?>
         
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="admin/image/<?php echo $row['photo'];?>" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor doloremque hic excepturi fugit, sunt impedit fuga tempora, ad amet aliquid?</p>">
          <a href="#"><img src="admin/image/<?php echo $row['photo'];?>" alt="IMage" class="img-fluid"></a>
        </div>
     <?php }?>
       
        

      </div>
    </div>
  </div>


   <div class="py-3 mb-5 pt-5">
     <div class="container">
       <div class="row">
         <div class="col-md-12 d-md-flex align-items-center">
           <h2 class="text-black mb-5 mb-md-0 text-center text-md-left">Need a photographer?</h2>
           <div class="ml-auto text-center text-md-left">
            <a href="contact.php" class="btn btn-danger py-3 px-5 rounded">Contact Me</a>
           </div>
         </div>
       </div>
     </div>
   </div>
  <?php include('include/footer.php')?>
  </body>
</html>