<!DOCTYPE html>
<html>
<head>
    <title>Update Instructor</title>
</head>
<body>
    <h2>Update Instructor</h2>
    <?php
    include 'db_connect.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM instructors WHERE id = '$id'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
    ?>
    <form method="post" action="update_instructor.php">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        User ID: <input type="number" name="user_id" value="<?php echo $row['user_id']; ?>" required><br>
        Bio: <textarea name="bio" required><?php echo $row['bio']; ?></textarea><br>
        <input type="submit" name="submit" value="Update">
    </form>
    <?php
        } else {
            echo "Instructor not found.";
        }
    } else {
        echo "Instructor ID not specified.";
    }
    $conn->close();
    ?>
</body>
</html>
