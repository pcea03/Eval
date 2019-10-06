
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>FeVal Online System</title>


</head>

<body>
<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="home.php"> Welcome, <?php echo $_SESSION["userFname"];?></a>

        <div id="close-sidebar">
          <i class="fas fa-bars"></i>
        </div>
      </div>

      <div class="sidebar-menu">

                <ul>
                  <li class="header-menu">
                    <span>General</span>
                  </li>
                  <li>
                    <a href="#" onclick="displayStudent()">
                      <i class="fa fa-users"></i>
                      <span>Students</span>
                    </a>
                  </li>
                  
                  <li class="sidebar-dropdown">
                    <a href="#">
                      <i class="fa fa-sticky-note"></i>
                      <span>Evaluation</span>
                    </a>
                    <div class="sidebar-submenu">
                      <ul>
                        <li>
                          <a href="#" onclick="displayEvaluationList()">Evaluation List
                          </a>
                        </li>
                        <li>
                          <a href="#" onclick="displayResults()">Result
                          </a>
                        </li>
                      </ul>
                    </div>
                  </li>
                </ul>

      </div>

      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
        <div class="sidebar-footer">

          <a href="logout.php">
            <i class="fa fa-undo-alt"></i>
          </a>
        </div>
  </nav>
  <!-- sidebar-wrapper  -->
  
  <!-- page-content" -->

<!-- page-wrapper -->

    <script src=js/popper.min.js></script>
</body>

</html>
