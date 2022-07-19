<?php 

echo "<head><title>My Guest Book</title></head>";
$fp = fopen("TA.txt", "r");

echo "<table border='1' cellspacing='0' cellpadding='0'>";

while ($isi = fgets($fp,80)) {
    //explod itu mencari karakter | dan di hapus
    $pisah = explode('|', $isi);
    echo "<tr>
    <td>Tanggal</td>
    <td>NAMA</td>
    <td>NIM</td>
    <td>Alamat</td>
    <td>Email</td>
    <td>Jurusan</td>
    <td>Jenis kelamin</td>
    </tr>";
    echo "<tr>";
    echo "<td>";
    echo date('d-m-Y');
    echo "</td>";
    echo "<td>$pisah[0]</td>";
    echo "<td>$pisah[1]</td>";
    echo "<td>$pisah[2]</td>";
    echo "<td>$pisah[3]</td>";
    echo "<td>$pisah[4]</td>";
    echo "<td>$pisah[5]</td>";
    echo "</tr>";
    echo "<tr><td><br></td><td><br></td></tr>";

}

echo "</table>";


?>