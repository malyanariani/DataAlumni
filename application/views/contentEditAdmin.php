<!DOCTYPE HTML>
<html>
<head>
<title>Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?php echo base_url();?>assets/css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="<?php echo base_url();?>assets/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url();?>assets/js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="<?php echo base_url();?>assets/js/wow.min.js"></script>
  <script>
     new WOW().init();
  </script>
<!--//end-animate-->
<!--skycons-icons-->
<script src="<?php echo base_url();?>assets/js/skycons.js"></script>
<!--//skycons-icons-->
<!--circlechart-->
<script src="<?php echo base_url();?>assets/js/jquery.circlechart.js"></script>
<!--circlechart-->
<!-- Metis Menu -->
<script src="<?php echo base_url();?>assets/js/metisMenu.min.js"></script>
<script src="<?php echo base_url();?>assets/js/custom.js"></script>
<link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 

<body class="cbp-spmenu-push" >

    <div class="main-content">
    

    <!--Disini Sidebar-->
    <?php include 'sidebar.php'; ?>

    <!--Disini Header-->
    <?php include 'header.php'; ?>


    <!--Disini Content-->
<div id="page-wrapper">
      <div class="main-page">
          <div class="clearfix"> </div>     
      </div>
      <!--isi disini-->
        <div class="row calender widget-shadow">
          <div class="container" style="position: relative;width: 100%;">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
              
              </div>
              
                  <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
                  <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
                  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
                  <!------ Include the above in your HEAD tag ---------->

                  <div class="span3">
                      <h2>Ubah Data Admin</h2>

                      <?php echo form_open('admin/update', 'class= myform'); ?>
                      <form>
                      <input type="hidden" name="id" id="id" value="<?php echo $id ?>">

                      <label>Username</label>
                      <input type="text" name="usernameedit" id="username" class="span3" value="<?php echo $namanya ?>">
                      
                      <label>Password</label>
                      <input type="password" name="passwordedit" id="password" class="span3" value="<?php echo $passnya ?>">
                      
                      <input type="submit" name="edit" value="Update" class="btn btn-primary pull-right">
                      <div class="clearfix"></div>
                      </form>
                      <?php echo form_close();  ?>

                  </div>
              
            </div>

</div></div></div>


        </div>
        <div class="clearfix"> </div>
      </div>
    </div>

    <!--Disini Footer-->
    <?php include 'footer.php'; ?>

    </div>

  <!-- Classie -->
    <script src="<?php echo base_url();?>assets/js/classie.js"></script>
    <script>
      var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
        showLeftPush = document.getElementById( 'showLeftPush' ),
        body = document.body;
        
      showLeftPush.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( body, 'cbp-spmenu-push-toright' );
        classie.toggle( menuLeft, 'cbp-spmenu-open' );
        disableOther( 'showLeftPush' );
      };
      
      function disableOther( button ) {
        if( button !== 'showLeftPush' ) {
          classie.toggle( showLeftPush, 'disabled' );
        }
      }
    </script>
  <!--scrolling js-->
  <script src="<?php echo base_url();?>assets/js/jquery.nicescroll.js"></script>
  <script src="<?php echo base_url();?>assets/js/scripts.js"></script>
  <!--//scrolling js-->
  <!-- Bootstrap Core JavaScript -->
   <script src="<?php echo base_url();?>assets/js/bootstrap.js"> </script>

</body>
</html>