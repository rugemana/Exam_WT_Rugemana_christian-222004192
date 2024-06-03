<!DOCTYPE html>
<html>
<head>
    <title>Update Attendee</title>
    <style>
        /* Your existing CSS styles here */
    </style>
</head>
<body>
    <div class="container">
        <h2>Update Attendee</h2>
        <?php
        include 'db_connect.php';

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "SELECT * FROM attendees WHERE id = '$id'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
        ?>
        <form method="post" action="update_attendee.php">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label for="user_id">User ID:</label>
            <input type="number" id="user_id" name="user_id" value="<?php echo $row['user_id']; ?>" required><br>
            <label for="bio">Bio:</label>
            <textarea id="bio" name="bio" required><?php echo $row['bio']; ?></textarea><br>
            <input type="submit" name="submit" value="Update">
        </form>
        <?php
            } else {
                echo "Attendee not found.";
            }
        } else {
            echo "Attendee ID not specified.";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>
