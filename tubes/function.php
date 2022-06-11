<?php

function koneksi () {
    $conn = mysqli_connect('localhost', 'root', '', 'tubes') or die ('koneksi gagal');

    return $conn;
}

function query ($query) {
    $conn = koneksi ();
    $result = mysqli_query($conn,$query) or die(mysqli_error($conn));

    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
    }
    return $rows;
}

function submit($data) {
    $conn = koneksi ();

    //cek apakah user tidak memilih gambar
    if($_FILES["Picture"]["error"]=== 4) {
        $picture= 'img.jpeg';
    } else {
        //lakukan fungsi upload
        $picture = upload();
        //cek jika upload gagal
        if(!$picture) {
            return false;
        }
    }

    $studentnumber = htmlspecialchars($data["Student_number"]);
    $name = htmlspecialchars($data["Name_students"]);
    $age = htmlspecialchars($data["Age"]);
    $parents = htmlspecialchars($data["Parents"]);
    //$picture = htmlspecialchars($data["Picture"]);

    $query = "INSERT INTO 
            students 
            VALUES 
            (null, '$picture', '$studentnumber', '$name', '$age', '$parents')";

    mysqli_query($conn, $query) or die (mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function upload() {
    //siapkan data gambar
    $filename = $_FILES["Picture"]["name"];
    $filetmpname = $_FILES["Picture"]["tmp_name"];
    $filesize = $_FILES["Picture"]["size"];
    $filetype = pathinfo($filename, PATHINFO_EXTENSION);
    $allowedtype = ["jpg", "jpeg", "png"];

    //cek apakah file bukan gambar
    if(!in_array($filetype, $allowedtype)) {
        echo "<script>
                alert('yang anda upload bukan gambar!')
            </script>";
        return false;
    }

    //cek jiga gambar terlalu besar
    if($filesize > 1000000) {
        echo "<script>
        alert('ukuran gambar terlalu besar!')
        </script>";
    return false;
    }

    //proses upload gambar
    $newfilename = uniqid()  . $filename;
    move_uploaded_file($filetmpname, 'img/' . $newfilename);

    return $newfilename;
}

function delete($id) {
    $conn = koneksi();

    //query mahasiswa berdasarkan id
    $stds = query ("SELECT * FROM students WHERE id = $id")[0];
    // cek jika gambar default
    if($stds["Picture"] !== 'img1.jpeg') {
    //hapus gambar
    unlink('img/' . $stds["Picture"]);
    }

    mysqli_query($conn, "DELETE FROM students WHERE id = $id") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function search($keyword) {
    $query = "SELECT * FROM students
                    WHERE
                    Name_students LIKE '%$keyword%' OR
                    Parents LIKE '%$keyword%' OR
                    Age LIKE '%$keyword%' OR
                    Student_number LIKE '%$keyword%'
              ";
    return query($query);
}

function change($data) {
    $conn = koneksi();

    $id= $data["id"];
    $studentnumber = htmlspecialchars($data["Student_number"]);
    $name = htmlspecialchars($data["Name_students"]);
    $age = htmlspecialchars($data["Age"]);
    $parents = htmlspecialchars($data["Parents"]);
    //$picture = ($data["Picture"]);
    $oldPicture = htmlspecialchars($data["oldPicture"]);
    
    // cek apakah user pilih gambar baru atau tidak
    if($_FILES['Picture']['error'] === 4) {
        $picture = $oldPicture;
    } else {
        $picture = upload();
    }

    $query = "UPDATE students SET
                Picture = '$picture',
                Student_number = '$studentnumber',
                Name_students = '$name',
                Age = '$age',
                Parents = '$parents'
                WHERE id = $id
                ";


    mysqli_query($conn, $query) or die (mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function registration($data) {
    $conn =   koneksi();

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    //cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
    if(mysqli_fetch_assoc($result)) {
        echo "<script>
        alert('username sudah terdaftar');
            </script>";
        return false;
    }

    // cek konfirmasi password
    if($password !== $password2) {
        echo "<script>
            alert('konfirmasi password tidak sesuai!');
                </script>";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO users VALUES('', '$username', '$password')");


    return mysqli_affected_rows($conn);
}
