<?php 

$data1 = array( 'a', 'b', 'c' );
$data2 = array( 'name' => 'God', 'age' => -1 );
$option = 1; 
header('Content-type: application/json');
if ( $option == 2 )
  echo json_encode( $data2 );
  // prints json array ["a","b","c"]
else
  echo json_encode( $data2 );
  // prints json object {"name":"God","age":-1}  
?>