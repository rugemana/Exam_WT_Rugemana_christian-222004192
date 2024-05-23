<!DOCTYPE html>
<html>
<head>
    <title>Reports Form</title>
</head>
<body>
    <h2>Reports Form</h2>
    <form method="post" action="reports_form.php">
        Report Date: <input type="date" name="report_date" required><br>
        Report Type: <input type="text" name="report_type" required><br>
        Content: <textarea name="content" required></textarea><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        include 'db_connect.php';

        $report_date = $_POST['report_date'];
        $report_type = $_POST['report_type'];
        $content = $_POST['content'];

        $sql = "INSERT INTO reports (report_date, report_type, content)
                VALUES ('$report_date', '$report_type', '$content')";

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
