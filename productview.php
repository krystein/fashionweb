<?php
include("./includes/class-autoload.inc.php");


$images = new UploadView();
$all = $images->viewImages();

?>

<!DOCTYPE html>
<html>

<head>
    <style>
    #scrollToTop {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 50px;
        height: 50px;
        background-color: #555;
        color: #fff;
        border: none;
        border-radius: 20%;
        cursor: pointer;
        font-size: 18px;
        text-align: center;
        outline: none;
        /* Add this line to remove outline */
    }

    .hidden {
        display: none;
    }
    </style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Pixie - Products</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/tooplate-main.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="./assets/css/login.css" />
</head>

<body>
    <section>
        <form method="POST" action="">
            <div>
                <header class="d-flex align-items-center justify-content-between mt-1 p-3 mb-5 border border-dark">
                    <div>
                        <h1 class="text-black-50">Product List</h1>
                    </div>
                    <div class="d-flex">
                        <a class="btn btn-primary mx-2" href="./add-product/add-product.php">
                            ADD
                        </a>
                    </div>
                </header>


                <div class="featured">
                    <?php
                    foreach ($all as $image) {
                        ?>
                    <div class="col-md">
                        <div class="featured-item">
                            <div>
                                <img src="./image/<?php echo $image['filename']; ?>">
                            </div>
                            <h2 class="uppercase font-semibold">
                                <?php echo $image['code']; ?>
                            </h2>
                            <p>
                                <?php echo $image['name']; ?>
                            </p>
                            <p></p>
                            <p>
                                <?php echo $image['type']; ?>$
                            </p>
                            <p>
                                <?php echo $image['price']; ?>
                            </p>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </form>
    </section>
    <script>
    window.onscroll = function() {
        showScrollButton();
    };

    function showScrollButton() {
        var scrollToTopButton = document.getElementById('scrollToTop');
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            scrollToTopButton.style.display = "block";
        } else {
            scrollToTopButton.style.display = "none";
        }
    }

    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
    </script>
</body>

</html>