<?php 

function create_rand_id($con) {
	$min = 10000000;
	$max = 99999999;
	$nsid = rand($min,$max);
	$query = "select * from student where student_id = $nsid limit 1";
	$result = mysqli_query($con,$query);
    $row = mysqli_fetch_assoc($result);
	while($result && $row != null) {
		$nsid = rand($min,$max); 
        $query = "select * from student where student_id = $nsid limit 1";
		$result = mysqli_query($con,$query);
	}
	$_SESSION['stdt_id'] = $nsid;
	return $nsid;
}


?>
