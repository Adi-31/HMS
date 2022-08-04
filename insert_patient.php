<?php
include('db.php');
session_start();
?>

<?php
    if(isset($_POST['save'])){
        $sql = "INSERT INTO patient (Patient_ID, Patient_Name, Gender,Address,DOB, Contact_No,Blood_Group)
        VALUES ('".$_POST["Patient_ID"]."','".$_POST["Patient_Name"]."','".$_POST["Gender"]."','".$_POST["Address"]."','".$_POST["DOB"]."','".$_POST["Contact_No"]."','".$_POST["Blood_Group"]."')";
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
    <div class="container-fluid ">
        <div class="col-md-12" style="margin: auto; padding: 150px; width: 50rem;">
            <h1>Add new Patient</h1>
                <form action="insert_patient.php" method="post">
                    <div class="form-group">
                        <label for="Patient_ID"></label>
                        <input type="text" class="form-control" id="Patient_ID" name="Patient_ID" placeholder="Enter Patient ID">
                    </div>
                    <div class="form-group">
                        <label for="Patient_Name"></label>
                        <input type="text" class="form-control" id="Patient_Name" name="Patient_Name" placeholder="Enter Patient Name">
                    </div>
                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group" style="padding: 10px;">
                        <input type="radio" class="btn-check" name="Gender" id="btnradio1" autocomplete="off" checked>
                        <label class="btn btn-outline-primary" for="btnradio1">Male</label>

                        <input type="radio" class="btn-check" name="Gender" id="btnradio2" autocomplete="off">
                        <label class="btn btn-outline-primary" for="btnradio2">Female</label>

                        <input type="radio" class="btn-check" name="Gender" id="btnradio3" autocomplete="off">
                        <label class="btn btn-outline-primary" for="btnradio3">Others</label>
                    </div>
                    <div class="form-group" style="padding-top: 10px;">
                        <h3>DOB</h3>
                        <input type="date" class="form-check-control" name="DOB" placeholder="Enter date of birth">
                    </div>
                    <div class="form-group" >
                        <label for="Address"></label>
                        <input type="text" class="form-control" id="Address" name="Address" placeholder="Enter Address">
                    </div>
                    <div class="form-group" style="padding: 10px;">
                        <label class="mr-sm-2" for="inlineFormCustomSelect">Blood Group</label>
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="Blood_Group">
                            <option selected>Choose...</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                        </select>
                    </div>
                    <div style="text-align: center; padding: 15px;">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary" name="save">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>


                             




<!-- <div class="container-fluid">


        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Patient</h5>


                <form actions="" method="post">
                    <div class="form-row">
                        <div class="form-group">
                        <div class="form-group">
                                <input class="form-control" type="text" name="Patient_ID" required="true" value="ID" />
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="Patient_Name" required="true" placeholder="Name" />
                            </div>





                            <div class="form-group">

                                gender
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="Gender" value="Male" id="male">
                                    <label class="form-check-label" for="male">male</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="Gender" value="Female" id="female">
                                    <label class="form-check-label" for="female">female</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="Gender" value="Prefer not to specify" id="other">
                                    <label class="form-check-label" for="others">other</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-check-label" for="address">Address </label>
                                <input class="form-control" type="textarea" name="Address" required="true" id="address" />
                            </div>

                            <div class="form-group">
                                <label class="form-check-label" for="dob">Date of Birth </label>
                                <input class="form-control" type="date" name="DOB" required="true" id="dob" />
                            </div>


                            <div class="form-group">
                                <label class="form-check-label" for="cnt">Contact Number </label>
                                <input class="form-control" type="textarea" name="Contact_No" required="true" id="cnt" />
                            </div>


                            <div class="form-group">
                                <label class="mr-sm-2" for="inlineFormCustomSelect">Blood Group</label>
                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="Blood_Group">
                                    <option selected>Choose...</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                </select>
                            </div>


                            <input type="submit" name="Submit" value="Add Patient" class="btn btn-outline-success" />
                        </div>
                    </div>

            </div>
        </div>

        </form>

    </div>
    </div>
    </div> -->


    
    