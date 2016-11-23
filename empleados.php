<?php
   include('session.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>AbbeySHop - Wear your trips</title>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>AbbeySHop - Wear your trips</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">
</head>

    <body id="page-top">

        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                      <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                  </button>
                    <a class="navbar-brand page-scroll" href="#page-top">AbbeyShop</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="page-scroll" href="/abbeyshop/empleados.php">Inicio</a>
                        </li>
                        <li>
                            <a class="page-scroll" href = "logout.php">Salir</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        <aside class="bg-dark">
            <div class="container text-center">
                </br>
                <div class="call-to-action">
                    </br>
                    <h2>Empleados</h2>
                </div>
            </div>
        </aside>
        <div class="container">
            <h2>Control de empleados</h2>
            <p>Aquí podemos administrar los datos de empleados, inventario y clientes.</p>
            <ul class="nav nav-tabs">
                <li class="active"><a href="#home">Mi perfil</a></li>
                <li><a href="#menu1">Inventario</a></li>
                <li><a href="#menu2">Usuarios</a></li>
                <li><a href="#menu3">Empleados</a></li>
            </ul>
            <div class="row text-center">
                <div class="col-sm-3"></div>
                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <h3>Mi Perfil</h3>
                        <div id="perfil" class="text-center"></div>
                        <div class="perfil_div"></div>
                        <div class="col-sm-3"></div>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <h3>Inventario</h3>



                        <table class="table table-bordered">
                            <tr>
                        <form class="form-inline" id="datosAlta">
                            <td>
                              <input size="5" value="" id="id" class="form-control" placeholder="ID" disabled>
                          </td>
                            <td>
                              <input size="7" value="" id="nombre" class="form-control" placeholder="Nombre">
                          </td>
                            <td>
                              $<input size=5 value="" id="precio" class="form-control" placeholder="Precio">MXN
                          </td>
                            <td>
                              <input size="5" value="" id="descripcion" class="form-control" placeholder="Descripcion">
                          </td>
                            <td>
                              <input onchange="upload_image();" type="file" class="inputFile" id="imagenProducto" style="width: 100px"/>
                              <div class="upload-msg"></div>
                          </td>
                            <td>
                              <input size="5" value="" id="cantidad" class="form-control" placeholder="Cantidad">
                          </td>
                            <td>
                              <input id="alta_producto_btn" type="submit" class="btn btn-primary" value="Dar de Alta"></br><input type="reset" class="btn btn-default" value="Limpiar">
                          </td>
                          </form>
                        </br>
                      </tr>
                  </table>

                  <div id="register_form"></div>
                        <div id="catalogo" class="text-center"></div>
                        <div id="borrar_form"></div>
                        <form id="catalogo_productos">
                        <div class="catalogo_div"></div>
                        </form>
                        <!-- Datos ajax Final -->
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <h3>Usuarios</h3>
                        </br>
                        <form class="form-inline">
                            <div class="form-group">
                                <label class="control-label col-xs-3">Username</label>
                                <div class="col-xs-9">
                                    <input type="email" class="form-control" id="buscarUsuario" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-offset-3 col-xs-6">
                                    <input type="submit" class="btn btn-primary" value="Buscar">
                                </div>
                            </div>
                        </form>
                        </br>
                        <form class="form-horizontal">
                            </br>
                            <div class="form-group">
                                <label class="control-label col-xs-3">Email:</label>
                                <div class="col-xs-9">
                                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-3">Password:</label>
                                <div class="col-xs-9">
                                    <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-3">Confirmar Password:</label>
                                <div class="col-xs-9">
                                    <input type="password" class="form-control" placeholder="Confirmar Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-3">Nombre:</label>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" placeholder="Nombre">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-3">Apellido Paterno:</label>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" placeholder="Apellido Paterno">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-3">Apellido Materno:</label>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" placeholder="Apellido Materno">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-3">Tarjeta de Céredito:</label>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" placeholder="Número de Tarjeta de Céredito" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-3">Telefono:</label>
                                <div class="col-xs-9">
                                    <input type="tel" class="form-control" placeholder="Teléfono">
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <div class="col-xs-offset-3 col-xs-6">
                                    <input type="submit" class="btn btn-primary" value="Actualizar">
                                    <input type="reset" class="btn btn-default" value="Limpiar">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="menu3" class="tab-pane fade">
                        <h3>Empleados</h3>
                        </br>
                        <form class="form-inline" id="Empleado_form">
                            <div class="form-group">
                                <label class="control-label col-xs-3">NSS</label>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" id="nss_buscarUsuario" placeholder="">
                                    <label id="nss_buscar_error">Por favor ingresa el NSS</label>
                                    <div id="mostrar"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-offset-3 col-xs-6">
                                    <input type="submit" class="btn btn-primary" id="btn_buscar_empleado" value="Buscar"/>
                                </div>
                            </div>
                        </form>
                        </br>
                        <form class="form-horizontal">
                            </br>
                            <div class="form-group">
                                <label class="control-label col-xs-3">Email:</label>
                                <div class="col-xs-9">
                                    <input type="email" class="form-control" id="emailEmpleado_buscar" placeholder="Email">
                                    <label id="email_error">Ingresa un email</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-3">Password:</label>
                                <div class="col-xs-9">
                                    <input type="password" class="form-control" id="passwordEmpleado_buscar" placeholder="Password">
                                    <label id="passvacio_error">Por favor ingresa una contraseña</label>
                                    <label id="password_error">El password no coincide</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-3">Confirmar Password:</label>
                                <div class="col-xs-9">
                                    <input type="password" class="form-control" id="password2_buscar" placeholder="Confirmar Password">
                                    <label id="password_error">El password no coincide</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-3">Nombre:</label>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" id="nombreEmpleado_buscar" placeholder="Nombre">
                                    <label id="nombre_error">Ingresa el nombre</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-3">Apellido Paterno:</label>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" id="empleadoApPaterno_buscar" placeholder="Apellido Paterno">
                                    <label id="apPaterno_error">Ingresa el apellido paterno</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-3">Apellido Materno:</label>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" id="empleadoApMaterno_buscar" placeholder="Apellido Materno">
                                    <label id="apMaterno_error">Ingresa el apellido materno</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-3">NSS:</label>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" id="empleadoNSS_buscar" placeholder="Número de Seguro Social">
                                    <label id="nss_error">Ingresa el Número de Seguro Social</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-3">Telefono:</label>
                                <div class="col-xs-9">
                                    <input type="tel" class="form-control" id="empleadoTelefono_buscar" placeholder="Teléfono">
                                    <label id="telefono_error">Ingresa un teléfono</label>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <div class="col-xs-offset-3 col-xs-6">
                                    <input type="submit" class="btn btn-primary" value="Dar de alta" id="alta_empleado_btn">
                                    <input type="reset" class="btn btn-default" value="Limpiar" id="limpiar_empleado_btn">
                                </div>
                            </div>
                        </form>
                        <div id="empleado_form"></div>
                    </div>
                </div>
                <hr>
            </div>
        </div>
        <aside class="bg-dark">
            <div class="container text-center">
                <div class="call-to-action">
                    <h2>¿Te gustó lo que viste?</h2>
                </div>
            </div>
        </aside>

        <!-- jQuery -->
        <script src="vendor/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function() {
                $(".nav-tabs a").click(function() {
                    $(this).tab('show');
                });
                $('.nav-tabs a').on('shown.bs.tab', function(event) {
                    var x = $(event.target).text(); // active tab
                    var y = $(event.relatedTarget).text(); // previous tab
                    $(".act span").text(x);
                    $(".prev span").text(y);
                });
            });
        </script>

        <script>
	function upload_image(){//Funcion encargada de enviar el archivo via AJAX
				$(".upload-msg").text('Cargando...');
				var inputFileImage = document.getElementById("imagenProducto");
				var file = inputFileImage.files[0];
				var data = new FormData();
				data.append('imagenProducto',file);
        data.append('nombre','input#id');

				/*jQuery.each($('#fileToUpload')[0].files, function(i, file) {
					data.append('file'+i, file);
				});*/

				$.ajax({
					url: "php/upload.php",        // Url to which the request is send
					type: "POST",             // Type of request to be send, called as method
					data: data, 			  // Data sent to server, a set of key/value pairs (i.e. form fields and values)
					contentType: false,       // The content type used when sending data to the server.
					cache: false,             // To unable request pages to be cached
					processData:false,        // To send DOMDocument or non processed data file it is set to false
					success: function(data)   // A function to be called if request succeeds
					{
						$(".upload-msg").html(data);
						window.setTimeout(function() {
						$(".alert-dismissible").fadeTo(500, 0).slideUp(500, function(){
						$(this).remove();
						});	}, 5000);
					}
				});

			}
</script>

        <script>
            $(document).ready(function() {
                catalogo(1);
                perfil(1);
                $("label#email_error").hide();
                $("label#password_error").hide();
                $("label#nombre_error").hide();
                $("label#apPaterno_error").hide();
                $("label#apMaterno_error").hide();
                $("label#nss_error").hide();
                $("label#telefono_error").hide();
                $("label#passvacio_error").hide();
                $("label#nss_buscar_error").hide();
            });

            function catalogo(page) {
                var parametros = {
                    "action": "ajax",
                    "page": page
                };
                $("#catalogo").fadeIn('slow');
                $.ajax({
                    url: 'php/catalogo.php',
                    data: parametros,
                    beforeSend: function(objeto) {
                        $("#catalogo").html("");
                    },
                    success: function(data) {
                        $(".catalogo_div").html(data).fadeIn('slow');
                        $("#catalogo").html("");
                    }
                })
            }

            function perfil(page) {
                var parametros = {
                    "action": "ajax",
                    "page": page
                };
                $("#perfil").fadeIn('slow');
                $.ajax({
                    url: 'php/mi_perfil.php',
                    data: parametros,
                    beforeSend: function(objeto) {
                        $("#perfil").html("");
                    },
                    success: function(data) {
                        $(".perfil_div").html(data).fadeIn('slow');
                        $("#perfil").html("");
                    }
                })

                //Aquí puedo ingresar la otra funcion
                $("#alta_producto_btn").click(function() {
		                //Obtenemos el valor del campo nombre

		                  //var id = $("input#id").val();
                      var nombre = $("input#nombre").val();
                      var precio = $("input#precio").val();
                      var descripcion = $("input#descripcion").val();
                      var imagen = $("input#imagenProducto").val();

                      var cantidad = $("input#cantidad").val();
		                    //Validamos el campo nombre, simplemente miramos que no esté vacío
		                      //if (id == "") {
			                      //$("label#name_error").show();
			                      //$("input#name").focus();
			                      //return false;
		                      //}

                          if (nombre == "") {
			                      $("label#name_error").show();
			                      $("input#name").focus();
			                      return false;
		                      }

                          if (precio == "") {
			                      $("label#name_error").show();
			                      $("input#name").focus();
			                      return false;
		                      }

                          if (descripcion == "") {
			                      $("label#name_error").show();
			                      $("input#name").focus();
			                      return false;
		                      }
                          /*
                          if (foto == "") {
			                      $("label#name_error").show();
			                      $("input#name").focus();
			                      return false;
		                      }*/

                          if (cantidad == "") {
			                      $("label#name_error").show();
			                      $("input#name").focus();
			                      return false;
		                      }

                          //Construimos la variable que se guardará en el data del Ajax para pasar al archivo php que procesará los datos
                          var foto = imagen.match(/[-_\w]+[.][\w]+$/i)[0];
                          //alert(foto); //compramos-empresa-de-cualquier-tipo.jpg

                          var dataString = 'nombre=' + nombre + '&precio=' + precio + '&descripcion=' + descripcion + '&cantidad=' + cantidad + '&foto=' + foto;

		                      $.ajax({
                            type: "POST",
                            url: "php/alta_producto.php",
                            data: dataString,
                            success: function() {
                              $('#register_form').html("<div id='message'></div>");
                              $('#message').html("<h2>Tus datos han sido guardados correctamente!</h2>")
                              .hide()
                              .fadeIn(1500, function() {
                                $('#message').append("<a href='empleados.php'>Ver cambios</a>");
                              });
                            }
                          });
                          return false;
                        });
                //Aquí termina la otra funcion
                }
        </script>
        <script>
        //Aquí puedo ingresar la otra funcion
        $("#alta_empleado_btn").click(function() {

          $("label#email_error").hide();
          $("label#password_error").hide();
          $("label#nombre_error").hide();
          $("label#apPaterno_error").hide();
          $("label#apMaterno_error").hide();
          $("label#nss_error").hide();
          $("label#telefono_error").hide();
          $("label#passvacio_error").hide();
            //Obtenemos el valor del campo nombre
              var email = $("input#emailEmpleado_buscar").val();
              var password = $("input#passwordEmpleado_buscar").val();
              var password2 = $("input#password2_buscar").val();
              var nombre = $("input#nombreEmpleado_buscar").val();
              var apPaternoEmpleado = $("input#empleadoApPaterno_buscar").val();
              var apMaternoEmpleado = $("input#empleadoApMaterno_buscar").val();
              var nss = $("input#empleadoNSS_buscar").val();
              var telefono = $("input#empleadoTelefono_buscar").val();

                //Validamos el campo nombre, simplemente miramos que no esté vacío
                  if (email == "") {
                    $("label#email_error").show();
                    $("input#emailEmpleado").focus();
                    return false;
                  }

                  if(password=="")
                  {
                    $("label#passvacio_error").show();
                    $("input#passwordEmpleado").focus();
                  }
                  else {
                    if (password!=password2) {
                      $("label#password_error").show();
                      $("input#passwordEmpleado").focus();
                      return false;
                    }
                  }

                  if (nombre == "") {
                    $("label#nombre_error").show();
                    $("input#nombreEmpleado").focus();
                    return false;
                  }

                  if (apPaternoEmpleado == "") {
                    $("label#apPaterno_error").show();
                    $("input#name").focus();
                    return false;
                  }

                  if (apMaternoEmpleado == "") {
                    $("label#apMaterno_error").show();
                    $("input#name").focus();
                    return false;
                  }

                  if (nss == "") {
                    $("label#nss_error").show();
                    $("input#name").focus();
                    return false;
                  }

                  if (telefono == "") {
                    $("label#telefono_error").show();
                    $("input#name").focus();
                    return false;
                  }


                  var dataString = 'emailEmpleado=' + email + '&passwordEmpleado=' + password + '&nombreEmpleado=' + nombre + '&paternoEmpleado=' + apPaternoEmpleado + '&maternoEmpleado=' + apMaternoEmpleado + '&empleadoNSS=' + nss + '&empleadoTelefono=' + telefono;

                  $.ajax({
                    type: "POST",
                    url: "php/alta_empleado.php",
                    data: dataString,
                    success: function() {
                      $('#empleado_form').html("<div id='message'></div>");
                      $('#message').html("<h2>El empleado ha sido dado de alta correctamente!</h2>")
                      .hide()
                      .fadeIn(1500, function() {
                        $('#messasge').append("<a href='empleados.php'>Ver cambios</a>");
                      });
                    }
                  });
                  return false;
                });
        //Aquí termina la otra funcion
        </script>
        <script>
        //Aquí puedo ingresar la otra funcion
        $("#btn_buscar_empleado").click(function() {
                $("label#nss_buscar_error").hide();
                var nss = $("input#nss_buscarUsuario").val();

                //Validamos el campo nombre, simplemente miramos que no esté vacío
                  if (nss == "") {
                    $("label#nss_buscar_error").show();
                    $("input#nss_buscar_error").focus();
                    return false;
                  }

                  var dataString = 'nss=' + nss;
                  //alert (dataString)
                  $.ajax({
                    type: "POST",
                    url: "php/buscar_empleado.php",
                    data: dataString,
                    dataType: 'json',
                    success: function(data) {
                      var id = data[0];              //get id
                      var nombre = data[1];
                      var apPaterno = data[2];
                      var apMaterno = data[3];
                      var nss = data[4];
                      var email = data[5];
                      var telefono = data[6];
                      var password = data[7];
                      $("#nombreEmpleado_buscar").val(nombre);
                      $("#emailEmpleado_buscar").val(email);
                      $("#empleadoApPaterno_buscar").val(apPaterno);
                      $("#empleadoApMaterno_buscar").val(apMaterno);
                      $("#passwordEmpleado_buscar").val(password);
                      $("#password2_buscar").val(password);
                      $("#empleadoNSS_buscar").val(nss);
                      $("#empleadoTelefono_buscar").val(telefono);
                      $("#alta_empleado_btn").prop('disabled', true);
                      $('#messasge').html("").hide().fadeIn(1500, function() {
                        $('#messasge').append("<a href='empleados.php'>Ver cambios</a>");
                      });
                    }
                  });
                  return false;
                });
        //Aquí termina la otra funcion
        </script>
        <script>
        //Aquí puedo ingresar la otra funcion
        $("#limpiar_empleado_btn").click(function() {
          $("#alta_empleado_btn").prop('disabled', false);
        });
        //Aquí termina la otra funcion
        </script>
        <!-- Plugin JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
        <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

        <!-- Theme JavaScript -->
        <script src="js/creative.min.js"></script>

    </body>

</html>
