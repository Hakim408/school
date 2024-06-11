<?php
require_once '../db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['add_teacher'])) {
        $name = $_POST['name'];
        $details = $_POST['details'];
        $image = $_FILES['image']['name'];
        $target = "uploads/" . basename($image);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $sql = "INSERT INTO teachers (name, details, image) VALUES ('$name', '$details', '$image')";
            if ($conn->query($sql) === TRUE) {
                header("Location: teachers.php");
                exit();
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } elseif (isset($_POST['edit_teacher'])) {
        $id = $_POST['teacher_id'];
        $name = $_POST['name'];
        $details = $_POST['details'];
        $image = $_FILES['image']['name'];
        $target = "uploads/" . basename($image);

        if (!empty($image)) {
            if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                $sql = "UPDATE teachers SET name='$name', details='$details', image='$image' WHERE id=$id";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        } else {
            $sql = "UPDATE teachers SET name='$name', details='$details' WHERE id=$id";
        }

        if ($conn->query($sql) === TRUE) {
            header("Location: teachers.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } elseif (isset($_POST['delete_teacher'])) {
        $id = $_POST['teacher_id'];
        $sql = "DELETE FROM teachers WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            header("Location: teachers.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>
