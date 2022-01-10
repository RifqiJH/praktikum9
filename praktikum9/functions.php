<?php

$conn = mysqli_connect("localhost", "root", "", "tubesweb");

function query($query)
{
    global $conn;
    $data = mysqli_query($conn, $query);
    $mahasiswas = [];
    while ($mahasiswa = mysqli_fetch_assoc($data)) {
        $mahasiswas[] = $mahasiswa;
    }
    return $mahasiswas;
}
function tambah($data)
{
    global $conn;

    // $id = $data['id'];

    $nama = $data["name"];
    $email = $data["email"];
    $Address = $data["address"];
    $gender = $data["gender"];
    $position = $data["position"];
    $status = $data["status"];

    $query = "INSERT INTO inputdata (nama,email,address,gender,position,status) VALUES ('$nama', '$email', '$Address', '$gender','$position','$status') ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


?>