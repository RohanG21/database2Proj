<?php
function check_login2($con){
    if(isset($_SESSION['name'])){
        $uname = $_SESSION['name'];
        $query = "select * from student where NAME = '$uname' limit 1";
        $result = mysqli_query($con,$query);
        if (mysqli_num_rows($result) > 0){
            header("Location: index.php");

        }

        return NULL;


    }
    else{
        return 9999;
    }

}

?>
