<!DOCTYPE html>
<html lang="en">
<head>
  <title>Database Siswa - Create</title>
</head>

<?php
    session_start()
?>

<!DOCTYPE html>
<html>
    <center>
    <head>
        <title>Database Siswa - Create</title>
    </head>
    <body>
        <h1>Insert Data Siswa</h1>
        <form action="doAddSiswa.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>NIS Siswa</td>
                    <td>:</td>
                    <td><input type="text" name="nis" class="form-control" placeholder="Enter NIS"></td>
                </tr>
                <tr>
                    <td>Nama Siswa</td>
                    <td>:</td>
                    <td><input type="text" name="nama_siswa" class="form-control" placeholder="Enter Nama"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><input type="text" name="jenis_kelamin" class="form-control" placeholder="Enter Gender"></td>
                </tr>
                <tr>
                    <td>Alamat</td> 
                    <td>:</td>
                    <td><textarea type="text" name="alamat" class="form-control" placeholder="Enter Address"></textarea></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td><input type="text" name="id_jurusan" class="form-control" placeholder="Enter Jurusan"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><button>Save Data</button></td>
                </tr>
            </table>
        </form>
        <?php
            if(isset($_SESSION["message"])){
                echo $_SESSION["message"];
                unset($_SESSION["message"]);
            }
        ?>
    </body>
</html>