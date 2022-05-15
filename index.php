<?php  
include "config.php";
//include 'https://motellacolina.co/licencias/licencia.php';
//include 'https://motellacolina.co/'.$cda10.'/config.php'; 
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">

    <title>CITB</title>
    <style>
        body{
            background-color: #828081;
            align-items: center;
            align-content: center;
        }
        .barra{
            text-decoration: none;
            font-family: 'Quicksand';
            font-size: small;
            font-weight: bold;
            margin-bottom: 5px;
            letter-spacing: 0px;
            text-indent:20px;
            word-spacing: 20px;
            background-color: azure;
            padding: 0px;
            margin: 5px;
            border-radius: 15px;
        }
        .encabezado_inicial{
            text-decoration: none;
            font-family: 'Quicksand';
            font-size:x-large;
            color: <?php echo $color_encabezadoInicialNombreCda?>;
            font-weight: bold;
            background-color: <?php echo $color_encabezadoInicialFondo?>;
            padding:5px;
            margin: 5px 5px 5px 5px;
            margin-top: 10px;
            border-radius: 10px;
        }
        .encabezado_inicial img{
           border-radius: 30px;
        }
        .encabezado_secundario{
            text-decoration: none;
            font-family: 'Quicksand';
            font-size: small;
            color: black;
            font-weight: bold;
            background-color: <?php echo $color_encabezadoSecundarioFondo?>;
            padding:5px;
            margin: 0;
            border-radius: 0px;
            border-color: black;
            text-indent:6%;
        }
        .container{
            align-items: center;
            align-content: center;
        }
        .container a{
            text-decoration: none;
            font-family: 'Quicksand';
            font-size: small;
            color: <?php echo $color_fondoIconos?>;
            font-weight: bold;
        }
       
        #items{
            background-color: <?php echo $color_itemsApps?>;
            border-radius: 10px;
            margin: 5px;
        }
        #items img{
            border-radius: 30px;
            margin: 5px;
        }
        footer a{
            text-decoration: none;
            color: black;
        }
        footer{
            text-decoration: none;
            font-family: 'Quicksand';
            font-size: small;
            font-weight: bold;
            background-color: <?php echo $color_pie?>;
            padding:5px;
            margin: 0;
            border-radius: 0px;
            border-color: black;
            text-align: right;
        }
       

    </style>
  </head>
  <body>
    <nav class="barra">
        INSPECTORES
        CAJEROS
        DIRECTORES TECNICOS
        GERENCIA
        SGSST
        CONTACTOS
        INFO. CDA
    </nav>
    <div class="encabezado_inicial">  
        <a href="#"><img src="media/logo.jfif" alt="" width=5%></a>
        <?php  echo $cda;?>
    </div>
    <div class="encabezado_secundario">  
    <?php  echo $city."".$direction;?>   
    </div>

            <!--    col    = Celulares
                    col-md = Tablets 
                    col-sm = Pcs
                    col-lg = Tv
            -->
    <div class="container">
        <div class="row"> <!-- inicio div fila 1 -->
            <div class="col-6 col-md-2 col-sm-6 col-lg-2" id="items">
                <a href="modulos/hv/index.php">
                    <img src="media/hv.gif" alt="" width=30%><?php echo "<br>".$app0;?>
                </a>
            </div>
            <div class="col-6 col-md-2 col-sm-6 col-lg-2" id="items">
                <a href="modulos/manuales">
                    <img src="media/manuales_v.gif" alt="" width=30%><?php echo "<br>".$app1;?>
                </a>
            </div>
            <div class="col-6 col-md-2 col-sm-6 col-lg-2" id="items">
                <a href="modulos/gobernadas/rpmGobernadas.pdf">
                    <img src="media/gobernadas.gif" alt="" width=30%><?php echo "<br>".$app2;?>
                </a>
            </div>
            <div class="col-6 col-md-2 col-sm-6 col-lg-2" id="items">
                <a href="modulos/normas">
                    <img src="media/normatividad.gif" alt="" width=30%><?php echo "<br>".$app3;?>
                </a>
            </div>
            <div class="col-6 col-md-2 col-sm-6 col-lg-2" id="items">
                <a href="modulos/instructivos">
                    <img src="media/instructivos.gif" alt="" width=30%><?php echo "<br>".$app4;?>
                </a>
            </div>
            <div class="col-6 col-md-2 col-sm-6 col-lg-2" id="items">
                <a href="http://192.168.3.201:9292/" target="_blank" rel="noopener noreferrer">
                    <img src="media/tecnimaq.png" alt="" width=100%> <?php echo "<br>".$app5;?>
                </a> 
            </div>
            <div class="col-6 col-md-2 col-sm-6 col-lg-2" id="items">
                <a href="modulos/metrologia">
                    <img src="media/metrologia.gif" alt="" width=30%> <?php echo "<br>".$app6;?>
                </a>
                </div>
            <div class="col-6 col-md-2 col-sm-6 col-lg-2" id="items">
                <a href="modulos/licenciasPc/licenciamiento.pdf">
                    <img src="media/licenciamiento.gif" alt="" width=30%> <?php echo "<br>".$app7;?>
                </a>
            </div>
            <div class="col-6 col-md-2 col-sm-6 col-lg-2" id="items">
                <a href="#">
                    <img src="media/pcs.gif" alt="" width=30%> <?php echo "<br>".$app8;?>
                </a>
            </div>
            <div class="col-6 col-md-2 col-sm-6 col-lg-2" id="items">
                <a href="modulos/tarifas/tarifas.jpg">
                    <img src="media/tarifas.gif" alt="" width=30%> <?php echo "<br>".$app9;?>
                </a>
            </div>
            <div class="col-6 col-md-2 col-sm-6 col-lg-2" id="items">
                <a href="#">
                    <img src="media/planored.gif" alt="" width=30%> <?php echo "<br>".$app10;?>
                </a>    
            </div>
            <div class="col-6 col-md-2 col-sm-6 col-lg-2" id="items">
                <a href="#">
                    <img src="media/equiposrtm.gif" alt="" width=30%> <?php echo "<br>".$app11;?>
                </a>
            </div>
            <div class="col-6 col-md-2 col-sm-6 col-lg-2" id="items">
                <a href="#">
                    <img src="media/preoperacionales.gif" alt="" width=30%>  <?php echo "<br>".$app12;?>
                </a>
            </div>
            <div class="col-6 col-md-2 col-sm-6 col-lg-2" id="items">
                <a href="/onac/modulos/chat">
                    <img src="media/dt.gif" alt="" width=30%>  <?php echo "<br>".$app13;?>
                </a>
            </div> 
            <div class="col-6 col-md-2 col-sm-6 col-lg-2" id="items">
                <a href="modulos/presion/tabla.pdf">
                    <img src="media/presionllantas.gif" alt="" width=30%> <?php echo "<br>".$app14;?>
                </a>          
            </div>
            <div class="col-6 col-md-2 col-sm-6 col-lg-2" id="items">
                <a href="#">
                    <img src="media/supervisiones.gif" alt="" width=30%>  <?php echo "<br>".$app15;?>
                </a>
            </div>
            <div class="col-6 col-md-2 col-sm-6 col-lg-2" id="items">
                <a href="modulos/informes/mantenimiento">
                    <img src="media/supervisiones.gif" alt="" width=30%>  <?php echo "<br>".$app16;?>
                </a>
            </div>
            <div class="col-6 col-md-2 col-sm-6 col-lg-2" id="items">
                <a href="#">
                    <img src="media/supervisiones.gif" alt="" width=30%>  <?php echo "<br>".$app17;?>
                </a>
            </div>
            <div class="col-6 col-md-2 col-sm-6 col-lg-2" id="items">
                <a href="#">
                    <img src="media/supervisiones.gif" alt="" width=30%>  <?php echo "<br>".$app18;?>
                </a>
            </div>
            <div class="col-6 col-md-2 col-sm-6 col-lg-2" id="items">
                <a href="modulos/memorandos">
                    <img src="media/supervisiones.gif" alt="" width=30%>  <?php echo "<br>".$app19;?>
                </a>
            </div>
            <div class="col-6 col-md-2 col-sm-6 col-lg-2" id="items">
                <a href="#">
                    <img src="media/supervisiones.gif" alt="" width=30%>  <?php echo "<br>".$app20;?>
                </a>
            </div>  
            <div class="col-6 col-md-2 col-sm-6 col-lg-2" id="items">
                <a href="#">
                    <img src="media/supervisiones.gif" alt="" width=30%>  <?php echo "<br>".$app21;?>
                </a>        
            </div>
            <div class="col-6 col-md-2 col-sm-6 col-lg-2" id="items">
                <a href="#">
                    <img src="media/supervisiones.gif" alt="" width=30%>  <?php echo "<br>".$app22;?>
                </a>
            </div>
            <div class="col-6 col-md-2 col-sm-6 col-lg-2" id="items">
                <a href="#">
                    <img src="media/supervisiones.gif" alt="" width=30%>  <?php echo "<br>".$app23;?>
                </a>
            </div> 
            <div class="col-6 col-md-2 col-sm-6 col-lg-2" id="items">
                <a href="modulos/reglamentoInterno/reglamentoInterno.pdf">
                    <img src="media/supervisiones.gif" alt="" width=30%>  <?php echo "<br>".$app24;?>
                </a>
            </div>  
            <div class="col-6 col-md-2 col-sm-6 col-lg-2" id="items">
                <a href="#">
                    <img src="media/supervisiones.gif" alt="" width=30%>  <?php echo "<br>".$app25;?>
                </a>
            </div>  
            <div class="col-6 col-md-2 col-sm-6 col-lg-2" id="items">
                <a href="modulos/auditorias/onac">
                    <img src="media/supervisiones.gif" alt="" width=30%>  <?php echo "<br>".$app26;?>
                </a>
            </div>  
            <div class="col-6 col-md-2 col-sm-6 col-lg-2" id="items">
                <a href="#">
                    <img src="media/supervisiones.gif" alt="" width=30%>  <?php echo "<br>".$app27;?>
                </a>
            </div>  
            <div class="col-6 col-md-2 col-sm-6 col-lg-2" id="items">
                <a href="modulos/licAmbiental/Seguimiento renovacion 27042022.pdf">
                    <img src="media/supervisiones.gif" alt="" width=30%>  <?php echo "<br>".$app28;?>
                </a>
            </div>
            <div class="col-6 col-md-2 col-sm-6 col-lg-2" id="items">
                <a href="modulos/cer/">
                    <img src="media/supervisiones.gif" alt="" width=30%>  <?php echo "<br>".$app29;?>
                </a>
            </div> 
            <div class="col-6 col-md-2 col-sm-6 col-lg-2" id="items">
                <a href="#">
                    <img src="media/supervisiones.gif" alt="" width=30%>  <?php echo "<br>".$app30;?>
                </a>
            </div> 
            <div class="col-6 col-md-2 col-sm-6 col-lg-2" id="items">
                <a href="modulos/comiteConvivencia">
                    <img src="media/supervisiones.gif" alt="" width=30%>  <?php echo "<br>".$app31;?>
                </a>
            </div> 
            <div class="col-6 col-md-2 col-sm-6 col-lg-2" id="items">
                <a href="modulos/comiteCopasst/ACTA COMITE COPASST.pdf">
                    <img src="media/supervisiones.gif" alt="" width=30%>  <?php echo "<br>".$app32;?>
                </a>
            </div> 
            <div class="col-6 col-md-2 col-sm-6 col-lg-2" id="items">
                <a href="modulos/contactos/index.html">
                    <img src="media/supervisiones.gif" alt="" width=30%>  <?php echo "<br>".$app33;?>
                </a>
            </div> 
            <div class="col-6 col-md-2 col-sm-6 col-lg-2" id="items">
                <a href="#">
                    <img src="media/supervisiones.gif" alt="" width=30%>  <?php echo "<br>".$app34;?>
                </a>
            </div>
            <div class="col-6 col-md-2 col-sm-6 col-lg-2" id="items">
                <a href="#">
                    <img src="media/supervisiones.gif" alt="" width=30%>  <?php echo "<br>".$app35;?>
                </a>
            </div> 
            <div class="col-6 col-md-2 col-sm-6 col-lg-2" id="items">
                <a href="modulos/medirCintas">
                    <img src="media/supervisiones.gif" alt="" width=30%>  <?php echo "<br>".$app36;?>
                </a>
            </div> 
            <div class="col-6 col-md-2 col-sm-6 col-lg-2" id="items">
                <a href="modulos/planoCitb/CDA TOTAL-Modelo.pdf V2.pdf">
                    <img src="media/supervisiones.gif" alt="" width=30%>  <?php echo "<br>".$app37;?>
                </a>
            </div>
            <div class="col-6 col-md-2 col-sm-6 col-lg-2" id="items">
                <a href="modulos/directrices">
                    <img src="media/supervisiones.gif" alt="" width=30%>  <?php echo "<br>".$app38;?>
                </a>
            </div>
            <div class="col-6 col-md-2 col-sm-6 col-lg-2" id="items">
                <a href="modulos/reAcreditacion/index.html">
                    <img src="media/logoOnac.jpg" alt="" width=30%>  <?php echo "<br>".$app39;?>
                </a>
            </div>
            <div class="col-6 col-md-2 col-sm-6 col-lg-2" id="items">
                <a href="modulos/inventario/index.html">
                    <img src="media/supervisiones.gif" alt="" width=30%>  <?php echo "<br>".$app40;?>
                </a>
            </div>                    
        </div> <!-- cierre div fila 3 -->
    </div> <!-- cierre div container -->
   <footer>
        <div    >  
            <a href="<?php  echo $website;?>" target="_blank"><?php  echo $website;?></a>   
        </div>
   </footer>
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