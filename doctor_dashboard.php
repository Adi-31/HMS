<?php
include('db.php');
session_start();
?>
<?php
$sql="select * from doctor";
$query2=mysqli_query($conn,$sql);
$sql1="select * from patient";
$query3=mysqli_query($conn,$sql1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor_Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>

<div class="container" style="padding-top: 8rem;">
    <div class="row">
        <div class="col-md-2">
            <div class="list-group">
                <a href="doctor_dashboard.php" class="list-group-item list-group-item-action active">Dashboard</a>
                <a href="insert_doctor.php" class="list-group-item list-group-item-action">Add new Doctor</a>
                <a href="update_doctor.php" class="list-group-item list-group-item-action">Edit Doctor details</a>
                <a href="delete_doctor.php" class="list-group-item list-group-item-action">Remove Doctor details</a>
                <a href="doctor_appointments.php" class="list-group-item list-group-item-action">Appointments</a>
                <a href="doctor_prescriptions.php" class="list-group-item list-group-item-action">Prescriptions</a>
                <a href="doctor_logout.php" class="list-group-item list-group-item-action">Logout</a>
            </div>
        </div>
        <div class="col-md-10">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Doctor Dashboard</h1>
                    </div>
                </div>
                // display a table that shows the list of doctors
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-striped">
                        <thead>
                            <tr>
                              <th scope="col">Doctor ID</th>
                              <th scope="col">Name</th>
                              <th scope="col">Contact No</th>
                              <th scope="col">Specialisation</th>
                              <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php while($array=mysqli_fetch_row($query2)): ?>
                          <tr>
                              <th scope="row"><?php echo $array[0];?></th>
                              <td><?php echo $array[1];?></td>
                              <td><?php echo $array[2];?></td>
                              <td><?php echo $array[3];?></td>
                          </tr>
                          <?php endwhile; ?>
                        </tbody>
                        </table>
                    </div>
                  </div>
                  // a table that displays the list of patients 
                  <div class="row">
                    <div class="col-md-12">
                        <table class="table table-striped">
                        <thead>
                            <tr>
                              <th scope="col">Patient ID</th>
                              <th scope="col">Patient Name</th>
                              <th scope="col">Gender</th>
                              <th scope="col">Address</th>
                              <th scope ="col">DOB</th>
                              <th scope="col">Contact No</th>
                              <th scope="col">Blood Group</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php while($array=mysqli_fetch_row($query3)): ?>
                          <tr>
                              <th scope="row"><?php echo $array[0];?></th>
                              <td><?php echo $array[1];?></td>
                              <td><?php echo $array[2];?></td>
                              <td><?php echo $array[3];?></td>
                              <td><?php echo $array[4];?></td>
                              <td><?php echo $array[5];?></td>
                              <td><?php echo $array[6];?></td>
                          </tr>
                          <?php endwhile; ?>
                        </tbody>
                        </table>

                            

              </div>
            </div>
        </div>
    </div>

</body>
</html>