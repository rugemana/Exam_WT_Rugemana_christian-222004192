<!DOCTYPE html>
<html>
<head>
    <title>Update Feedback</title>
</head>
<body>
    <h2>Update Feedback</h2>
    <?php
    include 'db_connect.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM feedback WHERE id = '$id'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
    ?>
    <form method="post" action="update_feedback.php">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        Workshop ID: <input type="number" name="workshop_id" value="<?php echo $row['workshop_id']; ?>" required><br>
        Attendee ID: <input type="number" name="attendee_id" value="<?php echo $row['attendee_id']; ?>" required><br>
        Instructor ID: <input type="number" name="instructor_id" value="<?php echo $row['instructor_id']; ?>" required><br>
        Rating (1-5): <input type="number" name="rating" value="<?php echo $row['rating']; ?>" min="1" max="5" required><br>
        Comments: <textarea name="comments" required><?php echo $row['comments']; ?></textarea><br>
        Feedback Date: <input type="date" name="feedback_date" value="<?php echo $row['feedback_date']; ?>" required><br>
        <input type="submit" name="submit" value="Update">
    </form>
    <?php
        } else {
            echo "Feedback not found.";
        }
    } else {
        echo "Feedback ID not specified.";
    }
    $conn->close();
    ?>
</body>
</html>
