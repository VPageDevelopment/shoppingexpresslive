
    
    <?php 
      
    $q = $_GET['q']; 
    
    include_once("connection.php");
    
    
    echo $sql = "SELECT * FROM user WHERE referalid = '$q' ";

    $result = mysqli_query($connection , $sql);
   	$row = mysqli_fetch_array($result);
   	
   	
   	if($row['position']=0)
   	{ 
   		echo '<script>';
   		echo '
   				
   			document.getElementById("right").setAttribute("class" , "disabled");
   		';
   		echo '</script>';
   	}
   	

/*
    echo "<table>
            <tr>
                <th>Name</th>
                <th>Position</th>
            </tr>";
            while($row = mysqli_fetch_array($result)) {
              echo "<tr>";
              echo "<td>" . $row['name'] . "</td>";
              echo "<td>" . $row['referalid'] . "</td>";
         
              echo "</tr>";
          }
          echo "</table>"; */
          //mysqli_close($con);

