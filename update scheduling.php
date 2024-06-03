<!DOCTYPE html>
<html>
<head>
    <title>Update Scheduling Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        h2 {
            color: #333;
        }
        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        input[type="number"], input[type="datetime-local"], input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <h2>Update Scheduling Form</h2>
    <form method="post" action="update_scheduling_form.php">
        <label for="workshop_id">Workshop ID:</label>
        <input type="number" id="workshop_id" name="workshop_id" required><br>
        Start Date: <input type="datetime-local" name="start_date" required><br>
        End Date: <input type="datetime-local" name="end_date" required><br>
        Location: <input type="text" name="location" required><br>
        Status: <input type="text" name="status" required><br>
        <input type="submit" name="submit" value="Update">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        include 'db_connect.php';

        $workshop_id = $_POST['workshop_id'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        $location = $_POST['location'];
        $status = $_POST['status'];

        $sql = "UPDATE scheduling SET start_date='$start_date', end_date='$end_date', location='$location', status='$status' WHERE workshop_id=$workshop_id";

        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }

        $conn->close();
    }
    ?>
</body>
</html>
