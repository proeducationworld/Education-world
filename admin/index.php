<?php
session_start();
include('../connection.php');
if(!isset($_SESSION['admin']))
{
header("Location:../index.php");
die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <strong><a href="index.php" class="navbar-brand"><i class="fa fa-graduation-cap"></i> Education World</a></strong>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
      <center><li style="padding-top:10px; padding-bottom:20px;"><img title="Update Your profile pic Click here" style="border-radius:60px; border:2px solid white;" src="../webimages/admin.jpg" width="120" height="120" /></a></li></center>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Profile Settings">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Profile Settings</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li><a href="index.php?page=update_password"><i class="fa fa-gear"></i> Update Password</a></li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Manage Notifications">
          <a class="nav-link" href="index.php?page=notification">
            <i class="fa fa-fw fa-comment"></i>
            <span class="nav-link-text">Manage Notifications</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Add Job Notifications">
          <a class="nav-link" href="index.php?page=add_job">
            <i class="fa fa-fw fa-edit"></i>
            <span class="nav-link-text">Add Job Details</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Manage Users">
          <a class="nav-link" href="index.php?page=manage_users">
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">Manage Users</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">

            <?php 
            @$page=  $_GET['page'];
              if($page!="")
              {
                if($page=="manage_users")
              {
                include('manage_users.php');	
              }
              
              if($page=="update_password")
              {
                include('update_password.php');
              }
              
              if($page=="notification")
              {
                include('display_notification.php');
              }
              
              if($page=="update_notice")
              {
                include('update_notice.php');
              }
              
              if($page=="add_notice")
              {
                include('add_notice.php');
              }
              
              if($page=="add_job")
              {
                include('AddJob.php');
              }
              }
              
              else
              {
                  echo "Nothing to display";
              }
              ?>          
            </div>
          </div>
        </div>
      </div>
    <!-- /.container-fluid-->
    </div>
  </div>

    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Education World Website 2018</small>
        </div>
      </div>
    </footer>


    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
  </div>
</body>

</html>
