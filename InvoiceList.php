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
$selected = 5;
    if(isset($_POST['submit'])){
        if(!empty($_POST['status'])) 
        {
            $selected = $_POST['status'];
           // echo $selected;
        }
        else 
        {
            //echo $selected;
            $selected = 5;
        }
    }
    if($selected == 5)
        $sql = "SELECT * FROM invoice where userName='$userid'";
    else
        $sql = "SELECT * FROM invoice where userName='$userid' AND status = $selected";
    //echo $sql;
    $query=mysqli_query($link, $sql) or die(mysqli_error());
    $result=mysqli_fetch_array($query);

  ?>
  
  <h1>List of invoice</h1>
    <form action="" method="post">
    <select name="status">
        <option value="" disabled selected>Choose option</option>
        <option value="-1">Waiting</option>
        <option value="1">Approved</option>
        <option value="2">Shipping</option>
        <option value="3">Received</option>     
    </select>
    <input type="submit" name="submit" vlaue="Choose options">
    </form>
  
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
          
		<td>
                    <?php 
                        if($row["status"] ==0)
                            echo "Waiting for approving";
                        else
                            if($row["status"] ==1)
                                echo "Shipping";
                            else
                            echo "Received"
                    ?>
                </td>
            </tr>
            <?php
            
            }
            ?>
        </table>
  
   </html>
      
