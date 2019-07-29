<html>
<title>This is simple CRUD app in PHP </title>

<head></head>

<body>
    <table border="1px">
        <tr>
            <td>Name</td>
            <td>Phone</td>
            <td>Email</td>
            <td>Update</td>
        </tr>
        <?php

        // Including connection.php file 
        include_once("connection.php");

        // A simple way to do a query in mysqli, inside of brackets is pure sql
        $result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");

        // We are starting a loop here to fetch all results which satisfy our query condition

        while ($res = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $res['name'] . "</td>";
            echo "<td>" . $res['phone'] . "</td>";
            echo "<td>" . $res['email'] . "</td>";
            echo "<td><a href=\"update.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
        }
        ?>
    </table>
</body>

</html>