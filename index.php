<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Kusum Curd OP</title>
</head>

<body>
    <div class="container">
        <div class="head-box">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <header>
                        <h4 class="text-center">List of Books :</h4>
                    </header>
                </div>
                <div class="col-md-6 col-sm-12">
                    <a href="create.php" type="button" class="float-right btn btn-primary">Add Book</a>
                </div>
            </div>
        </div>



        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Price</th>
                    <th>Edition</th>
                    <th>Publisher</th>
                    <th>Category</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include('connect.php');
                $sql = "SELECT * from books";
                $result = mysqli_query($conn, $sql);

                //print_r($row); // Show data in array format
                while ($row = mysqli_fetch_array($result)) {
                    $id = 0;
                ?>
                    <tr>
                        <th><?php echo $row['id'] ?></th>
                        <td><?php echo $row['title'] ?></td>
                        <td><?php echo $row['author'] ?></td>
                        <td><?php echo $row['price'] ?></td>
                        <td><?php echo $row['edition'] ?></td>
                        <td><?php echo $row['publisher'] ?></td>
                        <td><?php echo $row['cat'] ?></td>
                        <td>
                            <a href="view.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Read More</a>
                            <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-warning">Edit</a>
                            <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>

                <?php
                }

                ?>


            </tbody>
        </table>
    </div>


</body>

</html>