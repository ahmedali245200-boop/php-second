

<?php

    include_once 'config.php';

    if (! $connection) {
    throw new Exception("Not Connected<br>");
    }

    $action = $_POST['action'];

    if ($action == 'register') {

    $email = $_POST['email'];

    $password = $_POST['psw'];

    if ($email != "" && $password != "") {
        $query  = "insert into users(email, password) values('$email', '$password')";
        $isDone = mysqli_query($connection, $query);

        if ($isDone) {

            $status = "Successfully inserted";
            header("location:all-users.php?status={$status}");

        } else {
            echo "Not inserted";
        }
    }
    } else if ($action == 'edit') {

    $email = $_POST['email'];

    $editId = $_GET['editId'];

    $query = "UPDATE users SET email = '$email' WHERE id = $editId;";

    $isDone = mysqli_query($connection, $query);

    $status = "Updated Successfully";
    header("location:all-users.php?status={$status}");

    } else if ($action == 'login') {
    $email = $_POST['email'];

    $formPassword = $_POST['psw'];

    $query   = "select * from users where email='$email'";
    $isEmail = mysqli_query($connection, $query);

    if (mysqli_num_rows($isEmail) > 0) {

        $data = mysqli_fetch_assoc($isEmail);

        $DbPassword = $data['password'];

        if ($DbPassword === $formPassword) {
            header('location:all-users.php');
        } else {
            $status = 'Email and password are not matched';
            header("location:login.php?status={$status}");

        }

    } else {
        $status = 'Given Email is not registered';
        header("location:login.php?status={$status}");
    }

}
