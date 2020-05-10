
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="sumit kumar">
  <title>Dinfo-Admin</title>
         <!-- <script src="https://use.fontawesome.com/07b0ce5d10.js"></script> -->
         <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
        <!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script> -->
        
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!------ Include the above in your HEAD tag ---------->
        <link href="css/admin.css" rel="stylesheet">
        
  <style type="text/css">
    dl, ol, ul {width: 350px !important;}
    .mini-stat h5 { padding: 8px;
  </style>
 </head>


<body>
  <!--=============================
                                             NAVIGATION
                                   =============================-->
  <!--top nav start=======-->
  <nav class="navbar navbar-inverse top-bar navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button> <span class="menu-icon" id="menu-icon"><i class="fa fa-times" aria-hidden="true" id="chang-menu-icon"></i></span>
        <a class="navbar-brand" href="#"><img src="https://lh3.googleusercontent.com/-N4NB2F966TU/WM7V1KYusRI/AAAAAAAADtA/fPvGVNzOkCo7ZMqLI6pPITE9ZF7NONmawCJoC/w185-h40-p-rw/logo.png" width="90%"> </a>
      </div>
      <div class="collapse navbar-collapse navbar-right" id="myNavbar">
        <form class="navbar-form navbar-left">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit">
                <i class="glyphicon glyphicon-search"></i> </button>
            </div>
          </div>
        </form>
        <ul class="nav navbar-nav">
          <li class=""><a href="#"><i class="fa fa-refresh"></i> Start Tour</a> </li>
          <li class=""><a href="#"><i class="fa fa-volume-up"></i></a> </li>
          <li class=""><a href="#"><i class="fa fa-envelope"></i> <span class="badge">5</span></a> </li>
          <li class=""><a href="#"><i class="fa fa-car"></i> <span class="badge">9</span></a> </li>
          <li class="">
            <a href="#" class="user-profile"> <span class=""><img class="img-responsive" src="https://lh3.googleusercontent.com/-HxSAl6WJSI0/WM-dbkQ1ONI/AAAAAAAADuY/RsjaXC3tg4oBozCUYyLr12ZjZ1_Cl91mACJoC/w424-h319-p-rw/sumit.png"></span> </a>
          </li>
          <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sumit          
           <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li>
              <li> <a href="#"><i class="fa fa-cog"></i> Setting</a> </li>
              <li> <a href="#"><i class="fa fa-power-off"></i> Logout</a> </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--    top nav end===========-->
  <div class="wrapper" id="wrapper">
    <div class="left-container" id="left-container">
      <!-- begin SIDE NAV USER PANEL -->
      <div class="left-sidebar" id="show-nav">
        <ul id="side" class="side-nav">
          <li class="panel">
            <a id="panel1" href="javascript:;" data-toggle="collapse" data-target="#Dashboard"> <i class="fa fa-dashboard"></i> Dashboard
             
          </li>
           
          <li class="panel">
            <a id="panel3" href="javascript:;" data-toggle="collapse" data-target="#calendar"> <i class="fa fa-calendar"></i> calendar
              <span class="label label-danger">new event</span> <i class="fa fa-chevron-left pull-right" id="arow3"></i> </a>
            <ul class="collapse nav" id="calendar">
              <li> <a href="#"><i class="fa fa-angle-double-right"></i> Flot Charts</a> </li>
              <li> <a href="#"><i class="fa fa-angle-double-right"></i> Morris.js</a> </li>
            </ul>
          </li>
          
          <li class="panel">
            <a id="panel5" href="{{url('/admin_menu')}}" data-toggle="collapse" data-target="#menu"> <i class="fa fa-bars"></i> menu
              <i class="fa fa fa-chevron-left pull-right" id="arow5"></i>
            </a>
            <ul class="collapse nav" id="menu">
              <li> <a href="#"><i class="fa fa-angle-double-right"></i> Flot Charts</a> </li>
              <li> <a href="#"><i class="fa fa-angle-double-right"></i> Morris.js</a> </li>
            </ul>
          </li>
           <li class="panel">
            <a id="panel5" href="javascript:;" data-toggle="collapse" data-target="#submenu"> <i class="fa fa-edit"></i> submenu
              <i class="fa fa fa-chevron-left pull-right" id="arow5"></i>
            </a>
            <ul class="collapse nav" id="edit">
              <li> <a href="#"><i class="fa fa-angle-double-right"></i> Flot Charts</a> </li>
              <li> <a href="#"><i class="fa fa-angle-double-right"></i> Morris.js</a> </li>
            </ul>
          </li>
          <li class="panel">
            <a id="panel6" href="javascript:;" data-toggle="collapse" data-target="#inbox"> <i class="fa fa-inbox"></i> inbox
              <span class="label label-primary">new msz</span> <i class="fa fa fa-chevron-left pull-right" id="arow6"></i> </a>
            <ul class="collapse nav" id="inbox">
              <li> <a href="#"><i class="fa fa-angle-double-right"></i> Flot Charts</a> </li>
              <li> <a href="#"><i class="fa fa-angle-double-right"></i> Morris.js</a> </li>
            </ul>
          </li>
          <li class="panel">
            <a id="panel7" href="javascript:;" data-toggle="collapse" data-target="#cogs"> <i class="fa fa-cogs"></i> cogs
              <span class="label label-warning">Warning</span> <i class="fa fa fa-chevron-left pull-right" id="arow7"></i> </a>
            <ul class="collapse nav" id="cogs">
              <li> <a href="#"><i class="fa fa-angle-double-right"></i> Flot Charts</a> </li>
              <li> <a href="#"><i class="fa fa-angle-double-right"></i> Morris.js</a> </li>
            </ul>
          </li>
           
          <li class="panel">
            <a id="panel9" href="javascript:;" data-toggle="collapse" data-target="#trash"> <i class="fa fa-trash"></i> Trash
            </a>
           
          </li>
          <li class="panel">
            <a id="panel10" href="javascript:;" data-toggle="collapse" data-target="#btc">
              <i class="fa fa-btc"></i> paper
              <i class="fa fa fa-chevron-left pull-right" id="arow10"></i>
            </a>
            <ul class="collapse nav" id="btc">
              <li> <a href="#"><i class="fa fa-angle-double-right"></i> Flot Charts</a> </li>
              <li> <a href="#"><i class="fa fa-angle-double-right"></i> Morris.js</a> </li>
            </ul>
          </li>
         
        </ul>
      </div>
      <!-- END SIDE NAV USER PANEL -->
    </div>
    <div class="right-container" id="right-container">
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
            <ul class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="#"> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ul>
            </div>
            <div class="col-md-8">
            <ul class="list-inline pull-right mini-stat">
                            <li>
                                <h5>LIKES <span class="stat-value color-blue"><i class="fa fa-plus-circle"></i> 81,450</span></h5>
                                
                            </li>
                            <li>
                                <h5>SUBSCRIBERS <span class="stat-value color-green"><i class="fa fa-plus-circle"></i> 150,743</span></h5>
                                
                            </li>
                            <li>
                                <h5>CUSTOMERS <span class="stat-value color-orang"><i class="fa fa-plus-circle"></i> 43,748</span></h5>
                                
                            </li>
                        </ul>
            </div>
            </div>
            
    
      
          <div class="row padding-top">
              <div class="col-sm-12">
                
                 @yield('content')
              </div>
          </div>
    </div>
    <div class="col-sm-12">
        <div class="footer">footer</div>
    </div>
  </div>
  </body>

</html>
 <!--  <script src="js/jquery-3.1.1.js"></script>
  <script src="js/bootstrap.js"></script>
  -->  
  <script type="text/javascript">
    $(document).ready(function() {
      $("#panel1").click(function() {
        alert("hel0");
        $("#arow1").toggleClass("fa-chevron-left");
        $("#arow1").toggleClass("fa-chevron-down");

      });
        
      $("#panel2").click(function() {
        $("#arow2").toggleClass("fa-chevron-left");
        $("#arow2").toggleClass("fa-chevron-down");
      });
        
      $("#panel3").click(function() {
        $("#arow3").toggleClass("fa-chevron-left");
        $("#arow3").toggleClass("fa-chevron-down");
      });
        
      $("#panel4").click(function() {
        $("#arow4").toggleClass("fa-chevron-left");
          $("#arow4").toggleClass("fa-chevron-down");
      });
        
      $("#panel5").click(function() {
        $("#arow5").toggleClass("fa-chevron-left");
        $("#arow5").toggleClass("fa-chevron-down");
      });
        
      $("#panel6").click(function() {
        $("#arow6").toggleClass("fa-chevron-left");
        $("#arow6").toggleClass("fa-chevron-down");
      });
        
      $("#panel7").click(function() {
        $("#arow7").toggleClass("fa-chevron-left");
        $("#arow7").toggleClass("fa-chevron-down");
      });
        
      $("#panel8").click(function() {
        $("#arow8").toggleClass("fa-chevron-left");
        $("#arow8").toggleClass("fa-chevron-down");
      });
        
      $("#panel9").click(function() {
        $("#arow9").toggleClass("fa-chevron-left");
        $("#arow9").toggleClass("fa-chevron-down");
      });
        
      $("#panel10").click(function() {
        $("#arow10").toggleClass("fa-chevron-left");
        $("#arow10").toggleClass("fa-chevron-down");
      });
        
      $("#panel11").click(function() {
        $("#arow11").toggleClass("fa-chevron-left");
        $("#arow11").toggleClass("fa-chevron-down");
      });
        
      $("#menu-icon").click(function() {
        $("#chang-menu-icon").toggleClass("fa-bars");
        $("#chang-menu-icon").toggleClass("fa-times");
        $("#show-nav").toggleClass("hide-sidebar");
        $("#show-nav").toggleClass("left-sidebar");
          
        $("#left-container").toggleClass("less-width");
        $("#right-container").toggleClass("full-width");
      });
        
     
        
    });
  </script>  
    
    
