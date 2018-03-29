<script>
	function DeleteNotice(id)
	{
		if(confirm("You want to delete this record ?"))
		{
		window.location.href="delete_notice.php?id="+id;
		}
	}
</script>

<?php 
$q=mysqli_query($conn,"select * from notice ");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No any Notice found !!!</h2>";
}
else
{
?>

<h2 style="padding-top:25px; padding-bottom:20px; text-align:center;">Message Notifications</h2>

                        <div class="card mb-3">
                          <div class="card-header">
                            <i class="fa fa-table"></i> Notification Table : <a href="index.php?page=add_notice" class="btn btn-default btn-lg">Add New notice</a>
                            </div>
                          <div class="card-body">
                            <div class="table-responsive">
                              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                  <th>Sr.No</th>
                                  <th>Subject</th>
                                  <th>Details</th>
                                  <th>User</th>
                                  <th>Date</th>
                                  <th>Delet</th>
                                  <th>Update</th>
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
                                <td><?php echo $row['user'];?></td>
                                <td><?php echo $row['Date'];?></td>
                                <Td><a href="javascript:DeleteNotice('<?php echo $row['notice_id']; ?>')" style='color:Red'><i class="fa fa-remove"></i></a></td>
                                <Td><a href='index.php?page=update_notice&notice_id=".$row['notice_id']."' style='color:green'><span class='fa fa-edit'></span></a></td>
                                
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
<?php
}
?>