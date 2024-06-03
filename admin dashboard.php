<!DOCTYPE html>
<html>
<head>
    <title>Forms</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
            background-image: url('3.jpg');
            background-size: cover;
            background-attachment: fixed;
        }

        form {
            margin-top: 50px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 10px;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <form action="#">
        <button type="submit" formaction="attendees_form.php">Attendees Form</button><br>
        <button type="submit" formaction="certificates_form.php">Certificates Form</button><br>
        <button type="submit" formaction="feedback_form.php">Feedback Form</button><br>
        <button type="submit" formaction="instructors_form.php">Instructors Form</button><br>
        <button type="submit" formaction="insuranceplanningresources_form.php">Insurance Planning Resources Form</button><br>
        <button type="submit" formaction="payment_form.php">Payment Form</button><br>
        <button type="submit" formaction="reports_form.php">Reports Form</button><br>
        <button type="submit" formaction="scheduling_form.php">Scheduling Form</button><br>
        <button type="submit" formaction="users_form.php">Users Form</button><br>
        <button type="submit" formaction="workshops_form.php">Workshops Form</button><br>
    </form>
    <form action="home.php">
        <button type="submit">Logout</button>
    </form>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "virtual_insurance_planning_workshops_platform";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    ?>
</body>
</html>
