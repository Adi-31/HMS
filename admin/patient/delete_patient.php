<?php
include('../../db/db.php');
session_start();
?>

<?php
$sql;
if (isset($_POST['save'])) {
    $patient=$_POST['Patient_ID'];
    
    $sql = "DELETE FROM patient WHERE Patient_ID= '$patient'";
    $query = mysqli_query($conn, $sql);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Patient Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div style="padding: 10px;">
        <a href="../index.php" class="btn btn-primary" >Back to Admin Dashboard</a>       
        </div>
</nav>
<div class="container" style="padding-top: 8rem;">
    <div class="row">
        <div class="col-md-2">
            <div class="list-group">
            <a href="index.php" class="list-group-item list-group-item-action ">Dashboard</a>
                <a href="insert_patient.php" class="list-group-item list-group-item-action ">Add new Patient</a>
                <a href="update_patient.php" class="list-group-item list-group-item-action">Edit Patient details</a>
                <a href="delete_patient.php" class="list-group-item list-group-item-action active">Remove Patient details</a>
                <a href="../../logout.php" class="list-group-item list-group-item-action">Logout</a>
            </div>
        </div>
        <div class="col-md-10">
        <!-- <div class="col-md-6"> -->
                <div class="card" style="padding: 10px;">
                    <div class="card-body">
                        <h2 class="card-title">Remove Patient Details</h2>
                        <form action="delete_patient.php" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="Patient_ID" name="Patient_ID" placeholder="Enter Doctor ID">
                            </div>
                            <div style="padding: 10px;">
                            <button type="submit" class="btn btn-primary" name="save" >Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>

</div>

</div> 
<!-- <form method="post">
        <label id="first"> Which record needs to be deleted ?</label><br />
        <input type="text" name="Patient_ID"><br/>
        <br><br>
        <button type="submit" name="save" class="btn btn-outline-success">Save</button>
    </form> -->

</body>

</html>