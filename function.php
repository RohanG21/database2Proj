<?php
function check_login($con) {
    if (isset($_SESSION['stdt_id'])) {
        $sid = $_SESSION['stdt_id'];
        $query = "select * from student where student_id = $sid limit 1";
        $result = mysqli_query($con,$query);
        if($result && mysqli_num_rows($result) > 0 ) {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
        die;
    }
}
?>