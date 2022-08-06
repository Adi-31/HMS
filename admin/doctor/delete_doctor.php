<?php
include('../../db/db.php');
session_start();
?>

<?php
$sql;
if (isset($_POST['save'])) {
    $doctor=$_POST['Doctor_ID'];
    $sql = "DELETE FROM doctor WHERE Doctor_ID= '$doctor'";
    
    $query = mysqli_query($conn, $sql);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div style="padding: 10px;">
        <a href="../index.php" class="btn btn-primary" >Back to Admin Dashboard</a>       
        </div>
</nav>
    <div class="container" style="position: absolute;
        top: 25%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%);
        padding: 50px;
        max-width: 2000px;
        max-height: 1500px;">
        <div class="row">
            <div class="col-md-2">
                <div class="list-group">
                    <a href="index.php" class="list-group-item list-group-item-action">Dashboard</a>
                    <a href="insert_doctor.php" class="list-group-item list-group-item-action">Add new Doctor</a>
                    <a href="update_doctor.php" class="list-group-item list-group-item-action">Edit Doctor details</a>
                    <a href="delete_doctor.php" class="list-group-item list-group-item-action active">Remove Doctor details</a>
                    <a href="../../logout.php" class="list-group-item list-group-item-action">Logout</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" style="padding: 10px;">
                    <div class="card-body">
                        <h2 class="card-title">Remove Doctor</h2>
                        <form action="delete_doctor.php" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="Doctor_ID" name="Doctor_ID" placeholder="Enter Doctor ID">
                            </div>
                            <div style="padding: 10px;">
                            <button type="submit" class="btn btn-primary" name="save" >Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
</body>

</html>