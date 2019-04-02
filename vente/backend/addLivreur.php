<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>DASH<span>GAMER</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-tasks"></i>
              <span class="badge bg-theme">0</span>
              </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 0 pending tasks</p>
              </li>
              <li>
              </li>        
            </ul>
          </li>
          <!-- settings end -->
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-theme">0</span>
              </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 0 new messages</p>
              </li>
            </ul>
          </li>
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-bell-o"></i>
              <span class="badge bg-warning">0</span>
              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">You have 0 new notifications</p>
              </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="login.html">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="img/achref.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">Game Club</h5>
          <li class="mt">
            <a  href="index.html">
              <i class="fa fa-dashboard"></i>
              <span>Acceuil</span>
              </a>
          </li>
          <li class="mt">
            <a href="stock.html">
              <i class="fa fa-cogs"></i>
              <span>Stock</span>
            </a>
          </li>
          <li class="mt">
            <a  href="reclamation.html">
              <i class="fa fa-book""></i>
              <span>Reclamation</span>
            </a>
          </li>
          <li class="mt">
            <a class="active" href="livreur.php">
              <i class="fa fa-address-card"></i>
              <span>Livreur</span>
            </a>
          </li>
          <li class="mt">
            <a href="livraison.php">
              <i class="fa fa-ambulance"></i>
              <span>Livraison</span>
            </a>
          </li>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Les livraisons</h3>
       <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i> Ajout livreur    
        <form action="addLivreur.php" method="post">
    <p>
        <label for="nom">nom:</label>
        <input type="text" class="form-control" name="nom" id="nom" required="true">
    </p>
    <p>
        <label for="prenom">prenom:</label>
        <input type="text" class="form-control" name="prenom" id="prenom" required="true">
    </p>
    <p>
        <label for="email">Addresse email:</label>
        <input type="text" class="form-control" name="email" id="email" required="true">
    </p>
     <p>
        <label for="telephone">telephone:</label>
        <input type="text" class="form-control" name="telephone" id="telephone" required="true">
    </p>
    <input type="submit" class="btn btn-primary" value="Submit">
</form>
                  <?php
                   /* Attempt MySQL server connection. Assuming you are running MySQL
                    server with default setting (user 'root' with no password) */
                    $link = mysqli_connect("localhost", "root", "", "livraison");
                     
                    // Check connection
                    if($link === false){
                        die("ERROR: Could not connect. " . mysqli_connect_error());
                    }
                    // Escape user inputs for security
                    if($_REQUEST) {
                        $nom = mysqli_real_escape_string($link, $_REQUEST['nom']);
                        $prenom = mysqli_real_escape_string($link, $_REQUEST['prenom']);
                        $email = mysqli_real_escape_string($link, $_REQUEST['email']);
                        $telephone = mysqli_real_escape_string($link, $_REQUEST['telephone']);
                                                 
                        // Attempt insert query execution
                        $sql = "INSERT INTO livreur (nom, prenom, telephone ,email) VALUES ('$nom', '$prenom', '$telephone', '$email')";
                        if(mysqli_query($link, $sql)){
                            echo "Records added successfully.";
                           // header('Location: livreur.php?msg=addSuccess');

                        } else{
                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }
                         
                        // Close connection
                        mysqli_close($link);
                    }   
                  ?>
                  </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>

      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Notre  <strong>DashGamer</strong>
        </p>
        <div class="credits">
        </div>
        <a href="index.html" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>
 
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
   <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("img/batle.jpg", {
      speed: 1000
    });
  </script>
</body>

</html>
