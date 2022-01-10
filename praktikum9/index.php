<?php

require 'functions.php';


$data = query("SELECT * FROM inputdata");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">nama</th>
      <th scope="col">email</th>
      <th scope="col">address</th>
      <th scope="col">gender</th>
      <th scope="col">position</th>
      <th scope="col">status</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($data as $DataKaryawan) : ?>
                <tr>
                    <td><?= $DataKaryawan['name']; ?></td>
                    <td><?= $DataKaryawan['email']; ?></td>
                    <td><?= $DataKaryawan['Address']; ?></td>
                    <td><?= $DataKaryawan['gender']; ?></td>
                    <td><?= $DataKaryawan['position']; ?></td>
                    <td><?= $DataKaryawan['status']; ?></td>
                </tr>
            <?php endforeach; ?>
    </tr>
  </tbody>
</table>
</body>
</html>
