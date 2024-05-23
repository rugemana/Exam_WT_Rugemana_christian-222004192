<!DOCTYPE html>
<html>
<head>
    <title>Scheduling Form</title>
</head>
<body>
    <h2>Scheduling Form</h2>
    <form method="post" action="scheduling_form.php">
        Workshop ID: <input type="number" name="workshop_id" required><br>
        Start Date: <input type="datetime-local" name="start_date" required><br>
        End Date: <input type="datetime-local" name="end_date" required><br>
        Location: <input type="text" name="location" required><br>
        Status: <input type="text" name="status" required><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        include 'db_connect.php';

        $workshop_id = $_POST['workshop_id'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        $location = $_POST['location'];
        $status = $_POST['status'];

        $sql = "INSERT INTO scheduling (workshop_id, start_date, end_date, location, status)
                VALUES ('$workshop_id', '$start_date', '$end_date', '$location', '$status')";

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
