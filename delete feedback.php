<!DOCTYPE html>
<html>
<head>
    <title>Feedback Form</title>
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
    <h2>Feedback Form</h2>
    <form method="post" action="feedback_form.php">
        Workshop ID: <input type="number" name="workshop_id" required><br>
        Attendee ID: <input type="number" name="attendee_id" required><br>
        Instructor ID: <input type="number" name="instructor_id" required><br>
        Rating (1-5): <input type="number" name="rating" min="1" max="5" required><br>
        Comments: <textarea name="comments" required></textarea><br>
        Feedback Date: <input type="date" name="feedback_date" required><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    // Your existing PHP code for inserting records
    ?>

    <!-- Delete form -->
    <div class="delete-form">
        <h2>Delete Feedback</h2>
        <form method="post" action="delete_feedback.php">
            Feedback ID: <input type="number" name="feedback_id" required><br>
            <input type="submit" name="delete_submit" value="Delete">
        </form>

        <?php
        if (isset($_POST['delete_submit'])) {
            include 'db_connect.php';

            $feedback_id = $_POST['feedback_id'];

            $delete_sql = "DELETE FROM feedback WHERE feedback_id='$feedback_id'";

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
