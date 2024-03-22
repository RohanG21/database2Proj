<?php

include("register.php");
include("randidfunc.php");
include("check_login2.php");

$nuemail = $_POST['user_name'];
$nufname = $_POST['f_name'];
$nulname = $_POST['l_name'];
$nupass = $_POST['pass'];
$nupass2 = $_POST['pass2'];

$_SERVER['PHP_SELF'] = 'register.php';

if(empty($nuemail)) {
    echo "an email is required to register";
    header('Location: $_SERVER[PHP_SELF]');
    die();
}
else if(empty($nufname) ) {
    echo "Your first name must be provided to register";
    session_abort();
    header("Location:register.php");
}

else if(empty($nulname) ) {
    echo "Your last name must be provided to register";
    header("Location:register.php");
    die();
}

else if(empty($nupass) ) {
    echo "A password is required for an account";
    header("Location:register.php");
    die();
}

else if(empty($nupass2) ) {
    echo "<p>You must confirm your password</p>";
    header("Location:register.php");
    die();
}

if(strcmp($nupass, $nupass2) !== 0) {
    echo "<p>The two passwords do not match</p>";
    header("Location: register.php");
    die();
}

$fullname = $nufname . $nulname;
session_abort();
session_start();
$_SESSION['name'] = $fullname;

if( (check_login2($con) == NULL)) {
    $sid = create_rand_id($con);
    if($sid != 0) {
        header("your student id is $sid REMEMBER THIS!");
        $fullname = $nufname . " " . $nulname;
        $query = "insert into account(email,PASSWORD,TYPE) VALUES('$nuemail','$nupass','student')";
        mysqli_query($con,$query);
        $query = "insert into student(student_id,NAME,email) VALUES('$sid','$fullname','$nuemail')";
        mysqli_query($con,$query);
    }
    else{
        header("account already exists, please login");
    }
}

?>
