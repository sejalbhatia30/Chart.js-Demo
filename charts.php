<?php

header('Content-Type: application/json');
    
    $link=mysqli_connect("localhost","id6563907_jaiguruji","12345","id6563907_users");
    if( mysqli_connect_error()){
     die("hello");
     }
    
$query = "SELECT playerid, score FROM chartdata ORDER BY playerid";

//execute query
$result = mysqli_query($link,$query);

//loop through the returned data
$data = array();


while($row=mysqli_fetch_assoc($result)){
    	$data[] = $row;
    	
}


//now print the data
print json_encode($data);





?>