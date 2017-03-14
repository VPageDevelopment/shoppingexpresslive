<?php

include('connection.php');

$sql="SELECT * FROM user";
$result=mysqli_query($connection,$sql);

// Numeric array


// Associative array
while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
 echo $row["name"];
 echo $row["age"];
}

// Free result set
mysqli_free_result($result);

mysqli_close($connection);
?>