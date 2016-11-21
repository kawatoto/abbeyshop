<?php
    include('../session.php');
   # conectare la base de datos
    $con=@mysqli_connect('127.0.0.1', 'root', 'Parachutes0');
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
	  $action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	  if($action == 'ajax'){
    //consulta principal para recuperar los datos
    $user=$_SESSION['login_user'];
		$query = mysqli_query($con,"SELECT email,password,nombre,apPaterno,apMaterno,nss,telefono FROM sakila.Empleado where email='$user'");
?>
			<?php
			$row = mysqli_fetch_array($query)
			?>
          <form class="form-horizontal">
              </br>
              <div class="form-group">
                  <label class="control-label col-xs-3">Email:</label>
                  <div class="col-xs-9">
                      <input type="email" class="form-control" id="inputEmail" value="<?php echo $row['email'];?>">
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-xs-3">Password:</label>
                  <div class="col-xs-9">
                      <input type="password" class="form-control" id="inputPassword" value="<?php echo $row['password'];?>">
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-xs-3">Confirmar Password:</label>
                  <div class="col-xs-9">
                      <input type="password" class="form-control" value="<?php echo $row['password'];?>">
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-xs-3">Nombre:</label>
                  <div class="col-xs-9">
                      <input type="text" class="form-control" value="<?php echo $row['nombre'];?>">
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-xs-3">Apellido Paterno:</label>
                  <div class="col-xs-9">
                      <input type="text" class="form-control" value="<?php echo $row['apPaterno'];?>">
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-xs-3">Apellido Materno:</label>
                  <div class="col-xs-9">
                      <input type="text" class="form-control" value="<?php echo $row['apMaterno'];?>">
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-xs-3">NSS:</label>
                  <div class="col-xs-9">
                      <input type="text" class="form-control" value="<?php echo $row['nss'];?>">
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-xs-3">Telefono:</label>
                  <div class="col-xs-9">
                      <input type="tel" class="form-control" value="<?php echo $row['telefono'];?>">
                  </div>
              </div>
              <br>
              <div class="form-group">
                  <div class="col-xs-offset-3 col-xs-6">
                      <input type="submit" id="actualizar" class="btn btn-primary" value="Actualizar">
                      <input type="reset" class="btn btn-default" value="Limpiar">
                  </div>
              </div>
          </form>

          <?php
        }
    ?>
