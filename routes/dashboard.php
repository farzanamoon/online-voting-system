<?php
session_start();
if(!isset($_SESSION['userdata'])){
    header("location:../");
}
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System- Dashboard</title>
    <link rel="stylesheet" href="../css/stylesheet.css">
</head>

<body>
    <div id="headersection">
        <button id="backbtn">Back</button>
        <button id="logoutbtn">Logout</button>
        <h1>Online Voting System</h1>
    </div>
    <hr>
    <div id="Profile"></div>
    <div id="Group"></div>
</body>

</html>