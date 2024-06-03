<!DOCTYPE html>
<html>
<head>
    <title>Insurance Planning Resources Form</title>
    <style>
        /* Your existing CSS styles */

        /* Additional styles for the delete form */
        .delete-form {
            margin-top: 20px;
            border-top: 1px solid #ccc;
            padding-top: 20px;
        }
    </style>
</head>
<body>
    <h2>Insurance Planning Resources Form</h2>
    <form method="post" action="insurance_resources_form.php">
        Title: <input type="text" name="title" required><br>
        Description: <textarea name="description" required></textarea><br>
        Link: <input type="url" name="link" required><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    // Your existing PHP code for inserting records
    ?>

    <!-- Delete form -->
    <div class="delete-form">
        <h2>Delete Insurance Planning Resource</h2>
        <form method="post" action="delete_insurance_resource.php">
            Resource ID: <input type="number" name="resource_id" required><br>
            <input type="submit" name="delete_submit" value="Delete">
        </form>

        <?php
        if (isset($_POST['delete_submit'])) {
            include 'db_connect.php';

            $resource_id = $_POST['resource_id'];

            $delete_sql = "DELETE FROM insuranceplanningresources WHERE resource_id='$resource_id'";

            if ($conn->query($delete_sql) === TRUE) {
                echo "Record deleted successfully";
            } else {
                echo "Error: " . $delete_sql . "<br>" . $conn->error;
            }

            $conn->close();
        }
        ?>
    </div>
</body>
</html>
