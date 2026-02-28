<?php

    include "config.php";

    $query  = "select * from users";
    $result = mysqli_query($connection, $query);

?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="assets/style.css" />
</head>

<body>
       <?php

           $status = $_GET['status'] ?? '';
           
           if ($status) {
               echo $status;
           }

       ?>
  <table>
    <tr>
      <th>ID</th>
      <th>email</th>
      <!-- <th>quantity_sold</th> -->
      <th>Edit</th>
      <th>Delete</th>
    </tr>

    <?php while ($data = mysqli_fetch_assoc($result)) {?>
      <tr>
        <td><?php echo $data['id'] ?></td>
        <td><?php echo $data['email'] ?></td>

        <td><a href="edit_user.php?editId=<?php echo $data['id'] ?>" class="btn-edit">Edit</a></td>

        <td><a href="delete.php?deleteId=<?php echo $data['id']; ?>" class="btn-delete" onclick="return confirm('Are you sure?')">Delete</a></td>

      </tr>
    <?php }?>


  </table>

</body>

</html>