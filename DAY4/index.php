<?php

require_once('dbcon.php');

$sql = "SELECT * FROM barang";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo "<b>".$row['NoBarang'] . "</b>" ;
       echo "<b>".$row['Nama'] . "</b>" ;
       echo "<b>".$row['Kuantiti'] . "</b>" ;
       echo "<b>".$row['HargaSeunit'] . "</b><br>" ;
    }
} else {
    echo "0 results";
}
$con->close();



?>