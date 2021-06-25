<html lang="en-US">
  <head>
  <title>Profile</title>
  <link rel="stylesheet" href="../CSS/bootstrap.min.css">
  <link rel="stylesheet" href="../CSS/style.css">
  </head>
  <?php
  include 'config.php';
  session_start();

$userid = $_SESSION["username"];
$status = 1;    //shipping
    $sql = "SELECT * FROM invoice where userName='$userid' AND status = $status";
    //echo $sql;
    $query=mysqli_query($link, $sql) or die(mysqli_error());
    $result=mysqli_fetch_array($query);

  ?>
  
  <h1>List of invoices waiting for approving</h1>
      </div>
        <table class="table table-bordered">
             <tr>
		<td>ID </td>
         
		<td>Date</td>
          
		<td>Status</td>
            </tr>
            <?php
            while($row = $query->fetch_assoc()) {
                ?>
             <tr>
		<td><?php echo $row["InvoiceID"] ?> </td>
         
		<td><?php echo $row["Orderdate"]?></td>
          
		<td><?php echo "Shipping"?></td>
            </tr>
            <?php
            
            }
            ?>
        </table>
  
   </html>
      
