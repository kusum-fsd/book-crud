<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="card">
            <div class="row card-header">
                <div class="col-md-6 col-sm-12">
                    <header>
                        <h2 class="text-center">Book Details :</h2>
                    </header>
                </div>
                <div class="col-md-6 col-sm-12">
                    <a href="index.php" type="button" class="float-right btn btn-primary">Back</a>
                </div>
            </div>


            <div class="book-details">
                <?php
              
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    include("connect.php");
                    $sql = "SELECT * from books WHERE id = $id";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result);
                ?>
                <?php

                }
                ?>
                <div class="card-body">
                    <form action="process.php" method="post">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Book Name</label>
                                    <input type="text" name="title" class="form-control" value="<?php echo $row['title']; ?>">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Book Author</label>
                                    <input type="text" name="author" class="form-control" value="<?php echo $row['author']; ?>">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Book Price</label>
                                    <input type="number" name="price" class="form-control" value="<?php echo $row['price']; ?>">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Book Edition</label>
                                    <input type="text" name="edition" class="form-control" value="<?php echo $row['edition']; ?>">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Book Publisher</label>
                                    <input type="text" name="publisher" class="form-control" value="<?php echo $row['publisher']; ?>">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Book Category</label>
                                    <select class="form-control" name="cat" required>
                                       
                                        <option value="educational" <?php if ($row['cat'] == 'Educational') {
                                                                        echo 'selected';
                                                                    } ?>>Educational</option>
                                        <option value="friction" <?php if ($row['cat'] == 'Friction') {
                                                                        echo 'selected';
                                                                    } ?>>Friction</option>
                                        <option value="fantasy" <?php if ($row['cat'] == 'Fantasy') {
                                                                    echo 'selected';
                                                                } ?>>Fantasy</option>
                                        <option value="horror" <?php if ($row['cat'] == 'Horror') {
                                                                    echo 'selected';
                                                                } ?>>Horror</option>
                                        <option value="action" <?php if ($row['cat'] == 'Action') {
                                                                    echo 'selected';
                                                                } ?>>Action</option>
                                        <option value="comic" <?php if ($row['cat'] == 'Comic') {
                                                                    echo 'selected';
                                                                } ?>>Comic</option>
                                        <option value="classic" <?php if ($row['cat'] == 'Classic') {
                                                                    echo 'selected';
                                                                } ?>>Classic</option>
                                        <option value="others" <?php if ($row['cat'] == 'Others') {
                                                                    echo 'selected';
                                                                } ?>>Others</option>
                                    </select>


                                </div>
                                <input type="hidden" name="id" value='<?php echo $row['id']?>'>
                            </div>
                            <input href="#" type="submit" name="edit" class=" btn btn-primary" value="Edit Book">
                        </div>
                    </form>



                </div>
            </div>
         </div>

           
</body>

</html>