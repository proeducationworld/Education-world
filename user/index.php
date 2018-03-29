<?php 
session_start();
include('../connection.php');

if(!isset($_SESSION['user']))
{
header("Location:../index.php");
die();
}
$user= $_SESSION['user'];
$sql=mysqli_query($conn,"select * from user where email='$user' ");
$users=mysqli_fetch_assoc($sql);
$sql1=mysqli_query($conn,"select * from post");
$count = mysqli_num_rows($sql1);
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
  <link href="../admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="../admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../admin/css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <a href="index.php" class="navbar-brand"><i class="fa fa-graduation-cap"></i> Education World</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

        <?php 
            $q=mysqli_query($conn,"select image from user where email='".$_SESSION['user']."'");
            $row=mysqli_fetch_assoc($q);
            if($row['image']=="")
            {
            ?>
              <a href="index.php?page=update_profile_pic">
              <center><img class="img-circle img-raised img-responsive" title="Update Your profile pic Click here" style="border-radius:50px;" src="../images/person.jpg" width="80" height="80" alt="not found"/></a></li></center>
            
            <?php 
            }
            else
            {
            ?>
            <a href="index.php?page=update_profile_pic">
            <center><img title="Update Your profile pic Click here"  style="border-radius:50px; border:2px solid #ffffff;;" src="../images/<?php echo $_SESSION['user'];?>/<?php echo $row['image'];?>" width="100" height="100" alt="not found"/></a></center>
            <?php 
            }
        ?>


        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Messages">
          <a class="nav-link" href="index.php?page=notification">
            <i class="fa fa-fw fa-comment"></i>
            <span class="nav-link-text">Messages</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Job">
          <a class="nav-link" href="index.php">
            <i class="fa fa-fw fa-user"></i>
            <span class="nav-link-text">Job Notifications</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Profile Settings">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Profile Settings</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li><a href="index.php?page=update_profile"><i class="fa fa-gear"></i> Update Profile</a></li>
            <li><a href="index.php?page=update_password"><i class="fa fa-gear"></i> Update Password</a></li>
            <li><a href="index.php?page=update_profile_pic"><i class="fa fa-gear"></i> Update Profile Picture</a></li>
          </ul>
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
                        if($page=="update_password")
                        {
                            include('update_password.php');
                        }
                        if($page=="notification")
                        {
                            include('notification.php');
                        }
                        if($page=="update_profile")
                        {
                            include('update_profile.php');
                        }
                        if($page=="update_profile_pic")
                        {
                            include('update_profile_pic.php');
                        }
                        if($page=="job_detail")
                        {
                            include('job_detail.php');
                        }      
                    }
                    else
                    {
                   ?>

                      <!-- Example DataTables Card-->      
                        <?php 
                          $q=mysqli_query($conn, "select * from post "); 
                        ?>
                          <h2 style="padding-top:20px; padding-bottom:15px; text-align:center;">Recent Job Notifications</h2>
                        <div class="card mb-3">
                          <div class="card-header">
                            <i class="fa fa-table"></i> Data Table Example</div>
                          <div class="card-body">
                            <div class="table-responsive">
                              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                  <tr>
                                    <th>Sr.No</th>
                                    <th>Title</th>
                                    <th>Vacancy</th>
                                    <th>Start date</th>
                                    <th>Last date</th>
                                    <th>More Info</th>
                                  </tr>
                                </thead>
                                <tfoot>
                                  <tr>
                                    <th>Sr.No</th>
                                    <th>Title</th>
                                    <th>Vacancy</th>
                                    <th>Start date</th>
                                    <th>Last date</th>
                                    <th>More Info</th>
                                  </tr>
                                </tfoot>
                                <tbody>

                                <?php 
                                      $i=1;
                                      while($row=mysqli_fetch_assoc($q))
                                      {
                                ?>      
                                
                                <Tr>
                                <td><?php echo $row['id'];?></td>
                                <td><?php echo $row['title'];?></td>
                                <td><?php echo $row['vacancy'];?></td>
                                <td><?php echo $row['dop'];?></td>
                                <td><?php echo $row['dol'];?></td>
                                <td><button class="btn btn-primary"  onClick="parent.open('details.php')">Read More</button></td>
                                
                                <?php 
                                        $i++;
                                    }
                                ?>
                                </tr>
                              </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                        </div>
                      </div>
                      <!-- /.container-fluid-->

                  <?php } ?>
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
    <script src="../admin/vendor/jquery/jquery.min.js"></script>
    <script src="../admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../admin/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="../admin/vendor/datatables/jquery.dataTables.js"></script>
    <script src="../admin/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../admin/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="../admin/js/sb-admin-datatables.min.js"></script>
  </div>
</body>

</html>
