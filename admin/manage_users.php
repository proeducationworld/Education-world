<?php 
$q=mysqli_query($conn,"select * from user ");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No any user exists !!!</h2>";
}
else
{
?>
<script>
	function DeleteUser(id)
	{
		if(confirm("You want to delete this record ?"))
		{
		window.location.href="delete_user.php?id="+id;
		}
	}
</script>

<h2 style="padding-top:25px; padding-bottom:20px; text-align:center;">All User</h2>
                        <div class="card mb-3">
                          <div class="card-header">
                            <i class="fa fa-table"></i> User Details</div>
                          <div class="card-body">
                            <div class="table-responsive">
                              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                <th>Sr.No</th>
                                <th>User Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Gender</th>
                                <th>Delete</th>
                                </tr>                                
                                </thead>
    
                                <tbody>
                                <?php
                                $i=1;
                                while($row=mysqli_fetch_assoc($q))
                                {
                
                                echo "<Tr>";
                                echo "<td>".$i."</td>";
                                echo "<td>".$row['name']."</td>";
                                echo "<td>".$row['email']."</td>";
                                echo "<td>".$row['mobile']."</td>";
                                echo "<td>".$row['gender']."</td>";
                                ?>
                
                                <Td><a href="javascript:DeleteUser('<?php echo $row['id']; ?>')" style='color:Red'><i class="fa fa-remove"></i></a></td><?php 
                
                                echo "</Tr>";
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