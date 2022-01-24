<?php
session_start();

$path = 'http://localhost/phpcrud/';

include('connect.php');

$action = $_GET['action'];

//File Rename & Upload
$newPhoto = '';
if (isset($_FILES['photo']['name']) && $_FILES['photo']['name'] != '') {
    $file = $_FILES['photo']['name'];
    $fileExtention = pathinfo($file, PATHINFO_EXTENSION);
    $newPhoto = date('d-m-Y') . '-' . time() . '.' . $fileExtention;
    $uploadPath = '../uploads/';
    $file_tmp_name = $_FILES['photo']['tmp_name'];
    move_uploaded_file($file_tmp_name, $uploadPath . $newPhoto);
}

if ($action === 'add') {

    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $reg = $_POST['reg'];
    $department = $_POST['department'];

    $sql = "INSERT INTO `student`(`name`, `roll`, `reg`, `department`, `photo`) VALUES ('$name','$roll','$reg','$department','$newPhoto')";
    $query = $conn->query($sql);
    if ($query) {
        $_SESSION['message'] = 'Student Add Successfull !';
        header('location:' . $path . 'home');
    } else {
        echo 'error' . $sql . $con->error;
    }
} elseif ($action === 'edit') {
    $id = $_GET['id'];

    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $reg = $_POST['reg'];
    $department = $_POST['department'];


    if ($_FILES['photo']['name'] != '') {
        //Delete Preview file
        $sql = "SELECT * FROM student WHERE id=$id";
        $query = $conn->query($sql);
        $data = $query->fetch_assoc();
        $reviewFile = $data['photo'];
        unlink('../uploads/' . $reviewFile);

        $sql = "UPDATE `student` SET `name`='$name',`roll`='$roll',`reg`='$reg',`department`='$department',`photo`='$newPhoto' WHERE id=$id";
    } else {
        $sql = "UPDATE `student` SET `name`='$name',`roll`='$roll',`reg`='$reg',`department`='$department' WHERE id=$id";
    }
    $query = $conn->query($sql);
    if ($query) {
        $_SESSION['message'] = 'Update Successfull !';
        header('location:' . $path . 'home');
    } else {
        echo 'error' . $sql . $con->error;
    }
} elseif ($action === 'delete') {
    $id = $_GET['id'];
    //Delete Preview file
    $sql = "SELECT * FROM student WHERE id=$id";
    $query = $conn->query($sql);
    $data = $query->fetch_assoc();
    $reviewFile = $data['photo'];
    unlink('../uploads/' . $reviewFile);
    
    $sql = "DELETE FROM `student` WHERE id=$id";
    $query = $conn->query($sql);
    if ($query) {
        $_SESSION['message'] = 'Delete Successfull !';
        header('location:' . $path . 'home');
    } else {
        echo 'error' . $sql . $con->error;
    }
} else {
    echo "Error action not Found";
}
