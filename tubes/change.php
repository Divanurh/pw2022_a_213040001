<?php
require 'function.php';

//Query data mahasiswa berdasarkan id
$id = $_GET["id"];
$stds = query("SELECT * FROM students WHERE id = $id")[0];

// ketika tombol tambah di klik 
if(isset($_POST["change"])) {
// jalankan fungsi tambah (
if(change($_POST) > 0) {
    echo "<script>
    alert('data berhasil diubah') ;
    document.location.href='students.php';</script>";
    }else {
      echo "
      <script>
          alert('data gagal diubah!');
          document.location.href = 'students.php';
      </script>
  ";
  }
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Change Student Data</title>
  </head>
  <body>

    <div class="container">
        <h1>Form Change Students Data</h1>

        <a href="students.php" >Back to list</a>

        <div class="row mb-3">
            <div class="col-8">

            <form action="" method="post" autocomplete="off" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $stds["id"]; ?>">
                <input type="hidden" name="oldPicture" value="<?= $stds["Picture"];?>">
                <label for="Student_number" class="form-label">STUDENT NUMBER</label>
                <input type="text" class="form-control" id="Student_number" name="Student_number" required maxlength="9" minlength="9"
                  value="<?= $stds["Student_number"]; ?>">

                <div class="row mb-3">
                <label for="Name_students" class="form-label">NAME</label>
                <input type="text" class="form-control" id="Name_students" name="Name_students"  value="<?= $stds["Name_students"]; ?>">
                </div>

                <div class="row mb-3">
                <label for="Age" class="form-label">AGE</label>
                <input type="text" class="form-control" id="Age" name="Age"  value="<?= $stds["Age"]; ?>">
                </div>

                <div class="row mb-3">
                <label for="Parents" class="form-label">PARENTS</label>
                <input type="text" class="form-control" id="Parents" name="Parents"  value="<?= $stds["Parents"]; ?>">
                </div>

                <div class="row mb-3">
                <label for="Picture" class="form-label">PICTURE</label>
                <img src="img/<?= $stds["Picture"];?>" width="30">
                <input type="file" class="form-control" id="Picture" name="Picture"  value="<?= $stds["Picture"]; ?>">
                </div>

                <button type="submit" class="btn btn-primary" name="change">Change Student Data</button>

            </form>


            </div>
        </div>

        
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