
<?php 
include 'header.php';
?>
<form action="server.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">name</label>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter email" name="name" value="<?php  ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">roll no</label>
    <input type="number" class="form-control" id="roll" placeholder="Password" name="roll">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">address</label>
    <input type="text" class="form-control" id="address" aria-describedby="emailHelp" placeholder="Enter email" name="address">
  </div>


  <button type="submit" class="btn btn-primary" name="add">Submit</button>
</form>

<?php
include 'footer.php';
 ?>