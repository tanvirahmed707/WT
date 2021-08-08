<!DOCTYPE HTML>

<html>

<style>
    .error {color: #FF0000;}
</style>

<head>

    
    
    <title>Dashboard</title>

</head>

<body>

<div style="max-width: fit-content; margin-left: auto; margin-right:auto">
        <table style="width: fit-content; border: 2px solid #000; border-collapse: collapse;">
           
            <tr>
                <td style="border: 2px solid #000; border-collapse: collapse; " width="5%">
                   
                </td>
                <td>
                    <table width="150%">
                        <tr>
                            <td colspan="3">
                                <h2> REGISTRATION FORM</h2>
                            </td>
                        </tr>
                        <form method="post" action="DataBaseForRegistrationForm.php"> 
                        <tr>
                            


                            <td style="width: fit-content;">

                                <p align="margin-left">


                                    
                                    <b>First Name:<b><br>
                                    <input type="text" id="firstname" name="firstname">
                                    <br><br>


                                    <b>Last Name:<b><br>
                                    <input type="text" id="lastname" name="lastname">
                                    <br><br>


                                    <b>Gender:<b> <input type="radio" name="gender" value="male">Male
                                    <input type="radio" name="gender" value="female">Female
                                    <input type="radio" name="gender" value="other">Other
                                    
                                    <br> <br>


                                    <b>Date-Of-Birth:<b> <br>
                                    <input type="text" id="dob" name="dob">
                                 
                                    <br> <br>


                                    <b>Present Address :<b> <br>
                                    <input type="text" id="presentaddress" name="presentaddress">
                                    
                                    <br> <br>


                                    <b>Permanent Address :<b> <br>
                                    <input type="text" id="permanentaddress" name="permanentaddress">
                                    
                                    <br> <br>


                                    <b>Mobile:<b> <br>
                                    <input type="text" id="mobile" name="mobile">
                                    
                                    <br> <br>


                                    <b>Email:<b> <br>
                                    <input type="text" id="email" name="email">
                                    <br> <br>

                                   
                                    <input type="submit" name="submit" value="Submit">
                                    
                                    <br>


                                </p>
                            </td>


                        </tr>

                        
                        </form>
                     </table>
                </td>
            </tr>

             </table>
        <div>
</body>

</html>