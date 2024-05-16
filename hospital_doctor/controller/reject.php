
<?php

    $q=$_GET["q"];
    


    $con = mysqli_connect('localhost','root','','hospital');
    if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
    }

    $sql="UPDATE history_info SET Status ='Rejected' WHERE id = $q";
    echo '<h1>'.$q.'</h1>';
    $result = mysqli_query($con,$sql);

    
    if($result){
        echo '<h1>Updated</h1>';
    }
    
    
    

    mysqli_close($con);

  ?>