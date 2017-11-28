<?php require './../model/ServicioEscuela.php';
	  $model = new ServicioEscuela();

?>
<?php require './../view/header.php'; ?>

    </nav>
    <div class="card text-center">
        <div class="card-body">
          
            <form action="#" method="get" >
                <div class="row">
                  <div class="col-lg-4 input-sum">
                      <input type="text" name="id" class="form-control" aria-label="Text input with dropdown button">
                  </div>
                </div>
                <input type=submit name="btnEditar" value='Eliminar' class="btn btn-primary" />
            </form>
            
        </div>
        <div class="alert alert-primary" role="alert">
            <?php

              $id = isset($_GET['id']) ? $_GET['id'] : "" ;
              $aux = $model->buscarID($id);
              $dato = $model->buscarID($id);
              if($id != "")
              {
                if($id == $dato->idE)
                {
                  $model->eliminar($id);
                  echo "Eliminado.";
                }else
                  echo "AVISO: No se puede eliminar, no existe ese ID!";  
              }else
                echo "Necesita de ID!";
                  
            ?>
        </div>
    </div>
<?php require './../view/footer.php'; ?>