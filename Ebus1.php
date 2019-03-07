<?php
session_start();
$totalValue = "";
$_SESSION['txtTotal'] = $totalValue;
?>
<!DOCTYPE html>
<html lang="en" xmins="http.//www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <title>Consulting Service Package Options</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
        <style>
            body {
                background-image: url(Consulting.jpg);
                background-size: 1450px 750px;
            }
        </style>
    </head>
    <body>
        <div class="form">
        <form name="intCalc" method="post" action="Ebus2.php">            
                <h1>Calculator<h1>
                        <hr />
                <center>
                <table cellspacing="10">
                    <tr>
                        <td><b>Package Options</b></td>
                    </tr>
                    <tr>
                        <td>Blockchain</td>
                        <td><input type="radio" id="Blockchain" name="rdoGroup" value="1000" /></td>
                    </tr>
                    <tr>
                        <td>Autonomous Things</td>
                        <td><input type="radio" id="AutonomousThings" name="rdoGroup" value="2000" /></td>
                    </tr>
                    <tr>
                        <td>Immersive Experience</td>
                        <td><input type="radio" id="ImmersiveExperience" name="rdoGroup" value="3000" /></td>
                    </tr>                        
                 </table>                   
                </center>                      
             <br />
             <center>               
                 <table cellspacing="10">
                     <tr>
                         <td><b></b></td>
                         <td><b>Amount</b></td>
                     </tr>
                     <tr>
                         <td>SubTotal</td>
                         <td><input type="text" id="txtSubTotal" name="txtSubTotal" readonly /><td>
                     </tr>
                     <tr>
                         <td>-Discount @ 10%</td>
                         <td><input type="text" id="txtDisc" name="txtDisc" readonly /><td>
                     </tr>
                     <tr>
                         <td>+ VAT @ 20%</td>
                         <td><input type="text" id="txtVat" name="txtVat" readonly /><td>
                     </tr>
                     <tr>
                         <td>Total</td>
                         <td><input type="text" id="txtTotal" name="txtTotal" value="" readonly /><td>
                     </tr>                    
                 </table>
             </center>
             
             <br />
             
             <center>
                 <input class="button" type="button" name="btnCalc" id="btnCalc" onclick="calcSub()" value="Calculate Amount" />
                 <input class="button" type="button" name="btnClear" id="btnClear" onclick="AmountClear()" value="Clear Amount" />
                 <input class="button" type="submit" name="btnProceed" id="btnProceed" onclick="" value="Proceed" />
             </center>           
        </form>           
        </div>
        
        
        <script type="text/javascript">
            function calcSub() {
                var subAmount = parseFloat(document.getElementById('txtSubTotal').value);
                var Blockchain = parseFloat(document.getElementById('Blockchain').value);
                var AutonomousThings = parseFloat(document.getElementById('AutonomousThings').value);
                var ImmersiveExperience = parseFloat(document.getElementById('ImmersiveExperience').value);
                
                if (document.getElementById('Blockchain').checked) {
                    document.intCalc.txtSubTotal.value = Blockchain;
                    subAmount= Blockchain;
                    calculation(subAmount);
                }
                    
                else if (document.getElementById('AutonomousThings').checked) {
                    document.intCalc.txtSubTotal.value = AutonomousThings;
                    subAmount= AutonomousThings;
                    calculation(subAmount);
                }
                
                else if (document.getElementById('ImmersiveExperience').checked) {
                     document.intCalc.txtSubTotal.value = ImmersiveExperience;
                    subAmount= ImmersiveExperience;
                    calculation(subAmount);
                }
            }
            
            function calculation(parmSubTotal){
                var subTotal = parseFloat(parmSubTotal);
                var calcDisc = parseFloat(subTotal * .10);
                var calcVat = parseFloat(subTotal * .20);
                var total = parseFloat(subTotal - calcDisc + calcVat);
                
                document.intCalc.txtDisc.value= calcDisc;
                document.intCalc.txtVat.value= calcVat;
                document.intCalc.txtTotal.value= total;
            }
            
            function AmountClear(){
                document.getElementById('txtSubTotal').value="";
                document.getElementById('txtDisc').value="";
                document.getElementById('txtVat').value="";
                document.getElementById('txtTotal').value="";                      
            }     
                  
        
        </script>                       
    </body>   
</html>
