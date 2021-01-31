<?php
    date_default_timezone_set("Asia/Ho_Chi_Minh");
	$con = mysqli_connect("localhost","root","","laravel"); //Kết nối database.
    mysqli_set_charset($con,'utf8');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email = '$email'" ;
    $resuilt = mysqli_query($con, $query);

    if(mysqli_num_rows($resuilt) > 0){
        
        $response['success'] = false;
        $response['message'] = "User already present. Please change your email or password";
    } else{

        $created_at = date("Y-m-d h:i:s");
        $update_at = date("Y-m-d h:i:s");
        $query_result = "INSERT INTO users(name, email, password, created_at, updated_at,role) VALUES('$name','$email','$password', '$created_at', '$update_at','guest')";
        if(mysqli_query($con, $query_result)){
            $response['success'] = true;
            $response['message'] = "Account registered";
        }else{
            $response['success'] = false;
            $response['message'] = "Failed to insert data";
        }
    }

    echo json_encode($response);
    mysqli_close($con);
?>