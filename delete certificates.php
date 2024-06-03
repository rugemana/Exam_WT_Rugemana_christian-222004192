<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificates Form</title>
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
    <div class="container">
        <h2>Certificates Form</h2>
        <form method="post" action="certificates_form.php">
            Workshop ID: <input type="number" name="workshop_id" required><br>
            Attendee ID: <input type="number" name="attendee_id" required><br>
            Issue Date: <input type="date" name="issue_date" required><br>
            <input type="submit" name="submit" value="Submit">
        </form>

        <div class="message">
            <?php
            // Your existing PHP code for inserting records
            ?>
        </div>

        <!-- Delete form -->
        <div class="delete-form">
            <h2>Delete Certificate</h2>
            <form method="post" action="delete_certificate.php">
                Certificate ID: <input type="number" name="certificate_id" required><br>
                <input type="submit" name="delete_submit" value="Delete">
            </form>

            <?php
            if (isset($_POST['delete_submit'])) {
                include 'db_connect.php';

                $certificate_id = $_POST['certificate_id'];

                $delete_sql = "DELETE FROM certificates WHERE certificate_id='$certificate_id'";

                if ($conn->query($delete_sql) === TRUE) {
                    echo "Record deleted successfully";
                } else {
                    echo "Error: " . $delete_sql . "<br>" . $conn->error;
                }

                $conn->close();
            }
            ?>
        </div>
    </div>
</body>
</html>
