<?php

$nilai = 100;

if ($nilai > 100){
    echo "Nilai harus dari 0-100";
}elseif ($nilai >= 60){
    echo "Lulus";
}elseif ($nilai <= 50) {
    echo "Remedial";
}else {
    echo "Tidak Lulus";
}


?>