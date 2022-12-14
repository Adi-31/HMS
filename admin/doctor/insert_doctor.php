<?php
include('../../db/db.php');
session_start();
?>

<?php
$sql;
if (isset($_POST['save'])) {
    $sql = "INSERT INTO doctor (Doctor_ID,Doctor_Name,Contact_No,Specialisation,Hospital_ID)
        VALUES('" . $_POST["Doctor_ID"] . "','" . $_POST["Doctor_Name"] . "','" . $_POST["Contact_No"] . "','" . $_POST["Specialisation"] . "','" . $_POST["Hospital_ID"] . "')";
    
    $query = mysqli_query($conn, $sql);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Doctor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div style="padding: 10px;">
        <a href="../index.php" class="btn btn-primary">Back to Admin Dashboard</a>       
    </div>
</nav>
<div class="container" style="position: absolute;
    top: 25%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%);
    padding: 50px;
    padding-top: 208px;
    max-width: 3000px;
    max-height: 1500px;">
    <div class="row" style=" padding-top:200px;">
        <div class="col-md-2">
            <div class="list-group">
                <a href="index.php" class="list-group-item list-group-item-action">Dashboard</a>
                <a href="insert_doctor.php" class="list-group-item list-group-item-action active">Add new Doctor</a>
                <a href="update_doctor.php" class="list-group-item list-group-item-action">Edit Doctor details</a>
                <a href="delete_doctor.php" class="list-group-item list-group-item-action">Remove Doctor details</a>
                <a href="../../logout.php" class="list-group-item list-group-item-action">Logout</a>
            </div>
        </div>
        <div class="col-md-6" style=" padding: 10px; padding-top:1px;">
            <div class="card">
                <div class="card-body">
                    <h1>Add new Doctor</h1>
                    <form action="insert_doctor.php" method="post">
                        <div class="form-group">
                            <label for="Doctor_ID"></label>
                            <input type="text" class="form-control" id="Doctor_ID" name="Doctor_ID" placeholder="Enter Doctor ID">
                        </div>
                        <div class="form-group">
                            <label for="Doctor_Name"></label>
                            <input type="text" class="form-control" id="Doctor_Name" name="Doctor_Name" placeholder="Enter Doctor Name">
                        </div>
                        <div class="form-group">
                            <label for="Contact_No"></label>
                            <input type="text" class="form-control" id="Contact_No" name="Contact_No" placeholder="Enter Contact No">
                        </div>
                        <div class="form-group">
                            <label for="Specialisation"></label>
                            <input type="text" class="form-control" id="Specialisation" name="Specialisation" placeholder="Enter Specialisation">
                        </div>
                        <div class="form-group">
                            <label for="Hospital_ID"></label>
                            <input type="text" class="form-control" id="Hospital_ID" name="Hospital_ID" placeholder="Enter Hospital ID">
                        </div>
                        <div style=" padding: 15px; padding-top: 20px; padding-left:0px;">
                        <button type="submit" name="save" class="btn btn-primary" >Submit</button>
                        </div>
                    </form>
                </div>
            </div> 
        </div>
    </div>
</body>
</html>