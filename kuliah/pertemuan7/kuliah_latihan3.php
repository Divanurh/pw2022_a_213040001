<?php
$mahasiswa = [
    [
    "gambar" => "dipa.jpeg",
    "nama" => "Diva Nur Haffifah", 
    "nrp" => "213040001", 
    "email" => "divanurhaffifah@gmail.com", 
    "jurusan" => "Teknik informatika"
    ],
    [
    "gambar" => "pin.jpeg",
    "nama" => "Revina Bella Trisna", 
    "nrp" => "213040002", 
    "email" => "revinabella@gmail.com", 
    "jurusan" => "Teknik Pangan"
    ],
    [
    "gambar" => "sal.png",
    "nama" => "Salma salsabila", 
    "nrp" => "213040003", 
    "email" => "salsa@gmail.com", 
    "jurusan" => "Teknik Industri"
    ],
    [
      "gambar" => "img1.jpg",
      "nama" => "Aufa", 
      "nrp" => "213040004", 
      "email" => "Aufa@gmail.com", 
      "jurusan" => "Matematika"
    ],
    [
      "gambar" => "img2.jpg",
      "nama" => "Syifa", 
      "nrp" => "213040005", 
      "email" => "syifa@gmail.com", 
      "jurusan" => "Manajemen"
    ],
    [
      "gambar" => "img3.jpg",
      "nama" => "Risma", 
      "nrp" => "213040006", 
      "email" => "rismaa@gmail.com", 
      "jurusan" => "PGSD"
    ],
    [
      "gambar" => "img4.jpg",
      "nama" => "Indri", 
      "nrp" => "213040007", 
      "email" => "indri@gmail.com", 
      "jurusan" => "Teknik Komputer"
    ],
    [
      "gambar" => "img5.jpg",
      "nama" => "Afandi", 
      "nrp" => "213040008", 
      "email" => "pandi@gmail.com", 
      "jurusan" => "Teknik Mesin"
    ],
    [
      "gambar" => "img6.jpg",
      "nama" => "Ainan", 
      "nrp" => "213040009", 
      "email" => "ainan@gmail.com", 
      "jurusan" => "FPOK"
    ],
    [
      "gambar" => "img7.jpg",
      "nama" => "Wildan", 
      "nrp" => "213040010", 
      "email" => "wildan@gmail.com", 
      "jurusan" => "Ekonomi"
    ]
];
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar Mahasiswa</title>
  </head>
  <body>

    <div class="container">
        <h1>Daftar Mahasiswa</h1>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Gambar</th>
      <th scope="col">Nama</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php $no = 1; foreach($mahasiswa as $mhs) { ?> 
    <tr class="align-middle">
      <th scope="row"><?= $no++; ?></th>
      <td>
          <img src="img/<?php echo $mhs["gambar"]; ?>" width="50" class="rounded-circle" >
      </td>
      <td><?php echo $mhs["nama"]; ?></td>
      <td>
          <a href=""class="btn badge bg-warning">edit</a>
          <a href=""class="btn badge bg-danger">delete</a>
          <a href="kuliah_latihan4.php?gambar=<?= $mhs["gambar"]; ?>
                                      &nama=<?= $mhs["nama"]; ?>
                                      &nrp=<?= $mhs["nrp"]; ?>
                                      &email=<?= $mhs["email"]; ?>"
                                      class="btn badge bg-info">detail</a>
      </td>
    </tr>

    <?php } ?>
  </tbody>
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
        
     
 