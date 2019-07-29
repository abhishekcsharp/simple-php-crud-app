<html>

<head>
    <title>Create Entry</title>
</head>

<body>
    <a href="create.php">Create New </a>
    <form action="create.php" method="post" name="form">
        <table width="25%">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>phone</td>
                <td><input type="text" name="phone"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    <a href="index.php">See All </a>
    <?php
    //including the database connection file
    include_once("connection.php");

    // $_POST is an array which stores data about all data that is submitted in a form . 
    //There are other arrays too such as $_SESSION and $_SERVER for higher tasks.

    if (isset($_POST['Submit'])) {
        $name = mysqli_real_escape_string($mysqli, $_POST['name']);
        $phone = mysqli_real_escape_string($mysqli, $_POST['phone']);
        $email = mysqli_real_escape_string($mysqli, $_POST['email']);

        $result = mysqli_query($mysqli, "INSERT INTO users(name,phone,email) VALUES('$name','$phone','$email')");

        //display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='index.php'>View Result</a>";
    }

    ?>
</body>

</html>