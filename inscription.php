<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Inscription</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/7cb0e7c261.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body class="ctn">
        <div class="container center-div ">
            <div class="container row d-flex flex-row justify-content-center mb-8">
                <div class="admin-form shadow p-5">
                    <form id="" action="" method="POST" class="form-container">
                        <center><h3>Inscription</h3></center><br>

                        <div class="col form-group">
                            <label class="font-weight-bold">Nom et Prénom(s)</label>
                            <input type="name" class="form-control" id="nometprenoms" placeholder="Saisir nom et prénom(s)" name="nometprenoms" required>
                        </div>
                        <div class="col form-group">
                            <label class="font-weight-bold">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Saisir email" name="email" required>
                        </div>
                        <div class="col form-group">
                            <label class="font-weight-bold">Mot de passe (par défaut)</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <input type="submit" value="Enregistrer" name="Enregistrer" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>

        <?php

include_once('connection.php');



if(isset($_POST['Enregistrer'])){
$nometprenoms = $_POST['nometprenoms'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$role = $_POST['role'];
$date = date("Y-m-d h:i:s");

$sql = "INSERT INTO users (nometprenoms, email, password, role, date)
VALUES ('$nometprenoms', '$email', '$password', '$role', '$date')";

if (mysqli_query($con, $sql)) {

 
    echo '<script language="Javascript">';
    echo 'document.location.replace("./login.php")';
    echo ' </script>';


} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

}else{
	echo "";
}


mysqli_close($con);

?>


    </body>
</html>