<?php 
include 'header.php';
include 'db.php';

$sql1 = "SELECT id, name,roll,address FROM student";
$result1 = $conn->query($sql1);
$row=$result1->num_rows;
$final=$result1->fetch_assoc();

?>

  
  <a href="add.php">  <button type="button"> add </button> </a>


<table style="width:100%">
  <tr>
    <th>name</th>
    <th>roll</th>
    <th>address</th>
  </tr>

  <?php
  if ($row > 0) {
    while($finalres=$result1->fetch_assoc()) {
        ?>

        <tr>
        <td><?php echo $finalres['name']  ?> </td>
        <td><?php echo $finalres['roll']  ?></td>
        <td><?php echo $finalres['address']  ?></td>
        <td><a href="server.php?id=<?php echo $finalres['id']  ?>"> <button  name="delete"> delete </button> </a> </td>
        <td><a href="edit.php?id=<?php echo $finalres['id']  ?>"> <button  name="edit"> edit </button> </td>
      </tr>

      <?php
    }
}
else {
    echo "0 results";
}
?>



</table>

<?php
include 'footer.php';
 ?>

