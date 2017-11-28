<?php require './../model/ServicioEscuela.php';
	  $model = new ServicioEscuela();

?>
<?php require './../view/header.php'; ?>

    </nav>
    <div class="card text-center">
        <div class="card-body">
            <form action="#" method="get">
                <div class="row">
                  <div class="col-lg-4 input-sum">
                      <input type="text" name="id" class="form-control" aria-label="Text input with dropdown button" placeholder="ID">
                  </div>
                  <div class="btnEditar">
                  	  <input type="submit" name="btnBuscar" class="btn btn-primary" value="Buscar"/>
                  </div>
               	</div>
            </form>
            
        </div>
        <div class="container">
        	<div class="row">
        		<div class="col-md-8 lBuscar">
        			<?php
		            	$id = isset($_GET['id']) ? $_GET['id'] : "" ;
						$getEsc = $model->buscarID($id);
						if($id != ""){
							if($id == $getEsc->idE)
							{
	            	?>
	            	<ul class="list-group">
				   		<li class="list-group-item">ID: <?php echo $getEsc->idE ?> </li>
					  	<li class="list-group-item">Nombre Escuela: <?php echo $getEsc->nombre ?> </li>
					  	<li class="list-group-item">Profesor: <?php echo $getEsc->profesor ?> </li>
					  	<li class="list-group-item">Estudiante: <?php echo $getEsc->estudiante ?> </li>
					  	<li class="list-group-item">Fecha Creacion: 
					  		<?php
			            		$date = new DateTime($getEsc->fechaCreacion);
			            		$result = $date->format('d/m/Y');
								echo $result;
							?>
				  		</li>
					</ul>
					<?php
							}else{
								echo "AVISO: Ese dato NO existe!";
							}
								
						}else
							echo "Necesita de ID";
	            	?> 
        		</div>
        	</div>
            
        </div>
    </div>
<?php require './../view/footer.php'; ?>