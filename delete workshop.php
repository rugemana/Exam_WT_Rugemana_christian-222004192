<!DOCTYPE html>
<html>
<head>
    <title>Workshops Form</title>
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
    <h2>Workshops Form</h2>
    <form method="post" action="workshops_form.php">
        Instructor ID: <input type="number" name="instructor_id" required><br>
        Title: <input type="text" name="title" required><br>
        Description: <textarea name="description" required></textarea><br>
        Start Date: <input type="datetime-local" name="start_date" required><br>
        End Date: <input type="datetime-local" name="end_date" required><br>
        Location: <input type="text" name="location" required><br>
        Capacity: <input type="number" name="capacity" required><br>
        Status: <input type="text" name="status" required><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    // Your existing PHP code for inserting records
    ?>

    <!-- Delete form -->
    <div class="delete-form">
        <h2>Delete Workshop</h2>
        <form method="post" action="delete_workshop.php">
            Workshop ID: <input type="number" name="workshop_id" required><br>
            <input type="submit" name="delete_submit" value="Delete">
        </form>

        <?php
        if (isset($_POST['delete_submit'])) {
            include 'db_connect.php';

            $workshop_id = $_POST['workshop_id'];

            $delete_sql = "DELETE FROM workshops WHERE workshop_id='$workshop_id'";

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
