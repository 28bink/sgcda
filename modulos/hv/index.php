<?php
  require_once "config.php";
  

  //echo inspector[0];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CITB</title>
  </head>
  <body>
      
    <h5>
        <a href="#">    
            <img src="../../media/logo.jfif" alt="" width=5%>
        </a><b>HOJAS DE VIDA</b> - PERSONAL CENTRO DE INSPECCIÓN TOTAL BOYACÁ
    </h5>
            <!--    col    = Celulares
                    col-md = Tablets 
                    col-sm = Pcs
                    col-lg = Tv
            -->
    <div class="container">
	<table class="table table-hover">
  <thead>
    <tr class="table-success">
      <th scope="col">NOMBRES</th>
      <th scope="col">CARGO</th>
      <th scope="col"><h6><?php echo $cursosCitb[0]?></h6></th>
      <th scope="col"><h6><?php echo $cursosCitb[1]?></h6></th>
      <th scope="col"><h6><?php echo $cursosCitb[2]?></h6></th>
	  <th scope="col"><h6><?php echo $cursosCitb[3]?></h6></th>
	  <th scope="col"><h6><?php echo $cursosCitb[4]?></h6></th>
	  <th scope="col"><h6><?php echo $cursosCitb[5]?></h6></th>
	  <th scope="col"><h6><?php echo $cursosCitb[6]?></h6></th>
	  <th scope="col"><h6><?php echo $cursosCitb[7]?></h6></th>
	  <th scope="col"><h6><?php echo $cursosCitb[8]?></h6></th>
	  <th scope="col"><h6><?php echo $cursosCitb[9]?></h8></th>
	  <th scope="col"><h6><?php echo $cursosCitb[10]?></h6></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $inspectoresCitb[0]?></th>
      <th score="col"><?php echo $cargosCitb[3]?></th>
      <th score="col"> 
        <a href="pista/155/Rtmyec 155h Diego.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        <?php
          $mod_date = strtotime($c155[0]."+ 2 years");
          echo "<br><br>Vence:".date("d-m-Y",$mod_date) . "\n";
        ?>
      </th>
      <th score="col"> 
        <a href="pista/inspectores/<?php echo $inspectoresCitb[0]?>/C.liv y pes.pdf"><img src="../../media/pdf.png" alt="" width="30 %"></a>
        Cursó:2020/12/22
        <br>Vence:2023/12/22
      </th>
      <th score="col"> 
        <a href="pista/inspectores/<?php echo $inspectoresCitb[0]?>/C.liv y pes.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Cursó:2020/12/22
        <br>Vence:2023/12/22
      </th>
      <th score="col"> 
        <a href="pista/inspectores/<?php echo $inspectoresCitb[0]?>/C. motocicletas.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Cursó:2020/12/22
        <br>Vence:2023/12/22
      </th>
      <th score="col"> 
        <a href="pista/inspectores/<?php echo $inspectoresCitb[0]?>/rtmyg.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Cursó:2021/08/05
        <br>Vence:2023/08/25
      </th>
      <th score="col"> 
        <a href="pista/inspectores/<?php echo $inspectoresCitb[0]?>/Trabajo bajo tutela.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Fecha:2021/07/22
      </th>
      <th score="col"> 
        <a href="pista/inspectores/<?php echo $inspectoresCitb[0]?>/Acta Autorizacion..pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Fecha:2021/10/19
      </th> 
      <th score="col"> 
        <a href="pista/inspectores/<?php echo $inspectoresCitb[0]?>/equipos.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Fecha:2020/12/22
      </th> 
      <th score="col"> 
        <a href="pista/inspectores/<?php echo $inspectoresCitb[0]?>/mintrasporte.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Fecha:2021/07/23
      </th> 
      <th score="col"> 
        <a href="pista/inspectores/<?php echo $inspectoresCitb[0]?>/onac.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Fecha:2021/07/23
      </th>
      <th score="col"> 
        <a href="pista/inspectores/<?php echo $inspectoresCitb[0]?>/Hdv Diego A.pdf"><img src="../../media/pdf.png" alt="" width="140%"></a>
      </th>       
    </tr>
    <tr>
      <th scope="row"><?php echo $inspectoresCitb[1]?></th>
      <th score="col"> <?php echo $cargosCitb[3]?> </th>
      <th score="col"> 
        <a href="pista/155/Rtmyec 155h Hugo.jpg"><img src="../../media/pdf.png" alt="" width="30%"></a>
        <?php
          $mod_date = strtotime($c155[1]."+ 2 years");
          echo "<br>Vence:".date("d-m-Y",$mod_date) . "\n";
        ?>
      </th>
      <th score="col"> 
        <a href="pista/inspectores/<?php echo $inspectoresCitb[1]?>/Comp liv y pesa.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Cursó:2020/11/23
        <br>Vence:2023/11/23
      </th>
      <th score="col"> 
        <a href="pista/inspectores/<?php echo $inspectoresCitb[1]?>/Comp liv y pesa.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Cursó:2020/11/23
        <br>Vence:2023/11/23
      </th>
      <th score="col"> 
        <a href="pista/inspectores/<?php echo $inspectoresCitb[1]?>/Evaluar Motos.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Cursó:2020/11/23
        <br>Vence:2023/11/23
      </th>
      <th score="col"> 
        <a href="pista/inspectores/<?php echo $inspectoresCitb[1]?>/rtmyg.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Cursó:2021/05/13
        <br>Vence:
      </th>
      <th score="col"> 
        <a href="pista/inspectores/<?php echo $inspectoresCitb[1]?>/Trabajo tutelado.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Fecha:2021/07/22
      </th>
      <th score="col"> 
        <a href="pista/inspectores/<?php echo $inspectoresCitb[1]?>/acta utorizacion.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Fecha:2021/10/19
      </th> 
      <th score="col"> 
        <a href="pista/inspectores/<?php echo $inspectoresCitb[1]?>/C.operar equipos.pdf"><img src="../../media/pdf.png" alt="" width="35%"></a>
        Cursó:2020/11/23
        <br>Vence:2023/11/23
      </th> 
      <th score="col"> 
        <a href="pista/inspectores/<?php echo $inspectoresCitb[1]?>/mintrasporte H.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Fecha:2021/07/23
      </th> 
      <th score="col"> 
        <a href="pista/inspectores/<?php echo $inspectoresCitb[1]?>/onac.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Fecha:2021/07/23
      </th>
      <th score="col"> 
        <a href="pista/inspectores/<?php echo $inspectoresCitb[1]?>/Hdv Hugo Torres.pdf"><img src="../../media/pdf.png" alt="" width="140%"></a>
      </th>        
    </tr>
    <tr>
      <th scope="row"><?php echo $inspectoresCitb[2]?></th>
      <th score="col"> <?php echo $cargosCitb[3]?> </th>
      <th score="col"> 
        <a href="pista/155/Rtmyec 155h Andres_zipa.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        <?php
          $mod_date = strtotime($c155[2]."+ 2 years");
          echo "<br>Vence:".date("d-m-Y",$mod_date) . "\n";
        ?>
      </th>
      <th score="col"> 
        <a href="pista/inspectores/<?php echo $inspectoresCitb[2]?>/Liv y Pesados.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Cursó:2020/11/23
        <br>Vence:2023/11/23
      </th>
      <th score="col"> 
        <a href="pista/inspectores/<?php echo $inspectoresCitb[2]?>/Liv y Pesados.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Cursó:2020/11/23
        <br>Vence:2023/11/23
      </th>
      <th score="col"> 
        <a href="pista/inspectores/<?php echo $inspectoresCitb[2]?>/Motocicletas.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Cursó:2020/11/23
        <br>Vence:2023/11/23
      </th>
      <th score="col"> 
        <a href="pista/inspectores/<?php echo $inspectoresCitb[2]?>/Rtmyec..pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Cursó:2021/05/23
        <br>Vence:2023/05/23 (verificar)
      </th>
      <th score="col"> 
        <a href=""><img src="../../media/pdf.png" alt="" width="30%"></a>
        falta
      </th>
      <th score="col"> 
        <a href=""><img src="../../media/pdf.png" alt="" width="30%"></a>
        falta
      </th> 
      <th score="col"> 
        <a href="pista/inspectores/<?php echo $inspectoresCitb[2]?>/comp equipos.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Cursó:2020/11/23
        <br>Vence:2023/11/23
      </th> 
      <th score="col"> 
        <a href="pista/inspectores/<?php echo $inspectoresCitb[2]?>/R.Mintrasporte.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Fecha:2021/11/19
      </th> 
      <th score="col"> 
        <a href="pista/inspectores/<?php echo $inspectoresCitb[2]?>/R.onac.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Fecha:2021/11/19
      </th>
      <th score="col"> 
        <a href="pista/inspectores/<?php echo $inspectoresCitb[2]?>/Hdv Camilo Z.pdf"><img src="../../media/pdf.png" alt="" width="140%"></a>
      </th>        
    </tr>
	  <tr>
      <th scope="row"><?php echo $inspectoresCitb[3]?></th>
      <th score="col"> <?php echo $cargosCitb[3]?> </th>
      <th score="col"> 
        <a href="pista/155/Rtmyec 155h Anderson.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        <?php
          $mod_date = strtotime($c155[3]."+ 2 years");
          echo "<br>Vence:".date("d-m-Y",$mod_date) . "\n";
        ?>
      </th>
      <th score="col"> 
        <a href="pista/inspectores/<?php echo $inspectoresCitb[3]?>/Comp.Liv y Pes.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Cursó:2019/08/21
        <br>Vence:2021/08/21
      </th>
      <th score="col"> 
        <a href="pista/inspectores/<?php echo $inspectoresCitb[3]?>/Comp.Liv y Pes.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Cursó:2019/08/21
        <br>Vence:2022/08/21
      </th>
      <th score="col"> 
        <a href="pista/inspectores/<?php echo $inspectoresCitb[3]?>/Comp.Motos.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Cursó:2020/11/23
        <br>Vence:2023/11/23
      </th>
      <th score="col"> 
        <a href="pista/inspectores/<?php echo $inspectoresCitb[3]?>/Rtmyg.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Cursó:2021/03/07
        <br>Vence:2023/03/07 (Averiguar)
      </th>
      <th score="col"> 
        <a href=""><img src="../../media/pdf.png" alt="" width="30%"></a>
        falta
      </th>
      <th score="col"> 
        <a href="pista/inspectores/<?php echo $inspectoresCitb[3]?>/Acta de autorizacion.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Fecha:2020/06/10
      </th> 
      <th score="col"> 
        <a href="pista/inspectores/<?php echo $inspectoresCitb[3]?>/Comp.Equipos.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Cursó:2019/08/21
        <br>Vence:2022/08/21
      </th> 
      <th score="col"> 
        <a href="pista/inspectores/<?php echo $inspectoresCitb[3]?>/rerporte mintrasporte.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Fecha:2020/06/17
      </th> 
      <th score="col"> 
        <a href="pista/inspectores/<?php echo $inspectoresCitb[3]?>/reporte onac.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Fecha:2020/08/10
      </th>
      <th score="col"> 
        <a href="pista/inspectores/<?php echo $inspectoresCitb[3]?>/hdv Anderson CH.pdf"><img src="../../media/pdf.png" alt="" width="140%"></a>
      </th>        
    </tr>
	  <tr>
      <th scope="row"><?php echo $inspectoresCitb[4]?></th>
      <th score="col"> <?php echo $cargosCitb[3]?> </th>
      <th score="col"> 
        <a href="pista/155/Rtmyg 155 Julián.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        <?php
          $mod_date = strtotime($c155[4]."+ 2 years");
          echo "<br>Vence:".date("d-m-Y",$mod_date) . "\n";
        ?>  
      </th>
      <th score="col"> 
        <a href="pista/inspectores/<?php echo $inspectoresCitb[4]?>/certificacion livianos.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Cursó:2022/04/25
        <br>Vence:2023/04/24
      </th>
      <th score="col"> 
        <a href="pista/inspectores/<?php echo $inspectoresCitb[4]?>/certificacion pesadps.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Cursó:2021/12/16
        <br>Vence:2022/12/15
      </th>
      <th score="col"> 
        <a href="pista/inspectores/<?php echo $inspectoresCitb[4]?>/certificacion motos.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Cursó:2021/12/07
        <br>Vence:2022/12/06
      </th>
      <th score="col"> 
        <a href="pista/inspectores/<?php echo $inspectoresCitb[4]?>/Rtmyg.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Cursó:2021/06/28
        <br>Vence:2023/06/28
      </th>
      <th score="col"> 
        <a href="pista/inspectores/<?php echo $inspectoresCitb[4]?>/trabajo tutelado.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Fecha:2022/02/14
      </th>
      <th score="col"> 
        <a href="pista/inspectores/<?php echo $inspectoresCitb[4]?>/Acta autorizacion.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Fecha:2022/02/23
      </th> 
      <th score="col"> 
        <a href="pista/inspectores/<?php echo $inspectoresCitb[4]?>/Comp.Pesados.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Cursó:2021/12/16
        <br>Vence:2022/12/15
      </th> 
      <th score="col"> 
        <a href="pista/inspectores/<?php echo $inspectoresCitb[4]?>/Reporte Mintrasporte.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Fecha:2022/02/14
      </th> 
      <th score="col"> 
        <a href="pista/inspectores/<?php echo $inspectoresCitb[4]?>/Reporte Onac.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Fecha:2022/02/14
      </th>
      <th score="col"> 
        <a href="pista/inspectores/<?php echo $inspectoresCitb[4]?>/HDV Julian R.pdf"><img src="../../media/pdf.png" alt="" width="140%"></a>
      </th>        
    </tr>
    <!--
	  <tr>
      <th scope="row">EMANUEL ALEJANDRO CORREDOR</th>
      <th score="col">Pre-Inspección (Sena)</th>
      <th score="col"> 
        <a href="recepcion/"><img src="../../media/pdf.png" alt="" width="45%"></a>
      </th>
      <th score="col"> 
        <a href="../../media/hv/alejandroc/compL.pdf"><img src="../../media/pdf.png" alt="" width="40%"></a>
      </th>
      <th score="col"> 
        <a href="../../media/hv/alejandroc/compP.pdf"><img src="../../media/pdf.png" alt="" width="50%"></a>
      </th>
      <th score="col"> 
        <a href="../../media/hv/alejandroc/compM.pdf"><img src="../../media/pdf.png" alt="" width="45%"></a>
      </th>
      <th score="col"> 
        <a href="../../media/hv/alejandroc/act155.pdf"><img src="../../media/pdf.png" alt="" width="55%"></a>
      </th>
      <th score="col"> 
        <a href="../../media/hv/alejandroc/tutela.pdf"><img src="../../media/pdf.png" alt="" width="65%"></a>
      </th>
      <th score="col"> 
        <a href="../../media/hv/alejandroc/accPista.pdf"><img src="../../media/pdf.png" alt="" width="40%"></a>
      </th> 
      <th score="col"> 
        <a href="../../media/hv/alejandroc/repRunt.pdf"><img src="../../media/pdf.png" alt="" width="45%"></a>
      </th> 
      <th score="col"> 
        <a href="../../media/hv/alejandroc/repMinT.pdf"><img src="../../media/pdf.png" alt="" width="40%"></a>
      </th> 
      <th score="col"> 
        <a href="../../media/hv/alejandroc/repOnac.pdf"><img src="../../media/pdf.png" alt="" width="80%"></a>
      </th>
      <th score="col"> 
        <a href="../../media/hv/alejandroc/HV.pdf"><img src="../../media/pdf.png" alt="" width="140%"></a>
      </th>          
    </tr>
    -->
	  <tr>
      <th scope="row"><?php echo $inspectoresCitb[5]?></th>
      <th score="col"><?php echo $cargosCitb[4]?></th>
      <th score="col"> 
        <a href="recepcion/<?php echo $inspectoresCitb[5]?>/Rtmyec.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        <?php
          $mod_date = strtotime($c155[5]."+ 2 years");
          echo "<br>Vence:".date("d-m-Y",$mod_date) . "\n";
        ?>
      </th>
      <th score="col"> 
        <a href="recepcion/<?php echo $inspectoresCitb[5]?>/Liv y pes.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Cursó:2021/07/23
        <br>Vence:2024/07/23
      </th>
      <th score="col"> 
        <a href="recepcion/<?php echo $inspectoresCitb[5]?>/Liv y pes.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Cursó:2021/07/23
        <br>Vence:2024/07/23
      </th>
      <th score="col"> 
        <a href="recepcion/<?php echo $inspectoresCitb[5]?>/Motos.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Cursó:2021/07/23
        <br>Vence:2024/07/23
      </th>
      <th score="col"> 
        <a href="recepcion/<?php echo $inspectoresCitb[5]?>/Rtmyec.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Cursó:2020/12/14
        <br>Vence:2022/12/14  
      </th>
      <th score="col"> 
        <a href="#"><img src="../../media/pdf.png" alt="" width="30%"></a>
        falta
      </th>
      <th score="col"> 
        <a href="#"><img src="../../media/pdf.png" alt="" width="30%"></a>
        falta
      </th> 
      <th score="col"> 
        <a href="recepcion/<?php echo $inspectoresCitb[5]?>/Operar equ..pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Cursó:2021/07/23
        <br>Vence:2024/07/23
      </th> 
      <th score="col"> 
        <a href="recepcion/<?php echo $inspectoresCitb[5]?>/Mintrasporte Ar.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Fecha:2021/08/27
      </th> 
      <th score="col"> 
        <a href="recepcion/<?php echo $inspectoresCitb[5]?>/Onac AR.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Fecha:2021/08/27
      </th>
      <th score="col"> 
        <a href="recepcion/<?php echo $inspectoresCitb[5]?>/Hdv Jairo R.pdf"><img src="../../media/pdf.png" alt="" width="140%"></a>
      </th>            
    </tr>
	  <tr>
      <th scope="row"><?php echo $preInspeccionCitb[0]?></th>
      <th score="col"><?php echo $cargosCitb[5]?></th>
      <th score="col"> 
        <a href="./recepcion/EMANUEL CORREDOR/rtmyec 160h.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a><br>
        Vence:2024/04/06
      </th>
      <th score="col"> 
        <a href="#"><img src="../../media/pdf.png" alt="" width="30%"></a><br>
        En proceso SENA
      </th>
      <th score="col"> 
        <a href=""><img src="../../media/pdf.png" alt="" width="30%"></a><br>
        En proceso SENA
      </th>
      <th score="col"> 
        <a href=""><img src="../../media/pdf.png" alt="" width="30%"></a><br>
        En proceso SENA
      </th>
      <th score="col"> 
        <a href="./recepcion/EMANUEL CORREDOR/rtmyec 160h.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Curso 155 Horas vigente
      </th>
      <th score="col"> 
        <a href="recepcion/<?php echo $preInspeccionCitb[0]?>/"><img src="../../media/pdf.png" alt="" width="30%"></a>
        falta tutela
      </th>
      <th score="col"> 
        <a href="./recepcion/EMANUEL CORREDOR/Acta de autorizacion E.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        No Tiene
      </th> 
      <th score="col"> 
        <a href="#"><img src="../../media/pdf.png" alt="" width="30%"></a>
        No Tiene
      </th> 
      <th score="col"> 
        <a href="recepcion/<?php echo $preInspeccionCitb[0]?>/Mintrasporte.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Fecha:2022/02/22
      </th> 
      <th score="col"> 
        <a href="recepcion/<?php echo $preInspeccionCitb[0]?>/Onac.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Fecha:2022/02/22
      </th>
      <th score="col"> 
        <a href="recepcion/<?php echo $preInspeccionCitb[0]?>/HDV Emanuel.pdf"><img src="../../media/pdf.png" alt="" width="140%"></a>
      </th>          
    </tr>
    <thead>
    <tr class="table-success">
      <th scope="col">NOMBRES</th>
      <th scope="col">CARGO</th>
      <th scope="col"><h6>CURSO 155 Hrs</h6></th>
	    <th scope="col"><h6>ACT. 155 Hrs</h6></th>
	    <th scope="col"><h6>TUTELA</h6></th>
	    <th scope="col"><h6>REP. MINTRANS</h6></th>
	    <th scope="col"><h6>REP. ONAC</h8></th>
      <th scope="col"><h6>NOMBRAMIENTO</h6></th>
	    <th scope="col"><h6>SERVICIO AL CLIENTE</h6></th>
      <th scope="col"><h6>HV</h6></th>
      <th scope="col"><h6></h6></th>
	    <th scope="col"><h6></h6></th>
      <th scope="col"><h6></h6></th>
      
    </tr>
  </thead>
	  <tr>
      <th scope="row"><?php echo $directoresCitb[0]?></th>
      <th score="col"><?php echo $cargosCitb[2]?></th>
      <th score="col"> 
        <a href="pista/dt/<?php echo $directoresCitb[0]?>/155.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Cursó:2017/11/03
      </th>
      <th score="col"> 
      <a href="pista/dt/<?php echo $directoresCitb[0]?>/rtmyec.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Cursó:2019/08/29
      </th>
     
      <th score="col"> 
        <a href=""><img src="../../media/pdf.png" alt="" width="30%"></a>
        Falta
      </th>
      <th score="col"> 
        <a href="pista/dt/<?php echo $directoresCitb[0]?>/Rep.mintrasporte ,.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Fecha:2022/04/11
      </th>
      <th score="col"> 
        <a href="pista/dt/<?php echo $directoresCitb[0]?>/Re.Onac.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Fecha:2022/04/11
      </th>
      <th score="col"> 
        <a href=""><img src="../../media/pdf.png" alt="" width="30%"></a>
        Falta
      </th>
      <th score="col"> 
        <a href="pista/dt/<?php echo $directoresCitb[0]?>/ServicioAlCliente.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
      </th>   
      <th score="col"> 
        <a href="pista/dt/<?php echo $directoresCitb[0]?>/HDv samuel.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
      </th>        
    </tr>
	  <tr>
      <th scope="row"><?php echo $directoresCitb[1]?></th>
      <th score="col"><?php echo $cargosCitb[2]?></th>
      <th score="col"> 
        <a href="pista/dt/<?php echo $directoresCitb[1]?>/Rtmyem..pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Fecha:2021/05/06
      </th>
      <th score="col"> 
        <!--<a href="../../media/hv/diegof/compL.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>-->
      </th>
      <th score="col"> 
        <a href="pista/dt/<?php echo $directoresCitb[1]?>/T.Tutelado.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Fecha:2021/01/27
      </th>
    
      <th score="col"> 
        <a href="#"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Falta
      </th>
      <th score="col"> 
        <a href="pista/dt/<?php echo $directoresCitb[1]?>/"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Falta
      </th>
      <th score="col"> 
        <a href="pista/dt/<?php echo $directoresCitb[1]?>/Nombramiento Dt.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
        Fecha:2021/02/26
      </th> 
      <th score="col"> 
        <a href="pista/dt/<?php echo $directoresCitb[1]?>/Hdv Diego Diaz.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
      </th>            
    </tr>
	  
    <thead>
    <tr class="table-success">
      <th scope="col">NOMBRES</th>
      <th scope="col">CARGO</th>
      <th scope="col"><h6>CURSO 155 Hrs</h6></th>
      <th scope="col"><h6>RTM&GC RECURRENTE</h6></th>
      <th scope="col"><h6>17020</h6></th>
	    <th scope="col"><h6>AUDITORIA INTERNA</h6></th>
	    <th scope="col"><h6>SERVICIO AL CLIENTE</h6></th>
	    <th scope="col"><h6>ISSST</h6></th>
	    <th scope="col"><h6>METROLOGIA</h6></th>
	    <th scope="col"><h6>GERENCIA DE PROYECTOS</h6></th>
	    <th scope="col"><h6>PROTECCION DATOS PERSONALES</h6></th>
	    <th scope="col"><h6>CINTAS REFLECTIVAS</h8></th>
	    <th scope="col"><h6>HV</h6></th>
    </tr>
  </thead>
	  <tr>
      <th scope="row"><?php echo $admCitb[1]?></th>
      <th score="col"><?php echo $cargosCitb[1]?></th>
      <th score="col"> 
        <a href="adm/<?php echo $admCitb[1]?>/RTM&GC_ICAFT.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
      </th>
      <th score="col"> 
        <a href="adm/<?php echo $admCitb[1]?>/Sena_RTM_Recurrente.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
      </th>
      <th score="col"> 
        <a href="adm/<?php echo $admCitb[1]?>/NTC 17020-71 Fenalco.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
      </th>
      <th score="col"> 
        <a href="adm/<?php echo $admCitb[1]?>/auditoria_interna.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
      </th>
      <th score="col"> 
        <a href="adm/<?php echo $admCitb[1]?>/Sena_Servicio_al_cliente.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
      </th>
      <th score="col"> 
        <a href="adm/<?php echo $admCitb[1]?>/Sena_ISSST.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
      </th>
      <th score="col"> 
        <a href="adm/<?php echo $admCitb[1]?>/CDA CEDAS LA PRADERA METROLOGIA PARA CDA (1).pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
      </th> 
      <th score="col"> 
        <a href="adm/<?php echo $admCitb[1]?>/5_Esp_Gerencia_Proyectos.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
      </th> 
      <th score="col"> 
        <a href="adm/<?php echo $admCitb[1]?>/Proteccion_datos_personales.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
      </th> 
      <th score="col"> 
        <a href="adm/<?php echo $admCitb[1]?>/Cintas_Reflectivas.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
      </th>
      <th score="col"> 
        <a href="adm/<?php echo $admCitb[1]?>/HV_Sogamoso-converted.pdf"><img src="../../media/pdf.png" alt="" width="140%"></a>
      </th>           
    </tr>
    <thead>
    <tr class="table-success">
      <th scope="col">NOMBRES</th>
      <th scope="col">CARGO</th>
      <th scope="col"><h6>CURSO SERVICIO AL CLIENTE</h6></th>
	    <th scope="col"><h6>HV</h6></th>
      <th scope="col"><h6></h6></th>
      <th scope="col"><h6></h6></th>
      <th scope="col"><h6></h6></th>
      <th scope="col"><h6></h6></th>
      <th scope="col"><h6></h6></th>
      <th scope="col"><h6></h6></th>
      <th scope="col"><h6></h6></th>
      <th scope="col"><h6></h6></th>
      <th scope="col"><h6></h6></th>
    </tr>
  </thead>
  <tr>
      <th scope="row"><?php echo $cajaCitb[0]?></th>
      <th score="col"><?php echo $cargosCitb[6]?></th>
      <th score="col"> 
        <a href="cajeros/<?php echo $cajaCitb[0]?>/servicioAlCliente.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
      </th>
      <th score="col"> 
        <a href="../../media/hv/<?php echo $cajaCitb[0]?>/compL.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
      </th>          
    </tr>
    <tr>
      <th scope="row"><?php echo $cajaCitb[1]?></th>
      <th score="col"><?php echo $cargosCitb[7]?></th>
      <th score="col"> 
        <a href="cajeros/<?php echo $cajaCitb[1]?>/servicioAlCliente.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
      </th>
      <th score="col"> 
        <a href="../../media/hv/<?php echo $cajaCitb[1]?>/compL.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
      </th>     
    </tr>
  <tr>
      <th scope="row"><?php echo $cajaCitb[2]?></th>
      <th score="col"><?php echo $cargosCitb[6]?></th>
      <th score="col"> 
        <a href="../../media/hv/<?php echo $cajaCitb[2]?>/155.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
      </th>
      <th score="col"> 
        <a href="../../media/hv/<?php echo $cajaCitb[2]?>/compL.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
      </th>       
    </tr>
    <thead>
    <tr class="table-success">
      <th scope="col">NOMBRES</th>
      <th scope="col">CARGO</th>
	    <th scope="col"><h6>HV</h6></th>
      <th scope="col"><h6></h6></th>
      <th scope="col"><h6></h6></th>
      <th scope="col"><h6></h6></th>
      <th scope="col"><h6></h6></th>
      <th scope="col"><h6></h6></th>
      <th scope="col"><h6></h6></th>
      <th scope="col"><h6></h6></th>
      <th scope="col"><h6></h6></th>
      <th scope="col"><h6></h6></th>
    </tr>
  </thead>
	  <tr>
      <th scope="row"><?php echo $admCitb[2]?></th>
      <th score="col"><?php echo $cargosCitb[8]?></th>
      <th score="col"> 
        <a href="adm/<?php echo $admCitb[2]?>/HOJA DE VIDA SONIA AGUDELO.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
      </th>         
    </tr>
    <tr>
      <th scope="row"><?php echo $admCitb[3]?></th>
      <th score="col"><?php echo $cargosCitb[9]?></th>
      <th score="col"> 
        <a href="adm/<?php echo $admCitb[3]?>/Liliana Martinez.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a>
    </th>         
    </tr>
    <tr>
      <th scope="row"><?php echo $variosCitb[0]?></th>
      <th score="col"><?php echo $cargosCitb[10]?></th>
      <th score="col"> 
        <a href="#"><img src="../../media/pdf.png" alt="" width="30%"></a>
      </th>
      <thead>
    <tr class="table-danger">
      <th scope="col">NOMBRES</th>
      <th scope="col">CARGO</th>
      <th scope="col">CONTRATO</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
    </tr>
      <th scope="row"><?php echo $variosCitb[1]?></th>
      <th score="col"><?php echo $cargosCitb[11]?></th>
      <th score="col"> 
        <a href="adm/vigilancia.pdf"><img src="../../media/pdf.png" alt="" width="30%"></a><br>
        Auto-Renovación<br>
        Vence: 2022/12/31
      </th>           
    </tr>
    

  </tbody>
</table>
    </div> <!-- cierre div container -->
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
