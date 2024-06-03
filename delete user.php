<!DOCTYPE html>
<html>
<head>
    <title>Users Form</title>
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
    <h2>Users Form</h2>
    <form method="post" action="users_form.php">
        Username: <input type="text" name="username" required><br>
        Password: <input type="password" name="password" required><br>
        Email: <input type="email" name="email" required><br>
        Full Name: <input type="text" name="full_name" required><br>
        Role: <input type="text" name="role" required><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    // Your existing PHP code for inserting records
    ?>

    <!-- Delete form -->
    <div class="delete-form">
        <h2>Delete User</h2>
        <form method="post" action="delete_user.php">
            User ID: <input type="number" name="user_id" required><br>
            <input type="submit" name="delete_submit" value="Delete">
        </form>

        <?php
        if (isset($_POST['delete_submit'])) {
            include 'db_connect.php';

            $user_id = $_POST['user_id'];

            $delete_sql = "DELETE FROM users WHERE user_id='$user_id'";

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
