<!DOCTYPE html>
<html lang="en">
<head>
  <title>Database Siswa - Create</title>
</head>

<?php
    include './Connect.php';
    $id_siswa = $_GET["id_buku"];

    $sql = "SELECT * FROM buku WHERE id_siswa=" . $id_siswa;
    $result = $conn->query($sql) or die($conn->error);

    $result = $result->fetch_assoc();
?>

<title>Database Siswa - Update</title>
<center>
<h1>Update Data Siswa</h1>

<form action="Update.php" method="post">
    <input type="hidden" name="id_buku" value="<?php echo $result['id_siswa']?>">
    <table>
        <tr>
            <td>NIS Siswa</td>
            <td>:</td>
            <td><input type="text" name="nis" class="form-control" placeholder="Enter NIS" value="<?php echo $result['nis']?>"></td>
        </tr>
        <tr>
            <td>Nama Siswa</td>
            <td>:</td>
            <td><input type="text" name="nama_siswa" class="form-control" placeholder="Enter Nama" value="<?php echo $result['nama_siswa']?>"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="text" name="jenis_kelamin" class="form-control" placeholder="Enter Gender" value="<?php echo $result['jenis_kelamin']?>"></td>
        </tr>
        <tr>
            <td>Alamat</td> 
            <td>:</td>
            <td><textarea type="text" name="alamat" class="form-control" placeholder="Enter Address" value="<?php echo $result['alamat']?>"></textarea></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td><input type="text" name="id_jurusan" class="form-control" placeholder="Enter Jurusan" value="<?php echo $result['id_jurusan']?>"></td>
        </tr>
    </table>
    <input type="submit" name="simpan" value="Update Data">
</form>
</center>
