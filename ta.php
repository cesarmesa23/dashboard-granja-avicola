<?php 
	require('conexion.php');
	
	//consulta ultimo regitro de temperatura
	$consulta="select * from temperatura order by id desc limit 1";
	mysql_query("SET NAMES utf8");
	$resultado=mysql_query($consulta,$conexion);
	$datos=mysql_fetch_array($resultado);
	$valor=$datos['valor'];
	
	//consulta ultimo regitro de humedad
	$consultaHumedad="select * from humedad order by id desc limit 1";
	mysql_query("SET NAMES utf8");
	$resultadoHumedad=mysql_query($consultaHumedad,$conexion);
	$datosHumedad=mysql_fetch_array($resultadoHumedad);
	$valorHumedad=$datosHumedad['valor'];
	
	//consulta ultimo regitro de amoniaco
	$consultaAmoniaco="select * from amoniaco order by id desc limit 1";
	mysql_query("SET NAMES utf8");
	$resultadoAmoniaco=mysql_query($consultaAmoniaco,$conexion);
	$datosAmoniaco=mysql_fetch_array($resultadoAmoniaco);
	$valorAmoniaco=$datosAmoniaco['valor'];
	
	//Consulta de amoniaco fuera de parametro (estado=1)
	$consultaRegistros="select * from amoniaco where estado='1' and fecha=curdate();";
	mysql_query("SET NAMES utf8");
	$resultadoRegistro=mysql_query($consultaRegistros,$conexion);
	$totalFilas=mysql_num_rows($resultadoRegistro);	
	
	//Consulta de temperatura fuera de parametro (estado=1)
	$consultaRegistros2="select * from temperatura where estado='1' and fecha=curdate();";
	mysql_query("SET NAMES utf8");
	$resultadoRegistro2=mysql_query($consultaRegistros2,$conexion);
	$totalFilas2=mysql_num_rows($resultadoRegistro2);	
	
	//Consulta de humedad fuera de parametro (estado=1)
	$consultaRegistros3="select * from humedad where estado='1' and fecha=curdate();";
	mysql_query("SET NAMES utf8");
	$resultadoRegistro3=mysql_query($consultaRegistros3,$conexion);
	$totalFilas3=mysql_num_rows($resultadoRegistro3);	
	
	//Consulta de agua fuera de parametro (estado=1)
	$consultaRegistros4="select * from agua where estado='1' and fecha=curdate();";
	mysql_query("SET NAMES utf8");
	$resultadoRegistro4=mysql_query($consultaRegistros4,$conexion);
	$totalFilas4=mysql_num_rows($resultadoRegistro4);	
	
	//CONSULTA DE REGISTROS FUERA DE PARAMETRO
	$consultaUnion="select * from amoniaco where estado='1' and fecha=curdate()
	union 
	select * from humedad where estado='1' and fecha=curdate()
	union
	select * from temperatura where estado='1' and fecha=curdate();";
	 mysql_query("SET NAMES utf8");
    $result=mysql_query($consultaUnion,$conexion);
	
	
	//SUMA DE REGISTROS CON VALOR FUERA DE RANGO NORMALES--
	$sumaRegistros=$totalFilas+$totalFilas2+$totalFilas3+$totalFilas4;
?>


<!DOCTYPE html>
<html lang="en">

<head>
	
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
	<meta http-equiv="Refresh" content=""; url="url_destino.php" />
    <!-- Title Page-->
    <title>Panel de Control</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
	
	
    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
	
	<!-- JS FILTRO DATE RANGE-->
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
	<!-- FIN JS FILTRO DATE RANGE-->


	
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="log" href="index.html">
                            <img src="images/icon/Congrats.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Panel de Control</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.html">Estadisticas</a>
                                </li>
                                
                            </ul>
                        </li>
                          
                        
                       
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="log">
                <a href="#">
                    <img src="images/icon/Congrats.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Panel de Control</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="index.html">Estadisticas</a>
                                </li>
                                
                            </ul>
                        </li>
                      
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-hidden au-input--xl" type="hidden" name="search" placeholder="Search for datas &amp; reports..." />
                               
                                    
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                  
                                    <div class="noti__item js-item-menu">
									 <?php  if(($totalFilas+$totalFilas2+$totalFilas3+$totalFilas4)>0){?>
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity"><?php  echo $sumaRegistros; ?></span>
									 <?php } ?>		
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>Hay <?php echo $sumaRegistros;?> alertas de variables</p>
                                            </div>
											  <!-- CICLO PARA RECORRER REGISTROS QUE ESTAN FUERA DE PARAMETROS NORMALES-->
											<?php
												while ($filas = mysql_fetch_array($resultadoRegistro)) {
												echo "<div class='notifi__item'>";
												echo	"<div class='bg-c2 img-cir img-40'>";
												echo		"<i class='zmdi zmdi-alert-octagon'></i>";
												echo	"</div>";
												echo	"<div class='content'>";
                                                echo    "<p>Amoníaco $filas[3]ppm</p>";
                                                echo    "<span class='date'>$filas[1], $filas[2]</span>";
												echo	"</div>";
												echo "</div>";													

												}
												
												while ($filas = mysql_fetch_array($resultadoRegistro2)) {
												echo "<div class='notifi__item'>";
												echo	"<div class='bg-c2 img-cir img-40'>";
												echo		"<i class='zmdi zmdi-alert-octagon'></i>";
												echo	"</div>";
												echo	"<div class='content'>";
                                                echo    "<p>Temperatua $filas[3]ppm</p>";
                                                echo    "<span class='date'>$filas[1], $filas[2]</span>";
												echo	"</div>";
												echo "</div>";													

												}
												
												while ($filas = mysql_fetch_array($resultadoRegistro3)) {
												echo "<div class='notifi__item'>";
												echo	"<div class='bg-c2 img-cir img-40'>";
												echo		"<i class='zmdi zmdi-alert-octagon'></i>";
												echo	"</div>";
												echo	"<div class='content'>";
                                                echo    "<p>Humedad $filas[3]ppm</p>";
                                                echo    "<span class='date'>$filas[1], $filas[2]</span>";
												echo	"</div>";
												echo "</div>";													

												}
																								
											?>   	
																				
											
											<!-- FIN  CICLO PARA RECORRER REGISTROS QUE ESTAN FUERA DE PARAMETROS NORMALES-->
                                            
                                            <div class="notifi__footer">
                                                <a href="eliminarNotificacion.php">Eliminar Notificaciones</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Misael</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">Misael</a>
                                                    </h5>
                                                    <span class="email"></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
						
						<!-- AGREGAR CONTENIDO CENTRAL-->
						 <div class="container box">
						   <h1 align="center">Date Range Search in Datatables using PHP Ajax</h1>
						   <br />
						   <div class="table-responsive">
							<br />
							<div class="row">
							 <div class="input-daterange">
							  <div class="col-md-4">
							   <input type="text" name="start_date" id="start_date" class="form-control" />
							  </div>
							  <div class="col-md-4">
							   <input type="text" name="end_date" id="end_date" class="form-control" />
							  </div>      
							 </div>
							 <div class="col-md-4">
							  <input type="button" name="search" id="search" value="Search" class="btn btn-info" />
							 </div>
							</div>
							<br />
							<table id="order_data" class="table table-bordered table-striped">
							 <thead>
							  <tr>
							   <th>Fecha</th>
							   <th>13</th>
							   <th>14</th>
							   <th>15</th>
							   <th>16</th>
							  </tr>
							 </thead>
							</table>
							
						   </div>
						  </div>
						
						
					
					
					
                        <!-- FIN CONTENIDO CENTRAL-->
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
	
	
  
   
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
   
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
	<script type="text/javascript" src="app.js"></script>
	<script type="text/javascript" src="temperatura.js"></script>
	<script type="text/javascript" src="humedad.js"></script>
	<script type="text/javascript" src="agua.js"></script>
    <script src="js/main.js"></script>
	
	
	    <!-- CONFIGURACION DE BARRAS-->
		
</body>

<script type="text/javascript" language="javascript" >
$(document).ready(function(){
 
 $('.input-daterange').datepicker({
  todayBtn:'linked',
  format: "yyyy-mm-dd",
  autoclose: true
 });

 fetch_data('no');

 function fetch_data(is_date_search, start_date='', end_date='')
 {
  var dataTable = $('#order_data').DataTable({
   "processing" : true,
   "serverSide" : true,
   "order" : [],
   "ajax" : {
    url:"fetch.php",
    type:"POST",
    data:{
     is_date_search:is_date_search, start_date:start_date, end_date:end_date
    }
   }
  });
 }

 $('#search').click(function(){
  var start_date = $('#start_date').val();
  var end_date = $('#end_date').val();
  if(start_date != '' && end_date !='')
  {
   $('#order_data').DataTable().destroy();
   fetch_data('yes', start_date, end_date);
  }
  else
  {
   alert("Both Date is Required");
  }
 }); 
 
});
</script>

</html>
<!-- end document-->
