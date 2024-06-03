<!DOCTYPE html>
<html>
<head>
    <title>Update Reports Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        h2 {
            color: #333;
        }
        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        input[type="date"], input[type="text"], textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        textarea {
            height: 100px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <h2>Update Reports Form</h2>
    <form method="post" action="update_reports_form.php">
        <label for="report_id">Report ID:</label>
        <input type="number" id="report_id" name="report_id" required><br>
        Report Date: <input type="date" name="report_date" required><br>
        Report Type: <input type="text" name="report_type" required><br>
        Content: <textarea name="content" required></textarea><br>
        <input type="submit" name="submit" value="Update">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        include 'db_connect.php';

        $report_id = $_POST['report_id'];
        $report_date = $_POST['report_date'];
        $report_type = $_POST['report_type'];
        $content = $_POST['content'];

        $sql = "UPDATE reports SET report_date='$report_date', report_type='$report_type', content='$content' WHERE report_id=$report_id";

        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }

        $conn->close();
    }
    ?>
</body>
</html>
