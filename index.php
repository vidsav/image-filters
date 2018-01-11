<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <a class="navbar-brand" href="#">CSS3</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Filters
        </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#gray">Gray</a>
                        <a class="dropdown-item" href="#blur">Blur</a>
                        <a class="dropdown-item" href="#sepia">Sepia</a>
                        <a class="dropdown-item" href="#invert">Invert</a>
                        <a class="dropdown-item" href="#opacity">Opacity</a>
                        <a class="dropdown-item" href="#saturate">Saturate</a>
                        <a class="dropdown-item" href="#contrast">Contrast</a>
                        <a class="dropdown-item" href="#brightness">Brightness</a>
                        <a class="dropdown-item" href="#hue-rotate">Hue Rotate</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container image-gallery">
        <div class="col-md-12 text-center">
            <h2>IMAGE FILTERS WITH CSS3</h2>
        </div>
        <hr>
        <br>
        <h4>Original</h4>
        <hr>
        <?php include('gallery.php'); ?>
    </div>
    <div class="container image-gallery" id="gray">
        <h4>Gray filter</h4>
        <hr>
        <?php include('gallery.php'); ?>
    </div>
    <div class="container image-gallery" id="blur">
        <h4>Blur filter</h4>
        <hr>
        <?php include('gallery.php'); ?>
    </div>
    <div class="container image-gallery" id="sepia">
        <h4>Sepia filter</h4>
        <hr>
        <?php include('gallery.php'); ?>
    </div>
    <div class="container image-gallery" id="invert">
        <h4>Invert filter</h4>
        <hr>
        <?php include('gallery.php'); ?>
    </div>
    <div class="container image-gallery" id="opacity">
        <h4>Opacity filter</h4>
        <hr>
        <?php include('gallery.php'); ?>
    </div>
    <div class="container image-gallery" id="saturate">
        <h4>Saturate filter</h4>
        <hr>
        <?php include('gallery.php'); ?>
    </div>
    <div class="container image-gallery" id="contrast">
        <h4>Contrast filter</h4>
        <hr>
        <?php include('gallery.php'); ?>
    </div>
    <div class="container image-gallery" id="brightness">
        <h4>Contrast filter</h4>
        <hr>
        <?php include('gallery.php'); ?>
    </div>
    <div class="container image-gallery" id="hue-rotate">
        <h4>Contrast filter</h4>
        <hr>
        <?php include('gallery.php'); ?>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

</html>