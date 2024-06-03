<!DOCTYPE html>
<html>
<head>
    <title>Reports Form</title>
    <style>
        /* Your existing CSS styles */

        /* Additional styles for the delete form */
        .delete-form {
            margin-top: 20px;
            border-top: 1px solid #ccc;
            padding-top: 20px;
        }
    </style>
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
    // Your existing PHP code for inserting records
    ?>

    <!-- Delete form -->
    <div class="delete-form">
        <h2>Delete Report</h2>
        <form method="post" action="delete_report.php">
            Report ID: <input type="number" name="report_id" required><br>
            <input type="submit" name="delete_submit" value="Delete">
        </form>

        <?php
        if (isset($_POST['delete_submit'])) {
            include 'db_connect.php';

            $report_id = $_POST['report_id'];

            $delete_sql = "DELETE FROM reports WHERE report_id='$report_id'";

            if ($conn->query($delete_sql) === TRUE) {
                echo "Record deleted successfully";
            } else {
                echo "Error: " . $delete_sql . "<br>" . $conn->error;
            }

            $conn->close();
        }
        ?>
    </div>
</body>
</html>
