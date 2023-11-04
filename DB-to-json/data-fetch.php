<?php
//  Database connection && Data Fetch !!
$con = mysqli_connect("localhost","root","","rgistration") or die ("Connection Failde" . $con);
$dbdata = mysqli_query($con,"SELECT * FROM student");

while($row = mysqli_fetch_assoc($dbdata)){
    $enter_data = array(
       "Name" => $row["Name"],
       "Email" => $row["Email"],
       "Password" => $row["Password"]
    );
    // Data store in array after every single while loop
$array_data[] = $enter_data;
}

// agar ye file hai
if(file_exists("data.json")){

    // data encode in json
$data_encode = json_encode($array_data,JSON_PRETTY_PRINT);

// is file me data stored karna h
if(file_put_contents("data.json",$data_encode)){
    echo "<script>alert('Successfully API Created.');</script>";
}
else{
    echo "<script>alert('Ooops API Creation is Unsuccessfull !!');</script>";
}
} else{
    echo "<script>alert('Ooops File Not Found !!');</script>";
}
?>