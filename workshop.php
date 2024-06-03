<!DOCTYPE html>
<html>
<head>
    <title>Workshops Form</title>
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
        input[type="text"], input[type="number"], input[type="datetime-local"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        textarea {
            width: 100%;
            height: 100px;
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
    <h2>Workshops Form</h2>
    <form method="post" action="workshops_form.php">
        Instructor ID: <input type="number" name="instructor_id" required><br>
        Title: <input type="text" name="title" required><br>
        Description: <textarea name="description" required></textarea><br>
        Start Date: <input type="datetime-local" name="start_date" required><br>
        End Date: <input type="datetime-local" name="end_date" required><br>
        Location: <input type="text" name="location" required><br>
        Capacity: <input type="number" name="capacity" required><br>
        Status: <input type="text" name="status" required><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        include 'db_connect.php';

        $instructor_id = $_POST['instructor_id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        $location = $_POST['location'];
        $capacity = $_POST['capacity'];
        $status = $_POST['status'];

        $sql = "INSERT INTO workshops (instructor_id, title, description, start_date, end_date, location, capacity, status)
                VALUES ('$instructor_id', '$title', '$description', '$start_date', '$end_date', '$location', '$capacity', '$status')";

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
