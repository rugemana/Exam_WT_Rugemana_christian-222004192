<!DOCTYPE html>
<html>
<head>
    <title>Instructors Form</title>
</head>
<body>
    <h2>Instructors Form</h2>
    <form method="post" action="instructors_form.php">
        User ID: <input type="number" name="user_id" required><br>
        Bio: <textarea name="bio" required></textarea><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        include 'db_connect.php';

        $user_id = $_POST['user_id'];
        $bio = $_POST['bio'];

        $sql = "INSERT INTO instructors (user_id, bio)
                VALUES ('$user_id', '$bio')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    ?>
</body>
</html>
