<?php
session_start();

$fullNameValue = "";
$totalValue2 = "";
$phoneNumber = "";
$Email = "";

@$totalValue = $_POST["txtTotal"];
$_SESSION["txtName"] = $fullNameValue;
$_SESSION["txtTotal"] = $totalValue2;
$_SESSION["txtNum"] = $phoneNumber;
$_SESSION["txtEmail"] = $Email;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Personal Details</title>

        <style>
                body {
                background-image: url(Consulting.jpg);
                background-size: 1450px 750px;
            }          
            p{
                font-size: 11px;                    
                
            }
        </style>       
    </head>
    
    
    
    <body>
        <div class="form">
            <form name='Details' method='post' action='Ebus3.php'>
                                   
            <center>
                <table cellspacing="15">
                    <tr>
                        <td><b></b></td>
                        <td><b>Please enter your details below</b></td>  
                    </tr>
                    
                    <tr>
                        <td>Name:</td>
                        <td><input type="text" id="txtName" name="txtName" value="" required /></td>
                    </tr>
                    
                    <tr>
                        <td>Phone Number:</td>
                        <td><input type="number" id="txtNum" name="txtNum" value="" required /></td>
                    </tr>
                    
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" id="txtPassword" pattern="[1234]{4}" name="txtPassword" value="" required /></td>
                        <td><p>*1234 is the password!*</p></td>
                    </tr>
                    
                    <tr>
                        <td>Email:</td>
                        <td><input type="email" id="email" name="txtEmail" value="" required /> </td>
                    </tr>
                    
                    
                    
                    <tr>                       
                        <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>"/></td>
                    </tr>
                </table>
            </center>
            <center>
                <input clsss="button" type='submit' name='btnSubmit' id='btnSubmit' onclick="" value='Continue'/>               
            </center>
               
                </form>
  
    </body>
</html>


