<?php
	include_once '../Dao/consultas.php';

	if(isset($_POST['user']) && $_POST['pass'])
	{
		$user = $_POST['user'];
		$pass = $_POST['pass'];

		$consulta = new consultas();

		$data = $consulta->iniciar_sesion($user,$pass);

		if($data!= NULL)
		{
			echo json_encode($data);
		}
	}
				
	
?>