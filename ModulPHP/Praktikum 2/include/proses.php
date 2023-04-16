<?php
include "inc.php";
echo $angka;
echo "<br>";
if ($angka == 100){
    echo "memuaskan";
}elseif ($angka <100 && $angka >= 85 ){
    echo "sangat baik";
}elseif ($angka <85 && $angka >= 70){
    echo "baik";
}elseif ($angka <70 && $angka >=55){
    echo "cukup";
}elseif ($angka <55 && $angka >=0){
    echo "kurang";
}
?>