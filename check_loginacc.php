<?php
function check_loginacc($con) {
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    $query = "select * from student FULL JOIN account on 'student.email' = 'account.email' WHERE '$email' = 'account.email' and '$password' = 'account.password'";
    $result = mysqli_query($con,$query);
    if (mysqli_num_rows($result) == 0) {
        return null;
    }
    else{
        $row = mysqli_fetch_assoc($result);
        return $row;
    }
    
}

?>  