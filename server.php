<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<?php 
require 'db.php';
if(isset($_REQUEST['add'])){

    $name=$_REQUEST['name'];
    $roll=$_REQUEST['roll'];
    $address=$_REQUEST['address'];
     $sql="insert into student(name,roll,address) values ('$name','$roll','$address')";
     echo $sql;
    $conn->query($sql);
    echo "<script>alert('data inserted successfully!');</script>";

    header("Location:index.php");

}
if(isset($_GET['id'])){
    $user_id = $_GET['id'];
    $sql2 = "DELETE FROM `student` WHERE `id`='$user_id'";
$result2 = $conn->query($sql2);
if ($result2 == TRUE) {

    echo "<script>alert('deleted successfully!');</script>";
    header("Location:index.php");

}else{

    echo "Error:" ;




}
}
if(isset($_REQUEST['edit'])){

    $name=$_REQUEST['name'];
    $roll=$_REQUEST['roll'];
    $address=$_REQUEST['address'];
    $user_id = $_POST['id'];
    $sql3="UPDATE `student` SET `name`='$name',`roll`='$roll',`address`='$address' WHERE `id`='$user_id'";
    echo $sql3;
   $result3= $conn->query($sql3);
   if($result3 == TRUE){
    echo "<script>alert('data updated successfully!');</script>";

    header("Location:index.php");
   }
   else{
    echo "error";
   }

}



?>