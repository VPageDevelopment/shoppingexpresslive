<?php 
session_start();
include('connection.php');

$cartItems = $_SESSION["cart_products"];

//print_r($cartItems );
/*

foreach( $cartItems as $key=> $values ){
	
		$user_cart_product_id = $values[product_id];
		$user_cart_product_qty = $values[product_qty];
		$user_cart_product_code = $values[product_code];
		
				
}
*/



?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Shopping Express </title>
 
    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
	
	

  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a> 
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
          
            <form name="myForm" action="saveregister.php" method="POST" >
              <h1>Registration Form</h1>
               
			   <input type="hidden" class="form-control" name="proceed" value=" <?php echo $_REQUEST['proceed'];  ?>  "    required="" />
			   
			   	   
              <div>
                <input type="text" class="form-control" name="name" placeholder="Name" required="" />
              </div>
              
              <div>
                <input type="number" class="form-control" name="age" placeholder="Age" required="" />
              </div>
			  <br>
			  <div>
                <input type="date" class="form-control" name="dateofbirth" placeholder="D.O.B" required="" />
              </div>
              <br>
			  
			   <?php
						
						 $query="SELECT * FROM gender WHERE status =0 ";
						$resul=mysqli_query($connection,$query);
					  
					  ?>
			  
              <div>
                <select type="text" class="form-control" name="gender" placeholder="Gender" required="" >
                <option value="">Choose..</option>
                	<?php 
 
						while($gen_row=mysqli_fetch_array($resul,MYSQLI_ASSOC))
						{  
							 if($gen_row['gender'] == $row['gender'])
							{ 
								$selected ='selected';
							}else{
								$selected = '';
							} 
							echo '<option value="'.$gen_row['gender'].'" '.$selected.'>'.$gen_row['gender'].'</option>'; 
						} 
						
						mysqli_free_result($result);
					?> 
                
                </select>
              </div>
              <br>
              <div>
                <input type="text" class="form-control" name="fhname" placeholder="Father Name" required="" />
              </div>
              
              <div>
                <input type="text" class="form-control" name="nominename" placeholder="Nominee Name" required="" />
              </div>
              
              <div>
                <input type="number" class="form-control" name="nominenumber" placeholder="Nominee Contact Number" required="" />
              </div>
              <br>
              <div>
                <input type="text" class="form-control" name="address" placeholder="Address" required="" />
              </div>
			  <div>
                <input type="text" class="form-control" name="city" placeholder="city" required="" />
              </div>
			  <div>
                <input type="text" class="form-control" name="district" placeholder="District" required="" />
              </div>
			  <div> 
                <input type="text" class="form-control" name="state" placeholder="state" required="" />
              </div>
              
               <div> 
                <input type="number" class="form-control" name="mobile" placeholder="Mobile" required="" />
              </div>
              <br>
               <div>
                <input type="number" class="form-control" name="alternatenum" placeholder="Alternate Number" required="" />
              </div>
              <br>
               <div>
                <input type="text" class="form-control" name="email" onsubmit="return validateForm();" placeholder="Email" required="" />
              </div>
			  
			  <script>
			  
				function validateForm() {
					var x = document.forms["myForm"]["email"].value;
					var atpos = x.indexOf("@");
					var dotpos = x.lastIndexOf(".");
					if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
						alert("Not a valid e-mail address");
						return false;
					}
				}
			  
              </script>
              
              <?php 
              	if($_REQUEST['proceed'] == 'true'){
              	
              ?>
                <div>
               		 <input type="number" class="form-control" name="amount" placeholder="Amount"  value="<?php echo $_REQUEST['ta']  ; ?>" required="" />
              	</div>
              	<br>
              	<div>
                	<input type="text" class="form-control" name="amountwords" placeholder="Amount in words" required="" />
              	</div>
				
				<div>
                	<input type="hidden" class="form-control" name="product_id"  required="" />
              	</div>
				
				<div>
                	<input type="hidden" class="form-control" name="product_qty" placeholder="Amount in words" required="" />
              	</div>
	 
              
              <?php   }     ?>
              
              <?php
					 $que="SELECT * FROM proof WHERE status =0 ";
					$res=mysqli_query($connection,$que);
			   ?>
              
              <div>
				 <select type="text" class="form-control" name="idproof" placeholder="Address / ID Proof"  onchange="ShowHideProof();" required="" >
                <option value="">Choose..</option>
                	<?php 
 
						while($rows=mysqli_fetch_array($res,MYSQLI_ASSOC))
						{  
							 if($rows['proof'] == $row['idproof'])
							{ 
								$selected ='selected';
							}else{
								$selected = '';
							} 
							echo '<option value="'.$rows['proof'].'" '.$selected.'>'.$rows['proof'].'</option>'; 
						} 
						
						mysqli_free_result($result);
					?> 
                
                </select> 
			   
              </div>
              <br>
              <div >
                <input type="text" class="form-control" name="proofnum" placeholder="Proof Number" required="" />
              </div>
              
               <div>
                <input type="text" class="form-control" name="bankname" placeholder="Bank Name" required="" />
              </div>
              
              <div>
                <input type="text" class="form-control" name="branch" placeholder="Branch" required="" />
              </div>
              
              <div>
                <input type="text" class="form-control" name="accnum" placeholder="Account Number" required="" />
              </div>
              
              <div>
                <input type="text" class="form-control" name="ifsccode" placeholder="IFSC Code" required="" />
              </div>
			  
			  
              
               <div>
                <input type="text" class="form-control" id="referalid" onchange=" referal();"  name="referalid" placeholder="Referal ID"  required="" /> 
              </div>
              
              <div>
                <input type="text" class="form-control" name="referalname"  placeholder="Referal Name" required="" />
              </div>
                  
               <br>
              
              <div>
                <button class="btn btn-default submit" name="submit"  type="submit">Register</button>
                
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                

                <div class="clearfix"></div>
                <br />

              <div class="clearfix"></div>

            </form>
           
            
          </section>
        </div>
      </div>
    </div>
    
       
  </body>
</html>