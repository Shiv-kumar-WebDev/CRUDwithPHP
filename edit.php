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
        <?php
        include('conn.php');
        $id=$_GET['id'];
        $sql = "SELECT * FROM user WHERE id=$id";

        $res=mysqli_query($con, $sql);
        $row=mysqli_fetch_assoc($res);
      ?>
        <form action="update.php?id=<?php echo $id ?>" method="post">
            <input type="text" value="<?php echo $row['name'] ?>" name="name" class="form-control" placeholder="Name">
            <input  value="<?php echo $row['pass'] ?>" type="text" name="pass" class="form-control mt-2" placeholder="Password">
            <button class="btn btn-success mt-4">Update</button>
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>