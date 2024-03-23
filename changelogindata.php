<?php 
include("connection.php");
include("changelogin.php");

session_start();

$changepass1 = $_POST['passchange1'];
$changepass2 = $_POST['passchange2'];

if (strcmp($changepass1,$changepass2) !== 0) {
    echo "<span>The passwords do not match try again</span>";
    die();
}

else{ 
    if(!empty ($changepass1) && !empty($changepass2)  ){
        $uemail = $_SESSION['email'];
        $query = "select password from account where email = '$uemail'";
        $result = mysqli_query($con,$query);
        $row = mysqli_fetch_assoc($result);
        $currentpass = $row["password"];
        if( (strcmp($changepass2,$currentpass)) != 0) {
            $query = "UPDATE account SET PASSWORD = '$changepass2' where email = '$uemail'";
            $_SESSION['password'] = $changepass2;
            mysqli_query($con,$query);
            echo "<span> password changed successfully</span>";
            header("Location:login.php");
        }

        else{
            echo "<span> New password needs to be different from old password </span>";
            header("Location: changelogin.php");
        }

    }
    else{
        if(empty($changepass1) ) {
            echo "<span> No new password was entered </span>";
        }
        else{
            echo "<span> must confirm password </span>";
        }
    }
}

?>