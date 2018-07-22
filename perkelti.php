<?php
if (isset($_FILES['fileToUpload'])) {
    echo "<pre>";
    print_r($_FILES);
    echo "<pre>";
    
    if (!file_exists('fileToUpload')) {
        mkdir('fileToUpload');
    }
        // perkelti faila is laikinos direktorijos i nurodyta
    move_uploaded_file(
        $_FILES['fileToUpload']['tmp_name'],
            '../masyvai' . $_FILES['fileToUpload']['name']);
}
?>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload" name="submit">
</form>