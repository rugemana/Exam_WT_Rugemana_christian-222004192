<!DOCTYPE html>
<html>
<head>
    <title>Attendees Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            width: 50%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="number"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Attendees Form</h2>
        <form method="post" action="attendees_form.php">
            <label for="user_id">User ID:</label>
            <input type="number" id="user_id" name="user_id" required><br>
            <label for="bio">Bio:</label>
            <textarea id="bio" name="bio" required></textarea><br>
            <input type="submit" name="submit" value="Submit">
        </form>

        <?php
        if (isset($_POST['submit'])) {
            include 'db_connect.php';

            $user_id = $_POST['user_id'];
            $bio = $_POST['bio'];

            $sql = "INSERT INTO attendees (user_id, bio)
                    VALUES ('$user_id', '$bio')";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        }
        ?>
    </div>
</body>
</html>
