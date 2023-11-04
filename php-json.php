<?php
// php k zariye api fetch 
// $url = "https://jsonplaceholder.typicode.com/users";
// $response = file_get_contents($url);

// if ($response !== false) {
//     $data = json_decode($response, true);

//     if ($data !== null) {
//         foreach ($data as $user) {
//             echo "User ID: " . $user['id'] . "<br>";
//             echo "Name: " . $user['name'] . "<br>";
//             echo "Email: " . $user['email'] . "<br><br>";
//         }
//     } else {
//         echo "Error decoding JSON";
//     }
// } else {
//     echo "Error fetching data";
// }

//php k zariye only one data fetch
$url = "https://jsonplaceholder.typicode.com/users/6";
$response = file_get_contents($url);

if ($response !== false) {
    $data = json_decode($response, true);

    if ($data !== null) {
            echo "User ID: " . $data['id'] . "<br>";
            echo "Name: " . $data['name'] . "<br>";
            echo "Email: " . $data['email'] . "<br><br>";
    } else {
        echo "Error decoding JSON";
    }

} else {
    echo "Error fetching data";
}
?>
