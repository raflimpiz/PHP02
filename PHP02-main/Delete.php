<title>Database Siswa - Delete</title>
<center>
<h1>Delete Data Siswa</h1>
<?php
    include './Connect.php';

    $id_siswa = $_GET['id_buku'];

    $sql = "DELETE FROM buku WHERE id_siswa='$id_siswa'";

    if($conn->query($sql) === TRUE){
        echo "Data Berhasil Dihapus! <br>";
        echo "<a href='View.php'><button>Back</button></a><br>";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>
</center>