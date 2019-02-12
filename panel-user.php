<?php 

	require('crud.php');
    require('seguridad.php');
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
	
	if ($_POST['btncerrar']=='cerrar') {
        cerrarSesionAdmin();
    } 
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

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="log" href="panel-user.php">
                            <img src="images/icon/Congrats." alt="CoolAdmin" />
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
                            <a class="js-arrow" href="panel-user.php">
                                <i class="fas fa-tachometer-alt"></i>Panel de Control</a>
                           
                        </li>
						
						 <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-chart-bar"></i>Informe por variable</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="TableAmoniaco">Amoníaco</a>
                                </li>
                                <li>
                                    <a href="TableHumedad">Humedad</a>
                                </li>
                                <li>
                                    <a href="TableTemperatura">Temperatua</a>
                                </li>                              
                            </ul>
                        </li>
                         
						 <li>
                            <a href="TableDia.php">
                                <i class="fas fa-calendar-alt"></i>Informe por día</a>
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
                            <a class="js-arrow" href="panel-user.php">
                                <i class="fas fa-tachometer-alt"></i>Panel de Control</a>
                            
                     </li>
						
						<li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-chart-bar"></i>Informe por variable</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="TableAmoniaco">Amoníaco</a>
                                </li>
                                <li>
                                    <a href="TableHumedad">Humedad</a>
                                </li>
                                <li>
                                    <a href="TableTemperatura">Temperatua</a>
                                </li>
                               
                            </ul>
                        </li>
						
						 <li class="active has-sub">
                            <a class="js-arrow" href="TableDia.php">
                                <i class="fas fa-calendar-alt"></i>Informe por día</a>                            
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
                                                <a href="#" onclick="cerrarSesion()">
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
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Ambiente en tiempo real</h2>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-sun"></i> 
                                            </div>
                                            <div class="text">
                                                <h2><?php  echo $valor."°"; ?> </h2>
                                                <span>Temperatura</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-flash"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php  echo $valorHumedad."%"; ?></h2>
                                                <span>Humedad</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php  echo $valorAmoniaco."ppm"; ?></h2>
                                                <span>Amoníaco</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div>
                                            <div class="text">
                                                <h2>500Lts</h2>
                                                <span>Consumo de agua</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--INICIO DE GRAFICAS-->
						 <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 m-b-40">Temperatura</h3>
                                        <canvas id="temperatura"></canvas>
                                    </div>
                                </div>
                            </div>
							 <!--sepracion de graficas-->
                            <div class="col-lg-6">
                                <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 m-b-40">Humedad</h3>
                                        <canvas id="humedad"></canvas>
                                    </div>
                                </div>
                            </div>
							 <!--sepracion de graficas-->
							<div class="col-lg-6">
                                <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 m-b-40">Amoníaco</h3>
                                        <canvas id="amoniaco"></canvas>
                                    </div>
                                </div>
                            </div> 
							  <!--sepracion de graficas-->
							  <div class="col-lg-6">
                                <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 m-b-40">Consumo de Agua</h3>
                                        <canvas id="agua"></canvas>
                                    </div>
                                </div>
                            </div>
							   <!--sepracion de graficas-->
							
                        </div>
                       
					    <!--FIN DE GRAFICAS-->
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
	
	
    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
	
	<script type="text/javascript" src="temperatura.js"></script>
	<script type="text/javascript" src="humedad.js"></script>
	<script type="text/javascript" src="agua.js"></script>
	<script type="text/javascript" src="app.js"></script>
    <script src="js/main.js"></script>
	
	    <!-- CONFIGURACION DE BARRAS-->
		<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>
		

</body>

</html>

<!-- end document-->

<!--modal cerrar sesion-->
            <form method="post" action="index.php">
                <div id="closeSession" class="modal fade" tabindex="-1" role="dialog">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">                        
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h1 class="modal-title">Salir</h1>
                      </div>
                      <div class="modal-body">
                        <h3>¿Está seguro que desea salir?</h3>
                      </div>

                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-large btn-primary" name="btncerrar" value="cerrar" id="cerrar">Cerrar Sesión</button>

                      </div>
                    </div>
                  </div>
                </div> 
            </form>

  <script type="text/javascript">
    function cerrarSesion() {
      $("#closeSession").modal("show");
    }
  </script>