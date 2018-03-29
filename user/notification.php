<?php 
    $q=mysqli_query($conn,"select * from notice where user='".$_SESSION['user']."'");
?>

    <h2 style="padding-top:25px; padding-bottom:20px; text-align:center;">Message Notifications</h2>

                        <div class="card mb-3">
                          <div class="card-header">
                            <i class="fa fa-table"></i> Data Table Example</div>
                          <div class="card-body">
                            <div class="table-responsive">
                              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                  <th>Sr.No</th>
                                  <th>Subject</th>
                                  <th>Details</th>
                                  <th>Date</i></th>
                                </tr>
                                
                                </thead>
    
                                <tbody>

                                <?php 
                                      $i=1;
                                      while($row=mysqli_fetch_assoc($q))
                                      {
                                ?>      
                                
                                <Tr>
                                <td><?php echo $i;?></td>
                                <td><?php echo $row['subject'];?></td>
                                <td><?php echo $row['Description'];?></td>
                                <td><?php echo $row['Date'];?></td>
                                
                                <?php 
                                        $i++;
                                    }
                                ?>
                                </tr>
                              </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.container-fluid-->