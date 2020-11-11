<?php

$buah = array(
    array( "NAMA" => "JERUK", "HARGA" => 5000, "RASA" => "ASAM"),
    array( "NAMA" => "MANGGA", "HARGA" => 20000, "RASA" => "MANIS"),
    array( "NAMA" => "APEL", "HARGA" => 5000, "RASA" => "MANIS"),
    array( "NAMA" => "DURIAN", "HARGA" => 50000, "RASA" => "MANIS"),
    array( "NAMA" => "DUKU", "HARGA" => 10000, "RASA" => "ASAM"),
    array( "NAMA" => "NANAS", "HARGA" => 5000, "RASA" => "ASAM")
    );

print "a. Buat program untuk menambahkan buah Pisang yang harganya 5000 dan rasanya manis. ke variabel buah dan tampilkan Nama Buah dengan urutan secara descending\n";
$pointA = array_push($buah, array("NAMA"=>"PISANG","HARGA"=>5000, "RASA"=>"MANIS"));
rsort($buah);
print_r($buah);

print "\n\nb. Buat program untuk menampilkan Nama Buah yang nama buahnya mengandung Huruf 'K' \n";

for ($i=0; $i < count($buah) ; $i++) { 
    if (strpos($buah[$i]['NAMA'],'K')!== false){
        print_r($buah[$i]);
    }
}

print "\n\nc. Buat program untuk menampilkan Buah, yang harganya kurang dari 10.000 yang rasanya Manis \n";

for ($i=0; $i < count($buah) ; $i++) { 
    if ($buah[$i]['HARGA'] < 10000 && $buah[$i]['RASA'] == 'MANIS'){
        print_r($buah[$i]);
    }
}
