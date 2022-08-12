<?php 
if (isset($_POST['btn'])) {
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$mob=$_POST['mob'];
	$email=$_POST['email'];
	$sub=$_POST['sub'];
	$resume=$_FILES['img']['name'];
    $file_tmp =$_FILES['img']['tmp_name'];
	$msg=$_POST['msg'];
	$conn=mysqli_connect("localhost","root","","photography");
	$query="insert into customer values('$fname','$lname','$mob','$email','$sub','$resume','$msg')";
	$x=mysqli_query($conn,$query);
	move_uploaded_file($file_tmp,"image/".$resume);
	if ($x>0) 
	{
		//echo "insert";
		echo "<script> alert('thankyou for submission !');window.location.href= 'contact.php';</script>";
	}
	else{
		echo "<script> alert('data not inserted!');window.location.href= 'contact.php';</script>";
	}
}
 ?>