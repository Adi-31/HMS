<?php
include('../../db/db.php');
session_start();
?>

<?php
$sql;
if (isset($_POST['save'])) {
    $sql = "UPDATE doctor SET Doctor_Name=" . $_POST["Doctor_Name"] . ",Contact_No=" . $_POST["Contact_No"] . ",Specialisation=" . $_POST["Specialisation"] . ",Hospital_ID=" . $_POST["Hospital_ID"] . ")
        WHERE Doctor_ID= ". $_POST["Doctor_ID"] . "";
    
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
<div class="container" style="position: absolute;
        top: 25%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%);
        padding: 50px;
        max-width: 2000px;
        max-height: 1500px;
        padding-top: 8rem;">
        <div class="row">
            <div class="col-md-2">
                <div class="list-group">
                    <a href="index.php" class="list-group-item list-group-item-action">Dashboard</a>
                    <a href="insert_doctor.php" class="list-group-item list-group-item-action ">Add new Doctor</a>
                    <a href="update_doctor.php" class="list-group-item list-group-item-action active">Edit Doctor details</a>
                    <a href="delete_doctor.php" class="list-group-item list-group-item-action">Remove Doctor details</a>
                    <a href="doctor_appointments.php" class="list-group-item list-group-item-action">Appointments</a>
                    <a href="doctor_prescriptions.php" class="list-group-item list-group-item-action">Prescriptions</a>
                    <a href="doctor_logout.php" class="list-group-item list-group-item-action">Logout</a>
                </div>
            </div>
            <div class="col-md-10" >
                <div class="card" style=" padding: 10px;">
                    <div class="card-body">
                        <h2 class="card-title">Update Doctor details</h1>
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
                            <div style="text-align: center; padding: 15px;">
                                <button type="submit" name="save" class="btn btn-primary" >Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>