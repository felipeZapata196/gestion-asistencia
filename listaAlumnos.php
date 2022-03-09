<?php

include("con_db.php");

if (isset($_POST['register'])) {
	if (strlen($_POST['nombreAlumno']) >= 1 && strlen($_POST['dni']) >= 1) {

		$nombreAlumno = trim($_POST['nombreAlumno']);
		$dni = trim($_POST['dni']);
		$curso = trim($_POST['curso']);
		$cuentaBancaria = trim($_POST['cuentaBancaria']);

		$consulta = "INSERT INTO listaalumnos(nombreAlumno, dni, curso, cuentaBancaria) VALUES ('$nombreAlumno','$dni','$curso','$cuentaBancaria')";
		$resultado = mysqli_query($conex, $consulta);
		if ($resultado) {
?>
			<h3 class="ok">¡Te has inscripto correctamente!</h3>
		<?php
		} else {
		?>
			<h3 class="bad">¡Ups ha ocurrido un error!</h3>
		<?php
		}
	} else {
		?>
		<h3 class="bad">¡Por favor complete los campos!</h3>
<?php
	}
}

?>