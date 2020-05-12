<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

  <link href="css/admin.css" rel="stylesheet">
  <script src="js/admin.js"></script>


<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="https://bryanrojasq.wordpress.com">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTAg1rTi3usG-dSfvD97ngpvxU4yWIAldjxEXENk1BIBSNSMTvI&usqp=CAU" alt="LOGO">
            </a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li><a href="#" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Stats"><i  class="fa fa-envelope"></i> <span class="badge">5</span></a> 
            </li> 
            <li><a href="#" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Stats"><i class="fa fa-bell"></i> <span class="badge">9</span></a>  
            </li>             
            <li class="dropdown">
                <a href="#" class="user dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-user"></i>User <b class="fa fa-angle-down"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="fa fa-fw fa-user"></i> Edit Profile</a></li>
                    <li><a href="#"><i class="fa fa-fw fa-cog"></i> Change Password</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-dashboard"></i> Dashboard
                    </a>
                   
                </li>
                <li>
                    <a href="{{url('/admin_menu')}}" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-bars"></i> menu</a>
                   <!--  <ul id="submenu-2" class="collapse">
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 2.1</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 2.2</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 2.3</a></li>
                    </ul> -->
                </li>
                <li>
                    <a href="{{url('/admin_submenu')}}" ><i class="fa fa-edit"></i> submenu</a>
                </li>
                <li>
                    <a href="sugerencias"><i class="fa fa-gift"></i> Package</a>
                </li>
                <li>
                    <a href="sugerencias"><i class="fa fa-user"></i> User</a>
                </li>
                <li>
                    <a href="sugerencias"><i class="fa fa-trash"></i> Trash</a>
                </li>
                <li>
                    <a href="faq"><i class="fa fa-fw fa-power-off"></i> Logout</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">
        <div class="container-fluid shadow-lg p-3 mb-5 bg-white rounded">
            <!-- Page Heading -->
            <div class="row" id="main" >
                <div class="col-sm-12 col-md-12 well" id="content">
                    <div class="right-container" id="right-container">
        <div class="container-fluid">
            <div class="row dashboard">
                <div class="col-md-4">
                <ul class="breadcrumb">
                            <li><i class="fa fa-home"></i><a href="#"> Home</a></li>
                            <li class="active">Dashboard</li>
                        </ul>
                </div>
                <div class="col-md-8">
                    <ul class="list-inline pull-right mini-stat">
                        <li class='mem'>
                            <h5>MEMBERS <br><span class="stat-value color-blue"><i class="fa fa-plus-circle"></i> 81,450</span></h5>
                            
                        </li>
                        <li class="sub">
                            <h5>BOOKING CANCEL<br> <span class="stat-value color-green"><i class="fa fa-plus-circle"></i> 150,743</span></h5>
                            
                        </li>
                        <li class="cus">
                            <h5>CUSTOMERS<br> <span class="stat-value color-orang"><i class="fa fa-plus-circle"></i> 43,748</span></h5>
                            
                        </li>
                    </ul>
                </div>
            </div>
            <hr class="colored" />  
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
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div><!-- /#wrapper -->

<script type="text/javascript">
  $(function(){
    $('[data-toggle="tooltip"]').tooltip();
    $(".side-nav .collapse").on("hide.bs.collapse", function() {                   
        $(this).prev().find(".fa").eq(1).removeClass("fa-angle-right").addClass("fa-angle-down");
    });
    $('.side-nav .collapse').on("show.bs.collapse", function() {                        
        $(this).prev().find(".fa").eq(1).removeClass("fa-angle-down").addClass("fa-angle-right");        
    });
})
</script>