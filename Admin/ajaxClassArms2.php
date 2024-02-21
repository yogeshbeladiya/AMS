<?php

include '../Includes/dbcon.php';

    $classId = intval($_GET['classId']);//

        $queryss=mysqli_query($conn,"select * from tblclassarms where classId=".$classId."");                        
        $countt = mysqli_num_rows($queryss);

        echo '
        <select required name="classArmId" class="form-control mb-3">';
        echo'<option value="">--Select Class Arm--</option>';
        while ($row = mysqli_fetch_array($queryss)) {
        echo'<option value="'.$row['Id'].'" >'.$row['classArmName'].'</option>';
        }
        echo '</select>';
?>

