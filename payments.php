<!DOCTYPE html>
<html>
<head>
    <title>Payment Form</title>
</head>
<body>
    <h2>Payment Form</h2>
    <form method="post" action="payment_form.php">
        Workshop ID: <input type="number" name="workshop_id" required><br>
        Attendee ID: <input type="number" name="attendee_id" required><br>
        Payment Date: <input type="date" name="payment_date" required><br>
        Amount: <input type="number" step="0.01" name="amount" required><br>
        Payment Method: <input type="text" name="payment_method" required><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        include 'db_connect.php';

        $workshop_id = $_POST['workshop_id'];
        $attendee_id = $_POST['attendee_id'];
        $payment_date = $_POST['payment_date'];
        $amount = $_POST['amount'];
        $payment_method = $_POST['payment_method'];

        $sql = "INSERT INTO payment (workshop_id, attendee_id, payment_date, amount, payment_method)
                VALUES ('$workshop_id', '$attendee_id', '$payment_date', '$amount', '$payment_method')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    ?>
</body>
</html>
