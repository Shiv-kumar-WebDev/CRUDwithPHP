<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>CRUD</title>
</head>
<body>
    <div class="col-6 m-auto bg-dark text-white p-4 mt-5">
        <h2>CRUD</h2>
        <a href="index.php" class="btn btn-info">Insert</a>
        <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">First</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php
      include('conn.php');
      $sql = "SELECT * FROM user";

    $res=mysqli_query($con, $sql);
while($row=mysqli_fetch_assoc($res)){
    

      ?>
    <tr>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['pass']; ?></td>
      <td><a class="btn btn-primary" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> <a class="btn btn-danger" href="del.php?id=<?php echo $row['id']; ?>">Del</a></td>
    </tr>

    <?php }?>
    
  </tbody>
</table>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>