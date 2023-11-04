<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>J.Son | Practice</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>

<div class="main">
    <h1 class="text-center mt-3 bg-warning text-white">J.Son Data</h1>

    <div id="show_data"></div>
</div>

<script>
// $(document).ready(function(){

    //with ajax 
    // $.ajax({
    //     url: "https://jsonplaceholder.typicode.com/users",
    //     type: "GET",
    //     success: function(data){
    //         $.each(data, function(index, user){
    //             $("#show_data").append("User ID: " + user.id + "<br>");
    //             $("#show_data").append("Name: " + user.name + "<br>");
    //             $("#show_data").append("Email: " + user.email + "<br>");
    //         });
    //     }
    // });
// });

    // with jsaon short code
//     $(document).ready(function(){
//     $.getJSON("https://jsonplaceholder.typicode.com/users", function(data){
//         $.each(data, function(index, user){
//             $("#show_data").append("User ID: " + user.id + "<br>");
//             $("#show_data").append("Name: " + user.name + "<br>");
//             $("#show_data").append("Email: " + user.email + "<br>");
//             $("#show_data").append("zip code: " + user.address.zipcode + "<br>");

//         });
//     });
// });

// showing only one data
// $(document).ready(function(){
//     $.ajax({
//         url: "https://jsonplaceholder.typicode.com/users/2",
//         type: "GET",
//          success: function(data){
//             $("#show_data").append("User ID: " + data.id + "<br>");
//             $("#show_data").append("Name: " + data.name + "<br>");
//             $("#show_data").append("Email: " + data.email + "<br>");
//             $("#show_data").append("zip code: " + data.address.zipcode + "<br>");
//         }
//     });
// });

// showing only one data with json
$(document).ready(function(){
    $.getJSON("https://jsonplaceholder.typicode.com/users/5", 
       function(data){
            $("#show_data").append("User ID: " + data.id + "<br>");
            $("#show_data").append("Name: " + data.name + "<br>");
            $("#show_data").append("Email: " + data.email + "<br>");
            $("#show_data").append("zip code: " + data.address.zipcode + "<br>");
    });
});


</script>

</body>
</html>
