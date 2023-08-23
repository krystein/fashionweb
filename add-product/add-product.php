<?php include('../includes/class-autoload.inc.php');

?>
<!DOCTYPE html>
<html>

<head>
    <style>
    .container {
        height: 100vh;
    }
    </style>
    <title>Image Upload</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css" />

</head>

<body>
    <div>
        <section class="container d-flex justify-content-center align-items-center">
            <div id="content">
                <form method="POST" action="../includes/addProduct.inc.php" enctype="multipart/form-data" class="">
                    <div class="form-group row">
                        <input class="form-control" type="file" name="uploadfile" value="" />
                    </div>
                    <div class="form-group row">
                        <label class="col-sm col-form-label">code: </label>
                        <div>
                            <input type="text" name="code" id="code" class="input form-control" required />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm col-form-label">Name</label>
                        <div>
                            <input type="text" name="name" id="name" class="input form-control" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm col-form-label">type</label>
                        <div>
                            <input type="text" name="type" id="type" class="input form-control" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm col-form-label">Price ($)</label>
                        <div>
                            <input type="text" name="price" id="price" class="input form-control" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
                    </div>
                </form>
            </div>
        </section>

</body>

</html>