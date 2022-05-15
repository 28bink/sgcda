<?php
// Motrar todos los errores de PHP
error_reporting(E_ALL);
ini_set('display_errors', '1');
//

//echo '<br>';
//date_default_timezone_set('America/Bogota');
//php echo date('Y - m - d'); 
$v1_sv_datos= date('d - m - Y');
$v2i_sv_datos= date(' g:i a'); 
$v2f_sv_datos= date(' g:i a');
//echo "prueba";

//captura de variables html a php INICIO
$v3_sv_datos= $_POST['val3_form']; //Director Técnico
$v4_sv_datos= $_POST['val4_form']; //Técnico y/o Recepcionista
$v7_sv_datos= $_POST['val7_form']; //Placa
$v8_sv_datos= $_POST['val8_form']; //Tipo
$v9_sv_datos= $_POST['val9_form']; //Categoria
$v10_sv_datos= $_POST['val10_form']; //observaciones

//CRITERIOS
$v1_sv= $_POST['val1']; //observaciones
$v2_sv= $_POST['val2']; //
$v3_sv= $_POST['val3']; //
$v4_sv= $_POST['val4']; //
$v5_sv= $_POST['val5']; //
$v6_sv= $_POST['val6']; //
$v7_sv= $_POST['val7']; //
$v8_sv= $_POST['val8']; //

$preinspeccion=($v1_sv+$v2_sv+$v3_sv+$v4_sv+$v5_sv+$v6_sv+$v7_sv+$v8_sv)/8;
//echo "<br>";
//echo $preinspeccion;
//echo "<br>";
//VISUAL
$v9_sv= $_POST['val9']; //
$v10_sv= $_POST['val10']; //
$v11_sv= $_POST['val11']; //
$v12_sv= $_POST['val12']; //
$v13_sv= $_POST['val13']; //
$v14_sv= $_POST['val14']; //
$v15_sv= $_POST['val15']; //
$v16_sv= $_POST['val16']; //
$v17_sv= $_POST['val17']; //
$v18_sv= $_POST['val18']; //
$v19_sv= $_POST['val19']; //
$v20_sv= $_POST['val20']; //
$v21_sv= $_POST['val21']; //
$v22_sv= $_POST['val22']; //
$v23_sv= $_POST['val23']; //
$v24_sv= $_POST['val24']; //
$v25_sv= $_POST['val25']; //
$v26_sv= $_POST['val26']; //
$v27_sv= $_POST['val27']; //
$v28_sv= $_POST['val28']; //
$v29_sv= $_POST['val29']; //
$v30_sv= $_POST['val30']; //
$v31_sv= $_POST['val31']; //
$visual=($v9_sv+$v10_sv+$v11_sv+$v12_sv+$v13_sv+$v14_sv+$v15_sv+$v16_sv+$v17_sv+$v18_sv+$v19_sv+$v20_sv+$v21_sv+$v22_sv+$v23_sv+$v24_sv+$v25_sv+$v26_sv+$v27_sv+$v28_sv+$v29_sv+$v30_sv+$v31_sv)/23;
//FRENOS VISUAL
$v32_sv= $_POST['val32']; //
$v33_sv= $_POST['val33']; //
$v34_sv= $_POST['val34']; //
$v35_sv= $_POST['val35']; //
$v36_sv= $_POST['val36']; //
$v37_sv= $_POST['val37']; //
$v38_sv= $_POST['val38']; //
$v39_sv= $_POST['val39']; //
$v40_sv= $_POST['val40']; //
$v41_sv= $_POST['val41']; //
$v42_sv= $_POST['val42']; //
$v43_sv= $_POST['val43']; //
$frenosv=($v32_sv+$v33_sv+$v34_sv+$v35_sv+$v36_sv+$v37_sv+$v38_sv+$v39_sv+$v40_sv+$v41_sv+$v42_sv+$v43_sv)/12;
//SUSPENSION VISUAL
$v44_sv= $_POST['val44']; //
$v45_sv= $_POST['val45']; //
$v46_sv= $_POST['val46']; //
$v47_sv= $_POST['val47']; //
$v48_sv= $_POST['val48']; //
$v49_sv= $_POST['val49']; //
$v50_sv= $_POST['val50']; //
$v51_sv= $_POST['val51']; //
$v52_sv= $_POST['val52']; //
$v53_sv= $_POST['val53']; //
$suspensionv=($v44_sv+$v45_sv+$v46_sv+$v47_sv+$v48_sv+$v49_sv+$v50_sv+$v51_sv+$v52_sv+$v53_sv)/10;
//PRUEBA DE FRENOS
$v54_sv= $_POST['val54']; //
$v55_sv= $_POST['val55']; //
$v56_sv= $_POST['val56']; //
$v57_sv= $_POST['val57']; //
$v58_sv= $_POST['val58']; //
$v59_sv= $_POST['val59']; //
$v60_sv= $_POST['val60']; //
$v61_sv= $_POST['val61']; //
$v62_sv= $_POST['val62']; //
$v63_sv= $_POST['val63']; //
$v64_sv= $_POST['val64']; //
$v65_sv= $_POST['val65']; //
$v66_sv= $_POST['val66']; //
$v67_sv= $_POST['val67']; //
$v68_sv= $_POST['val68']; //
$v69_sv= $_POST['val69']; //
$v70_sv= $_POST['val70']; //
$v71_sv= $_POST['val71']; //
$v72_sv= $_POST['val72']; //
$v73_sv= $_POST['val73']; //
$v74_sv= $_POST['val74']; //
$v75_sv= $_POST['val75']; //
$v76_sv= $_POST['val76']; //
$v77_sv= $_POST['val77']; //
$frenosp=($v54_sv+$v55_sv+$v56_sv+$v57_sv+$v58_sv+$v59_sv+$v60_sv+$v61_sv+$v62_sv+$v63_sv+$v64_sv+$v65_sv+$v66_sv+$v67_sv+$v68_sv+$v69_sv+$v70_sv+$v71_sv+$v72_sv+$v73_sv+$v74_sv+$v75_sv+$v76_sv+$v77_sv)/24;
//PRUEBA DE LUCES
$v78_sv= $_POST['val78']; //
$v79_sv= $_POST['val79']; //
$v80_sv= $_POST['val80']; //
$v81_sv= $_POST['val81']; //
$v82_sv= $_POST['val82']; //
$v83_sv= $_POST['val83']; //
$v84_sv= $_POST['val84']; //
$v85_sv= $_POST['val85']; //
$v86_sv= $_POST['val86']; //
$v87_sv= $_POST['val87']; //
$v88_sv= $_POST['val88']; //
$lucesp=($v78_sv+$v79_sv+$v80_sv+$v81_sv+$v82_sv+$v83_sv+$v84_sv+$v85_sv+$v86_sv+$v87_sv+$v88_sv)/11;
//PRUEBA DE SUSPENSION
$v89_sv= $_POST['val89']; //
$v90_sv= $_POST['val90']; //
$v91_sv= $_POST['val91']; //
$v92_sv= $_POST['val92']; //
$v93_sv= $_POST['val93']; //
$v94_sv= $_POST['val94']; //
$suspensionp=($v89_sv+$v90_sv+$v91_sv+$v92_sv+$v93_sv+$v94_sv)/6;
//GASES NTC 4983
$v95_sv= $_POST['val95']; //
$v96_sv= $_POST['val96']; //
$v97_sv= $_POST['val97']; //
$v98_sv= $_POST['val98']; //
$v99_sv= $_POST['val99']; //
$v100_sv= $_POST['val100']; //
$v101_sv= $_POST['val101']; //
$v102_sv= $_POST['val102']; //
$v103_sv= $_POST['val103']; //
$v104_sv= $_POST['val104']; //
$v105_sv= $_POST['val105']; //
$v106_sv= $_POST['val106']; //
$gases4983=(+$v95_sv+$v96_sv+$v97_sv+$v98_sv+$v99_sv+$v100_sv+$v101_sv+$v102_sv+$v103_sv+$v104_sv+$v105_sv+$v106_sv)/12;
//OPACIDAD NTC 4231
$v107_sv= $_POST['val107']; //
$v108_sv= $_POST['val108']; //
$v109_sv= $_POST['val109']; //
$v110_sv= $_POST['val110']; //
$v111_sv= $_POST['val111']; //
$v112_sv= $_POST['val112']; //
$v113_sv= $_POST['val113']; //
$v114_sv= $_POST['val114']; //
$v115_sv= $_POST['val115']; //
$v116_sv= $_POST['val116']; //
$v117_sv= $_POST['val117']; //
$v118_sv= $_POST['val118']; //
$v119_sv= $_POST['val119']; //
$v120_sv= $_POST['val120']; //
$v121_sv= $_POST['val121']; //
$gases4231=($v107_sv+$v108_sv+$v109_sv+$v110_sv+$v111_sv+$v112_sv+$v113_sv+$v114_sv+$v115_sv+$v116_sv+$v117_sv+$v118_sv+$v119_sv+$v120_sv+$v121_sv)/15;
//
$v122_sv= $_POST['val122']; //
$v123_sv= $_POST['val123']; //
//RUIDOS NTC 4194
$v124_sv= $_POST['val124']; //
$v125_sv= $_POST['val125']; //
$v126_sv= $_POST['val126']; //
$ruidos4194=($v124_sv+$v125_sv+$v126_sv)/3;
//
//Mantiene la competencia para inspeccionar
//$v127_sv= $_POST['val127']; //
$v127_sv= "INDETERMINADO"; 
//El Inspector Técnico esta deacuerdo con la calificación evaluada?
//$v128_sv= $_POST['val128']; //
$v128_sv= "INDETERMINADO";

$v129_sv= $_POST['val129']; //
//captura de variables html a php FIN

//CONEXION CON DB
/*

$link = mysqli_connect('localhost', '28bink', '131313')
    or die('No se pudo conectar: ' . mysql_error());
//echo 'Connected successfully';
//$con='error con el nombre de la bd';
mysqli_select_db($link,'mandointegral') or die(mysqli_error($con));
//FIN CONEXION CON DB

*/
?>

<center>
<table border="1" width="70%">
	<tr>
			<td><b>NOMBRE VARIABLES - SUPERVISION</b></td>
			<td><center><b>HTML</b></center></td>
			<td><center><b>PHP</b></center></td>
	</tr>
	<tr>
		<td colspan="3" bgcolor="e2e2e2">
			<center>
			<b>DATOS BASICOS</b>
			</center>
		</td>
	</tr>
	<tr>
		<td>Fecha</td>
		<td>val1_form</td>
		<td>$v1_sv_datos</td>
		<td><?php echo $v1_sv_datos; ?></td>
	</tr>
	<tr>
		<td>Hora : inicio</td>
		<td>val2i_form</td>
		<td>$v2i_sv_datos</td>
		<td><?php echo $v2i_sv_datos; ?></td>
	</tr>
	<tr>
		<td>Hora : fin</td>
		<td>val2f_form</td>
		<td>$v2f_sv_datos</td>
		<td><?php echo $v2f_sv_datos; ?></td>
	</tr>
	<tr>
		<td>Director Técnico</td>
		<td>val3_form</td>
		<td>$v3_sv_datos</td>
		<td><?php echo $v3_sv_datos; ?></td>
	</tr>
	<tr>
		<td>Técnico y/o Recepcionista</td>
		<td>val4_form</td>
		<td>$v4_sv_datos</td>
		<td><?php echo $v4_sv_datos; ?></td>
	</tr>
	<tr>
		<td>Firma Director Técnico</td>
		<td>val5_form</td>
		<td>$v5_sv_datos</td>
		<td><?php 
					if ($v3_sv_datos=='SAMUEL RICARDO ALMANZA')
					{
						$v5_sv_datos="<center>PRINCIPAL</center><br>";
						echo $v5_sv_datos;
						echo '
							<img src="../img/firmas/dt/03_DT_ Samuel_Almanza.png" width="40%">';		
					}
					if ($v3_sv_datos=='GEOVANNI PEDRAZA')
					{
					$v5_sv_datos="<center>SUPLENTE</center><br>";
						echo $v5_sv_datos;	
						echo '
							<img src="../img/firmas/dt/02_DT_Giovanni_Pedraza.png" width="40%">';			
					 }
			?></td>
	</tr>
	<tr>
		<td>Firma Recepcionista</td>
		<td>val6_form</td>
		<td>$v6_sv_datos</td>
		<td>
			<?php 
					if ($v4_sv_datos=='ALEJANDRO MERCHAN')
					{
						$v6_sv_datos="<center>INSPECTOR TECNICO</center><br>";
						echo $v6_sv_datos;
						echo '
							<img src="../img/firmas/inspectores/01_Alejandro_Merchan.png" width="40%">
						';		
					}
					if ($v4_sv_datos=='NELSON BARRAGAN')
					{
						$v6_sv_datos="<center>INSPECTOR TECNICO</center><br>";
						echo $v6_sv_datos;
						echo '
							<img src="../img/firmas/inspectores/07_Nelson_Barragan.png" width="40%">
						';		
					}
					if ($v4_sv_datos=='IVAN ACEVEDO')
					{
						$v6_sv_datos="<center>INSPECTOR TECNICO</center><br>";
						echo $v6_sv_datos;
						echo '
							<img src="../img/firmas/inspectores/05_Ivan_Leonardo_Acevedo.png" width="40%">
						';		
					}
					if ($v4_sv_datos=='ALEXANDER TORRES')
					{
						$v6_sv_datos="<center>INSPECTOR TECNICO</center><br>";
						echo $v6_sv_datos;
						echo '
							<img src="../img/firmas/inspectores/02_Alexander_Torres.png" width="40%">
						';		
					}
					if ($v4_sv_datos=='DIEGO ALMANZA')
					{
						$v6_sv_datos="<center>INSPECTOR TECNICO</center><br>";
						echo $v6_sv_datos;
						echo '
							<img src="../img/firmas/inspectores/04_Diego_Almanza.png" width="40%">
						';		
					}
						if ($v4_sv_datos=='FABIAN ORTIZ')
					{
						$v6_sv_datos="<center>INSPECTOR TECNICO</center><br>";
						echo $v6_sv_datos;
						echo '
							<img src="../img/firmas/inspectores/08_Willinton_Fabian_Ortiz.png" width="40%">
						';		
					}
					if ($v4_sv_datos=='JUAN PABLO MESA')
					{
						$v6_sv_datos="<center>INSPECTOR TECNICO</center><br>";
						echo $v6_sv_datos;
						echo '
							<img src="../img/firmas/inspectores/06_Juan_Pablo.png" width="40%">
						';		
					}
					if ($v4_sv_datos=='ALEXIS LOPEZ')
					{
						$v6_sv_datos="<center>INSPECTOR TECNICO</center><br>";
						echo $v6_sv_datos;
						echo '
							<img src="../img/firmas/inspectores/03_Alexis_Perez.png" width="40%">
						';		
					}
			?>				
		</td>
	</tr>
	<tr>
		<td>Placa</td>
		<td>val7_form</td>
		<td>$v7_sv_datos</td>
		<td><?php echo $v7_sv_datos; ?></td>
	</tr>
	<tr>
		<td>Tipo</td>
		<td>val8_form</td>
		<td>$v8_sv_datos</td>
		<td><?php echo $v8_sv_datos; ?></td>
	</tr>
	<tr>
		<td>Categoria</td>
		<td>val9_form</td>
		<td>$v9_sv_datos</td>
		<td><?php echo $v9_sv_datos; ?></td>
	</tr>
	<tr>
		<td>Observaciones</td>
		<td>val10_form</td>
		<td>$v10_sv_datos</td>
		<td><?php echo $v10_sv_datos; ?></td>
	</tr>
	<tr>
		<td colspan="3" bgcolor="e2e2e2">
			<center>
			<b>PRE - INSPECCION</b>
			</center>
		</td>
	</tr>
	<tr>
		<td>Uso y manejo del vehiculo como propiedad del cliente</td>
		<td>val1</td>
		<td>$v1_sv</td>
		<td><?php echo$v1_sv;?></td>
	</tr>
	<tr>
		<td>Uso adecuado de elementos de protección personal (seguridad)</td>
		<td>val2</td>
		<td>$v2_sv</td>
		<td><?php echo$v2_sv;?></td>
	</tr>
	<tr>
		<td>5. El vehículo cumple con las condiciones de PRE-REVISION - Numeral 5 de la NTC 5375:2012 (Vacio, sin tapacubos, limpio y alarma desactivada)</td>
		<td>val3</td>
		<td>$v3_sv</td>
		<td><?php echo$v3_sv;?></td>
	</tr>
	<tr>
		<td>Verifica presión de inflado de llantas según instructivo</td>
		<td>val4</td>
		<td>$4_sv</td>
		<td><?php echo$v4_sv;?></td>
	</tr>
	<tr>
		<td>Verifica el ingreso de informacion referente del vehiculo</td>
		<td>val5</td>
		<td>$v5_sv</td>
		<td><?php echo$v5_sv;?></td>
	</tr>
	<tr>
		<td>Suministra toda la información al cliente respecto a la RTM y EC</td>
		<td>val6</td>
		<td>$v6_sv</td>
		<td><?php echo$v6_sv;?></td>
	</tr>
	<tr>
		<td>El vehículo es trasladado de forma adecuada al área de REVISION</td>
		<td>val7</td>
		<td>$v7_sv</td>
		<td><?php echo$v7_sv;?></td>
	</tr>
	<tr>
		<td>Utiliza de forma adecuada la Tablet </td>
		<td>val8</td>
		<td>$v8_sv</td>
		<td><?php echo$v8_sv;?></td>
	</tr>
	<tr>
		<td colspan="3" bgcolor="e2e2e2">
			<center>
			<b>VISUAL</b>
			</center>
		</td>
	</tr>
	<tr>
		<td>Ubicación adecuada del vehículo en el foso (Centrado y acorde a las líneas guía)</td>
		<td>val9</td>
		<td>$v9_sv</td>
		<td><?php echo $v9_sv; ?></td>
	</tr>
	<tr>
		<td>NTC 5385 4.16.1.6..Utilización correcta y oportuna de la TABLET (Registro Inmediato de los defectos y fotos)</td>
		<td>val10</td>
		<td>$v10_sv</td>
		<td><?php echo $v10_sv; ?></td>
	</tr>
	<tr>
		<td>Utilización de la linterna. (Uso)</td>
		<td>val11</td>
		<td>$v11_sv</td>
		<td><?php echo $v11_sv; ?></td>
	</tr>
	<tr>
		<td>Movimientos cortos y repetidos del detector de holguras (electro-bomba) </td>
		<td>val12</td>
		<td>$v12_sv</td>
		<td><?php echo $v12_sv; ?></td>
	</tr>
	<tr>
		<td>Uso y manejo adecuado del profundímetro (puesta a cero, ubicación y registro ) </td>
		<td>val13</td>
		<td>$v13_sv</td>
		<td><?php echo $v13_sv; ?></td>
	</tr>
	<tr>
		<td>Uso y manejo del vehículo como propiedad del cliente </td>
		<td>val14</td>
		<td>$v14_sv</td>
		<td><?php echo $v14_sv; ?></td>
	</tr>
	<tr>
		<td>6.1.1 Carrocería y Chasís </td>
		<td>val15</td>
		<td>$v15_sv</td>
		<td><?php echo $v15_sv; ?></td>
	</tr>
	<tr>
		<td>6.1.2 Limpiaparabrisas </td>
		<td>val16</td>
		<td>$v16_sv</td>
		<td><?php echo $v16_sv; ?></td>
	</tr>
	<tr>
		<td>6.1.3 peldaños </td>
		<td>val17</td>
		<td>$v17_sv</td>
		<td><?php echo $v17_sv; ?></td>
	</tr>
	<tr>
		<td>6.1.4 Retrovisores </td>
		<td>val18</td>
		<td>$v18_sv</td>
		<td><?php echo $v18_sv; ?></td>
	</tr>
	<tr>
		<td>6.1.5. Soporte Exterior de La Rueda de Repuesto</td>
		<td>val19</td>
		<td>$v19_sv</td>
		<td><?php echo $v19_sv; ?></td>
	</tr>
	<tr>
		<td>6.1.6 Vidrios </td>
		<td>val20</td>
		<td>$v20_sv</td>
		<td><?php echo $v20_sv; ?></td>
	</tr>
	<tr>
		<td>6.1.7 Dispositivos de retención de la carga</td>
		<td>val21</td>
		<td>$v21_sv</td>
		<td><?php echo $v21_sv; ?></td>
	</tr>
	<tr>
		<td>6.2.1 Habitáculo del conductor y pasajeros </td>
		<td>val22</td>
		<td>$v22_sv</td>
		<td><?php echo $v22_sv; ?></td>
	</tr>
	<tr>
		<td>6.2.2 Cinturones de seguridad y sus anclajes </td>
		<td>val23</td>
		<td>$v23_sv</td>
		<td><?php echo $v23_sv; ?></td>
	</tr>
	<tr>
		<td>6.2.3 Dispositivo de control de velocidad </td>
		<td>val24</td>
		<td>$v24_sv</td>
		<td><?php echo $v24_sv; ?></td>
	</tr>
	<tr>
		<td>6.3.1 Dispositivos sonoros no permitidos</td>
		<td>val25</td>
		<td>$v25_sv</td>
		<td><?php echo $v25_sv; ?></td>
	</tr>
	<tr>
		<td>6.3.2 Bocina, pito o dispositivo acústico </td>
		<td>val26</td>
		<td>$v26_sv</td>
		<td><?php echo $v26_sv; ?></td>
	</tr>
	<tr>
		<td>6.4.1 Alumbrado y señalización (mediante inspección sensorial se busca detectar) </td>
		<td>val27</td>
		<td>$v27_sv</td>
		<td><?php echo $v27_sv; ?></td>
	</tr>
	<tr>
		<td>6.5. Salida de Emergencia, (Res. 5666 del 2003) </td>
		<td>val28</td>
		<td>$v28_sv</td>
		<td><?php echo $v28_sv; ?></td>
	</tr>
	<tr>
		<td>6.6. Emisiones Contaminantes (NTC 4231 Diésel), (NTC 4983 Gasolina) Y (Res. 910 del 2008) </td>
		<td>val29</td>
		<td>$v29_sv</td>
		<td><?php echo $v29_sv; ?></td>
	</tr>
	<tr>
		<td>6.6.3. Tubo de descarga horizontal (superior a 3 ton ó 19 pasajeros), Debe 3 metros del suelo en modelos anterior 2001 </td>
		<td>val30</td>
		<td>$v30_sv</td>
		<td><?php echo $v30_sv; ?></td>
	</tr>
	<tr>
		<td>6.6.4 Roturas o perforaciones en el sistema de escape </td>
		<td>val31</td>
		<td>$v31_sv</td>
		<td><?php echo $v31_sv; ?></td>
	</tr>
	<tr>
		<td colspan="3" bgcolor="e2e2e2">
			<center>
			<b>FRENOS VISUAL</b>
			</center>
		</td>
	</tr>
	<tr>
		<td>6.7.1. Pedal</td>
		<td>val32</td>
		<td>$v32_sv</td>
		<td><?php echo $v32_sv; ?></td>
	</tr>
	<tr>
		<td>6.7.2. Guayas</td>
		<td>val33</td>
		<td>$v33_sv</td>
		<td><?php echo $v33_sv; ?></td>
	</tr>
	<tr>
		<td>6.7.3. Bomba de vacío (Booster) o compresor y anclajes - (Aplica para vehículos con circuito neumático para el sistema de frenado). </td>
		<td>val34</td>
		<td>$v34_sv</td>
		<td><?php echo $v34_sv; ?></td>
	</tr>
	<tr>
		<td>6.7.4. Válvula de regulación del freno de estacionamiento (parqueo o de mano) - Aplica para vehículos con circuito neumático para el sistema de frenado). </td>
		<td>val35</td>
		<td>$v35_sv</td>
		<td><?php echo $v35_sv; ?></td>
	</tr>
	<tr>
		<td>6.7.5. Válvulas de frenado - (Aplica para vehículos con circuito neumático para el sistema de frenado). </td>
		<td>val36</td>
		<td>$v36_sv</td>
		<td><?php echo $v36_sv; ?></td>
	</tr>
	<tr>
		<td>6.7.6.Tanques o depósitos de presión - (Aplica para vehículos con circuito neumático para el sistema de frenado) </td>
		<td>val37</td>
		<td>$v37_sv</td>
		<td><?php echo $v37_sv; ?></td>
	</tr>
	<tr>
		<td>6.7.7. Acoplamiento de los frenos de la unidad tractora</td>
		<td>val38</td>
		<td>$v38_sv</td>
		<td><?php echo $v38_sv; ?></td>
	</tr>
	<tr>
		<td>6.7.8. Servofreno (Booster). Cilindro de mando (sistemas hidráulicos) </td>
		<td>val39</td>
		<td>$v39_sv</td>
		<td><?php echo $v39_sv; ?></td>
	</tr>
	<tr>
		<td>6.7.9. Tubos y mangueras de frenos </td>
		<td>val40</td>
		<td>$v40_sv</td>
		<td><?php echo $v40_sv; ?></td>
	</tr>
	<tr>
		<td>6.7.10. Cilindros del sistema de frenado </td>
		<td>val41</td>
		<td>$v41_sv</td>
		<td><?php echo $v41_sv; ?></td>
	</tr>
	<tr>
		<td>6.7.11. Válvula que permite o limite el frenado y válvula censora o compensadora de carga o la que haga sus veces (de estar presente) </td>
		<td>val42</td>
		<td>$v42_sv</td>
		<td><?php echo $v42_sv; ?></td>
	</tr>
	<tr>
		<td>6.7.12. Condiciones a medir (presión de llantas, labrado, antibloqueo, control de tracción, tracción integral mecánica.</td>
		<td>val43</td>
		<td>$v43_sv</td>
		<td><?php echo $v43_sv; ?></td>
	</tr>
	<tr>
		<td colspan="3" bgcolor="e2e2e2">
			<center>
			<b>SUSPENSION VISUAL</b>
			</center>
		</td>
	</tr>
	<tr>
		<td>6.8.1. Mediante inspección sensorial y detector de holguras</td>
		<td>val44</td>
		<td>$v44_sv</td>
		<td><?php echo $v44_sv; ?></td>
	</tr>
	<tr>
		<td>6.10.1. Dirección</td>
		<td>val45</td>
		<td>$v45_sv</td>
		<td><?php echo $v45_sv; ?></td>
	</tr>
	<tr>
		<td>6.10.2. Uso de equipo de desviación Lateral</td>
		<td>val46</td>
		<td>$v46_sv</td>
		<td><?php echo $v46_sv; ?></td>
	</tr>
	<tr>
		<td>6.11 Rines y Llantas</td>
		<td>val47</td>
		<td>$v47_sv</td>
		<td><?php echo $v47_sv; ?></td>
	</tr>
	<tr>
		<td>6.12. Motor</td>
		<td>val48</td>
		<td>$v48_sv</td>
		<td><?php echo $v48_sv; ?></td>
	</tr>
	<tr>
		<td>6.13. Sistema de Combustible</td>
		<td>val49</td>
		<td>$v49_sv</td>
		<td><?php echo $v49_sv; ?></td>
	</tr>
	<tr>
		<td>6.14. Transmisión</td>
		<td>val50</td>
		<td>$v50_sv</td>
		<td><?php echo $v50_sv; ?></td>
	</tr>
	<tr>
		<td>Placas En vehículos de servicio público (resolución 2999 del 2003)</td>
		<td>val51</td>
		<td>$v51_sv</td>
		<td><?php echo $v51_sv; ?></td>
	</tr>
	<tr>
		<td>Uso obligatorio de Cintas Retrarreflectivas (Resolución 3246 del 2018)</td>
		<td>val52</td>
		<td>$v52_sv</td>
		<td><?php echo $v52_sv; ?></td>
	</tr>
	<tr>
		<td>Requisitos vehículos de Enseñanza NTC 5375 ANEXO a (Res 3245 del 2009) </td>
		<td>val53</td>
		<td>$v53_sv</td>
		<td><?php echo $v53_sv; ?></td>
	</tr>
	<tr>
		<td colspan="3" bgcolor="e2e2e2">
			<center>
			<b>PRUEBA DE FRENOS</b>
			</center>
		</td>
	</tr>
	<tr>
		<td>Alinea correctamente el vehículo usando las líneas guía</td>
		<td>val54</td>
		<td>$v54_sv</td>
		<td><?php echo $v54_sv; ?></td>
	</tr>
	<tr>
		<td>Detiene totalmente el vehículo al borde del plato de alineación</td>
		<td>val55</td>
		<td>$v55_sv</td>
		<td><?php echo $v55_sv; ?></td>
	</tr>
	<tr>
		<td>Inicia y configura el aplicativo de software de manera adecuada</td>
		<td>val56</td>
		<td>$v56_sv</td>
		<td><?php echo $v56_sv; ?></td>
	</tr>
	<tr>
		<td>Pasa sobre el plato de alineación a velocidad no superior a 2KM/h </td>
		<td>val57</td>
		<td>$v57_sv</td>
		<td><?php echo $v57_sv; ?></td>
	</tr>
	<tr>
		<td>Suelta el volante durante el paso sobre el plato de alineación</td>
		<td>val58</td>
		<td>$v58_sv</td>
		<td><?php echo $v58_sv; ?></td>
	</tr>
	<tr>
		<td>Graba y envía la prueba de alineación mediante el adecuado uso del control remoto</td>
		<td>val59</td>
		<td>$v59_sv</td>
		<td><?php echo $v59_sv; ?></td>
	</tr>
	<tr>
		<td>Verifica que la presión de llantas sea adecuada para la prueba</td>
		<td>val60</td>
		<td>$v60_sv</td>
		<td><?php echo $v60_sv; ?></td>
	</tr>
	<tr>
		<td>Verificar que el labrado cumple para iniciar la prueba de frenos (1.6.mm hasta 3.5 ton y 2mm después)</td>
		<td>val61</td>
		<td>$v61_sv</td>
		<td><?php echo $v61_sv; ?></td>
	</tr>
	<tr>
		<td>Verifica que no exista carga en el frenómetro al dar inicio al programa</td>
		<td>val62</td>
		<td>$v62_sv</td>
		<td><?php echo $v62_sv; ?></td>
	</tr>
	<tr>
		<td>Verifica que los frenos estén secos</td>
		<td>val63</td>
		<td>$v63_sv</td>
		<td><?php echo $v63_sv; ?></td>
	</tr>
	<tr>
		<td>Inicia y configura el aplicativo de software de manera adecuada</td>
		<td>val64</td>
		<td>$v64_sv</td>
		<td><?php echo $v64_sv; ?></td>
	</tr>
	<tr>
		<td>Realiza la prueba de frenos con el motor encendido para garantizar que el pulmón del servofreno esté cargado.</td>
		<td>val65</td>
		<td>$v65_sv</td>
		<td><?php echo $v65_sv; ?></td>
	</tr>
	<tr>
		<td>Ingresa al frenómetro de manera controlada, protegiendo la propiedad del cliente y el equipo</td>
		<td>val66</td>
		<td>$v66_sv</td>
		<td><?php echo $v66_sv; ?></td>
	</tr>
	<tr>
		<td>Ubica el eje delantero del vehículo centrado en los rodillos</td>
		<td>val67</td>
		<td>$v67_sv</td>
		<td><?php echo $v67_sv; ?></td>
	</tr>
	<tr>
		<td>Verifica que la presión del aire en el manómetro del vehículo (mínimo 90 PSI). Para el caso de los frenos de aire.</td>
		<td>val68</td>
		<td>$v68_sv</td>
		<td><?php echo $v68_sv; ?></td>
	</tr>
	<tr>
		<td>La pisada de frenado es lenta, continua y hasta que el pedal llegue al final de su recorrido</td>
		<td>val69</td>
		<td>$v69_sv</td>
		<td><?php echo $v69_sv; ?></td>
	</tr>
	<tr>
		<td>Graba y envía la prueba del eje delantero de manera correcta</td>
		<td>val70</td>
		<td>$v70_sv</td>
		<td><?php echo $v70_sv; ?></td>
	</tr>
	<tr>
		<td>Ingresa el segundo eje del vehículo al frenómetro de manera controlada, protegiendo la propiedad del cliente y el equipo</td>
		<td>val71</td>
		<td>$v71_sv</td>
		<td><?php echo $v71_sv; ?></td>
	</tr>
	<tr>
		<td>Ubica el eje trasero del vehículo centrado en los rodillos</td>
		<td>val72</td>
		<td>$v72_sv</td>
		<td><?php echo $v72_sv; ?></td>
	</tr>
	<tr>
		<td>La pisada de frenado es lenta, continua y hasta que el pedal llegue  al final de su recorrido</td>
		<td>val73</td>
		<td>$v73_sv</td>
		<td><?php echo $v73_sv; ?></td>
	</tr>
	<tr>
		<td>Graba y envía la prueba del eje delantero de manera correcta </td>
		<td>val74</td>
		<td>$v74_sv</td>
		<td><?php echo $v74_sv; ?></td>
	</tr>
	<tr>
		<td>Realiza la prueba del freno de parqueo, activando el freno de parqueo muy lentamente y aumentando la fuerza aplicada hasta que la palanca ó el pedal lleguen al final de su recorrido</td>
		<td>val75</td>
		<td>$v75_sv</td>
		<td><?php echo $v75_sv; ?></td>
	</tr>
	<tr>
		<td>Nota: Cuando se trata de un vehículo con tracción integral permanente 4WD, el técnico configura y utiliza el equipo de manera adecuada.</td>
		<td>val76</td>
		<td>$v76_sv</td>
		<td><?php echo $v76_sv; ?></td>
	</tr>
	<tr>
		<td>Graba y envía toda la prueba de manera correcta</td>
		<td>val77</td>
		<td>$v77_sv</td>
		<td><?php echo $v77_sv; ?></td>
	</tr>
	<tr>
		<td colspan="3" bgcolor="e2e2e2">
			<center>
			<b>PRUEBA DE LUCES</b>
			</center>
		</td>
	</tr>
	<tr>
		<td>Verifica que los faros se encuentren limpios y secos previo inicio de la prueba </td>
		<td>val78</td>
		<td>$v78_sv</td>
		<td><?php echo $v78_sv; ?></td>
	</tr>
	<tr>
		<td>Ubica el vehículo de forma adecuada paralela y perpendicularmente utilizando las líneas guía.</td>
		<td>val79</td>
		<td>$v79_sv</td>
		<td><?php echo $v79_sv; ?></td>
	</tr>
	<tr>
		<td>Ubica el luxómetro a la distancia establecida por el fabricante utilizando el flexómetro de manera correcta</td>
		<td>val80</td>
		<td>$v80_sv</td>
		<td><?php echo $v80_sv; ?></td>
	</tr>
	<tr>
		<td>Verifica que el luxómetro esté nivelado mediante la observación del nivel.</td>
		<td>val81</td>
		<td>$v81_sv</td>
		<td><?php echo $v81_sv; ?></td>
	</tr>
	<tr>
		<td>Verifica la simetría utilizando el haz de luz roja y hace correctamente los ajustes necesarios </td>
		<td>val82</td>
		<td>$v82_sv</td>
		<td><?php echo $v82_sv; ?></td>
	</tr>
	<tr>
		<td>Hace uso correcto y configura adecuadamente el software para la realización de la prueba</td>
		<td>val83</td>
		<td>$v83_sv</td>
		<td><?php echo $v83_sv; ?></td>
	</tr>
	<tr>
		<td>Incluye de ser necesario la cantidad de luces adicionales con que cuente el vehículo que pueden estar encendidas al mismo tiempo y que pueden afectar la sumatoria total de luces</td>
		<td>val84</td>
		<td>$v84_sv</td>
		<td><?php echo $v84_sv; ?></td>
	</tr>
	<tr>
		<td>Verifica que el motor esté encendido, y el vehículo esté en neutro y con el freno de parqueo activado </td>
		<td>val85</td>
		<td>$v85_sv</td>
		<td><?php echo $v85_sv; ?></td>
	</tr>
	<tr>
		<td>Ubica correctamente la luz láser en el centro de la farola y centro del bombillo </td>
		<td>val86</td>
		<td>$v86_sv</td>
		<td><?php echo $v86_sv; ?></td>
	</tr>
	<tr>
		<td>Realiza la prueba de luces de acuerdo a las instrucciones del aplicativo</td>
		<td>val87</td>
		<td>$v87_sv</td>
		<td><?php echo $v87_sv; ?></td>
	</tr>
	<tr>
		<td>Registra los resultados de la prueba adecuadamente </td>
		<td>val88</td>
		<td>$v88_sv</td>
		<td><?php echo $v88_sv; ?></td>
	</tr>
	<tr>
		<td colspan="3" bgcolor="e2e2e2">
			<center>
			<b>PRUEBA DE SUSPENSION</b>
			</center>
		</td>
	</tr>
	<tr>
		<td>Verifica que el equipo no presente carga previa realización de la prueba.</td>
		<td>val89</td>
		<td>$v89_sv</td>
		<td><?php echo $v89_sv; ?></td>
	</tr>
	<tr>
		<td>Alinea el vehículo paralelamente a las líneas guía</td>
		<td>val90</td>
		<td>$v90_sv</td>
		<td><?php echo $v90_sv; ?></td>
	</tr>
	<tr>
		<td>Realiza correcto ingreso y configuración del aplicativo para realización de la prueba. </td>
		<td>val91</td>
		<td>$v91_sv</td>
		<td><?php echo $v91_sv; ?></td>
	</tr>
	<tr>
		<td>Ubica el vehículo sobre las placas de manera correcta  </td>
		<td>val92</td>
		<td>$v92_sv</td>
		<td><?php echo $v92_sv; ?></td>
	</tr>
	<tr>
		<td>Sigue las instrucciones de ejecución de la prueba del software</td>
		<td>val93</td>
		<td>$v93_sv</td>
		<td><?php echo $v93_sv; ?></td>
	</tr>
	<tr>
		<td>Registra y envía los resultados de la prueba de manera adecuada en el software</td>
		<td>val94</td>
		<td>$v94_sv</td>
		<td><?php echo$v94_sv;?></td>
	</tr>
	<tr>
		<td colspan="3" bgcolor="e2e2e2">
			<center>
			<b>GASES NTC 4983</b>
			</center>
		</td>
	</tr>
	<tr>
		<td>Realiza limpieza del equipo de manera adecuada </td>
		<td>val95</td>
		<td>$v95_sv</td>
		<td><?php echo$v95_sv;?></td>
	</tr>
	<tr>
		<td>Ingresa al aplicativo y verifica en el mismo el estado de puesta a cero, test de fugas y calibración </td>
		<td>val96</td>
		<td>$v96_sv</td>
		<td><?php echo$v96_sv;?></td>
	</tr>
	<tr>
		<td>Verifica que el termo higrómetro esté en línea y se verifiquen las condiciones ambientales (temperatura 5 C° Y 55C°) y humedad Relativa (30% y 90%) </td>
		<td>val97</td>
		<td>$v97_sv</td>
		<td><?php echo$v97_sv;?></td>
	</tr>
	<tr>
		<td>Ejecuta auto-cero del equipo verificando que todo el conjunto de mangueras, trampa y sonda toma de muestra se encuentren debidamente conectados </td>
		<td>val98</td>
		<td>$v98_sv</td>
		<td><?php echo$v98_sv;?></td>
	</tr>
	<tr>
		<td>Ejecuta el test de fugas cuando es necesario de acuerdo a las instrucciones</td>
		<td>val99</td>
		<td>$v99_sv</td>
		<td><?php echo$v99_sv;?></td>
	</tr>
	<tr>
		<td>Realiza correctamente la calibración con gas asegurando que se utilicen las pipetas registradas y siguiendo las instrucciones del aplicativo y demás contenidas en procedimientos</td>
		<td>val100</td>
		<td>$v100_sv</td>
		<td><?php echo$v100_sv;?></td>
	</tr>
	<tr>
		<td>Verifica el estado de sondas y filtros</td>
		<td>val101</td>
		<td>$v101_sv</td>
		<td><?php echo$v101_sv;?></td>
	</tr>
	<tr>
		<td>Posiciona el vehículo de forma adecuada, en neutro y con freno de parqueo</td>
		<td>val102</td>
		<td>$v102_sv</td>
		<td><?php echo$v102_sv;?></td>
	</tr>
	<tr>
		<td>Enciende las luces del vehículo y verifica que ningún otro elemento o equipo del vehículo que consuma energía esté encendido.</td>
		<td>val103</td>
		<td>$v103_sv</td>
		<td><?php echo$v103_sv;?></td>
	</tr>
	<tr>
		<td>Una vez “capturada” la placa del vehículo, realiza una inspección previa del vehículo y mediante la lista de chequeo desplegada verifica las condiciones de realización de la prueba.</td>
		<td>val104</td>
		<td>$v104_sv</td>
		<td><?php echo$v104_sv;?></td>
	</tr>
	<tr>
		<td>Ubica de forma correcta los sensores de relanti rpm (400 r/min-1100r/min (+/-150) en crucero a 2500 rpm +/-250)  y temperatura mínima (45 C° bloque ó 60 C° aceite en puntos adecuados del vehículo)</td>
		<td>val105</td>
		<td>$v105_sv</td>
		<td><?php echo$v105_sv;?></td>
	</tr>
	<tr>
		<td>Realiza de manera correcta la prueba de gases siguiendo las instrucciones del software</td>
		<td>val106</td>
		<td>$v106_sv</td>
		<td><?php echo$v106_sv;?></td>
	</tr>
	<tr>
		<td colspan="3" bgcolor="e2e2e2">
			<center>
			<b>OPACIDAD NTC 4231</b>
			</center>
		</td>
	</tr>
	<tr>
		<td>Verifica que el termo higrómetro esté en línea y se verifiquen las condiciones ambientales (temperatura 5 C° y 55C°) y humedad Relativa menor a 90%) </td>
		<td>val107</td>
		<td>$v107_sv</td>
		<td><?php echo$v107_sv;?></td>
	</tr>
	<tr>
		<td>Realiza limpieza del equipo de manera adecuada </td>
		<td>val108</td>
		<td>$v108_sv</td>
		<td><?php echo$v108_sv;?></td>
	</tr>
	<tr>
		<td>Verifica precalentamiento del opacímetro </td>
		<td>val109</td>
		<td>$v109_sv</td>
		<td><?php echo$v109_sv;?></td>
	</tr>
	<tr>
		<td>Ubica de forma correcta los sensores de rpm y temperatura 50C° optima, si menor no debe variar 10C°inicio y fin en (puntos adecuados del vehículo) </td>
		<td>val110</td>
		<td>$v110_sv</td>
		<td><?php echo $v110_sv;?></td>
	</tr>
	<tr>
		<td>Verifica que el termo higrómetro esté en línea y se verifiquen las condiciones ambientales </td>
		<td>val111</td>
		<td>$v111_sv</td>
		<td><?php echo$v111_sv;?></td>
	</tr>
	<tr>
		<td>Enciende las luces del vehículo y verifica que ningún otro elemento o equipo del vehículo que consuma energía esté encendido. </td>
		<td>val112</td>
		<td>$v112_sv</td>
		<td><?php echo$v112_sv;?></td>
	</tr>
	<tr>
		<td>Sigue las instrucciones indicadas por el software.</td>
		<td>val113</td>
		<td>$v113_sv</td>
		<td><?php echo$v113_sv;?></td>
	</tr>
	<tr>
		<td>Realiza la inspección previa del vehículo mediante la lista de chequeo desplegada y verifica las condiciones de realización de la prueba.</td>
		<td>val114</td>
		<td>$v114_sv</td>
		<td><?php echo$v114_sv;?></td>
	</tr>
	<tr>
		<td>Existencias de fugas en el tubo, uniones del múltiple y silenciador del sistema de escape del vehículo.</td>
		<td>val115</td>
		<td>$v115_sv</td>
		<td><?php echo$v115_sv;?></td>
	</tr>
	<tr>
		<td>Ausencia de tapones de aceite o fugas en el mismo.</td>
		<td>val116</td>
		<td>$v116_sv</td>
		<td><?php echo$v116_sv;?></td>
	</tr>
	<tr>
		<td>Incorrecta operación del sistema de refrigeración.</td>
		<td>val117</td>
		<td>$v117_sv</td>
		<td><?php echo$v117_sv;?></td>
	</tr>
	<tr>
		<td>Mide y registra correctamente el diámetro exterior del exhosto.</td>
		<td>val118</td>
		<td>$v118_sv</td>
		<td><?php echo$v118_sv;?></td>
	</tr>
	<tr>
		<td>Sigue adecuadamente instrucciones para calcular las RPM gobernadas</td>
		<td>val119</td>
		<td>$v119_sv</td>
		<td><?php echo $v119_sv; ?></td>
	</tr>
	<tr>
		<td>Introduce sonda de muestreo cumpliendo con lo establecido en normas e instructivos ( en exhosto de doble salida el que más humé) </td>
		<td>val120</td>
		<td>$v120_sv</td>
		<td><?php echo $v120_sv; ?></td>
	</tr>
	<tr>
		<td>Realiza la toma de muestra de acuerdo a las instrucciones del aplicativo.</td>
		<td>val121</td>
		<td>$v121_sv</td>
		<td><?php echo $v121_sv; ?></td>
	</tr>
		<tr>
		<td colspan="3" bgcolor="e2e2e2">
			<center>
			<b><br></b>
			</center>
		</td>
		
	</tr>
	<tr>
		<td>ANEXO A - Adaptaciones vehículos de enseñanza </td>
		<td>val122</td>
		<td>$v122_sv</td>
		<td><?php echo $v122_sv; ?></td>
	</tr>
	<tr>
		<td>ANEXO B - 3ra placa vehículos públicos</td>
		<td>val123</td>
		<td>$v123_sv</td>
		<td><?php echo $v123_sv; ?></td>
	</tr>
	</tr>
		<tr>
		<td colspan="3" bgcolor="e2e2e2">
			<center>
			<b>RUIDOS NTC 4194</b>
			</center>
		</td>
	</tr>
	<tr>
		<td>Ubica correctamente el sensor de revoluciones</td>
		<td>val124</td>
		<td>$v124_sv</td>
		<td><?php echo $v124_sv; ?></td>
	</tr>
	<tr>
		<td>Ubica el sonómetro a la distancia, altura y ángulo correcto</td>
		<td>val125</td>
		<td>$v125_sv</td>
		<td><?php echo $v125_sv; ?></td>
	</tr>
	<tr>
		<td>Hace uso adecuado y sigue las instrucciones del software</td>
		<td>val126</td>
		<td>$v126_sv</td>
		<td><?php echo $v126_sv; ?></td>
	</tr>
	<tr>
		<td colspan="3" bgcolor="e2e2e2">
			<center>
			<b><br></b>
			</center>
		</td>
	</tr>
	<!--
	<tr>
		<td>Mantiene la competencia para inspeccionar</td>
		<td>val127</td>
		<td>$v127_sv</td>
		<td><?php //echo $v127_sv; ?></td>
	</tr>
	<tr>
		<td>El Inspector Técnico esta deacuerdo con la calificación evaluada?</td>
		<td>val128</td>
		<td>$v128_sv</td>
		<td><?php //echo $v128_sv; ?></td>
	</tr>
	-->
	<tr>
		<td>OBSERVACIONES DE LA SUPERVISIÓN</td>
		<td>val129</td>
		<td>$v129_sv</td>
		<td><?php echo $v129_sv; ?></td>
	</tr>
	<tr>
		<td colspan="3" bgcolor="GREEN">
			<center>
			<b><br></b>
			</center>
		</td>	
	</tr>
</table>
</center>
<br>
<center>
<table border="1">
	<tr>
		<td bgcolor="a8e8c8"><b>CRITERO</b></td>
		<td bgcolor="a8e8c8"><b>RESULTADO</b></td>
	</tr>
	<tr>
		<td>PRE-INSPECCION</td>
		<td><center>
			<?php 
				if ($preinspeccion==0)
				{
					$preinspeccion="No Aplica";
				}
				echo $preinspeccion; 
			?>
			</center></td>
	</tr>
	<tr>
		<td>VISUAL</td>
		<td><center>
			<?php
				if ($visual==0)
				{
					$visual="No Aplica";
				} 
				echo $visual; 
				?></center></td>
	</tr>
	<tr>
		<td>FRENOS</td>
		<td><center>
			<?php
				if ($frenosv==0)
				{
					$frenosv="No Aplica";
				} 
				echo $frenosv; ?></center></td>
	</tr>
	<tr>
		<td>SUSPENSION VISUAL</td>
		<td><center>
			<?php
				if ($suspensionv==0)
				{
					$suspensionv="No Aplica";
				} 
				echo $suspensionv; ?></center></td>
	</tr>
	<tr>
		<td>PRUEBA DE FRENOS</td>
		<td><center>
			<?php
				if ($frenosp==0)
				{
					$frenosp="No Aplica";
				} 
				echo $frenosp; ?></center></td>
	</tr>
	<tr>
		<td>PRUEBA DE LUCES</td>
		<td><center>
			<?php
				if ($lucesp==0)
				{
					$lucesp="No Aplica";
				} 
				echo $lucesp; ?></center></td>
	</tr>
	<tr>
		<td>PRUEBA DE SUSPENSION</td>
		<td><center>
			<?php
				if ($suspensionp==0)
				{
					$suspensionp="No Aplica";
				} 
				echo $suspensionp; ?></center></td>
	</tr>
	<tr>
		<td>GASES NTC 4983</td>
		<td><center>
			<?php
				if ($gases4983==0)
				{
					$gases4983="No Aplica";
				} 
				echo $gases4983; ?></center></td>
	</tr>
	<tr>
		<td>GASES NTC 4231</td>
		<td><center>
			<?php
				if ($gases4231==0)
				{
					$gases4231="No Aplica";
				} 
				echo $gases4231; ?></center></td>
	</tr>
	<tr>
		<td>ANEXO A</td>
		<td><center>
			<?php
				if ($v122_sv==0)
				{
					$v122_sv="No Aplica";
				} 
				echo $v122_sv; ?></center></td>
	</tr>
	<tr>
		<td>ANEXO B</td>
		<td><center>
			<?php
				if ($v123_sv==0)
				{
					$v123_sv="No Aplica";
				} 
				echo $v123_sv; ?></center></td>
	</tr>
	<tr>
		<td>RUIDOS NTC 4194</td>
		<td><center>
			<?php 
				if ($ruidos4194==0)
				{
					$ruidos4194="No Aplica";
				} 
				echo $ruidos4194; ?></center></td>
	</tr>

	<?php 
		//CALCULOS PARA MANTENER LA COMPETENCIA 
	/*
		echo $preinspeccion.'<br>...'; 
		echo $visual.'<br>'; 
		echo $frenosp.'<br>';
		echo $lucesp.'<br>';
		echo $suspensionp.'<br>';
		echo $gases4983.'<br>';
		echo $gases4231.'<br>';
		echo $v122_sv.'<br>';
		echo $v123_sv.'<br>';
		echo $ruidos4194.'<br>';
	*/	
		$na="No Aplica";
		$promedio_supervision=0;
		$promedio=0;
	// code para pasar las variables a array
		$variable=array ($preinspeccion,
			        	 $visual,
			        	 $frenosv,
			        	 $suspensionv,
			        	 $frenosp,
			        	 $lucesp,
			        	 $suspensionp,
			        	 $gases4983,
			        	 $gases4231,
			        	 $v122_sv,
			        	 $v123_sv,
			        	 $ruidos4194); 
    foreach($variable as $valor){
        static $cuenta=0;
        static $suma=0;
        if(is_numeric($valor)) {
            $cuenta++;
            //echo 'posición ['.$cuenta.'] ='.$valor.' más el resultado: '.$suma;
            $suma=$valor+=$suma;
          //echo  ' es: '.$suma.'<br/>';
           
        }       
        }        
        $promedio=$suma/$cuenta;
        echo '<b>El Promedio de "'.$cuenta.'"  CRITERIOS  evaluados es: <b><font size="15">'.$promedio.'</font><br/>';
        // fin Code de variables y promedio array

		//code para verificar si la variable es numerica
		/*
			 if(is_numeric($preinspeccion)) {
	        echo var_export($preinspeccion, true) . " es numérico", PHP_EOL;
		    } else {
		        echo var_export($preinspeccion, true) . " NO es numérico", PHP_EOL;
		    }
		*/
		if (($preinspeccion==$na)&&($visual==$na)&&($frenosv==$na)&&($suspensionv==$na)&&($frenosp==$na)&&($lucesp==$na)&&($suspensionp==$na)&&($gases4983==$na)&&($gases4231==$na)&&($v122_sv==$na)&&($v123_sv==$na)&&($ruidos4194==$na))
			{
				echo "<b>ING.".$v3_sv_datos."</b> EL FORMULARIO DE SUPERVISION NO ESTA DILIGENCIADO";
			}
			/*
		else
			{
				$promedio_supervision=(($preinspeccion+$visual+$frenosp+$lucesp+$suspensionp+$gases4983+$gases4231+$v122_sv+$v123_sv+$ruidos4194)/10);
			echo '<br> Promedio = '.$promedio_supervision;
			}
			*/
			if ($promedio<5) {
				$v127_sv="Para mantener la Competencia de Inspección, se requiere capacitación y formación.";
			}
			if ($promedio==5) {
				$v127_sv="SI Mantiene la Competencia.";
			}
	?>

	<tr>
		<td>Mantiene la competencia para inspeccionar?</td>
		<td>val127</td>
		<td>$v127_sv</td>
		<td><?php echo $v127_sv; ?></td>
	</tr>
<!--
	<tr>
		<td>El Inspector Técnico esta deacuerdo con la calificación evaluada?</td>
		<td>val128</td>
		<td>$v128_sv</td>
		<td><?php //echo $v128_sv; ?></td>
	</tr>
-->
</table>
</center>