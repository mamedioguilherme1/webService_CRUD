<?php require './../model/ServicioEscuela.php'; 
    $model = new ServicioEscuela();
?>
<?php require './header.php' ?>
    </nav>
    <div class="card text-center">
        <div class="card-body">
          
            <form action="#" method="get" >
                <div class="row">
                  <div class="col-lg-4 input-sum">
                      <input type="text" name="id" class="form-control" aria-label="Text input with dropdown button" placeholder="ID">
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4 input-sum">
                      <input type="text" name="n" class="form-control" aria-label="Text input with dropdown button" placeholder="Nombre Escuela">
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4 input-sum">
                      <input type="text" name="p" class="form-control" aria-label="Text input with dropdown button" placeholder="Profesor">
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4 input-sum">
                      <input type="text" name="est" class="form-control" aria-label="Text input with dropdown button" placeholder="Estudiante">
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4 input-sum">
                      <input type="Date" name="f" class="form-control" aria-label="Text input with dropdown button">
                  </div>
                </div>
                <input type=submit name="btnInsertar" value='Insertar' class="btn btn-primary" />
            </form>
            
        </div>
        <div class="alert alert-primary" role="alert">
            <?php

              $id = isset($_GET['id']) ? $_GET['id'] : "" ;
              $aux = $model->buscarID($id);
              $n = isset($_GET['n']) ? $_GET['n'] : "" ;
              $p = isset($_GET['p']) ? $_GET['p'] : "" ;
              $est = isset($_GET['est']) ? $_GET['est'] : "" ;
              $f = isset($_GET['f']) ? $_GET['f'] : "" ;
              if($id != "" && $n != "")
              {
                if($id != $aux->idE)
                {
                  $model->insertar($n, $p, $est, $f, $id);
                  echo "Datos insertados.";
                }else
                  echo "AVISO: No es posible agregar ese dato, ya existe!";
                
              }else
                echo "Necesita de datos!";
                  
            ?>
        </div>
    </div>
    <?php require 'footer.php'?>