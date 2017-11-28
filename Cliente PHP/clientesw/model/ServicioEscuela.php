<?php

	class ServicioEscuela
	{
		private $client;
		private $url;
		public function __construct()
		{
			try
			{
				$this->url = "http://localhost:7101/ServidorEscuela-ServidorEscuela-context-root/SWEscuelaPort?WSDL";
            	$this->client = new SoapClient($this->url);

			}catch (SoapFault $ex)
			{
				echo $ex->getMessage();
			}
		}

		function insertar($n, $p, $est, $f, $id)
		{
			
			$params = array('arg0' => $n, 
							'arg1' => $p,
							'arg2' => $est,
							'arg3' => $f,
							'arg4' => $id
			);

			$this->client->__soapCall('addEscuela', array('parameters'=> $params));
		}

		function listar()
		{
			$getEsc = $this->client->__soapCall('listarEscuela', array());
			
			return $getEsc;
		}

		function editar($id, $n, $p, $est, $f)
		{	
			$params = array('arg0' => $id,
							'arg1' => $n, 
							'arg2' => $p,
							'arg3' => $est,
							'arg4' => $f
			);

			$this->client->__soapCall('editarSW', array('parameters'=> $params));
		}

		function buscarID($id)
		{
			$params = array('arg0' => $id);
			$getEsc = $this->client->__soapCall('buscarSW', array('parameters'=> $params));

			return $getEsc->return;
		}

		function eliminar($id)
		{
			$params = array('arg0' => $id);

			$this->client->__soapCall('eliminarEscuela', array('parameters'=> $params));
		}
	}
?>