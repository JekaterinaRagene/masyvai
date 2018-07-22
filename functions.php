<?php
function head()
{
    ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="stilius.css" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Jekaterina Ragėnė</title>
  </head>
    <?php
}

function footer()
{
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

  </body>
</html>
    <?php
}

function logout()
{
    ?>
    <body>
    <a href="index.php">Log Out</a> <br>
    </body>
    <?php
}

function grizti()
{   ?>
        <body>
    <a href="index_veikia.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Grizti</a>
        </body>
        <?php
}

function upload()
{
    if (isset($_FILES['failas'])) {
    echo "<pre>";
    print_r($_FILES);
    echo "<pre>";
    
    if (!file_exists('failai')) {
        mkdir('failai');
    }

    move_uploaded_file(
        $_FILES['failas']['tmp_name'],
        'masyvai/failai/' . $_FILES['failas']['name']
    );
}
?>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="failas">
    
    <input type="submit" value="Upload">
</form>
<?php
}





