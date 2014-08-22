<?php 

    include 'config/config.php' ;
    include 'config/fungsi_indotgl.php' ;

        session_start () ;

if (empty ($_SESSION['username']) && empty ($_SESSION['password']) ) 

    { 

header ("location:login.php")  ; 

    }

else 

    { 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Data PKL PT. Jerbee Indonesia</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome-4.1.0/css/font-tambahan.css" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="css/plugins/dataTables.bootstrap.css" rel="stylesheet">
	
	<!--css validators-->
	<link href="css/dist/css/bootstrapValidator.css" rel="stylesheet" type="text/css">
	<link href="css/dist/css/bootstrapValidator.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

            <div class="navbar-header">
            
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            
                    <span class="sr-only">Toggle navigation</span>
            
                    <span class="icon-bar"></span>
            
                    <span class="icon-bar"></span>
            
                    <span class="icon-bar"></span>
            
                </button>
            	
                <a class="navbar-brand" href="dashboard">Data Prakerin Jerbee</a>
            
            </div>
            
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
            
               
                <!-- /.dropdown -->
                <li class="dropdown">
            
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
            
                    </a>
            
                    <ul class="dropdown-menu dropdown-user">
            
                        <li><a href="page_profil_user"><i class="fa fa-user fa-fw"></i> User Profile</a>
            
                        </li>
            
            
                        <li class="divider"></li>
            
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout 
            
                        </a>
            
                        </li>
            
                    </ul>
            
                    <!-- /.dropdown-user -->
            
                </li>
            
                <!-- /.dropdown -->
            
            </ul>
            
            <!-- /.navbar-top-links -->
            


            <div class="navbar-default sidebar" role="navigation">
            
                <div class="sidebar-nav navbar-collapse">
            <?php
			//	$query 		= "SELECT * FROM user where id_user='$_SESSION[id_user]'";
			//	$sql		= mysql_query($query);
			//	$row		= mysql_fetch_array($sql);
             ?>
              <!-- <img src="images/<?php echo $row['photo']; ?>" width="150" height="150" align="middle" ></td> -->
            
                    <ul class="nav" id="side-menu">
            
                        <li class="sidebar-search">
            
                            
            
                            <!-- /input-group -->
            
                        </li>
            
        <?php 
        	if ($_SESSION['level'] == '1') {
            
            	$qry = mysql_query("SELECT * FROM menu where parent_page = '0'");

        	}
        	elseif ($_SESSION['level'] == '2') {
        	    $qry = mysql_query("SELECT * FROM menu where parent_page = '0' and level='0' or level='2'");

        	}
             elseif ($_SESSION['level'] == '3') {
                $qry = mysql_query("SELECT * FROM menu where level='2'");
            }
            while ($menu = mysql_fetch_array($qry)) 

                { 
                    if ($menu['id_page'] == $_GET['pages']) { $aktif = "class='active'"; }

                    
                    $id = $menu['id_page'];
                    
                    $sele = $_GET['pages'] ;
                    
                    $aktif = "";
                    
                    $r = mysql_query("select parent_page from menu where id_page = '$sele'");
                    
                    $row = mysql_fetch_array($r);
                    
                     if ($menu['id_page'] == $row['parent_page']) { $aktif = "class='active'"; }

           
        ?>
        
                    <li <?php echo $aktif ?>>
                        
                        <a href="page_<?php echo $menu['id_page']; ?>">
                        
                            <i class="fa <?php echo $menu['icon_page']; ?> fa-fw"></i> 
                        
                            <?php echo $menu['label_page']; ?>

                            <span class="<?php echo $menu['arrow_page']; ?>"></span>

                        </a>
                        
                    <?php   
                    
                        $r = mysql_query("SELECT * FROM menu where parent_page = '$id'");
                    
                        while ($sub_menu = mysql_fetch_array($r)) 

                        { 
                        
                            $aktif = "";
                        
                            if ($sub_menu['id_page'] == $_GET['pages']) { $aktif = "class='active'"; }

                    ?>
                        
                            <ul class="nav nav-second-level">
                    
                                <li>
                    
                                    <a <?php echo $aktif ?> href="page_<?php echo $sub_menu['id_page']; ?>"><?php echo $sub_menu['label_page']; ?></a>
                    
                                </li>
                    
                            </ul>
                    
                    <?php 
                    
                        } 
                    
                    ?>
                    
                    </li>
                   
            <?php 
            
               } 

            ?>
                        
                            <!-- /.nav-second-level -->
                    </ul>
               
                </div>
                <!-- /.sidebar-collapse -->
            
            </div>
            <!-- /.navbar-static-side -->
        
        </nav>

        <!-- Page Content -->
        
        <div id="page-wrapper"  >
        
            <div class="row" >
               
        <?php 

                $get_page = $_GET['pages'];

                $query = "SELECT id_page, inc_page from menu where id_page='$get_page'";
 
                $sql   = mysql_query($query);
 
                $data = mysql_fetch_array($sql);

                $inc_mod = $data['inc_page'];
 
                include $inc_mod ;
                
        ?>



            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

    <!-- DataTables JavaScript -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>
	
	<!-- js validators-->
	<script src="css/dist/js/bootstrapValidator.js"></script>
	<script src="css/dist/js/bootstrapValidator.min.js"></script>
	<script src="css/dist/js/language/de_DE.js"></script>
	<script src="css/dist/js/language/en_US.js"></script>
	<script src="css/dist/js/language/es_CL.js"></script>
	<script src="css/dist/js/language/hu_HU.js"></script>
	<script src="css/dist/js/language/vi_VN.js"></script>
	<script src="css/dist/js/language/zh_CN.js"></script>
	<script src="css/dist/js/language/zh_TW.js"></script>
	<script src="css/src/js/validator/base64.js"></script>

    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>

</body>

</html>

<?php 

    } 

?>
