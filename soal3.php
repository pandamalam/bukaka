<?php

$arr  = [ 20, 10, 100, 30, 15, 5 ];
$pointB  = array_push($arr,180);
function ascArr( $arr ) {
  $length = count( $arr );
  for ( $i = 0; $i < $length; $i++ ) {
    for ( $j = 0; $j < $length - 1; $j++ ) {

      if ( $arr[ $j ] > $arr[ $j + 1 ] ) {
        $tmp            = $arr[ $j + 1 ];
        $arr[ $j + 1 ]  = $arr[ $j ];
        $arr[ $j ]      = $tmp;
      }
    } 
  }
  return $arr;
}

function descArr( $arr ) {
    $length = count( $arr );
    for ( $i = 0; $i < $length; $i++ ) {
      for ( $j = 0; $j < $length - 1; $j++ ) {
  
        if ( $arr[ $j ] < $arr[ $j + 1 ] ) {
          $tmp            = $arr[ $j + 1 ];
          $arr[ $j + 1 ]  = $arr[ $j ];
          $arr[ $j ]      = $tmp;
        }
      } 
    }
    return $arr;
  }

print "a. urutkan array tersebut (asc dan desc).\n";
print "Ascending\n" . implode( ', ', ascArr($arr) );
print "\nDescending\n" . implode( ', ', descArr($arr) );

print "\n\n";
print "b. tambahkan angka 180 di posisi terakhir pada array di atas\n";
print_r ($arr);

print "\n\n";
print "c. hapus angka 30 pada array di atas\n";
print_r (array_merge(array_diff($arr, array(30))));
