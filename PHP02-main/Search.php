<!DOCTYPE html>
<html lang="en">
<head>
<title>Database Siswa - Search</title>
</head>
    <body>
        <center>
        <div class="container">
            <h2>Select Page</h2>
                <form action="SearchResult.php" method="post">
                    <div class="form-group">
                        <label for="sel1">Data list (select one):</label>
                        <select name="Column" class="form-control" id="sel1">
                            <option value="nis">NIS</option>
                            <option value="nama_siswa">Nama Siswa</option>
                            <option value="jenis_kelamin">Jenis Kelamin</option>
                            <option value="alamat">Alamat</option>
                            <option value="id_jurusan">Jurusan</option>
                        </select>
                        <div class="container">
    <form>
    <div class="form-group">
      <label for="usr">Search:</label>
            <input type ="text" type="text" name="Find" class="form-control">
            <input type ="submit" value="Find">
        </form>
    </center>
    </body>
</html>