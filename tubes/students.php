<?php
require 'function.php';

$students = query("SELECT * FROM students");

 //tombol cari ditekan
 if(isset($_GET["Search"]) ) {
    $keyword = $_GET["keyword"];
    $query = "SELECT * FROM students
              WHERE
              Name_students LIKE '%$keyword%' OR
              Parents LIKE '%$keyword%' OR
              Age LIKE '%$keyword%' OR
              Student_number LIKE '%$keyword%'
              ";
    $students = query($query);
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Students | Table</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
           <h2><span class="lab la-accusoft"></span> <span>Kider Kids</span></h2>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="index.html"><span class="las la-igloo"></span> <span>Dashboard</span></a>
                </li
                <li>
                    <a href="students.php"><span class="active" class="las la-users"></span> <span>Students</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-clipboard-list"></span> <span>School Classes</span></a>
                </li>
                <li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>

                Dashboard
            </h2>

            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Search here" />
            </div>

            <div class="user-wrapper">
                <img src="img/img11.jpeg" width="40px" height="40px" alt="">
                <div>
                    <h4>Diva</h4>
                    <small>admin</small>
                </div>
            </div>
        </header>

        <main>

            
    <div class="container col-md-12 m-0">
        <h1>List Students Kider</h1>

        <a href="add.php" class="btn btn-primary">Add Students Data</a>
        
        <div class="row mt-4">
          <div class="col-8">
            <form action="" method="get">
              <div class="input-group mb-3">
                <input type="text" class="form-control" name="keyword" id="keyword" autocomplete="off" placeholder="enter search..." autofocus>
                <button class="btn btn-primary" type="submit" id="search" name="Search">Search</button>
              </div>
            </form>
          </div>
        </div>

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