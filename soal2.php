<?php
$date = "2020-05-01";
$dob = "1998-08-24";
$dd = substr($date, 8,2);
$mm = substr($date, 5,2);
$yy = substr($date, 2,2);

print "a. Ubah format tanggal di atas menjadi 05-20-01 menggunakan substring\n";
print $mm.'-'.$yy.'-'.$dd;
print "\n";

print "b. Ubah format tanggal di atas menjadi 05-20-01 menggunakan format date php\n";
print date('m-y-d', strtotime($date));
print "\n";

print "c. Tampilkan 6 bulan kedepan dari tanggal di atas\n";
print date("m-y-d", strtotime("$date +6 month"));
print "\n";

print "d. Berapa umur anda jika dihitung dari tanggal di atas\n";
print (date("Y", strtotime($date)) - date("Y", strtotime($dob)));

