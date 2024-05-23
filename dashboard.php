<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual Insurance Workshop Platform Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('1.jpg'); /* Add your wallpaper path here */
            background-size: cover;
            background-attachment: fixed;
        }

        .dashboard-container {
            width: 100%;
            margin: 0 auto;
            background-color: transparent; /* Transparent background */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }

        header {
            background-color: #333;
            color: white;
            padding: 10px 0;
            text-align: center;
            border-radius: 8px;
            position: relative;
        }

        header h1 {
            margin: 0;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            display: flex;
            justify-content: center;
            margin: 10px 0;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        .logout-button {
            position: absolute;
            right: 20px;
            top: 10px;
            background-color: #ff4444;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-weight: bold;
        }

        .logout-button:hover {
            background-color: #ff0000;
        }

        main {
            padding: 20px;
        }

        .dashboard-section {
            background-color: white;
            margin: 20px 0;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .dashboard-section h2 {
            margin-top: 0;
        }

        .dashboard-section button {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .dashboard-section button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <header>
            <h1>Virtual Insurance Workshop Platform</h1>
            <a href="home.php" class="logout-button">Logout</a>
            <nav>
                <ul>
                    <li><a href="workshop.php">Workshops</a></li>
                    <li><a href="instructors.php">Instructors</a></li>
                    <li><a href="attendees.php">Attendees</a></li>
                    <li><a href="insurance planning.php">Insurance planning</a></li>
                    <li><a href="reports.php">Reports</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <section id="workshops" class="dashboard-section">
                <h2>Workshops</h2>
                <p>Manage and schedule workshops.</p>
                <button><a href="workshop.php">View Details</a></button>
            </section>
            <section id="instructors" class="dashboard-section">
                <h2>Instructors</h2>
                <p>Manage instructors and their profiles.</p>
                <button><a href="instructors.php">View Details</a></button>
            </section>
            <section id="attendees" class="dashboard-section">
                <h2>Attendees</h2>
                <p>Manage attendees and their information.</p>
                <button><a href="attendees.php">View Details</a></button>
            </section>
            <section id="resources" class="dashboard-section">
                <h2>Resources</h2>
                <p>Access and manage insurance planning resources.</p>
                <button><a href="insurance planning.php">View Details</a></button>
            </section>
            <section id="reports" class="dashboard-section">
                <h2>Reports</h2>
                <p>Generate and view reports.</p>
                <button><a href="report.php">View Details</a></button>
            </section>
        </main>
    </div>
</body>
</html>
