<?php

if(isset($_POST["submit"])){
    extract($_POST);
if(file_exists('studentdata.json')){
    $current_data = file_get_contents('studentdata.json');
    $array_data  = json_decode($current_data,TRUE);
    $new_data = array(
        'name' => $name,
        'email' => $email,
        'password' => $pswd
    );


    $array_data[] = $new_data;
    $json_data = json_encode($array_data,JSON_PRETTY_PRINT);

    if(file_put_contents('studentdata.json', $json_data)){
    
            echo "<script>alert('data has been inserted')</script>";

            header("location:registration.php");
    }else{

      echo " <script>alert('Something went wrong')</script>";

    
    }

}else{
    echo "file not found";
}}


?>

