<html lang="en-US">
  <head>
  <title>Profile</title>
  <link rel="stylesheet" href="libs/css/bootstrap.min.css">
  <link rel="stylesheet" href="../CSS/style.css">
  </head>
  <?php
    include 'config.php';
    session_start();

    $userid = $_SESSION["username"];
    $sql = "SELECT * FROM users1 where username='$userid'";

    $query=mysqli_query($link, $sql) or die(mysqli_error());
    $row=mysqli_fetch_array($query);
  ?>
    <h1>User Profile</h1>
    <div class="profile-input-field">
        <h3>Please Fill-out All Fields</h3>
        <img src="<?php echo $row['picture']; ?>" width="80px" height="120px">
        <form method="post" action="#" >
          <div class="form-group">
            <label>Fullname</label>
            <input type="text" class="form-control" name="fname" style="width:20em;" placeholder="Enter your Fullname" value="<?php echo $row['FullName']; ?>" required />
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email" style="width:20em;" placeholder="Enter your email" required value="<?php echo $row['email']; ?>" />
          </div>
          <div class="form-group">
            <label>Phone</label>
            <input type="number" class="form-control" name="phone" style="width:20em;" placeholder="Enter your phone" value="<?php echo $row['phone']; ?>">
          </div>
          
          <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary" style="width:20em; margin:0;"><br><br>
            <center>
             <a href="logout.php">Log out</a>
           </center>
          </div>
        </form>
      </div>
      </html>
      <?php
      if(isset($_POST['submit'])){
        $fullname = $_POST['fname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $query = "UPDATE users1 SET Fullname = '$fullname',
                      email = '$email', phone = '$phone'
                      WHERE username = '$userid'";
                    $result = mysqli_query($link, $query) or die(mysqli_error($link));
       ?>
                     <script type="text/javascript">
                        alert("Update Successfully.");
                    window.location = "../index.php";
                </script>
        <?php
             }              
        ?>
