<?php 
include("connection.php");
include("check_loginacc.php");
session_start();
?>

<html>
    <div id = "login" >
        <form method = "post">
            <div> Login </div>
            <input type = "text" name = "email" >
            <input type = "password" name= "password" >
            <input type = "submit" value = "Login" >

        <a href = "register.php"> register as a new user</a> <br> <br>
        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                unset($_SESSION['errormsg']);
                unset($_SESSION['email']);
                unset($_SESSION['password']);
                unset($_SESSION['userdata']);
                
                $uemail = $_POST['email'];
                $upass = $_POST['password'];
                if(empty($uemail)){
                    $_SESSION['errormsg'] = 'No email was provided';
                }
  
                if (empty($upass)) {
                    $_SESSION['errormsg'] = 'no password was provided';
                }
                
                if(!empty($upass) && !empty($uemail)){
                    $_SESSION['email'] = $uemail;
                    $_SESSION['password'] = $upass;
                    $query = "SELECT * FROM student JOIN account ON student.email = account.email WHERE '$uemail' = student.email AND '$upass' = account.PASSWORD";
                    $result = mysqli_query($con,$query);
                    $row = mysqli_fetch_array($result);

                    if($row!=null) {
                        unset($_SESSION['errormsg']);
                        unset($_SESSION['userdata']);

                        $_SESSION['userdata'] = $row;
                        header('Location: studenthpage.php');
                    }
                    
                    else{
                        unset($_SESSION['errormsg']);
                        unset($_SESSION['userdata']);
                        unset($_SESSION['email']);
                        unset($_SESSION['password']);
                         $_SESSION['errormsg']= "Invalid Credentials";
                    }

                    
                    //while($row = mysqli_fetch_assoc($result)){
                    //        echo "STUDENT_ID: " . $row['student_id'],"---NAME: " . $row['NAME'],"---EMAIL:" . $row['email'], "---password:" . $row['PASSWORD'];
                    //        echo "<br>";
                    //}
                }

                if(isset($_SESSION['errormsg'])){
                    $error = $_SESSION['errormsg'];
                    echo "<span>$error</span>";
                }  
            }
        ?>
        </form>
    </div>
</html>
<?php 
unset($_SESSION['errormsg']);