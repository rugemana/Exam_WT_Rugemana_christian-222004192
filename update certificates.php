<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Certificate</title>
    <style>
        /* Your existing CSS styles here */
    </style>
</head>
<body>
    <div class="container">
        <h2>Update Certificate</h2>
        <?php
        include 'db_connect.php';

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "SELECT * FROM certificates WHERE id = '$id'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
        ?>
        <form method="post" action="update_certificate.php">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            Workshop ID: <input type="number" name="workshop_id" value="<?php echo $row['workshop_id']; ?>" required><br>
            Attendee ID: <input type="number" name="attendee_id" value="<?php echo $row['attendee_id']; ?>" required><br>
            Issue Date: <input type="date" name="issue_date" value="<?php echo $row['issue_date']; ?>" required><br>
            <input type="submit" name="submit" value="Update">
        </form>
        <?php
            } else {
                echo "Certificate not found.";
            }
        } else {
            echo "Certificate ID not specified.";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>
