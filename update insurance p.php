<!DOCTYPE html>
<html>
<head>
    <title>Update Insurance Planning Resource</title>
</head>
<body>
    <h2>Update Insurance Planning Resource</h2>
    <?php
    include 'db_connect.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM insuranceplanningresources WHERE id = '$id'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
    ?>
    <form method="post" action="update_insurance_resource.php">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        Title: <input type="text" name="title" value="<?php echo $row['title']; ?>" required><br>
        Description: <textarea name="description" required><?php echo $row['description']; ?></textarea><br>
        Link: <input type="url" name="link" value="<?php echo $row['link']; ?>" required><br>
        <input type="submit" name="submit" value="Update">
    </form>
    <?php
        } else {
            echo "Resource not found.";
        }
    } else {
        echo "Resource ID not specified.";
    }
    $conn->close();
    ?>
</body>
</html>
