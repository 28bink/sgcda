<?php
$mT=$_POST['vls'];
$mL1=$_POST['vl1c'];
$mL2=$_POST['vl2c'];
$calculo1=($mL1*100)/$mT;
//echo "% lado 1: ".$calculo1." % ";

$calculo2=($mL2*100)/$mT;
//echo "% lado 2: ".$calculo2." % ";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Calculo Cintas Reflectivas</title>
  </head>
  <body>
    <h1 align="center">RESULTADO</h1>
    <center>
        <form action="index.html" method="post">
    <table>
        <tr>
            <td><b>LADO 1</b><br>
                <img src="resultado/vehiculoL1.png" alt="Lado1">
            </td>
            <td><b>LADO 2</b> <br>
                <img src="resultado/vehiculoL2.png" alt="Lado12">
            </td>
                
        </tr>
        <tr align="center">
            <td>Valor Lado 1 = <?php echo"<b>".$mT." cm</b>";?></td>
            <td>Valor Lado 2 = <?php echo"<b>".$mT." cm</b>";?></td>
        </tr>
        <tr>
            <td>
                <img src="resultado/vehiculoL1c.png" alt="Lado1">
            </td>
            <td>
                <img src="resultado/vehiculoL2c.png" alt="Lado12">
            </td>
                
        </tr>
        <tr align="center">
            <td> Porcentaje de Cumplimiento <br>
               <b> <?php 
                        if($calculo1>=70){
                            echo "<h1>".$calculo1." % <br> CUMPLE</h1>"; 
                        }
                        else{
                            echo "<h1>".$calculo1.' % <br> 
                            <p style="color:red">
                            <h1>NO CUMPLE</h1>
                            </p>'; 
                        }
                    ?>
                </b>        
            </td>
            <td>Porcentaje de Cumplimiento <br>
                <b><?php 
                        if($calculo2>=70){
                            echo "<h1>".$calculo2." % <br> <h1>CUMPLE</h1>";
                        }
                        else{
                            echo "<h1>".$calculo2.' % <br> 
                            <p style="color:red">
                            <h1>NO CUMPLE</h1>
                            </p>'; 
                        }
                    
                    ?>
                </b>
            </td>
        </tr>
    </table>
    <input type="submit" value="NUEVO CALCULO">
    </center>
    
</form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>