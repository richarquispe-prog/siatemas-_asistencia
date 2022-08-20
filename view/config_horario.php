<?php
//aqui se hace la configuracion del horario

function inicio(){
	require_once ("../model/conexion.php");
	session_start();
		include("head.php");
		include("leftmenu.php");
		//nos traemos todo de horario
		$sql0="SELECT  * FROM horario";
		$res0 = mysqli_query($conexion, $sql0);

		if(mysqli_num_rows($res0) >0){
			$row0 = mysqli_fetch_assoc($res0);
		}
	?>
	<!--aqui es lo que se le muestra al usuario-->
	<div class="tab-content flex-grow-1 ms-3" id="v-tabs-tabContent">
		<div  class="container-fluid my-5">
			<h3>Configurar Horarios laborales</h3>
			<form id="horarios">
				<input type="hidden" id='process' name='process' value="guardar" />
				<table>
					<tr>
						<td>Dia	</td>
						<td>Hora entrada	</td>
						<td>Minutos entrada	</td>
						<td>Hora  Salida	</td>
						<td>Minutos Salida	</td>

					</tr>
					<?php
					//aqui se le asigna a las siguientes variables los datos
					//traidos de la base 
					list($h_ent,$m_ent,$s_ent)=explode(':',$row0['hora_e_sem']);
					list($h_sal,$m_sal,$s_sal)=explode(':',$row0['hora_s_sem']);
					list($h_ents,$m_ents,$s_ents)=explode(':',$row0['hora_e_fd']);
					list($h_sals,$m_sals,$s_sals)=explode(':',$row0['hora_s_fd']);
					//luego se imprime al usuario
					echo "<tr>
						<td class='dia'>Lunes a Viernes</td>
						<td><input type='text'  id='hora_ent1' name='hora_ent1' class='datas form-control input-md integer_positive' min='0' max='23' value='".$h_ent."'></td>
						<td><input type='text'  id='min_ent1' name='min_ent1'  class='datas form-control input-md integer_positive'  min='0' max='60' value='".$m_ent."'></td>
						<td><input type='text'  id='hora_sal1' name='hora_sal1'   class='datas form-control input-md integer_positive'  min='0' max='23'  value='".$h_sal."'></td>
						<td><input type='text'  id='min_sal1' name='min_sal1'  class='datas form-control input-md integer_positive'  min='0' max='60' value='".$m_sal."'></td>
						</tr>";
					echo"<tr>
						<td class='dia'>Sabado</td>
						<td><input type='text'  id='hora_ent2' name='hora_ent2' class='datas form-control input-md integer_positive' min='0' max='23' value='".$h_ents."'></td>
						<td><input type='text'  id='min_ent2' name='min_ent2'  class='datas form-control input-md integer_positive'  min='0' max='60' value='".$m_ents."'></td>
						<td><input type='text'  id='hora_sal2' name='hora_sal2'   class='datas form-control input-md integer_positive'  min='0' max='23'  value='".$h_sals."'></td>
						<td><input type='text'  id='min_sal2' name='min_sal2'  class='datas form-control input-md integer_positive'  min='0' max='60' value='".$m_sals."'></td>
						</tr>";
					?>
				</table>
		</div>
		<div  class="container-fluid my-5">
			<div class="justify-content-center ">
				<div class="border border-light p-3 mb-4">
					<div class="text-center">
					<!--aqui dejamos el boton de guardar los datos si en caso los modifica-->
						<input type="submit" name="guardar2" id="guardar2"class="btn btn-outline-primary" value="Guardar datos">
						<a type="button" href="reporteEmp.php" class="btn btn-outline-danger">Cancelar</a>
					</div>
				</div>
			</div>
		</div>
			</form>
	</div>
	<?php include_once ("foot.php");?>
	<script src="js/config_horario.js"></script>
	<?php
}
//aqui es cuando de click en guardar

if (!isset($_REQUEST['process'])){
	inicio();
}


?>
