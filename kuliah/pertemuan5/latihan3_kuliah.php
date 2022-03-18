<?php
// studi kasus

$mahasiswa = [
["Diva Nur Haffifah", "213040001", "divanurhaffifah@gmail.com", "Teknik informatika"],
["Revina Bella Trisna", "213040002", "revinabella@gmail.com", "Teknik Pangan"],
["Salma salsabila", "213040003", "salsa@gmail.com", "Teknik Industri"]
];
?>

<?php foreach($mahasiswa as $mhs) { ?>
    <ul>
    <li>Nama: <?php echo $mhs[0] ?></li>
    <li>NPM: <?php echo $mhs[1] ?></li>
    <li>Email: <?php echo $mhs[2] ?></li>
    <li>Jurusan: <?php echo $mhs[3] ?></li>
    </ul>
<?php } ?>



