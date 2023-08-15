<?php
session_start();
class Conectar {
	protected $dbh;
		protected function Conexion(){
			try {
				$conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=mesadepartes","root","");
				$conectar->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			//print('conectado a la Base de datos: MEsa de partes');
				return $conectar;					
			} catch (Exception $e) {
				print "¡Error BD!: " . $e->getMessage() . "<br/>";
				die();					
			}
		}
		
		public function set_names(){	
			return $this->dbh->query("SET NAMES 'utf8'");
		}

		public function ruta(){
			return "http://localhost/proyectoUNO/";
		}
	}
?>