<?php
echo "<head><title>My Guest Book</title></head>";
$fp=fopen("penyewa.txt","r");

echo "<table border=1>";
    echo "<tr>
    <th>NAMA</th>
    <th>No HP</th>
    <th>Email</th>
    <th>Alamat</th>
    <th>Tanggal Sewa</th>
    </tr>";

while($isi=fgets($fp)){
    $pisah = explode("|",$isi);
    echo "<tr>";    
    echo "<td>$pisah[0] </td>";
    echo "<td>$pisah[1] </td>";
    echo "<td>$pisah[2] </td>";
    echo "<td>$pisah[3] </td>";
    echo "<td>$pisah[4] </td>";
    echo "</tr>";
}
echo "</table>";
echo "<br>";
echo "<a href='index.php' >HOME</a>";
?>