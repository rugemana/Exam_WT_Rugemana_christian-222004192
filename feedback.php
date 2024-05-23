<!DOCTYPE html>
<html>
<head>
    <title>Feedback Form</title>
</head>
<body>
    <h2>Feedback Form</h2>
    <form method="post" action="feedback_form.php">
        Workshop ID: <input type="number" name="workshop_id" required><br>
        Attendee ID: <input type="number" name="attendee_id" required><br>
        Instructor ID: <input type="number" name="instructor_id" required><br>
        Rating (1-5): <input type="number" name="rating" min="1" max="5" required><br>
        Comments: <textarea name="comments" required></textarea><br>
        Feedback Date: <input type="date" name="feedback_date" required><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        include 'db_connect.php';

        $workshop_id = $_POST['workshop_id'];
        $attendee_id = $_POST['attendee_id'];
        $instructor_id = $_POST['instructor_id'];
        $rating = $_POST['rating'];
        $comments = $_POST['comments'];
        $feedback_date = $_POST['feedback_date'];

        $sql = "INSERT INTO feedback (workshop_id, attendee_id, instructor_id, rating, comments, feedback_date)
                VALUES ('$workshop_id', '$attendee_id', '$instructor_id', '$rating', '$comments', '$feedback_date')";

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
