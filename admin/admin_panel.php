<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../css/teacher.css">
    <style>
        /* Add your custom styles here */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center; /* Center content horizontally */
            align-items: center; /* Center content vertically */
            min-height: 100vh; /* Make sure the content covers the full viewport height */
        }

        .main-content {
            width: 50%; /* Make the content take up half the width */
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin-bottom: 20px;
            text-align: center;
        }

        .btn-container {
            display: flex;
            justify-content: space-between; /* Align buttons at the ends */
            margin-bottom: 20px;
        }

        .btn {
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .go-back-btn {
            background-color: #000;
            color: #fff;
        }

        .go-back-btn:hover {
            background-color: #222;
        }

        .add-btn {
            background-color: #0f0;
            color: #fff;
        }

        .add-btn:hover {
            background-color: #0c0;
        }

        .edit-btn {
            background-color: #00f;
            color: #fff;
        }

        .edit-btn:hover {
            background-color: #00c;
        }

        .delete-btn {
            background-color: #f00;
            color: #fff;
        }

        .delete-btn:hover {
            background-color: #c00;
        }

        .teacher-table {
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            border-bottom: 1px solid #ccc;
            text-align: left;
        }

        .edit-btn, .delete-btn {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 3px;
            margin-right: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .edit-btn:hover, .delete-btn:hover {
            background-color: #222;
        }
    </style>
</head>
<body>
    <!-- Main content -->
    <div class="main-content">
        <h1>Welcome Admin</h1>
        <div class="btn-container">
            <a href="dashboard.php" class="btn go-back-btn">Go Back</a>
            <a href="create_teacher.php" class="btn add-btn">Add Teacher</a>
        </div>

        <!-- Teacher List Section -->
        <section class="teacher-table">
            <h2>Teacher List</h2>
            <table>
                <thead>
                    <tr>
                        <th>Teacher Name</th>
                        <th>Details</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once('../db.php');

                    // Fetch all teachers
                    $result = $conn->query("SELECT * FROM teachers");

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row['name'] . "</td>";
                            echo "<td>" . $row['details'] . "</td>";
                            echo "<td>
                                    <a href='edit_teacher.php?id=" . $row['id'] . "' class='edit-btn'>Edit</a>
                                    <a href='teachers.php?delete=" . $row['id'] . "' class='delete-btn' onclick='return confirm(\"Are you sure you want to delete this teacher?\")'>Delete</a>
                                  </td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='3'>No teachers found.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </div>
</body>
</html>
