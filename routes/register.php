<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System- Registration</title>
    <link rel="stylesheet" href="../css/stylesheet.css">
</head>

<body>

    <style>
    #address {
        width: 30%;
    }

    #imagepart {
        border: 2px solid black;
        border-radius: 5px;
        padding: 10px;
        width: 30%;
    }

    #role {
        border: 2px solid black;
        border-radius: 5px;
        padding: 10px;
        width: 30%;
    }

    #role select {
        border-radius: 5px;
        padding: 10px;

    }
    </style>
    <div id="headerSection">
        <h1>Online Voting System</h1>
    </div>
    <hr>

    <div id="bodySection">
        <h3>Registration</h3>
        <form action="../api/register.php" method="post">
            <input type="text" name="name" placeholder="Enter Name">
            <input type="number" name="mobile" placeholder="Enter Mobile Number"><br><br>
            <input type="password" name="password" placeholder="password">
            <input type="password" name="cpassword" placeholder="Confirm password"><br><br>
            <input id="address" type="text" name="address" placeholder="Address"><br><br>
            <center>
                <div id="imagepart">
                    Upload image: <input type="file" name="photo">
                </div>
                <br>
                <div id="role">
                    Select your role: <select name="role">
                        <option value="1">Voter</option>
                        <option value="2">Group</option>
                    </select>
                </div>
            </center>
            <br>
            <button style=" padding: 5px;
                           font-size: 15px;
                           border-radius: 5px;
                           background-color:#48dbfb;
                          color: white;">
                Register</button><br><br>
            Already user? <a href="../index.php">Login Here</a>
        </form>
    </div>
</body>

</html>