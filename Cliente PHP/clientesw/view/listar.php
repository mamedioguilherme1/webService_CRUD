<?php require './../model/ServicioEscuela.php';
	  $model = new ServicioEscuela();
?>
<?php require 'header.php'; ?>
<br>
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<table class="table col-md-6 gridDatos listarGrid">
				  <thead>
				    <tr>
				      <th>ID</th>
				      <th>Nombre</th>
				      <th>Profesor</th>
				      <th>Estudiante</th>
				      <th>Fecha</th>
				    </tr>
				  </thead>
				  <tbody>
					 
					<?php
					$datos = $model->listar()->return;
					if($datos != null)
					{
						foreach($datos as $lista)
						  	{

							  	if($lista != null)
							  	{
							?>		
								    <tr>
								      <td><?php echo $lista->idE;?></td>
								      <td><?php echo $lista->nombre;?></td>
								      <td><?php echo $lista->profesor;?></td>
								      <td><?php echo $lista->estudiante;?></td>
								      <td>
								      	<?php
									      $date = new DateTime($lista->fechaCreacion);
	            						  $result = $date->format('d/m/Y');
										  echo $result;
								      	?>
								      </td>
								    </tr>	
							<?php
								}
							} 

						}else
							echo "AVISO: No hay datos!"; ?>
				  </tbody>
			</table>
		</div>
	</div>
</div>
<?php require 'footer.php'; ?>