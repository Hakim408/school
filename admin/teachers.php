<?php
require_once('../db.php');

if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    $delete_query = mysqli_query($conn, "DELETE FROM `teachers` WHERE id = $delete_id") or die('query failed');
    if($delete_query){
        header('location:admin_panel.php');
    } else {
        echo "Error deleting teacher";
    }
}
