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
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">0</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
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
                                            <a class="js-acc-btn" href="#">john doe</a>
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
                                                        <a href="#">john doe</a>
                                                    </h5>
                                                    <span class="email">johndoe@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
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
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Registro de datos Amoníaco</h2>
                                    
                                </div>
                            </div>
                        </div>
                        
						<!--INICIO DE TABLA-->
						<div class="row">
		<h2>Create your snippet's HTML, CSS and Javascript in the editor tabs</h2>
		
		<div class="col-md-12">
		    <form class="form-inline form-filtro">
        <div class="form-group">
          <label class="sr-only" for="filtro-data-inicial">Data inicial</label>
          <input type="date" class="form-control" id="filtro-data-inicial">
        </div>
        <div class="form-group">
          <label class="sr-only" for="filtro-data-final">Data final</label>
          <input type="date" class="form-control" id="filtro-data-final">
        </div>
        <div class="form-group">
          <label class="sr-only" for="filtro-tipo">Tipo</label>
          <select class="form-control" id="filtro-tipo">
            <option value="">Tipo</option>
            <option value="">Receita</option>
            <option value="">Despesa</option>
          </select>
        </div>
        <div class="form-group">
          <label class="sr-only" for="filtro-conta">Conta</label>
          <select class="form-control" id="filtro-conta">
            <option value="">Conta</option>
          </select>
        </div>
        <div class="form-group">
          <label class="sr-only" for="filtro-categoria">Categoria</label>
          <select class="form-control" id="filtro-categoria">
            <option value="">Categoria</option>
          </select>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Filtrar</button>
          <button type="reset" class="btn btn-default">Limpar</button>
        </div>
      </form>
		</div>
	</div>
						
						
						
						
						
						
						  <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
											 <tr>
                                                <th colspan="12"></th>
                                                <th>HORA</th>
												<th colspan="12"></th>
                                            </tr>
                                            <tr>
                                                <th>fecha</th>
                                                <th>00</th>
                                                <th>01</th>
                                                <th>02</th>
                                                <th>03</th>
												<th>04</th>
                                                <th>05</th>
                                                <th>06</th>
                                                <th>07</th>
												<th>08</th>
                                                <th>09</th>
                                                <th>10</th>
                                                <th>11</th>
												<th>12</th>
                                                <th>13</th>
                                                <th>14</th>
												<th>15</th>
                                                <th>16</th>
                                                <th>17</th>
												<th>18</th>
                                                <th>19</th>
                                                <th>20</th>
												<th>21</th>
                                                <th>22</th>
                                                <th>23</th>		
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2018-09-29</td>
                                                <td>500</td>
                                                <td>450</td>
                                                <td>300</td>
                                                <td>220</td>
												<td>500</td>
                                                <td>450</td>
                                                <td>300</td>
                                                <td>220</td>
												<td>500</td>
                                                <td>450</td>
                                                <td>300</td>
                                                <td>220</td>
												<td>500</td>
                                                <td>450</td>
                                                <td>300</td>
                                                <td>220</td>
												<td>500</td>
                                                <td>450</td>
                                                <td>300</td>
                                                <td>220</td>
												<td>500</td>
                                                <td>450</td>
                                                <td>300</td>
                                                <td>220</td>
                                            </tr> 
											<tr>
                                                <td>2018-09-30</td>
                                                <td>500</td>
                                                <td>450</td>
                                                <td>300</td>
                                                <td>220</td>
												<td>500</td>
                                                <td>450</td>
                                                <td>300</td>
                                                <td>220</td>
												<td>500</td>
                                                <td>450</td>
                                                <td>300</td>
                                                <td>220</td>
												<td>500</td>
                                                <td>450</td>
                                                <td>300</td>
                                                <td>220</td>
												<td>500</td>
                                                <td>450</td>
                                                <td>300</td>
                                                <td>220</td>
												<td>500</td>
                                                <td>450</td>
                                                <td>300</td>
                                                <td>220</td>
                                            </tr>
											<tr>
                                                <td>2018-09-30</td>
                                                <td>500</td>
                                                <td>450</td>
                                                <td>300</td>
                                                <td>220</td>
												<td>500</td>
                                                <td>450</td>
                                                <td>300</td>
                                                <td>220</td>
												<td>500</td>
                                                <td>450</td>
                                                <td>300</td>
                                                <td>220</td>
												<td>500</td>
                                                <td>450</td>
                                                <td>300</td>
                                                <td>220</td>
												<td>500</td>
                                                <td>450</td>
                                                <td>300</td>
                                                <td>220</td>
												<td>500</td>
                                                <td>450</td>
                                                <td>300</td>
                                                <td>220</td>
                                            </tr>  	
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
						
						
						<!--FIN DE TABLA-->
              
                        
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
	<script type="text/javascript" src="app.js"></script>
	<script type="text/javascript" src="temperatura.js"></script>
	<script type="text/javascript" src="humedad.js"></script>
	<script type="text/javascript" src="agua.js"></script>
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
