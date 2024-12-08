<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS Pemprograman 3.com</title>
</head>
<body>
<center><h2>Ujian Tengah Semester Pemprograman 3 2024</h2></center>
    <br/>
    <a href="input.php">TAMBAH USER</a>
    <br/>
    <table border="1">
        <tr>
            <th>No</th>
            <th> Nama </th>
            <th> Level </th>
            <th> Diskon Member </th>
        </tr>
        <?php
        include "koneksi.php";
        $no = 1;
        $data = mysqli_query($koneksi,"select * from member");
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama_member']; ?></td>
                <td><?php echo $d['level_member']; ?></td>
                <td><?php echo $d['diskon_member']; ?></td>
            </tr>
            <?php 
        }
        ?>
    </table>
</body>
</html>