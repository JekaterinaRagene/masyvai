<?php
if (isset($_FILES['failas'])) {
    echo "<pre>";
    print_r($_FILES);
    echo "<pre>";
    
    if (!file_exists('failai')) {
        mkdir('failai');
    }
    
    // perkelti faila is laikinos direktorijos i nurodyta
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