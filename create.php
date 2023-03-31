<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Kusum Curd OP</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="row card-header">
                <div class="col-md-6 col-sm-12">
                    <header>
                        <h4 class="text-center">Add Books :</h4>
                    </header>
                </div>
                <div class="col-md-6 col-sm-12">
                    <a href="index.php" type="button" class="float-right btn btn-primary">Back</a>
                </div>
            </div>


            <div class="card-body">
                <form action="process.php" method="post">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Book Name</label>
                                <input type="text" name="title" class="form-control" placeholder="Book Name" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Book Author</label>
                                <input type="text" name="author" class="form-control" placeholder="Book Author" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Book Price</label>
                                <input type="number" name="price" class="form-control" placeholder="Book Price" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Book Edition</label>
                                <input type="text" name="edition" class="form-control" placeholder="Book Edition">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Book Publisher</label>
                                <input type="text" name="publisher" class="form-control" placeholder="Book Publisher" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Book Category</label>
                                <select class="form-control" name="cat" required>
                                    <option value="">Select book type</option>
                                    <option value="educational">Educational</option>
                                    <option value="friction">Friction</option>
                                    <option value="fantasy">Fantasy</option>
                                    <option value="horror">Horror</option>
                                    <option value="action">Action</option>
                                    <option value="comic">Comic</option>
                                    <option value="classic">Classic</option>
                                    <option value="others">Others</option>
                                </select>
                            </div>
                        </div>

                        <input href="#" type="submit" name="create" class=" btn btn-primary" value="Add Book">

                    </div>
                </form>
            </div>

        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>