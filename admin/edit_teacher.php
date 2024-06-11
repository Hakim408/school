<?php
require_once('../db.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM teachers WHERE id = $id";
    $result = $conn->query($query);
    if($result->num_rows > 0) {
        $teacher = $result->fetch_assoc();
    } else {
        header('Location: teachers.php');
        exit;
    }
} else {
    header('Location: teachers.php');
    exit;
}

if(isset($_POST['update_teacher'])) {
    $name = $_POST['name'];
    $details = $_POST['details'];
    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $image_folder = '../uploads/'.$image;

    if(empty($image)) {
        $image = $teacher['image'];
    } else {
        move_uploaded_file($image_tmp, $image_folder);
    }

    $query = "UPDATE teachers SET name = '$name', details = '$details', image = '$image' WHERE id = $id";

    if($conn->query($query) === TRUE) {
        header('Location: admin_panel.php'); // Changed the redirection URL
        exit;
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Teacher</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <main class="container">
        <h2>Edit Teacher</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="box" value="<?php echo $teacher['name']; ?>" required>
            
            <label for="details">Details:</label>
            <textarea id="details" name="details" class="box" required><?php echo $teacher['details']; ?></textarea>
            
            <label for="image">Image:</label>
            <input type="file" id="image" name="image" accept="image/*" class="box">
            <img src="../uploads/<?php echo $teacher['image']; ?>" height="100" alt="">
            
            <input type="submit" value="Update Teacher" name="update_teacher" class="btn">
        </form>
    </main>

</body>
</html>
