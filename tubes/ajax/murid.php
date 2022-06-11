<?php
require '../function.php';

$keyword = $_GET['keyword'];

$query = "SELECT * FROM students
                WHERE
                Name_students LIKE '%$keyword%' OR
                Parents LIKE '%$keyword%' OR
                Age LIKE '%$keyword%' OR
                Student_number LIKE '%$keyword%'
            ";
$students = query($query);
?>
<table class="table">
  <thead>
    <tr>   
      <th scope="col">No</th>
      <th scope="col">Picture</th>
      <th scope="col">Name</th>
      <th scope="col">Student Number</th>
      <th scope="col">Age</th>
      <th scope="col">Parents</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php $no = 1; foreach($students as $stds) { ?> 
    <tr class="align-middle">
      <th scope="row"><?= $no++; ?></th>
      <td>
          <img src="img/<?php echo $stds["Picture"]; ?>" width="50" class="rounded-circle" >
      </td>
      <td><?php echo $stds["Name_students"] ?></td>
      <td><?php echo $stds["Student_number"] ?></td>
      <td><?php echo $stds["Age"] ?></td>
      <td><?php echo $stds["Parents"] ?></td>
      <td>
          <a href="change.php?id=<?= $stds["id"]; ?>"class="btn badge bg-warning">Change</a>
          <a href="delete.php?id=<?= $stds["id"]; ?>"class="btn badge bg-danger" onclick="return confirm('yakin akan menghapus?')">Delete</a>
      </td>
    </tr>
  </tbody>
  <?php }
  ?>
</table>