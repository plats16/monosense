<!DOCTYPE html>
<html lang="en"> 
<?php $page='home' ?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content=""> 
  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="css/main.css" media="print" onload="this.media='all'">
  <script defer src="script/script.js"></script>
</head>

<body class="bg-white">
    <div class="container">   
        <nav class="navbar navbar-expand-xl navbar-expand-lg navbar-expand-md navbar-expand-sm  navbar-light bg-white">
            <a class="navbar-brand" href="#">Monosense</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-item nav-link" href="#">Facebook</a>
                        <a class="nav-item nav-link" href="#">Intagram</a>
                        <a class="nav-item nav-link" href="#">Youtube</a>
                        <a class="btn btn-outline-dark btn-md" href="#">Upload a photo</a>
                    </div>
                </div>
        </nav>
        <div class="row justify-content-center  ml-1 mt-4">  
            <div class="col-lg-12">
                <p class="font-weight-normal">Hi guys! This site was created just for you. 
                <b>It's a very straight to the point site and simple</b>. You can 
                <b>download</b> high quality pictures, poems, thoughts and sayings that are absolutely free(no copyright issues). Hope you like my <b>monochromatic theme</b>. Thanks!</p>
            </div> 
            
        </div>   
        <div class="row justify-content-center mt-1">
            <div class="col-lg-12 mt-1"> 
                <hr>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-12 bg-white">
                <ul class="nav justify-content-center">
                    <li class="<?php if($page=='home'){echo 'active';}?>">
                        <p><a href="index.php" >Love</a></p>
                    </li>
                    <li class="<?php if($page=='thoughts'){echo 'active';}?>">
                        <p><a href="thoughts.php">Thoughts and Sayings</a></p>
                    </li>
                    <li class="<?php if($page=='poetry'){echo 'active';}?>">
                        <p><a href="poetry.php" >Poetry</a></p>
                    </li> 
                    <li class="<?php if($page=='random'){echo 'active';}?>">
                        <p><a href="random.php" >Random Images</a></p>
                    </li>
                </ul> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-5 bg-light mt-4 p-2 rounded"> 
                <h3 class="text-center text-dark pb-2">Multiple Image Upload</h3> 
                <form action="" method="post" enctype="multipart/form-data" id="image_upload">
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" name="images[]" class="custom-file-input" id="image" multiple> 
                            <label for="image" class="custom-file-label">Choose file</label>
                        </div>
                    </div>  
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-dark btn-block" value="Upload">
                    </div> 
                    <h5 class="text-center text-success" id="result"></h5>
                </form>
            </div>     
        </div> 
        <div class="row justify-content-center mt-1">
            <div class="col-lg-12 mt-4"> 
                <div class="row p-2" id="images_preview"> 

                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="crossorigin="anonymous"></script>   
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


    <footer class="py-5 bg-dark">
        <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Monosense 2020</p>
        </div>
    </footer>

</body>

</html>

