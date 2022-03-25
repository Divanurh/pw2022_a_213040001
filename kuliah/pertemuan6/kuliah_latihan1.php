<?php
// Array Assosiative
// Array yang indexnya berupa string yang ber-asosiasi dengan nilainya

$mahasiswa = [
    [
    "nama" => "Diva Nur Haffifah", 
    "nrp" => "213040001", 
    "email" => "divanurhaffifah@gmail.com", 
    "jurusan" => "Teknik informatika"
    ],
    [
    "nama" => "Revina Bella Trisna", 
    "nrp" => "213040002", 
    "email" => "revinabella@gmail.com", 
    "jurusan" => "Teknik Pangan"
    ],
    [
    "nama" => "Salma salsabila", 
    "nrp" => "213040003", 
    "email" => "salsa@gmail.com", 
    "jurusan" => "Teknik Industri"
    ]
];
// var_dump($mahasiswa [2] ["email"]);
?>

<?php foreach($mahasiswa as $mhs) { ?>
    <ul>
    <li>Nama: <?php echo $mhs["nama"] ?></li>
    <li>NPM: <?php echo $mhs["nrp"] ?></li>
    <li>Email: <?php echo $mhs["email"] ?></li>
    <li>Jurusan: <?php echo $mhs["nrp"] ?></li>
    </ul>
<?php } ?>
