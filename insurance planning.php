<!DOCTYPE html>
<html>
<head>
    <title>Insurance Planning Resources Form</title>
</head>
<body>
    <h2>Insurance Planning Resources Form</h2>
    <form method="post" action="insurance_resources_form.php">
        Title: <input type="text" name="title" required><br>
        Description: <textarea name="description" required></textarea><br>
        Link: <input type="url" name="link" required><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        include 'db_connect.php';

        $title = $_POST['title'];
        $description = $_POST['description'];
        $link = $_POST['link'];

        $sql = "INSERT INTO insuranceplanningresources (title, description, link)
                VALUES ('$title', '$description', '$link')";

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
