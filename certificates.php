<!DOCTYPE html>
<html>
<head>
    <title>Certificates Form</title>
</head>
<body>
    <h2>Certificates Form</h2>
    <form method="post" action="certificates_form.php">
        Workshop ID: <input type="number" name="workshop_id" required><br>
        Attendee ID: <input type="number" name="attendee_id" required><br>
        Issue Date: <input type="date" name="issue_date" required><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        include 'db_connect.php';

        $workshop_id = $_POST['workshop_id'];
        $attendee_id = $_POST['attendee_id'];
        $issue_date = $_POST['issue_date'];

        $sql = "INSERT INTO certificates (workshop_id, attendee_id, issue_date)
                VALUES ('$workshop_id', '$attendee_id', '$issue_date')";

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
