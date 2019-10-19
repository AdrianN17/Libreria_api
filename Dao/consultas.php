<?php

	include_once '../conexion/conexion.php';

	/**
	 * 
	 */
	class consultas  
	{
		
		private $db;
		
		function __construct() {
			$this -> db = new conexion();
			
		}

		function iniciar_sesion($id, $password)
		{
			$con = $this->db->getConnection();

			$query = "CALL INICIAR_SESION(?,?)";

			$stmt = $con->prepare($query);
			$stmt->bindParam(1, $id);
			$stmt->bindParam(2, $password);

			$validador =$stmt->execute();

			$row = $stmt->fetchAll();


			return $row[0]["ID_usuario"];
		}
	}

?>