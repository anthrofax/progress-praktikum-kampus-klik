<?php

 if(isset($_POST["npm"])){
    $npm = $_POST["npm"];
    $nilai = $_POST["nilai"];
    $ulangi = $_POST["ulangi"];

    if($nilai >= 85){
        $huruf_mutu = "A";
    }else if($nilai >=75){
        $huruf_mutu = "B";
    }else if($nilai >= 65){
        $huruf_mutu = "C";
    }else{
        $huruf_mutu = "E";
    }


    for($i=1;$i<=$ulangi;$i++){
        echo($npm." Nilai akhir yang didapatkan oleh Anda adalah ". $nilai. "<br>");
    }
}
?>