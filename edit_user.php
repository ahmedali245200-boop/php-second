
<?php


include "config.php";


$editId = $_GET['editId'];
// echo $editId;exit;

$query = "SELECT * FROM users WHERE id='$editId' ";

$res = mysqli_query($connection, $query);

$data = mysqli_fetch_assoc($res);

// print_r($data);exit;

?>


<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="assets/style.css" />
</head>

<body>
   
        <form action="tasks.php?editId=<?php echo $editId ?>" method="post">

            <label for="fname">Email</label>

            <input type="text" value="<?php echo $data['email'] ?>" id="fname" name="email">
`
            <input type="hidden" value="edit" name="action">
           
            <input type="submit" style="margin-top: 6px;" name="submit" value="Update">
           
        </form>



</body>

</html>