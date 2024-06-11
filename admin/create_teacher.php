<?php
require_once('../db.php');

if (isset($_POST['add_teacher'])) {
    $name = $_POST['name'];
    $details = $_POST['details'];
    $image = $_FILES['image']['name'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = '../uploads/' . $image;

    // Validate the inputs
    if (empty($name) || empty($details) || empty($image)) {
        echo "All fields are required!";
    } else {
        // Insert the data into the database
        $insert_query = $conn->prepare("INSERT INTO teachers (name, details, image) VALUES (?, ?, ?)");
        $insert_query->bind_param("sss", $name, $details, $image);

        if ($insert_query->execute()) {
            // Move the uploaded image to the designated folder
            if (move_uploaded_file($image_tmp_name, $image_folder)) {
                echo "Teacher added successfully!";
                // Redirect to admin_panel.php after adding the teacher
                header("Location: admin_panel.php");
                exit(); // Ensure script execution stops after redirection
            } else {
                echo "Failed to upload image!";
            }
        } else {
            echo "Error: " . $insert_query->error;
        }

        $insert_query->close();
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Teacher</title>
    <style>
        /* Add your custom styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            width: 50%;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin-bottom: 20px;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea,
        input[type="file"],
        input[type="submit"] {
            margin-bottom: 10px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Add a New Teacher</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="details">Details:</label>
            <textarea id="details" name="details" required></textarea>
            <label for="image">Image:</label>
            <input type="file" id="image" name="image" accept="image/png, image/jpeg" required>
            <input type="submit" name="add_teacher" value="Add Teacher">
        </form>
        <a href="admin_panel.php" class="btn">Go Back</a>
    </div>
</body>
</html>
