<?php require './../model/ServicioEscuela.php';
	  $model = new ServicioEscuela();
?>
<?php require './../view/header.php'; ?>

    </nav>
    <div class="card text-center">
        <div class="card-body">
          
            <form action="#" method="post">
                <div class="row">
                  <div class="col-lg-4 input-sum">
                      <input type="text" name="id" class="form-control" aria-label="Text input with dropdown button" placeholder="ID">
                  </div>
                  <div class="btnEditar">
                  		<input type="submit" name="btnBuscar" class="btn btn-primary" value="Buscar" />
                  </div>
               	</div>
            </form>
            <br><br>
            <form action="#" method="post">
              <?php
                $id = isset($_POST['id']) ? $_POST['id'] : "" ;
                $getEsc = $model->buscarID($id);
                if($id != ""){
                    if($id == $getEsc->idE)
                    {
              ?>
              <div class="idActualizar"> ID: <?php echo $id; ?> </div>
            	<input type="hidden" name="id" value="<?php echo $id; ?>">

                <div class="row">
                  <div class="col-lg-4 input-sum">
                      <input type="text" name="n" class="form-control" placeholder="Nombre" aria-label="Text input with dropdown button" value="<?php if($id != "") echo $getEsc->nombre; ?>"/>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4 input-sum">
                      <input type="text" name="p" placeholder="Profesor" class="form-control" aria-label="Text input with dropdown button"value="<?php if($id != "") echo $getEsc->profesor; ?>">
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4 input-sum">
                      <input type="text" name="est" placeholder="Estudiante" class="form-control" aria-label="Text input with dropdown button" value="<?php if($id != "") echo $getEsc->estudiante; ?>">
                  </div>
                </div>
                <div>Fecha Antigua:
                  <?php if($id != ""){
                          $date = new DateTime($getEsc->fechaCreacion);
                          $result = $date->format('d/m/Y');
                          echo $result;
                        }
                  ?>
                    
                  </div>
                <div class="row">
                  <div class="col-lg-4 input-sum">
                      <input type="Date" name="f"  class="form-control" aria-label="Text input with dropdown button" value="">
                  </div>
                </div>

                <input type=submit name="btnEditar" value='Editar' class="btn btn-primary" />
            </form>
            <?php 
                    }else echo "Ese Dato no Existe!!"; 
                }
            ?>
        </div>
        <div class="alert alert-primary" role="alert">
            <?php

              
              $id = isset($_POST['id']) ? $_POST['id'] : "" ;
              $aux = $model->buscarID($id);
              $n = isset($_POST['n']) ? $_POST['n'] : "" ;
              $p = isset($_POST['p']) ? $_POST['p'] : "" ;
              $est = isset($_POST['est']) ? $_POST['est'] : "" ;
              $f = isset($_POST['f']) ? $_POST['f'] : "" ;
              if($id != "" && $n != "")
              {
                if($id == $aux->idE)
                {
                  $model->editar($id, $n, $p, $est, $f);
                  echo "Datos Actualizados.";
                }else
                  echo "AVISO: No se puede EDITAR, ese dato NO existe!";
                
              }
                  
            ?>
        </div>
    </div>
<?php require './../view/footer.php'; ?>