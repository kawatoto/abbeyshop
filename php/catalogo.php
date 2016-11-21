<?php
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
		include 'pagination.php'; //incluir el archivo de paginación
		//las variables de paginación
		$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
		$per_page = 4; //la cantidad de registros que desea mostrar
		$adjacents  = 4; //brecha entre páginas después de varios adyacentes
		$offset = ($page - 1) * $per_page;
		//Cuenta el número total de filas de la tabla*/
		$count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM sakila.Producto");
		if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}
		$total_pages = ceil($numrows/$per_page);
		//$reload = 'index.php';
		//consulta principal para recuperar los datos
		$query = mysqli_query($con,"SELECT idProducto,nombre,precio,descripcion,foto,cantidad FROM sakila.Producto  order by idProducto LIMIT $offset,$per_page");

		if ($numrows>0){
			?>
		<table class="table table-bordered">
			  <thead>
				<tr>
				  <th class="text-center">ID Producto</th>
				  <th class="text-center">Nombre</th>
				  <th class="text-center">Precio</th>
				  <th class="text-center">Descripcion</th>
				  <th class="text-center">Imagen</th>
          <th class="text-center">Cantidad</th>
          <th class="text-center">Acciones</th>
				</tr>
			</thead>
			<tbody>
			<?php
			while($row = mysqli_fetch_array($query)){
				?>
				<tr>
          <form>
					<td><input size="5" value="<?php echo $row['idProducto'];?>" class="form-control"></td>
					<td><input size="10" value="<?php echo $row['nombre'];?>" class="form-control"></td>
					<td>$<input size="5" value="<?php echo $row['precio'];?>" class="form-control">MXN</td>
					<td><input size="5" value="<?php echo $row['descripcion'];?>" class="form-control"></td>
					<td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['foto']).'" width="150" height="150"/>'?></td>
          <td><input size="5" value="<?php echo $row['cantidad'];?>" class="form-control"></td>
          <td><input type="submit" class="btn btn-primary" value="Actualizar"> <input type="reset" class="btn btn-default" value="Borrar" class="form-control"></td>
          </form>
				</tr>
				<?php
			}
			?>
			</tbody>
		</table>
		<div class="table-pagination pull-right">
			<?php echo paginate($reload, $page, $total_pages, $adjacents);?>
		</div>

			<?php

		} else {
			?>
			<div class="alert alert-warning alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4>Aviso!!!</h4> No hay datos para mostrar
            </div>
			<?php
		}
	}
?>
