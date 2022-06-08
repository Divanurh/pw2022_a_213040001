<?php 

//cek apakah tombol tambah sudah di klik
require 'function.php';

// cek apakah tombol submit telah ditekan atau belum
if(isset($_POST["submit"])) {


// cek apakah data berhasil di tambahkan atau tidak
    if(submit ($_POST) > 0) {
        echo "
        <script>
        alert('data berhasil ditambahkan')
        document.location.href='students.php'
        </script>";
        
    } else {
        echo
        "<script>
        alert('data gagal ditambahkan')
        document.location.href='students.php'
        </script>";
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

    <title>Add Students Data</title>
</head>
<body>
    
    <div class="container">
        <h1> Add Students Data</h1>

        <a href="students.php" class="">Back to list</a>

        <div class ="row mt-3">
            <div class ="row col-8">
            
            <form action ="" method="post" autocomplete="off" enctype="multipart/form-data">
                <label for="Student Number" class="form-label">STUDENT NUMBER</label>
                <input type="text" name="Student_number" class="form-control" style= "width: 250px;" id="Student Number">
                    
                <div class="row mb-3">
                <label for="Name" class="form-label">NAME</label>
                <input type="text" name="Name_students" class="form-control" style= "width: 250px;" id="Name">
                </div>

                <div class="row mb-3">
                <label for="Age" class="form-label">AGE</label>
                <input type="text" name="Age" class="form-control" style= "width: 250px;" id="Age">
                </div>

                <div class="row mb-3">
                <label for="Parents" class="form-label">PARENTS</label>
                <input type="text" name="Parents" class="form-control" style= "width: 250px;" id="Parents">
                </div>

                <div class="row mb-3">
                <label for="Picture" class="form-label">PICTURE</label>
                <input type="file" name="Picture" class="form-control" style= "width: 250px;" id="Picture">
                </div>

                <button type="submit" class="btn btn-primary" name="submit">Add New Student</button>

            </form>
            </div>                                                                                          
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