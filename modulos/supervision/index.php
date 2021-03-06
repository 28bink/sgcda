<?php 	date_default_timezone_set('America/Bogota');
 
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>supervisiones</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous">
  </head>
  <body><br>
    <center>
      <table style="width: 80%" border="1" bgcolor="#E2E2E2">
        <tbody>
          <tr>
            <td colspan="2"><b>Código: RT-R-031</b></td>
            <td rowspan="2" style="width: 326.583px;">
              <center>
              <b>SUPERVISION TECNICA AL
                PROCESO DE REVISION TECNICO MECANICA Y EMISIONES CONTAMINANTES
                (Pesado - Liviano)</b>
                </center>
                <br>
            </td>
            <td rowspan="2" style="width: 158.917px;"> <img src="img/logo_cedas.jpeg"
                width="100%"> </td>
          </tr>
          <tr>
            <td style="width: 155.667px;"><b>Fecha: 2018-20-11</b></td>
            <td style="width: 104.833px;"><b>Versión: 3</b></td>
          </tr>
        </tbody>
      </table>
      <form action="ctld/control.php" method="POST">
      <table style="width: 80%" border="1">
        <tbody>
          <tr>
            <td><b>CALIFICACION</b></td>
            <td><b>CRITERIOS DE CALIFICACION</b></td>
          </tr>
          <tr>
            <td>
              <center><b>0</b></center>
            </td>
            <td>No aplica<br>
            </td>
          </tr>
          <tr>
            <td>
              <center><b>1</b></center>
            </td>
            <td>La actividad no se ejecuta de acuerdo a los requisitos
              normativos aplicables&nbsp;&nbsp; y procedimientos internos de la
              organización.<br>
            </td>
          </tr>
      <!--
          <tr>
            <td style="width: 77px;">
              <center><b>3</b></center>
            </td>
            <td style="width: 681px;">La actividad es realizada de acuerdo a los
              requisitos normativos aplicables&nbsp; y procedimientos internos
              de la organización<br>
            </td>
          </tr>
      -->
          <tr>
            <td>
              <center><b>5</b></center>
            </td>
            <td>La actividad es realizada de acuerdo a los requisitos normativos
              aplicables&nbsp; y procedimientos internos de
              la organización.<br>
            </td>
          </tr>
        </tbody>
      </table>
      <table style="width: 80%" border="1">
        <tbody>
          <tr>
            <td><b>Fecha:</b>
              <?php echo date('Y - m - d'); 
                $v1_sv_datos= date('d - m - Y');  
              ?>
            </td>
            <td><b>Hora:</b>
              <?php echo date(' g:i a');
                    $v2i_sv_datos= date(' g:i a'); 
              ?></td>
          </tr>
          <tr>
            <td><b>Director Técnico:</b>
              <select name="val3_form" required>
                <option></option>
                <option value="SAMUEL RICARDO ALMANZA">SAMUEL RICARDO ALMANZA</option>
                <option value="GEOVANNI PEDRAZA">GEOVANNI PEDRAZA</option>
              </select>
            </td>
            <td><b>Técnico y/o Recepcionista:</b>
              <select name="val4_form" required>
                <option></option>
                <option value="ALEJANDRO MERCHAN">ALEJANDRO MERCHAN</option>
                <option value="NELSON BARRAGAN">NELSON BARRAGAN</option>
                <option value="IVAN ACEVEDO">IVAN ACEVEDO</option>
                <option value="ALEXANDER TORRES">ALEXANDER TORRES</option>
                <option value="ALEXIS LOPEZ">ALEXIS LOPEZ</option>
                <option value="DIEGO ALMANZA">DIEGO ALMANZA</option>
                <option value="FABIAN ORTIZ">FABIAN ORTIZ</option>
                <option value="JUAN PABLO MESA">JUAN PABLO MESA</option>
              </select>
            </td>
          </tr>
          <tr>
            <td><b>Firma:</b></td>
            <td><b>Firma:</b></td>
          </tr>
          <tr>
            <td><b>Placa:</b> <input name="val7_form" type="text" required> </td>
            <td><b>Tipo</b>
              <select name="val8_form" required>
                <option></option>
                <option value="LIVIANO">LIVIANO</option>
                <option value="PESADO">PESADO</option>
              </select>
              <b>Categoría</b>
              <select name="val9_form" required>
                <option></option>
                <option value="DOBLE TROQUE">DOBLE TROQUE</option>
                <option value="VOLCO">VOLCO</option>
                <option value="CUATRO MANOS">CUATRO MANOS</option>
                <option value="TRACTO CAMION">TRACTO CAMION</option>
                <option value="BUS">BUS</option>
                <option value="AEROVAN">AEROVAN</option>
                <option value="MIXER">MIXER</option>
                <option value="AUTO BOMBA">AUTO BOMBA</option>
                <option value="CAMION GRUA PLATAFORMA">CAMION GRUA PLATAFORMA</option>
                <option value="CAMION DE ENSEÑANZA">CAMION DE ENSEÑANZA</option>
                <option value="CARROS DE BOMBEROS">CARROS DE BOMBEROS</option>
                <option value="AMBULANCIA_LIVIANOS">AMBULANCIA LIVIANA</option>
                <option value="AUTOMOVIL">AUTOMOVIL</option>
                <option value="CAMIONETA">CAMIONETA</option>
                <option value="CAMPERO">CAMPERO</option>
                <option value="AMBULANCIA_PESADA">AMBULANCIA PESADA</option>
                <option value="TAXI">TAXI</option>
                <option value="ENSEÑANZA">ENSEÑANZA</option>
                <option value="ESCOLAR">ESCOLAR</option>
              </select>
            </td>
          </tr>
          <tr>
            <td colspan="2"><b>Observaciones:</b></td>
          </tr>
          <tr>
            <td colspan="2">
              <center> <textarea rows="4" cols="100" name="val10_form"></textarea> </center>
            </td>
          </tr>
        </tbody>
      </table>
      <table style="width: 80%;" border="1">
        <tbody>
          <tr>
            <td colspan="3" bgcolor="#E2E2E2">
              <center><b>CRITERIOS</b></center>
            </td>
            <td bgcolor="E2E2E2"><b>Calificación</b></td>
          </tr>
          <tr>
            <td rowspan="8" bgcolor="E2E2E2">
              <center> <b>PRE - <br>
                  INSPECCION</b> </center>
            </td>
            <td>Uso y manejo del vehiculo como propiedad del cliente </td>
            <td colspan="2">
              <center>
                <select name="val1">
                  <option value="0"></option>
                  <option value="0">0</option>
                  <option value="1">1</option>
           <!--   <!--   <option value="3">3</option> --> -->
                  <option value="5">5</option>
                </select>
              </center>
            </td>
          </tr>
          <tr>
            <td>Uso adecuado de elementos de protección personal (seguridad)</td>
            <td colspan="2">
              <center>
                <select name="val2">
                  <option value="0"></option>
                  <option value="0">0</option>
                  <option value="1">1</option>
           <!--   <!--   <option value="3">3</option> --> -->
                  <option value="5">5</option>
                </select>
              </center>
            </td>
          </tr>
          <tr>
            <td>5. El vehículo cumple con las condiciones de PRE-REVISION -
              Numeral 5 de la NTC 5375:2012 (Vacio, sin tapacubos, limpio y
              alarma desactivada)</td>
            <td colspan="2">
              <center>
                <select name="val3">
                  <option value="0"></option>
                  <option value="0">0</option>
                  <option value="1">1</option>
           <!--   <!--   <option value="3">3</option> --> -->
                  <option value="5">5</option>
                </select>
              </center>
            </td>
          </tr>
          <tr>
            <td>Verifica presión de inflado de llantas según instructivo</td>
            <td colspan="2">
              <center>
                <select name="val4">
                  <option value="0"></option>
                  <option value="0">0</option>
                  <option value="1">1</option>
           <!--   <!--   <option value="3">3</option> --> -->
                  <option value="5">5</option>
                </select>
              </center>
            </td>
          </tr>
          <tr>
            <td>Verifica el ingreso de informacion referente del vehiculo</td>
            <td colspan="2">
              <center>
                <select name="val5">
                  <option value="0"></option>
                  <option value="0">0</option>
                  <option value="1">1</option>
           <!--   <!--   <option value="3">3</option> --> -->
                  <option value="5">5</option>
                </select>
              </center>
            </td>
          </tr>
          <tr>
            <td>Suministra toda la información al cliente respecto a la RTM y EC</td>
            <td colspan="2">
              <center>
                <select name="val6">
                  <option value="0"></option>
                  <option value="0">0</option>
                  <option value="1">1</option>
           <!--   <option value="3">3</option> -->
                  <option value="5">5</option>
                </select>
              </center>
            </td>
          </tr>
          <tr>
            <td>El vehículo es trasladado de forma adecuada al área de REVISION</td>
            <td colspan="2">
              <center>
                <select name="val7">
                  <option value="0"></option>
                  <option value="0">0</option>
                  <option value="1">1</option>
           <!--   <option value="3">3</option> -->
                  <option value="5">5</option>
                </select>
              </center>
            </td>
          </tr>
          <tr>
            <td>Utiliza de forma adecuada la Tablet </td>
            <td colspan="2">
               <center>
              <select name="val8">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
              </center>
            </td>
          </tr>
          <tr>
            <td rowspan="25" bgcolor="#E2E2E2">
              <center> <b>V<br>
                  I<br>
                  S<br>
                  U<br>
                  A<br>
                  L</b></center>
            </td>
          </tr>
          <tr>
          </tr>
          <tr>
            <td>Ubicación adecuada del vehículo en el foso (Centrado y acorde a
              las líneas guía)<br>
            </td>
            <td colspan="2">
               <center>
              <select name="val9">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
              </center>
            </td>
          </tr>
          <tr>
            <td>NTC 5385 4.16.1.6..Utilización correcta y oportuna de la TABLET
              (Registro Inmediato de los defectos y fotos)<br>
            </td>
            <td colspan="2">
               <center>
              <select name="val10">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>Utilización de la linterna. (Uso)</td>
            <td colspan="3">
               <center>
              <select name="val11">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>Movimientos cortos y repetidos del detector de holguras
              (electro-bomba) </td>
            <td colspan="3">
               <center>
              <select name="val12">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>Uso y manejo adecuado del profundímetro (puesta a cero,
              ubicación y registro ) </td>
            <td colspan="3">
               <center>
              <select name="val13">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>Uso y manejo del vehículo como propiedad del cliente </td>
            <td colspan="3">
               <center>
              <select name="val14">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>6.1.1 Carrocería y Chasís </td>
            <td colspan="3">
               <center>
              <select name="val15">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>6.1.2 Limpiaparabrisas </td>
            <td colspan="3">
               <center>
              <select name="val16">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>6.1.3 peldaños </td>
            <td colspan="3">
               <center>
              <select name="val17">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>6.1.4 Retrovisores </td>
            <td colspan="3">
               <center>
              <select name="val18">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>6.1.5. Soporte Exterior de La Rueda de Repuesto</td>
            <td colspan="3">
               <center>
              <select name="val19">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>6.1.6 Vidrios </td>
            <td colspan="3">
               <center>
              <select name="val20">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>6.1.7 Dispositivos de retención de la carga</td>
            <td colspan="3">
               <center>
              <select name="val21">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>6.2.1 Habitáculo del conductor y pasajeros </td>
            <td colspan="3">
               <center>
              <select name="val22">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>6.2.2 Cinturones de seguridad y sus anclajes </td>
            <td colspan="3">
               <center>
              <select name="val23">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>6.2.3 Dispositivo de control de velocidad </td>
            <td colspan="3">
               <center>
              <select name="val24">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>6.3.1 Dispositivos sonoros no permitidos </td>
            <td colspan="3">
               <center>
              <select name="val25">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>6.3.2 Bocina, pito o dispositivo acústico </td>
            <td colspan="3">
               <center>
              <select name="val26">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>6.4.1 Alumbrado y señalización (mediante inspección sensorial se
              busca detectar)
            </td>
            <td colspan="3">
               <center>
              <select name="val27">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>6.5. Salida de Emergencia, (Res. 5666 del 2003) </td>
            <td colspan="3">
               <center>
              <select name="val28">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>6.6. Emisiones Contaminantes (NTC 4231 Diésel), (NTC 4983
              Gasolina) Y (Res. 910 del 2008) </td>
            <td colspan="3">
               <center>
              <select name="val29">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>6.6.3. Tubo de descarga horizontal (superior a 3 ton ó 19
              pasajeros),
              Debe 3 metros del suelo en modelos anterior 2001 </td>
            <td colspan="3">
               <center>
              <select name="val30">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>6.6.4 Roturas o perforaciones en el sistema de escape </td>
            <td colspan="3">
               <center>
              <select name="val31">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td bgcolor="e2e2e2"><br>
            </td>
            <td colspan="4" bgcolor="#E2E2E2"> <b>6.7. Sistema de Frenos</b> </td>
            <td><br>
            </td>
          </tr>
          <tr>
            <td rowspan="12" bgcolor="#E2E2E2">
              <center><b> F<br>
                  R<br>
                  E<br>
                  N<br>
                  O<br>
                  S<br>
                  <br>
                  V<br>
                  I<br>
                  S<br>
                  U<br>
                  A<br>
                  L<br>
                </b> </center>
            </td>
            <td>6.7.1. Pedal<br>
            </td>
            <td colspan="3">
               <center>
              <select name="val32">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>6.7.2. Guayas<br>
            </td>
            <td colspan="3">
               <center>
              <select name="val33">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>6.7.3. Bomba de vacío (Booster) o compresor y anclajes - 
              (Aplica para vehículos con circuito neumático para el sistema de
              frenado).
            </td>
            <td colspan="3">
               <center>
              <select name="val34">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>6.7.4. Válvula de regulación del freno de estacionamiento
              (parqueo o de mano) - 
              Aplica para vehículos con circuito neumático para el sistema de
              frenado).
            </td>
            <td colspan="3">
               <center>
              <select name="val35">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>6.7.5. Válvulas de frenado - 
              (Aplica para vehículos con circuito neumático para el sistema de
              frenado).
            </td>
            <td colspan="3">
               <center>
              <select name="val36">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>6.7.6.Tanques o depósitos de presión - 
              (Aplica para vehículos con circuito neumático para el sistema de
              frenado)
            </td>
            <td colspan="3">
               <center>
              <select name="val37">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>6.7.7. Acoplamiento de los frenos de la unidad tractora<br>
            </td>
            <td colspan="3">
               <center>
              <select name="val38">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>6.7.8. Servofreno (Booster). Cilindro de mando (sistemas
              hidráulicos)
            </td>
            <td colspan="3">
               <center>
              <select name="val39">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>6.7.9. Tubos y mangueras de frenos
            </td>
            <td colspan="3">
               <center>
              <select name="val40">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>6.7.10. Cilindros del sistema de frenado
            </td>
            <td colspan="3">
               <center>
              <select name="val41">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>6.7.11. Válvula que permite o limite el frenado y válvula
              censora o compensadora de carga o la que haga sus veces (de estar
              presente)
            </td>
            <td colspan="3">
               <center>
              <select name="val42">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>6.7.12. Condiciones a medir (presión de llantas, labrado,
              antibloqueo, control de tracción, tracción integral mecánica.<br>
            </td>
            <td colspan="3">
               <center>
              <select name="val43">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td rowspan="11" bgcolor="E2E2E2">
              <center> <b> S<br>
                  U<br>
                  S<br>
                  P<br>
                  E<br>
                  N<br>
                  S<br>
                  I<br>
                  O<br>
                  N<br>
                  <br>
                  V<br>
                  I<br>
                  S<br>
                  U<br>
                  A<br>
                  L </b> </center>
              <br>
            </td>
            <td colspan="3" bgcolor="E2E2E2"> <br>
            </td>
          </tr>
          <tr>
            <td>6.8.1. Mediante inspección sensorial y detector de holguras
            </td>
            <td colspan="3">
               <center>
              <select name="val44">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>6.10.1. Dirección<br>
            </td>
            <td colspan="3">
               <center>
              <select name="val45">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>6.10.2. Uso de equipo de desviación Lateral<br>
            </td>
            <td colspan="3">
               <center>
              <select name="val46">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>6.11 Rines y Llantas<br>
            </td>
            <td colspan="3">
               <center>
              <select name="val47">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>6.12. Motor<br>
            </td>
            <td colspan="3">
               <center>
              <select name="val48">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>6.13. Sistema de Combustible<br>
            </td>
            <td colspan="3">
               <center>
              <select name="val49">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>6.14. Transmisión<br>
            </td>
            <td colspan="3">
               <center>
              <select name="val50">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>Placas En vehículos de servicio público (resolución 2999 del
              2003)<br>
            </td>
            <td colspan="3">
               <center>
              <select name="val51">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>Uso obligatorio de Cintas Retrarreflectivas (Resolución 3246 del
              2018)<br>
            </td>
            <td colspan="3">
               <center>
              <select name="val52">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>Requisitos vehículos de Enseñanza NTC 5375 ANEXO a (Res 3245 del
              2009) </td>
            <td colspan="3">
               <center>
              <select name="val53">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td colspan="4" bgcolor="#E2E2E2"><br>
            </td>
          </tr>
          <tr>
            <td rowspan="24" bgcolor="#E2E2E2">
              <center> <b>P<br>
                  R<br>
                  U<br>
                  E<br>
                  B<br>
                  A<br>
                  <br>
                  <br>
                  D<br>
                  E<br>
                  <br>
                  <br>
                  F<br>
                  R<br>
                  E<br>
                  N<br>
                  O<br>
                  S<br>
                </b> </center>
            </td>
            <td>Alinea correctamente el vehículo usando las líneas guía<br>
            </td>
            <td colspan="3">
               <center>
              <select name="val54">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>Detiene totalmente el vehículo al borde del plato de alineación<br>
            </td>
            <td colspan="3">
               <center>
              <select name="val55">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>Inicia y configura el aplicativo de software de manera adecuada<br>
            </td>
            <td colspan="3">
               <center>
              <select name="val56">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>Pasa sobre el plato de alineación a velocidad no superior a
              2KM/h <br>
            </td>
            <td colspan="3">
               <center>
              <select name="val57">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>Suelta el volante durante el paso sobre el plato de alineación<br>
            </td>
            <td colspan="3">
               <center>
              <select name="val58">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>Graba y envía la prueba de alineación mediante el adecuado uso
              del control remoto<br>
            </td>
            <td colspan="3">
               <center>
              <select name="val59">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>Verifica que la presión de llantas sea adecuada para la prueba<br>
            </td>
            <td colspan="3">
               <center>
              <select name="val60">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>Verificar que el labrado cumple para iniciar la prueba de frenos
              (1.6.mm hasta 3.5 ton y 2mm después)<br>
            </td>
            <td colspan="3">
               <center>
              <select name="val61">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>Verifica que no exista carga en el frenómetro al dar inicio al
              programa<br>
            </td>
            <td colspan="3">
               <center>
              <select name="val62">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>Verifica que los frenos estén secos<br>
            </td>
            <td colspan="3">
               <center>
              <select name="val63">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>Inicia y configura el aplicativo de software de manera adecuada<br>
            </td>
            <td colspan="3">
               <center>
              <select name="val64">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>Realiza la prueba de frenos con el motor encendido para
              garantizar que el pulmón del servofreno esté cargado.<br>
            </td>
            <td colspan="3">
               <center>
              <select name="val65">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>Ingresa al frenómetro de manera controlada, protegiendo la
              propiedad del cliente y el equipo<br>
            </td>
            <td colspan="3">
               <center>
              <select name="val66">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>Ubica el eje delantero del vehículo centrado en los rodillos<br>
            </td>
            <td colspan="3">
               <center>
              <select name="val67">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>Verifica que la presión del aire en el manómetro del vehículo
              (mínimo 90 PSI). Para el caso de los frenos de aire.<br>
            </td>
            <td colspan="3">
               <center>
              <select name="val68">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>La pisada de frenado es lenta, continua y hasta que el pedal
              llegue al final de su recorrido<br>
            </td>
            <td colspan="3">
               <center>
              <select name="val69">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
         <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>Graba y envía la prueba del eje delantero de manera correcta<br>
            </td>
            <td colspan="3">
               <center>
              <select name="val70">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>Ingresa el segundo eje del vehículo al frenómetro de manera
              controlada, protegiendo la propiedad del cliente y el equipo<br>
            </td>
            <td colspan="3">
              <center>
              <select name="val71">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>Ubica el eje trasero del vehículo centrado en los rodillos<br>
            </td>
            <td colspan="3">
              <center>
              <select name="val72">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>La pisada de frenado es lenta, continua y hasta que el pedal
              llegue&nbsp; al final de su recorrido<br>
            </td>
            <td colspan="3">
              <center>
              <select name="val73">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>Graba y envía la prueba del eje delantero de manera correcta<br>
            </td>
            <td colspan="3">
               <center>
              <select name="val74">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>Realiza la prueba del freno de parqueo, activando el freno de
              parqueo muy lentamente y aumentando la fuerza aplicada hasta que
              la palanca ó el pedal lleguen al final de su recorrido<br>
            </td>
            <td colspan="3">
               <center>
              <select name="val75">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>Nota: Cuando se trata de un vehículo con tracción integral
              permanente 4WD, el técnico configura y utiliza el equipo de manera
              adecuada.<br>
            </td>
            <td colspan="3">
               <center>
              <select name="val76">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>Grabas y envía toda la prueba de manera correcta<br>
            </td>
            <td colspan="3">
               <center>
              <select name="val77">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td rowspan="12" bgcolor="#E2E2E2">
              <center> <b> P<br>
                  R<br>
                  U<br>
                  E<br>
                  B<br>
                  A<br>
                  <br>
                  <br>
                  D<br>
                  E<br>
                  <br>
                  <br>
                  L<br>
                  U<br>
                  C<br>
                  E<br>
                  S<br>
                </b> </center>
            </td>
            <td colspan="4" bgcolor="#E2E2E2"><b>6.4.2. LUXOMETRO</b></td>
          </tr>
          <tr>
            <td>Verifica que los faros se encuentren limpios y secos previo
              inicio de la prueba </td>
            <td colspan="3">
              <center>
              <select name="val78">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>Ubica el vehículo de forma adecuada paralela y
              perpendicularmente utilizando las líneas guía.</td>
            <td colspan="3">
              <center>
              <select name="val79">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>Ubica el luxómetro a la distancia establecida por el fabricante
              utilizando el flexómetro de manera correcta </td>
            <td colspan="3">
              <center>
              <select name="val80">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>Verifica que el luxómetro esté nivelado mediante la observación
              del nivel.</td>
            <td colspan="3">
              <center>
              <select name="val81">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>Verifica la simetría utilizando el haz de luz roja y hace
              correctamente los ajustes necesarios &nbsp;&nbsp;&nbsp; </td>
            <td colspan="3">
              <center>
              <select name="val82">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>Hace uso correcto y configura adecuadamente el software para la
              realización de la prueba </td>
            <td colspan="3">
              <center>
              <select name="val83">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>Incluye de ser necesario la cantidad de luces adicionales con
              que cuente el vehículo que pueden estar encendidas al mismo tiempo
              y que pueden afectar la sumatoria total de luces</td>
            <td colspan="3">
              <center>
              <select name="val84">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>Verifica que el motor esté encendido, y el vehículo esté en
              neutro y con el freno de parqueo activado </td>
            <td colspan="3">
              <center>
              <select name="val85">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
               </center>
            </td>
          </tr>
          <tr>
            <td>Ubica correctamente la luz láser en el centro de la farola y
              centro del bombillo </td>
            <td colspan="3">
              <center>
              <select name="val86">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
            </center>
            </td>
          </tr>
          <tr>
            <td>Realiza la prueba de luces de acuerdo a las instrucciones del
              aplicativo</td>
            <td colspan="3">
              <center>
              <select name="val87">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
            </center>
            </td>
          </tr>
          <tr>
            <td>Registra los resultados de la prueba adecuadamente <br>
            </td>
            <td colspan="3">
              <center>
              <select name="val88">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
            </center>
            </td>
          </tr>
          <tr>
            <td rowspan="7" bgcolor="#E2E2E2">
              <center> <b>P<br>
                  R<br>
                  U<br>
                  E<br>
                  B<br>
                  A<br>
                  <br>
                  S<br>
                  U<br>
                  S<br>
                  P<br>
                  E<br>
                  N<br>
                  S<br>
                  I<br>
                  O<br>
                  N </b> </center>
              <br>
            </td>
            <td colspan="4" bgcolor="#E2E2E2"> <br>
            </td>
          </tr>
          <tr>
            <td>Verifica que el equipo no presente carga previa realización de
              la prueba.<br>
            </td>
            <td colspan="3">
              <center>
              <select name="val89">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
              </center>
            </td>
          </tr>
          <tr>
            <td>Alinea el vehículo paralelamente a las líneas guía<br>
            </td>
            <td colspan="3">
              <center>
              <select name="val90">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
              </center>
            </td>
          </tr>
          <tr>
            <td>Realiza correcto ingreso y configuración del aplicativo para
              realización de la prueba. <br>
            </td>
            <td colspan="3">
              <center>
              <select name="val91">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
              </center>
            </td>
          </tr>
          <tr>
            <td>Ubica el vehículo sobre las placas de manera correcta&nbsp; <br>
            </td>
            <td colspan="3">
              <center>
              <select name="val92">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
              </center>
            </td>
          </tr>
          <tr>
            <td>Sigue las instrucciones de ejecución de la prueba del software<br>
            </td>
            <td colspan="3">
              <center>
              <select name="val93">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
            </center>
            </td>
          </tr>
          <tr>
            <td>Registra y envía los resultados de la prueba de manera adecuada
              en el software<br>
            </td>
            <td colspan="3">
              <center>
              <select name="val94">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
            </center>
            </td>
          </tr>
          <tr>
            <td rowspan="13" bgcolor="#E2E2E2">
              <center> <b> G<br>
                  A<br>
                  S<br>
                  E<br>
                  S<br>
                  <br>
                  N<br>
                  T<br>
                  C<br>
                  <br>
                  4<br>
                  9<br>
                  8<br>
                  3<br>
                </b> </center>
            </td>
            <td colspan="4" bgcolor="#E2E2E2"> <br>
            </td>
          </tr>
          <tr>
            <td>Realiza limpieza del equipo de manera adecuada </td>
            <td colspan="3">
              <center>
              <select name="val95">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
            </center>
            </td>
          </tr>
          <tr>
            <td>Ingresa al aplicativo y verifica en el mismo el estado de puesta
              a cero, test de fugas y calibración </td>
            <td colspan="3">
              <center>
              <select name="val96">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
            </center>
            </td>
          </tr>
          <tr>
            <td>Verifica que el termo higrómetro esté en línea y se verifiquen
              las condiciones ambientales (temperatura 5 C° Y 55C°) y humedad
              Relativa (30% y 90%) </td>
            <td colspan="3">
              <center>
              <select name="val97">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
            </center>
            </td>
          </tr>
          <tr>
            <td>Ejecuta auto-cero del equipo verificando que todo el conjunto de
              mangueras, trampa y sonda toma de muestra se encuentren
              debidamente conectados </td>
            <td colspan="3">
              <center>
              <select name="val98">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
            </center>
            </td>
          </tr>
          <tr>
            <td>Ejecuta el test de fugas cuando es necesario de acuerdo a las
              instrucciones<br>
            </td>
            <td colspan="3">
              <center>
              <select name="val99">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
            </center>
            </td>
          </tr>
          <tr>
            <td>Realiza correctamente la calibración con gas asegurando que se
              utilicen las pipetas registradas y siguiendo las instrucciones del
              aplicativo y demás contenidas en procedimientos<br>
            </td>
            <td colspan="3">
              <center>
              <select name="val100">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
            </center>
            </td>
          </tr>
          <tr>
            <td>Verifica el estado de sondas y filtros<br>
            </td>
            <td colspan="3">
              <center>
              <select name="val101">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
            </center>
            </td>
          </tr>
          <tr>
            <td>Posiciona el vehículo de forma adecuada, en neutro y con freno
              de parqueo<br>
            </td>
            <td colspan="3">
              <center>
              <select name="val102">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
            </center>
            </td>
          </tr>
          <tr>
            <td>Enciende las luces del vehículo y verifica que ningún otro
              elemento o equipo del vehículo que consuma energía esté encendido.<br>
            </td>
            <td colspan="3">
              <center>
              <select name="val103">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
            </center>
            </td>
          </tr>
          <tr>
            <td>Una vez “capturada” la placa del vehículo, realiza una
              inspección previa del vehículo y mediante la lista de chequeo
              desplegada verifica las condiciones de realización de la prueba.<br>
            </td>
            <td colspan="3">
              <center>
              <select name="val104">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
            </center>
            </td>
          </tr>
          <tr>
            <td>Ubica de forma correcta los sensores de relanti rpm (400
              r/min-1100r/min (+/-150) en crucero a 2500 rpm +/-250)&nbsp; y
              temperatura mínima (45 C° bloque ó 60 C° aceite en puntos
              adecuados del vehículo)<br>
            </td>
            <td colspan="3">
              <center>
              <select name="val105">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
            </center>
              <br>
            </td>
          </tr>
          <tr>
            <td>Realiza de manera correcta la prueba de gases siguiendo las
              instrucciones del software </td>
            <td colspan="3">
              <center>
              <select name="val106">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
            </center>
            </td>
          </tr>
          <tr>
            <td rowspan="15" bgcolor="E2E2E2">
              <center> <b> O<br>
                  P<br>
                  A<br>
                  C<br>
                  I<br>
                  D<br>
                  A<br>
                  D<br>
                  <br>
                  N<br>
                  T<br>
                  C<br>
                  <br>
                  4<br>
                  2<br>
                  3<br>
                  1 </b> </center>
            </td>
            <td>Verifica que el termo higrómetro esté en línea y se verifiquen
              las condiciones ambientales (temperatura 5 C° y 55C°) y humedad
              Relativa menor a 90%) </td>
            <td colspan="3">
              <center>
              <select name="val107">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
            </center>
            </td>
          </tr>
          <tr>
            <td>Realiza limpieza del equipo de manera adecuada </td>
            <td colspan="3">
              <center>
              <select name="val108">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
            </center>
            </td>
          </tr>
          <tr>
            <td>Verifica precalentamiento del opacímetro </td>
            <td colspan="3">
              <center>
              <select name="val109">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
            </center>
            </td>
          </tr>
          <tr>
            <td>Ubica de forma correcta los sensores de rpm y temperatura 50C°
              optima, si menor no debe variar 10C°inicio y fin en (puntos
              adecuados del vehículo) </td>
            <td colspan="3">
              <center>
              <select name="val110">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
            </center>
            </td>
          </tr>
          <tr>
            <td>Verifica que el termo higrómetro esté en línea y se verifiquen
              las condiciones ambientales </td>
            <td colspan="3">
              <center>
              <select name="val111">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
            </center>
            </td>
          </tr>
          <tr>
            <td>Enciende las luces del vehículo y verifica que ningún otro
              elemento o equipo del vehículo que consuma energía esté encendido.
              <br>
            </td>
            <td colspan="3">
              <center>
              <select name="val112">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
            </center>
            </td>
          </tr>
          <tr>
            <td>Sigue las instrucciones indicadas por el software.<br>
            </td>
            <td colspan="3">
              <center>
              <select name="val113">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
            </center>
            </td>
          </tr>
          <tr>
            <td>Realiza la inspección previa del vehículo mediante la lista de
              chequeo desplegada y verifica las condiciones de realización de la
              prueba.<br>
            </td>
            <td colspan="3">
              <center>
              <select name="val114">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
            </center>
            </td>
          </tr>
          <tr>
            <td>Existencias de fugas en el tubo, uniones del múltiple y
              silenciador del sistema de escape del vehículo.<br>
            </td>
            <td colspan="3">
              <center>
              <select name="val115">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
            </center>
            </td>
          </tr>
          <tr>
            <td>Ausencia de tapones de aceite o fugas en el mismo.<br>
            </td>
            <td colspan="3">
              <center>
              <select name="val116">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
            </center>
            </td>
          </tr>
          <tr>
            <td>Incorrecta operación del sistema de refrigeración.<br>
            </td>
            <td colspan="3">
              <center>
              <select name="val117">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
            </center>
            </td>
          </tr>
          <tr>
            <td>Mide y registra correctamente el diámetro exterior del exhosto.<br>
            </td>
            <td colspan="3">
              <center>
              <select name="val118">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
            </center>
            </td>
          </tr>
          <tr>
            <td>Sigue adecuadamente instrucciones para calcular las RPM
              gobernadas</td>
            <td colspan="3">
              <center>
              <select name="val119">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
            </center>
            </td>
          </tr>
          <tr>
            <td>Introduce sonda de muestreo cumpliendo con lo establecido en
              normas e instructivos ( en exhosto de doble salida el que más
              humé) </td>
            <td colspan="3">
              <center>
              <select name="val120">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
            </center>
            </td>
          </tr>
          <tr>
            <td>Realiza la toma de muestra de acuerdo a las instrucciones del
              aplicativo.<br>
            </td>
            <td colspan="3">
              <center>
              <select name="val121">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
            </center>
            </td>
          </tr>
          <tr>
          </tr>
          <tr>
            <td rowspan="3" bgcolor="e2e2e2"><br>
            </td>
            <td colspan="3" bgcolor="e2e2e2"> <br>
            </td>
            <td colspan="3"> <br>
            </td>
          </tr>
          <tr>
            <td>ANEXO A - Adaptaciones vehículos de enseñanza </td>
            <td colspan="3">
              <center>
              <select name="val122">
                <option></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
            </center>
            </td>
          </tr>
          <tr>
            <td>ANEXO B - 3ra placa vehículos públicos<br>
            </td>
            <td colspan="3">
              <center>
              <select name="val123">
                <option></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
            </center>
            </td>
          </tr>
         
          <tr>
            <td rowspan="4" bgcolor="E2E2E2">
              <center> 
               <b>R<br>
                  U<br>
                  I<br>
                  D<br>
                  O<br>
                  S<br>
                  <br>
                  NTC<br>
                  4194 </b> </center>
            </td>
            <td colspan="4" bgcolor="e2e2e2"><br>
            </td>
          </tr>
          <tr>
            <td>Ubica correctamente el sensor de revoluciones</td>
            <td colspan="3">
              <center>
              <select name="val124">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
            </center>
            </td>
          </tr>
          <tr>
            <td>Ubica el sonómetro a la distancia, altura y ángulo correcto</td>
            <td colspan="3">
              <center>
              <select name="val125">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
            </center>
            </td>
          </tr>
          <tr>
            <td>Hace uso adecuado y sigue las instrucciones del software</td>
            <td colspan="3">
              <center>
              <select name="val126">
                <option value="0"></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <!--   <option value="3">3</option> -->
                <option value="5">5</option>
              </select>
            </center>
            </td>
          </tr>
          <tr>
            <td colspan="5"><br>
            </td>
          </tr>
        <!--  
          <tr>
            <td colspan="3" align="right">Mantiene la competencia para
              inspeccionar</td>
            <td>
              <center>
              <select name="val127" required>
                <option></option>
                <option value="SI">SI</option>
                <option value="NO">NO</option>
              </select>
            </center>
            </td>
          </tr>
          <tr>
            <td colspan="3" align="right">El Inspector Técnico esta deacuerdo
              con la calificación evaluada?</td>
            <td>
              <center>
              <select name="val128" required>
                <option></option>
                <option value="SI">SI</option>
                <option value="NO">NO</option>
              </select>
            </center>
            </td>
          </tr>
          <tr>
            <td colspan="5" bgcolor="1F6737" textcolor="red">
              <center><b>RESULTADOS DE LA SUPERVISIÓN</b><br>
              </center>
            </td>
          </tr>
          -->  
          <tr>
            <td colspan="5">
              <center> <textarea rows="4" cols="100" name="val129"></textarea> </center>
            </td>
          </tr>
        </tbody>
      </table>
        <input type="submit" name="">
        <input type="reset" name="">
      </form>
    </center>
    <br>
    <br>
    <br>
  </body>
</html>
