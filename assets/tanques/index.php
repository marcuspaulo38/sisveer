<?php 
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SISTEMAS VDROOT 1.0</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

         <script type="text/javascript">
        
           function atualizar() 
           {
             document.location.reload(true);
	 	     setTimeout(setTimeAtualiza, 180000);
		   }

           </script>
</head>

<body id="page-top" onload="setInterval(function(){ atualizar();}, 180000);">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <!-- ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
      <br>
          <!-- div class="sidebar-heading" style="color:#484C51">
               <center>VDRoot 1.0</center> 
      </div--> 
      </a>

      <!-- Menu Principal-->
       <hr class="sidebar-divider my-0">
        <?php //include "menuPrincipal.php";?>
   
      
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

     

    </ul-->
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
          <div class="sidebar-heading" align="left">
           
           <br> 
          </div> 
          <br> <br>
          
           <div class="list-group">
             <?php 
             include 'sicofels.php';
             ?>
              
              
            </div>
           
            <div class="input-group">
              <!--input type="text" class="form-control bg-light border-0 small" placeholder="Localizar Equipamento..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div-->
             
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <!--li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Localizar..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li-->

            
            

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <b>Postos Jotacar - &nbsp;Av Sargento Herminio&emsp;
                <img class="img-profile rounded-circle"  width="60" height="60" src="img/photo-1520719627573-5e2c1a6610f0.jpg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <?php  echo "<a class='dropdown-item' href=#" ?>
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Perfil
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Sair
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"></h1>
            <!--a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a-->
          </div>

          <!-- Content Row -->
          <div class="row">
          <div class="row">
            <div class="col-lg-13 mb-4">
              <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                <table class="table table-striped" width=100%">
                                        <thead>
                                            <tr>
                                                
                                             </tr>
                                        </thead>
                                        <tbody>
                                       
                                  
                          
                          <?php 
                                       //banco de dados https://auth-db186.hostinger.com/index.php?db=u835826360_ac&target=db_structure.php
                                        $host = "sql186.main-hosting.eu";
                                        $banco = "u835826360_ac";
                                        $user = "u835826360_ac";
                                        $password = "KxzsePL&w1N";
                                        
                                        $mysqli = mysqli_connect($host, $user, $password, "u835826360_ac");
                                        
                                        if (mysqli_connect_errno()) {
                                            printf("Cone&ccedil;&atilde;o falhou: %s\n", mysqli_connect_error());
                                            
                                            exit();
                                        } else {
                                           // printf("Conexï¿½o estabelecida");
                                        }
                                        $queryT = ("SELECT * FROM dados_inventario ORDER BY id");
                                        $resultT = mysqli_query($mysqli, $queryT) or die("Algum problema na query".mysql_Error());
                                        $num_rowsT = mysqli_num_rows($resultT);
                                        $valor = array();
                                        
                                        while($rowT = mysqli_fetch_assoc($resultT))
                                        {
                                            
                                            $clienteT = $rowT["dados"];
                                            $dadosT = explode("--",$clienteT);
                                            
                                            $string = "$clienteT";
                                            $array  = explode(':', $string);
                                            
                                            
                                            //$volume1 = preg_replace('/[^0-9]/', '', $dadosT[34]);
                                            //$volume1 = preg_replace('/[^0-9]/', '', $dadosT[33]);
                                             $volume1 = preg_replace('/[^0-9]/', '', $array[1]);
                                             
                                            
                                            //$volume2 = preg_replace('/[^0-9]/', '', $dadosT[51]);
                                            //$volume2 = preg_replace('/[^0-9]/', '', $dadosT[58]);
                                             $volume2 = preg_replace('/[^0-9]/', '', $array[3]);
                                            
                                            //$volume3 = preg_replace('/[^0-9]/', '', $dadosT[67]);
                                            //$volume3 = preg_replace('/[^0-9]/', '', $dadosT[68]);
                                            $volume3 = preg_replace('/[^0-9]/', '', $array[5]);
                                            
                                            //$volume4 = preg_replace('/[^0-9]/', '', $dadosT[87]);
                                            //$volume4 = preg_replace('/[^0-9]/', '', $dadosT[88]);
                                            $volume4 = preg_replace('/[^0-9]/', '', $array[7]);
                                            
                                            
                                            //$temperatura1 = str_replace("-", "", $dadosT[44]);
                                            //$temperatura1 = str_replace("-", "", $dadosT[44]);
                                            $temperatura1 = str_replace("-", "", $array[2]);
                                            $temperatura1 = number_format($temperatura1, 2, '.', '');
                                            
                                            //$temperatura2 = str_replace("-", "", $dadosT[61]);
                                            //$temperatura2 = str_replace("-", "", $dadosT[62]);
                                            $temperatura2 = str_replace("-", "", $array[4]);
                                            $temperatura2 = number_format($temperatura2, 2, '.', '');
                                            
                                            //$temperatura3 = str_replace("-", "", $dadosT[77]);
                                            //$temperatura3 = str_replace("-", "", $dadosT[78]);
                                            $temperatura3 = str_replace("-", "", $array[6]);
                                            $temperatura3 = number_format($temperatura3, 2, '.', '');
                                            
                                            //$temperatura4 = str_replace("-", "", $dadosT[97]);
                                            //$temperatura4 = str_replace("-", "", $dadosT[98]);
                                            $temperatura4 = str_replace("-", "", $array[8]);
                                            $temperatura4 = number_format($temperatura4, 2, '.', '');
                                            
                                           
                                            
                                            echo "<tr>
                                                        <td><FONT FACE=Arial COLOR='black'>Dados</td>
                                                        <td>".date("d/m/Y: H:m:s");".</td>
                                                        <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                                                  </tr>";
                                            
                                           
                                            echo "<tr>
                                                         <td>
                                                               <div><h6><FONT FACE=Arial COLOR='black'><B>Tanque 01 - Etanol</B></h6><br>
                                                                  <img src='tanques/img1.png' width='100' height='100' />
                                                                       <p alight='justify'>
                                                                         V - $volume1 LT<br>
                                                                         <img src='tanques/temp.jpg' width='35' height='25' />$temperatura1 °C
                                                                    </p>
                                                                       
                                                                 </div>
                                                         </td>
                                                          <td>
                                                               <div><b><h6><FONT FACE=Arial COLOR='black'><B>Tanque 02 - Gasolina Comum</B></h6></b><br>
                                                                      <img src='tanques/img2.png' width='100' height='100' />
                                                                       <p alight='justify'> 
                                                                         V - $volume2 LT<br> 
                                                                         <img src='tanques/temp.jpg' width='35' height='25' />$temperatura2 °C
                                                                       
                                                                      </p> 
                                                                 </div>
                                                         </td>
                                                   <tr>";
                                             echo "<tr>
                                                         <td>
                                                             <div><b><H6><FONT FACE=Arial COLOR='black'><B>Tanque 03 - Gasolina Aditivada</B></H6></b><br>
                                                                <img src='tanques/img3.png' width='100' height='100' />
                                                                       <p alight='justify'>
                                                                         V - $volume3 LT<br> 
                                                                         <img src='tanques/temp.jpg' width='35' height='25' />$temperatura3 °C
                                                                      </P> 
                                                               </div>
                                                        </td>
     
                                                        <td>


                                                           <div><b><H6><FONT FACE=Arial COLOR='black'><B>Tanque 04 - Diesel S10</B></H6></b><br>
                                                                  <img src='tanques/img4.png' width='100' height='100' />
                                                                       <p alight='justify'>  
                                                                         Vol:$volume4 LT<br>
                                                                         <img src='tanques/temp.jpg' width='35' height='25' />$temperatura4 °C
                                                                       </P>
                                                          </div>
                                                          </td>
                                               <tr>";
                                         
                                        }
                                        
                                        mysqli_close($mysqli);
                                        ?>
                                             </tbody></table>
                                                 
                             
                       
                                        </div>
             </div>
              </div>
            </div>
          </div>
          </div>

      </div>
       
               
    </div>
  </div>
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
                </div>
              
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
