<?php
include('../../db/db.php');
session_start();
?>

<?php
if(isset($_POST['update'])){
    $choice = $_POST['choice'];
    switch($choice) {
        case "Patient Name":
            // update the patient name in the database with the new value as input by the user
            $sql = "UPDATE patient SET Patient_Name='" . $_POST["input"] . "' WHERE Patient_ID='" . $_POST["Patient_ID"] . "'";
            $query = mysqli_query($conn, $sql);
            break;
        case "Gender":
            $sql = "UPDATE patient SET Gender='" . $_POST["input"] . "' WHERE Patient_ID='" . $_POST["Patient_ID"] . "'";
            $query = mysqli_query($conn, $sql);
            break;
        case "DOB":
            $sql = "UPDATE patient SET DOB='" . $_POST["input"] . "' WHERE Patient_ID='" . $_POST["Patient_ID"] . "'";
            $query = mysqli_query($conn, $sql);
            break;
        case "Contact Number":
            $sql = "UPDATE patient SET Contact_No='" . $_POST["input"] . "' WHERE Patient_ID='" . $_POST["Patient_ID"] . "'";
            $query = mysqli_query($conn, $sql);
            break;
        case "Blood Group":
            $sql = "UPDATE patient SET Blood_Group='" . $_POST["input"] . "' WHERE Patient_ID='" . $_POST["Patient_ID"] . "'";
            $query = mysqli_query($conn, $sql);
            break;
        default:
            echo "<script>alert('Please select a valid option');</script>";
        
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Patient</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div style="padding: 10px;">
        <a href="../index.php" class="btn btn-primary" >Back to Admin Dashboard</a>       
        </div>
</nav>
<div class="container" style="padding: 50px;
    display: flex;
    align-content: center;
    justify-content: center;">
    <div class="row">
        <div class="col-md-2" style="    display: flex;
    align-content: center;
    justify-content: center;
    flex-wrap: nowrap;">
                <div class="list-group">
                    <a href="index.php" class="list-group-item list-group-item-action ">Dashboard</a>
                    <a href="insert_patient.php" class="list-group-item list-group-item-action ">Add new Patient</a>
                    <a href="update_patient.php" class="list-group-item list-group-item-action active">Edit Patient details</a>
                    <a href="delete_patient.php" class="list-group-item list-group-item-action">Remove Patient details</a>
                    <a href="../../logout.php" class="list-group-item list-group-item-action">Logout</a>
                </div>
            </div>
            <div class="col-md-10" style=" padding: 10px;">
            <div class="card">
            <div class="card-body">
                <h1>Update Patient Details</h1>
                    <form action="update_patient.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" id="Patient_ID" name="Patient_ID" placeholder="Enter Patient ID: ">
                        </div>
                        <input class="form-control" list="datalistOptions" id="choice" name="choice" placeholder="Type to search...">
                        <datalist id="datalistOptions" >
                        <option value="Patient Name">
                        <option value="Gender">
                        <option value="DOB">
                        <option value="Contact Number">
                        <option value="Blood Group">
                        </datalist>
                        <div class="form-group">
                            <label for="Input"></label>
                            <input type="text" class="form-control" id="input" name="input" placeholder="Enter new info: ">
                        </div>
                            <div style=" padding: 15px; padding-top: 20px; padding-left:0px;">
                                <button type="submit" name="update" class="btn btn-primary" >Submit</button>
                            </div>
                    </form>
            </div>
        </div>
    </div>

 </div>
</div>


<!-- <div class="container" style="position: absolute;
        top: 25%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%);
        padding: 50px;
        padding-top: 208px;
        max-width: 3000px;
        max-height: 1500px;">
        <div class="row">
            <div class="col-md-2">
                <div class="list-group">
                <a href="index.php" class="list-group-item list-group-item-action ">Dashboard</a>
                <a href="insert_patient.php" class="list-group-item list-group-item-action ">Add new Patient</a>
                <a href="update_patient.php" class="list-group-item list-group-item-action active">Edit Patient details</a>
                <a href="delete_patient.php" class="list-group-item list-group-item-action">Remove Patient details</a>
                <a href="doctor_appointments.php" class="list-group-item list-group-item-action">Appointments</a>
                <a href="doctor_prescriptions.php" class="list-group-item list-group-item-action">Prescriptions</a>
                <a href="doctor_logout.php" class="list-group-item list-group-item-action">Logout</a>
                </div>
            </div>
            <div class="col-md-6" style=" padding: 10px;">
            <div class="card">
            <div class="card-body">
                <h1>Update Patient Details</h1>
                    <form action="update_patient.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" id="Patient_ID" name="Patient_ID" placeholder="Enter Patient ID: ">
                        </div>
                        <input class="form-control" list="datalistOptions" id="choice" name="choice" placeholder="Type to search...">
                        <datalist id="datalistOptions" >
                        <option value="Patient Name">
                        <option value="Gender">
                        <option value="DOB">
                        <option value="Contact Number">
                        <option value="Blood Group">
                        </datalist>
                        <div class="form-group">
                            <label for="Input"></label>
                            <input type="text" class="form-control" id="input" name="input" placeholder="Enter new info: ">
                        </div>
                            <div style=" padding: 15px; padding-top: 20px; padding-left:0px;">
                                <button type="submit" name="update" class="btn btn-primary" >Submit</button>
                            </div>
                    </form>
            </div>
        </div>
    </div>
</div> -->


    


</body>

</html>