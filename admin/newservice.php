<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['submit2']))
{
  $servicename=$_POST['servicename'];
  $servicedes=$_POST['servicedes'];
  $price=$_POST['price'];
 
  $images=$_FILES['image']['name'];
  $tmp_dir=$_FILES['image']['tmp_name'];
  $imageSize=$_FILES['image']['size'];

  $upload_dir='uploads/';
		$imgExt=strtolower(pathinfo($images,PATHINFO_EXTENSION));
		$valid_extensions=array('jpeg', 'jpg', 'png', 'gif', 'pdf');
		$image=rand(1000, 1000000).".".$imgExt;
		move_uploaded_file($tmp_dir, $upload_dir.$image);

  $sql="insert into tblservice(ServiceName,SerDes,ServicePrice, image)values(:servicename,:servicedes,:price, :image)";

  $query=$dbh->prepare($sql);
  $query->bindParam(':servicename',$servicename,PDO::PARAM_STR);
  $query->bindParam(':servicedes',$servicedes,PDO::PARAM_STR);
  $query->bindParam(':price',$price,PDO::PARAM_STR);
  $query->bindParam(':image',$image,PDO::PARAM_STR);
  $query->execute();
  $LastInsertId=$dbh->lastInsertId();
  if ($LastInsertId>0) {
    echo '<script>alert("Service has been added.")</script>';
  }
  else
  {
   echo '<script>alert("Something Went Wrong. Please try again")</script>';
 }
}
?>
<div class="card-body">
  <h4 class="card-title">Add Service Form </h4>
  <form class="forms-sample" method="post">
    <div class="form-group">
      <label for="exampleInputName1">Service Name</label>
      <input type="text" name="servicename" class="form-control" id="servicename" placeholder="Service Name" required>
    </div>
    <div class="form-group">
      <label for="exampleInputName1">Price</label>
      <input type="text" name="price" class="form-control" id="price" placeholder="Price" required>
    </div>
    <div class="form-group">
      <label for="imageupload">Image</label>
      <input class="form-control" type="file" name="image" value="" />
    </div>
    <div class="form-group">
      <label for="exampleTextarea1">Service Description</label>
      <textarea class="form-control" name="servicedes" id="servicedes" rows="4" required></textarea>
    </div>
    <button type="submit" name="submit2" class="btn btn-primary btn-fw mr-2">Submit</button>
  </form>
</div>