<?php 
$firstname = filter_input(INPUT_POST,'firstname');
$lastname = filter_input(INPUT_POST,'lastname');
$gender = filter_input(INPUT_POST,'gender');
$dob = filter_input(INPUT_POST,'dob');
$presentaddress = filter_input(INPUT_POST,'presentaddress');
$permanentaddress = filter_input(INPUT_POST,'permanentaddress');
$mobile = filter_input(INPUT_POST,'mobile');
$email = filter_input(INPUT_POST,'email');




if(!empty($firstname))

{

	    if (!empty($lastname))

	    {
             
                    $servername = "localhost";
					$dbusername = "root";
					$dbpassword = "";
					$dbname = "registrationform";


				 $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

					if($conn -> connect_error) 

						{
							die("Error in Data Base Connection: " . $conn -> connect_error);
						}

					else 

					{
							echo "<h3> Data Base Connection Successful </h3>";
							


					    $sql = "INSERT INTO users (firstname,lastname,gender,dob,presentaddress, permanentaddress,mobile,email) values ('$firstname','$lastname','$gender','$dob','$presentaddress', '$permanentaddress', '$mobile', '$email')";

                         if ($conn->query($sql))

                        {

                        	echo " Registration Successfull";

						     $sql = "SELECT firstname,lastname,gender,dob,presentaddress,permanentaddress, mobile, email FROM users"; // Query
							$result = $conn -> query($sql); 

							 if($result->num_rows > 0) 

							{
									
							echo "<h1> Registration Information: </h1>";

							echo "<ol>";
							while($row = $result -> fetch_assoc()) 

							{
										
                             echo "<br>";
                             echo " First Name = " . $row['firstname'];
                             echo "<br>";
                             echo " Last Name = " . $row['lastname'];
                             echo "<br>";
                             echo " Gender = " . $row['gender'];
                             echo "<br>";
                             echo " Date of Birth = " . $row['dob'];
                             echo "<br>";
                             echo "  Present Address = " . $row['presentaddress'];
                             echo "<br>";
                             echo "  Permanent Address = " . $row['permanentaddress'];
                             echo "<br>";
                             echo "  Mobile = " . $row['mobile'];
                             echo "<br>";
                             echo " Email = " . $row['email'];
                             echo "<br>";                           
 
							}


							echo "</ol>";
							echo "<br>";

								}

							else 
								{
									echo "<p> Result is zero</p>";
								} 

							
                        } 

                            else

                           {

                        	

                        	echo " No Record Uploaded....."."<br>";

                           }





                           $conn->close();

                    }
                        


	    }



           else
           {

           	echo " First Name must be filled";
           	die();
           }



}


else

{
    
	 echo "<h2> Please Fill The Necessary Details </h2";


	die();
}



 ?>




 <br><br>

   <div style="width:fit-content; margin-left:auto; margin-right:auto; text-align: left;">
			<table style="width: auto; border: 2px solid #000; border-collapse: collapse;">


 <button style="color:green; font-size:17px; font-weight: bold" type="button" onClick="document.location.href='RegistrationForm.php'">Back</button>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp




</table>

<div> 




	

	

