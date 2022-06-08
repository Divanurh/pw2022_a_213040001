<?php
require 'function.php';

 $students = query("SELECT * FROM students");

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Students</title>
  </head>
  <body>

    <div class="container">
        <h1>List Students Kider</h1>

        <a href="tambah.php" class="btn btn-primary">Add Students Data</a>
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
      <td><?php echo $stds["Name"] ?></td>
      <td><?php echo $stds["Student Number"] ?></td>
      <td><?php echo $stds["Age"] ?></td>
      <td><?php echo $stds["Parents"] ?></td>
      <td>
          <a href="ubah.php?id=<?= $stds["id"]; ?>"class="btn badge bg-warning">change</a>
          <a href="hapus.php?id=<?= $stds["id"]; ?>"class="btn badge bg-danger" onclick="return confirm('yakin akan menghapus?')">delete</a>
      </td>
    </tr>
  </tbody>
  <?php } 
  ?>
</table>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>