	<?php 
		include('../connection.php');
        $q=mysqli_query($conn, "select * from post "); 
	?>

<h2>Latest Recruitment Notifications </h2>
<div class="table-responsive">
        <table class="table table-hover table-striped tablesorter">
            <thead>
              <Tr>
                    <th>Sr.No <i class="fa fa-sort"></th>
                    <th>Title <i class="fa fa-sort"></th>
                    <th>Vacancy <i class="fa fa-sort"></th>
                    <th>Start date <i class="fa fa-sort"></th>
                    <th>Last date <i class="fa fa-sort"></th>
                    <th>More Info <i class="fa fa-sort"></th>
                </Tr>
            </thead>
            
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
