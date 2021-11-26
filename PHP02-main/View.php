<h1>View Data</h1>
<?php
    include './Connect.php';
    echo "<a href='Insert.php'>Tambah Data</a><br>";

    $sql = "SELECT * FROM buku";
    $result = $conn->query($sql);
    $a = 1;

    while($baris = mysqli_fetch_array($result)){
        echo "<br>";
        echo "$a";
        echo "<br>";
        echo "NIS           : " . $baris[1] . "<br>";
        echo "Nama Siswa    : " . $baris[2] . "<br>";
        echo "Jenis Kelamin : " . $baris[3] . "<br>";
        echo "Alamat        : " . $baris[4] . "<br>";
        echo "Jurusan       : " . $baris[5] . "<br>";
        echo "<a href='UpdateData.php?id_buku=$baris[0]'><button>Update</button></a>";
        echo "<a href='Delete.php?id_buku=$baris[0]'><button>Delete</button></a>";
        $a++;
    }
    $conn->close();
?>
