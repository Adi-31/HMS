<?php
include('../../db/db.php');
session_start();
?>

<?php
    if(isset($_POST['save'])){
        $sql = "INSERT INTO patient (Patient_ID, Patient_Name, Gender,Address,DOB, Contact_No,Blood_Group)
        VALUES ('" . $_POST["Patient_ID"] ."','". $_POST["Patient_Name"] . "','" . $_POST["Gender"] . "','" . $_POST["Address"] . "','" . $_POST["DOB"] . "','" . $_POST["Contact_No"] . "','" . $_POST["Blood_Group"] . "')";
    $query=mysqli_query($conn,$sql);
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
<div class="container" style="padding-top: 8rem;">
    <div class="row">
    <div class="col-md-2">
            <div class="list-group">
                <a href="patient_dashboard.php" class="list-group-item list-group-item-action ">Dashboard</a>
                <a href="insert_patient.php" class="list-group-item list-group-item-action">Add new Patient</a>
                <a href="update_patient.php" class="list-group-item list-group-item-action">Edit Patient details</a>
                <a href="delete_patient.php" class="list-group-item list-group-item-action active">Remove Patient details</a>
                <a href="doctor_appointments.php" class="list-group-item list-group-item-action">Appointments</a>
                <a href="doctor_prescriptions.php" class="list-group-item list-group-item-action">Prescriptions</a>
                <a href="doctor_logout.php" class="list-group-item list-group-item-action">Logout</a>
            </div>
        </div>

        <div class="col-md-10">

    <div class="card-body">
                <h1>Add new Patient</h1>
                    <form action="insert_doctor.php" method="post">
                        <div class="form-group">
                            <label for="Doctor_ID"></label>
                            <input type="text" class="form-control" id="Patient_ID" name="Patient_ID" placeholder="Enter Doctor ID">
                        </div>
                        <div class="form-group">
                            <label for="Doctor_Name"></label>
                            <input type="text" class="form-control" id="Patient_Name" name="Patient_Name" placeholder="Enter Doctor Name">
                        </div>
                        <div class="form-group">
                            <label for="Contact_No"></label>
                            <input type="text" class="form-control" id="Gender" name="Gender" placeholder="Enter Contact No">
                        </div>
                        <div class="form-group">
                            <label for="Specialisation"></label>
                            <input type="text" class="form-control" id="Address" name="Address" placeholder="Enter Specialisation">
                        </div>
                        <div class="form-group">
                            <label for="Hospital_ID"></label>
                            <input type="text" class="form-control" id="DOB" name="DOB" placeholder="Enter Hospital ID">
                        </div>
                        <div class="form-group">
                            <label for="Hospital_ID"></label>
                            <input type="text" class="form-control" id="Contact_No" name="Contact_No" placeholder="Enter Hospital ID">
                        </div>
                        <div class="form-group">
                            <label for="Hospital_ID"></label>
                            <input type="text" class="form-control" id="Blood_Group" name="Blood_Group" placeholder="Enter Hospital ID">
                        </div>
                        <div style=" padding: 15px; padding-top: 20px; padding-left:0px;">
                        <button type="submit" name="save" class="btn btn-primary" >Submit</button>
                        </div>
                    </form>
            </div>
                    
            </div>

        </div>

    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

</body>
</html>

                             






    
    