<?php
  include "inc/db_connects.php";
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
  <title>Purchase and Sales Mgmt System</title>
  <style>
    th{
      border: 2px solid #e6e6e6;
      text-align: center;
    }
    tr{
      border: 2px solid #e6e6e6;
    }
    td{
      border: 2px solid #e6e6e6;
    }
  </style>
</head>

<body class="sb-nav-fixed">

  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="index.php">PurchaseSalesMgmt</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
        class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
      <div class="input-group">
        <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
          aria-describedby="btnNavbarSearch" />
        <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
      </div>
    </form>

    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
          <a class="nav-link px-3" href="login.html">Log out</a>
      </div>
  </div>

    <!-- Navbar-->
    <!-- <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
          aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="#!">Settings</a></li>
          <li><a class="dropdown-item" href="#!">Activity Log</a></li>
          <li>
            <hr class="dropdown-divider" />
          </li>
          <li><a class="dropdown-item" href="#!">Logout</a></li>
        </ul>
      </li>
    </ul> -->
  </nav>



  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
      <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
          <div class="nav">
            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link" href="index.php">
              <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
              Dashboard
            </a>
            <div class="sb-sidenav-menu-heading">Interface</div>
            
            <!-- <a class="nav-link collapsed" href="Product.php" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
              aria-expanded="false" aria-controls="collapseLayouts">
              <div class="sb-nav-link-icon"><i class="fab fa-product-hunt"></i></div>
              Product
               <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div> 
            </a> -->
            <!-- <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="layout-static.html">Static Navigation</a>
                <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
              </nav>
            </div> -->
            <a class="nav-link collapsed" href="Purchase.php" data-bs-toggle="collapse" data-bs-target="#collapsePages"
              aria-expanded="false" aria-controls="collapsePages">
              <div class="sb-nav-link-icon"><i class="fas fa-truck-loading"></i></div>  
              Purchase
            </a>

            <a class="nav-link collapsed" href="Sales.php" data-bs-toggle="collapse" data-bs-target="#collapsePages"
            aria-expanded="false" aria-controls="collapsePages">
            <div class="sb-nav-link-icon"><i class="fas fa-shopping-bag"></i></div>  
            Sales
          </a>
          <a class="nav-link collapsed" href="Company.php" data-bs-toggle="collapse" data-bs-target="#collapsePages"
          aria-expanded="false" aria-controls="collapsePages">
          <div class="sb-nav-link-icon"><i class="fas fa-warehouse"></i></div>  
         Company
        </a>
        <a class="nav-link collapsed" href="Customer.php" data-bs-toggle="collapse" data-bs-target="#collapsePages"
        aria-expanded="false" aria-controls="collapsePages">
        <div class="sb-nav-link-icon"><i class="fas fa-user-friends"></i></div>  
        Customer
      </a>
      <a class="nav-link collapsed" href="Profit.php" data-bs-toggle="collapse" data-bs-target="#collapsePages"
      aria-expanded="false" aria-controls="collapsePages">
      <div class="sb-nav-link-icon"><i class="fas fa-chart-line"></i></div>  
      Profit
    </a>
    <div class="sb-sidenav-menu-heading"> Purchase Report</div>
              <a class="nav-link" href="dailyPurchase.php">
                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                Today
              </a>
              <a class="nav-link" href="Purchase.php">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Weekly
              </a>
              <a class="nav-link" href="monthlyPurchase.php">
                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                Monthly
              </a>
              <a class="nav-link" href="yearlyPurchase.php">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Yearly
              </a>
          </div>
        </div>
       
      </nav>
    </div>


    <div id="layoutSidenav_content">
      <main>
        <div class="container-fluid px-4">
          <h1 class="mt-4">Weekly Purchase Report</h1>
          <ol class="breadcrumb mb-4">
            
          </ol>
        




           <div class="row">
                    <div class="col-xl-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-area me-1"></i>
                                Area Chart 
                            </div>
                            <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                        </div>
                    </div>
                    <div class="col-xl-6">
              <div class="card mb-4">

                <!-- card header bar -->
                <div class="card-header">
                  <i class="fas fa-chart-bar me-1"></i>
                       Bar Chart 
                </div>
              <?php
              $run = mysqli_query($con, "SELECT Name, sum(Quantity),  group by Name order by Name");
              $category = array();
                              while($row = mysqli_fetch_assoc($run)){
                                  $category[] = "['".$row['Name'] ."',".$row['Quantity']."]";
                              }
                              ?>
                <!-- card body bar -->
                <div class="card-body">
                  <div id="columnchart_material" style="width: 600px; height: 400px;"></div>  
                
                </div>

              </div>

            </div>

                </div> 
          <div class="card mb-4">
            <div class="card-header">
              <i class="fas fa-table me-1"></i>
              Purchase Data
            </div>
            <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                  <tr>
                      <th scope = "col" > Id</th>
                    <th scope="col">Date</th>
                    <th scope="col">Name</th>
                    <th scope="col">Purchase</th>
                    <th scope="col">Expenses</th>
                </tr>

                </thead>
                
                <tbody>
                  <?php
                  $run = mysqli_query($con, "SELECT  ProductId , date_format(Date,'%W'), Name, sum(Quantity), round(sum(TotalAmount),0) from purchase group by  date_format(Date,'%W') order by date_format(Date,'%W')");
                  while($row = mysqli_fetch_array($run))
                  {
                      $showPid = $row[0];
                      $showdate = $row[1];
                      $showname = $row[2];
                      $showqty = $row[3];
                      $showamt = $row[4];
                      echo "<tr align = 'center'>
                              <td>$showPid</td>
                              <td>$showdate</td>
                              <td>$showname</td>
                              <td>$showqty</td>
                              <td>$showamt</td>
                            </tr>";
                  }
              ?>  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </main>
       <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Rasmi Jati</div>
                </div>
            </div>
        </footer> 
    </div>
  </div>
  </main>
  </div>
  </div>


  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Opening Move', 'Percentage'],  
            <?php
             foreach($category as $category){
               echo $category;
             }
            ?>
        ]);

        var options = {
          title: 'Chess opening moves',
          width: 500,
          legend: { position: 'none' },
          chart: { title: 'Chess opening moves',
                   subtitle: 'popularity by percentage' },
          
          
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));
        chart.draw(data, options);
      };
    </script>
  
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
</body>

</html>