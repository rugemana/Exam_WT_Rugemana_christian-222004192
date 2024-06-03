<!DOCTYPE html>
<html>
<head>
    <title>Instructors Form</title>
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
    <h2>Instructors Form</h2>
    <form method="post" action="instructors_form.php">
        User ID: <input type="number" name="user_id" required><br>
        Bio: <textarea name="bio" required></textarea><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    // Your existing PHP code for inserting records
    ?>

    <!-- Delete form -->
    <div class="delete-form">
        <h2>Delete Instructor</h2>
        <form method="post" action="delete_instructor.php">
            Instructor ID: <input type="number" name="instructor_id" required><br>
            <input type="submit" name="delete_submit" value="Delete">
        </form>

        <?php
        if (isset($_POST['delete_submit'])) {
            include 'db_connect.php';

            $instructor_id = $_POST['instructor_id'];

            $delete_sql = "DELETE FROM instructors WHERE instructor_id='$instructor_id'";

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
