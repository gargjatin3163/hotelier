<?php

include"proconn.php";

$search_term = $_POST['pname'];

$sql = "SELECT * FROM foodproduct WHERE Name LIKE '%{$search_term}%'";
$result = mysqli_query($projectconn, $sql) or die("SQL Query Failed.");

$output = "<ul>";

	if(mysqli_num_rows($result) > 0){  
		while($row = mysqli_fetch_assoc($result)){
		
				$output .= "<a href=single.php?id={$row['sno']}><table><tr><td><img src=img/{$row['Image']} style=height:20px;width:20px></td> <td>{$row['Name']}</td></tr></a>";
            
		}
  }else{  
  	$output .= "<li>Product Not Found</li>";
  } 
$output .= "</ul>";

echo $output;

?>
