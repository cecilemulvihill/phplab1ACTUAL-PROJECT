<!DOCTYPE html>
<html>
    <head>
        <title>Purchase Reciept</title>
        <style>
            body {
                background-image: url(Consulting.jpg);
                background-size: 1450px 780px;
            }
            
            h1 {
                font-variant: small-caps;
            }
            
            button{
                 background-color: slategray;
                  color: white;
                  border: 2px solid #e7e7e7;
                  font-size: 16px;   
            }
                          
        </style>
    </head>
       
    <body>
    <center><h1><b>Power Consulting Services</b></h1>      
        <h3>Purchase Receipt</h3>  
        <h4>Order #1747392938</h4></center>
    <br />
    <br />
    
    <center>
        <?php
        
        session_start();
        @$totalValue2 = $_POST['txtTotal'];
        @$fullNameValue = $_POST['txtName'];
        @$phoneNumber= $_POST['txtNum'];
        @$Email = $_POST['txtEmail'];
        echo "Client Name: ".$fullNameValue;
        echo "<br></br>";
        echo "Client Phone Number: ".$phoneNumber;
        echo "<br></br>";
        echo "Total price of selected Package Option: €".$totalValue2;
        echo "<br></br>";
        echo "A copy of this reciept will be emailed to: ".$Email;
        
        ?>
        <br />
        <br />
        <button onclick=window.location.href="index.php">Back to Main Menu</button>
    </center>
    
    </body>
</html>


