<?php
    require 'functions.php';

    //memeriksa apakah tombol submit telah ditekan atau belum
    if( isset($_POST["submit"])){
        //jika sudah ditekan dijalankan function tambah
        if(tambah($_POST) > 0) {
            echo "berhasil";
        } else {
            echo "gagal!";
        }

        // var_dump($_POST);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>praktikum9</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
 <body>
<!--<form action="" method="post">
<div class="mb-3">
    <label for="id" class="form-label">id</label>
    <input type="id" class="form-control" id="id" aria-describedby="id" name=id>
  </div>
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="nama" class="form-control" id="nama" aria-describedby="nama" name=nama>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email </label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"name=email>
  </div>
  <div class="mb-3">
    <label for="address" class="form-label">Address</label>
    <input type="address" class="form-control" id="address" name=Address>
  </div>

  <label for>gender</label>
  <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name=gender>
    <option selected>Option</option>
    <option value="1">laki-laki</option>
    <option value="2">perempuan</option>
    <option value="3">tidak keduanya</option>
  </select>

  <div class="mb-3">
    <label for="position" class="form-label">Position</label>
    <input type="Position" class="form-control" id="position" name=position>
  </div>


  <label for>Status</label>
  <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"name=status>
    <option selected>Option</option>
    <option value="1">Part Time</option>
    <option value="2">Full Time</option>
    <option value="3">Internship</option>
  </select>

  <input class="btn btn-primary" type="submit" value="Submit"
  name=submit>
</form> -->
<div class="kotak">
		<p class="tulisan_login">Input Data</p>
<form action="" method="post">
            <div>
                <label for="name">Name</label>
                <div>
                    <input type="text" id="name" name="name" placeholder="Full Name" Required>
                </div>
            </div>
            <div>
                <label for="email">Email</label>
                <div class="col-sm-6">
                    <input type="email" id="email" name="email" placeholder="@example.com" Required>
                </div>
            </div>
            <div>
                <label for="address">Address</label>
                <div class="col-sm-6">
                    <input type="text" id="address" placeholder="Address" name="address">
                </div>
            </div>
            <div>
                <label for="gender">Gender</label>
                <div class="col-sm-6">

                    <select name="gender" id="gender">
                        <option selected value="">Gender</option>
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">perempuan</option>
                    </select>

                </div>
            </div>
            <div>
                <label for="position">Position</label>
                <div class="col-sm-6">
                    <input type="text" id="position" name="position" placeholder="Position" Required>
                </div>
            </div>
            <div>
                <label for="status">Status</label>
                <div class="col-sm-6">
                    <select name="status" id="status">
                        <option selected value="">Status</option>
                        <option value="Fulltime">Full-time</option>
                        <option value="Parttime">Part-time</option>
                    </select>

                </div>
            </div>
            <br>
            <div style="text-align: center;">
                <button class="submit" type="submit" name="submit">Submit</button>

            </div>
        </form>

</body>
</html>
