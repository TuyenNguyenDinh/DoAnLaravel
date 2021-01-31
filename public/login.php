<?php
	$con = mysqli_connect("localhost","root","","laravel"); //Kết nối database.
    mysqli_set_charset($con,'utf8');

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email = '$email' and password = '$password' ";
    $resuilt = mysqli_query($con, $query);

    if(mysqli_num_rows($resuilt) == 0){
        $response['success'] = false;
        $response['message'] = "User not found";
    } else{
        $row = mysqli_fetch_assoc($resuilt);

        $response['success'] = true;
        $response['message'] = "User logged in successfully";

        $response['email'] = $row['email'];
        $response['password'] = $row['password'];
        $response['name'] = $row['name'];
    }

    echo json_encode($response);
    mysqli_close($con);
?>