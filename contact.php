<!DOCTYPE html>
<html lang="en">
  <?php include('include/header.php')?>

    <div class="site-blocks-cover overlay inner-page-cover" style="background-image: url('images/contactcover.jpg');" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 text-center" data-aos="fade-up">
            <h1>Contact Me</h1>
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
              <form action="register.php" method="post" enctype="multipart/form-data">
               

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
                    <label class="text-black" for="email">Mobile number</label> 
                    <input type="text" name="mob" id="mob" class="form-control">
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
                    <label class="text-black" for="subject">Subject</label> 
                    <input type="subject" name="sub" id="subject" class="form-control">
                  </div>
                </div>
                 <div class="row form-group">
                  
                  <div class="col-md-12">
                    <label class="text-black" for="subject">Upload your resume</label> 
                    <input type="file" name="img" id="file" class="form-control">
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-12">
                    <label class="text-black" for="message">Message</label> 
                    <textarea name="message" name="msg" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-12">
                    <input type="submit" name="btn" value="Send Message" class="btn btn-primary py-2 px-4 text-white">
                  </div>
                </div>

    
              </form>
            </div>
            <div class="col-lg-3 ml-auto">
              <div class="mb-3 bg-white">
                <p class="mb-0 font-weight-bold">Address</p>
                <p class="mb-4">Word no 07, Village Silpur, Tahsil-Kotma Distt-Anuppur, (M.P.)</p>

                <p class="mb-0 font-weight-bold">Phone</p>
                <p class="mb-4"><a href="#">+8224  8491  23</a></p>

                <p class="mb-0 font-weight-bold">Email Address</p>
                <p class="mb-0"><a href="#">rajprajapati2080@gmail.com</a></p>

              </div>
              
            </div>
          </div>
        </div>
    
      </div>
    </div>
    <center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29356.098602649552!2d81.6777483310604!3d23.11494153399177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3987b27048f1d845%3A0xcc7bedc62dddd253!2sAnuppur%2C%20Madhya%20Pradesh%20484224!5e0!3m2!1sen!2sin!4v1583000090449!5m2!1sen!2sin" width="1200" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </center>
  </div>


  

  <?php include('include/footer.php')?>
    
  </body>
</html>