<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System- Registration</title>
</head>

<body>
    <h1>Online Voting System</h1>
    <hr>
    <h3>Registration</h3>
    <form action="#">
        <input type="text" name="name" placeholder="Enter Name">
        <input type="number" name="mobile" placeholder="Enter Mobile Number"><br><br>
        <input type="password" name="password" placeholder="password">
        <input type="password" name="cpassword" placeholder="Confirm password"><br><br>
        <input type="text" name="address" placeholder="Address"><br><br>
        Upload image: <input type="file" name="photo"><br><br>
        Select role: <select name="role">
            <option value="1">Voter</option>
            <option value="2">Group</option>
        </select> <br><br>
        <button>Register</button><br><br>
        Already user? <a href="../index.php">Login Here</a>
    </form>
</body>

</html>