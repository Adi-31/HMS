<?php

session_start();

if(isset($_SESSION['uid']))
{
    header('location:admin/index.php');
}
?>
<html lang="en_US">
    <head>
        <meta charset ="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <title> Admin Login </title>
        
    </head>
    <body>
    <h1 align="center" style="height: 25px;
    padding: 50px;
    background-color: turquoise;
    color: black;
    display: flex;
    align-items: center;
    justify-content: center;" >Admin Login</h1><br>

    <div class="container-fluid" style="
        padding: 200px;
    padding-top: 100px;
    display: flex;
    align-items: center;
    justify-content: center;">
            <div class="row">
                  <div class="col-md-4 " style="
                      display: flex;
                    width: 550px;
                    align-items: center;
                    justify-content: center;">
                        <div class="card" style="width: 1400px;">
                              <div class="card-header">
                                    <h3>Login</h3>
                              </div>
                              <div class="card-body" style="height:210px;">
                                    <form action="login.php" method="post">
                                          <div class="form-group">
                                                <label for="username">Username</label>
                                                <input type="text" class="form-control" name="User_Name" id="username" placeholder="Enter username">
                                          </div>
                                          <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="password" class="form-control" name="Password" id="password" placeholder="Enter password">
                                          </div>
                                          <div style="padding: 15px;">
                                          <button type="submit" class="btn btn-primary" name="login">Login</button>
                                          </div>
                                    </form>
                              </div>
                        </div>
                  </div>
            </div>
    </body>
</html>

<?php
include('dbcon.php');

if(isset($_POST['login'])){    
    $username=$_POST['User_Name'];
    $password=$_POST['Password'];

    $query="SELECT * FROM `login` WHERE `User_Name` = '$username' AND `Password` = '$password'";
    $run=mysqli_query($conn,$query);
    $row = mysqli_num_rows($run);
    if($row>=1)
    {
        $data = mysqli_fetch_assoc($run);
        $id = $data['User_ID'];
        $_SESSION['uid']=$id;

        header('location: ./admin/index.php');
    }
    else
    {
    ?>
    <script>
        alert('Username Or Password Dont match');
        window.open('login.php','_self')
    </script>
    <?php
    }
}
?>