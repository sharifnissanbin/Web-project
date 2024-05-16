<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Doctor</title>
</head>
<body>
  <?php
  include '../model/connection.php';
  $mydb = new model();
  $connobj = $mydb->openConn();
  if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $result = $mydb->deleteDoctor($connobj, "doctor", $id);
    if ($result) {
      echo "successfully deleted";

      header('location: ../view/admin_dashboard.php');
    } else {
      die(mysqli_error($connobj));
    }
  }

  ?>
</body>
</html>