<!DOCTYPE html>
<html>
<head>
    <title>Update Payment</title>
</head>
<body>
    <h2>Update Payment</h2>
    <?php
    include 'db_connect.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM payment WHERE id = '$id'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
    ?>
    <form method="post" action="update_payment.php">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        Workshop ID: <input type="number" name="workshop_id" value="<?php echo $row['workshop_id']; ?>" required><br>
        Attendee ID: <input type="number" name="attendee_id" value="<?php echo $row['attendee_id']; ?>" required><br>
        Payment Date: <input type="date" name="payment_date" value="<?php echo $row['payment_date']; ?>" required><br>
        Amount: <input type="number" step="0.01" name="amount" value="<?php echo $row['amount']; ?>" required><br>
        Payment Method: <input type="text" name="payment_method" value="<?php echo $row['payment_method']; ?>" required><br>
        <input type="submit" name="submit" value="Update">
    </form>
    <?php
        } else {
            echo "Payment not found.";
        }
    } else {
        echo "Payment ID not specified.";
    }
    $conn->close();
    ?>
</body>
</html>
