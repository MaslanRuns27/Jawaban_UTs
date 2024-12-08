<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS Pemprograman 3.com</title>
</head>
<?php
// koneksi database
include 'koneksi.php';
// menangkap data yang di kirim dari form
if (!empty($_POST['save'])){

$Nama = $_POST['nama_member'];
$Level = $_POST['level_member'];
$Diskon = $_POST['diskon_member'];
//Menginput data ke database
$a = mysqli_query($koneksi,"insert into member values('','$Nama','$Level','$Diskon')");
 if($a){
    // mengalihkan halaman kembali
    header("location:view.php");   
    }else{
        echo mysqli_error();
}
 }
?>
<body>
    <center><h2>Ujian Tengah Semester Pemprograman 3 2024</h2></center>
    <br/>
    <center>
    <h3>TAMBAH DATA MEMBER</h3>
    <form method="POST">
        <table>
            <tr>
                <td>Nama : </td>
                <td><input type="text" name ="nama_member"></td>
            </tr>
            <tr>
                <td>Level : </td>
                <td><select name="level_member">
                    <option value="">---Pilih---</option>
                    <option value="Platinum">Platinum</option>
                    <option value="Gold">Gold</option>
                    <option value="Silver">Silver</option>
                </select>    
                </td>
            </tr>
            <tr>
                <td>Diskon Member : </td>
                <td><select name="diskon_member">
                    <option value="">---Pilih---</option>
                    <option value="15%">15%</option>
                    <option value="10%">10%</option>
                    <option value="5%">5%</option>
                </select>    
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name ="save"></td>
            </tr>
        </table>
    </form>
    <a href="view_report.php">Lihat Hasil</a>
    </center>
       
</body>
</html>