<?php
include('db.php');
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
<div class="container-fluid"  >
            <div class="col-md-12" style=" margin: auto; padding: 150px; width: 50rem;">
            <h1>Update Doctor details</h1>
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
<!-- <div class="container-fluid">


        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Update Doctor Details</h5><br>

    <form method="post">
        
        <label id="first"> Enter your Doctor ID:</label><br />
        <input type="text" name="Doctor_ID"><br />
         <br>
        <label id="first"> First name:</label><br />
        <input type="text" name="Doctor_Name"><br />
        <br>

        <label id="first">Contact No</label><br />
        <input type="text" name="Contact_No"><br />
        <br>
        <label id="first">Specialisation</label><br />
        <input type="text" name="Specialisation"><br />
        <br>
        <label id="first">Hospital ID</label><br />
        <input type="text" name="Hospital ID"><br /><br>        
        <br>

        <button type="submit" name="save" class="btn btn-outline-success">Save</button>
    </form> -->

</body>

</html>