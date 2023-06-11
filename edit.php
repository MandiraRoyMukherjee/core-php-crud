
<?php 
include 'header.php';
include 'db.php';
$user_id = $_GET['id'];
$sql1 = "SELECT * FROM student where id='$user_id'";
$result1 = $conn->query($sql1);
$row=$result1->fetch_assoc();

?>

<form action="server.php" method="post">

  
   
  <div class="form-group">
    <label for="exampleInputEmail1">name</label>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter email" name="name" value="<?php echo $row['name']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">roll no</label>
    <input type="number" class="form-control" id="roll" placeholder="Password" name="roll" value="<?php echo $row['roll']; ?>">
  </div>
  <div class="form-group">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <label for="exampleInputEmail1">address</label>
    <input type="text" class="form-control" id="address" aria-describedby="emailHelp" placeholder="Enter email" name="address" value="<?php echo $row['address']; ?>">
  </div>


  <button type="submit" class="btn btn-primary" name="edit">edit</button>
 
</form>

<?php
include 'footer.php';
 ?>