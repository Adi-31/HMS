<?php
include('../../db/db.php');
session_start();
?>
<?php
$sql="select * from doctor";
$query=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
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
    <div class="row" >
        <div class="col-md-2">
            <div class="list-group" >
                <a href="index.php" class="list-group-item list-group-item-action active">Dashboard</a>
                <a href="insert_doctor.php" class="list-group-item list-group-item-action">Add new Doctor</a>
                <a href="update_doctor.php" class="list-group-item list-group-item-action">Edit Doctor details</a>
                <a href="delete_doctor.php" class="list-group-item list-group-item-action">Remove Doctor details</a>
                <a href="../../logout.php" class="list-group-item list-group-item-action">Logout</a>
            </div>
        </div>
        <div class="col-md-10">
            <div class="card" style="padding: 10px;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Doctor Dashboard</h1>
                        </div>
                    </div>
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
                            <?php while($array=mysqli_fetch_row($query)): ?>
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
                </div>
            </div>
        </div>
    </div>
</div>
</div>





</body>
</html>