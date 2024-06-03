<!DOCTYPE html>
<html>
<head>
    <title>Attendees Form</title>
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
        <h2>Attendees Form</h2>
        <form method="post" action="attendees_form.php">
            <label for="user_id">User ID:</label>
            <input type="number" id="user_id" name="user_id" required><br>
            <label for="bio">Bio:</label>
            <textarea id="bio" name="bio" required></textarea><br>
            <input type="submit" name="submit" value="Submit">
        </form>

        <?php
        // Your existing PHP code for inserting records
        ?>

        <!-- Delete form -->
        <div class="delete-form">
            <h2>Delete Attendee</h2>
            <form method="post" action="delete_attendee.php">
                <label for="delete_user_id">User ID:</label>
                <input type="number" id="delete_user_id" name="delete_user_id" required><br>
                <input type="submit" name="delete_submit" value="Delete">
            </form>

            <?php
            if (isset($_POST['delete_submit'])) {
                include 'db_connect.php';

                $delete_user_id = $_POST['delete_user_id'];

                $delete_sql = "DELETE FROM attendees WHERE user_id='$delete_user_id'";

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
