<?php
include "koneksi.php";

$sql = "SELECT 
t.id_transaksi, 
m.nama_member AS Member, 
m.level_member AS Level, 
m.diskon_member, 
t.diskon_transaksi, 
t.jumlah_transaksi, 
t.total_diskon, 
t.total_transaksi
FROM transaksi t
JOIN member m ON t.user_id = m.id_member
JOIN barang b ON t.barang_id = b.id_barang
JOIN kategori k ON b.kategori_id = k.id_kategori";

$result = $koneksi->query($sql);

if ($result) {
    if ($result->num_rows > 0) {
        echo "<table border='1' style='border-collapse: collapse; width: 60%;'>";
        echo "<tr>
                <th style='padding: 5px;'>Member</th>
                <th style='padding: 5px;'>Level</th>
                <th style='padding: 5px;'>Diskon Member</th>
                <th style='padding: 5px;'>Diskon Barang</th>
                <th style='padding: 5px;'>Total Pembelian</th>
                <th style='padding: 5px;'>Total Diskon</th>
                <th style='padding: 5px;'>Total Transaksi</th>
              </tr>";
         while ($row = $result->fetch_assoc()) {
             echo "<tr>
                     <td >" . $row['Member'] . "</td>
                     <td >" . $row['Level'] . "</td>
                     <td style='text-align: right;'>" . $row['diskon_member'] . "%</td>
                     <td style='text-align: right;'>" . $row['diskon_transaksi'] . "</td>
                     <td style='text-align: right;'>" . $row['jumlah_transaksi'] . "</td>
                     <td style='text-align: right;'>" . $row['total_diskon'] . "</td>
                     <td style='text-align: right;'>" . $row['total_transaksi'] . "</td>
                   </tr>";
                   echo "<!-- Debug Data: " . print_r($row, true) . " -->";
        }
        echo "</table>";
     } else {
         echo "Tidak ada data.";
     }
} else {
    echo "Query gagal: " . $koneksi->error;
}
?>
<a href="view.php">Balik</a>