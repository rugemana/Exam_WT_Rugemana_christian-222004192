<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View Tables</title>
<style>
/* Add your CSS styles here */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    padding: 20px;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    background: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    margin-top: 0;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

th, td {
    border: 1px solid #ccc;
    padding: 8px;
    text-align: left;
}

th {
    background-color: #f4f4f4;
}

button {
    padding: 5px 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}
</style>
</head>
<body>
<div class="container">
<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "virtual_insurance_planning_workshops_platform";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query to get all table names from the database
$tables_query = "SHOW TABLES";
$tables_result = mysqli_query($conn, $tables_query);

if (mysqli_num_rows($tables_result) > 0) {
    // Loop through each table
    while ($row = mysqli_fetch_row($tables_result)) {
        $table_name = $row[0];
        echo "<h2>$table_name</h2>";

        // Query to get all column names from the current table
        $columns_query = "SHOW COLUMNS FROM $table_name";
        $columns_result = mysqli_query($conn, $columns_query);

        // Display table headers
        echo "<table>";
        echo "<tr>";
        while ($column = mysqli_fetch_assoc($columns_result)) {
            echo "<th>{$column['Field']}</th>";
        }
        echo "<th>Actions</th>";
        echo "</tr>";

        // Query to get all rows from the current table
        $rows_query = "SELECT * FROM $table_name";
        $rows_result = mysqli_query($conn, $rows_query);

        // Display table rows
        while ($row_data = mysqli_fetch_assoc($rows_result)) {
            echo "<tr>";
            foreach ($row_data as $key => $value) {
                echo "<td>$value</td>";
            }
            echo "<td>";
            echo "<button onclick='deleteRow(\"$table_name\", {$row_data['id']})'>Delete</button>";
            echo "<button onclick='updateRow(\"$table_name\", {$row_data['id']})'>Update</button>";
            echo "</td>";
            echo "</tr>";
        }

        echo "</table>";
    }
} else {
    echo "No tables found.";
}

// Close connection
mysqli_close($conn);
?>
</div>

<script>
function deleteRow(tableName, id) {
    if (confirm("Are you sure you want to delete this row?")) {
        // Send an AJAX request to delete the row
        // You can use fetch or jQuery.ajax for this
        // Example using fetch:
        fetch('delete_row.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ tableName, id }),
        })
        .then(response => {
            if (response.ok) {
                location.reload(); // Reload the page after successful deletion
            } else {
                alert('Failed to delete row.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred. Please try again.');
        });
    }
}

function updateRow(tableName, id) {
    // Redirect to an update page or open a modal for updating the row
    // You can modify this function according to your update logic
    console.log(`Update row ${id} in table ${tableName}`);
}
</script>
</body>
</html>
