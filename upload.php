<?php
define('ALLOWED_EXTENSIONS', ['jpg', 'png']);
define('ALLOWED_MAX_FILE_SIZE', 1024); // kilobaitais
function imageUploader($failoInformacija, $naujasVardas = null)
{
//    echo "<pre>";
//    print_r($failoInformacija);
//    echo "</pre>";
    
    $check = getimagesize($failoInformacija["tmp_name"]);
    
    if ($check == false) {
        return false;
    }
    
    $failoPletinys = strtolower(
        pathinfo($failoInformacija['name'], PATHINFO_EXTENSION)
    );
    
    if (!in_array($failoPletinys, ALLOWED_EXTENSIONS)) {
        return false;
    }    
    
    // Musu failas yra paveikslelis ir tarp ALLOWED_EXTENSIONS
    
    if ($naujasVardas == null) {
        // sena varda paversti mazosiomis
        $naujasVardas = strtolower($failoInformacija['name']);
        // tarpo simbolius pakeisti '_'
        $naujasVardas = str_replace(' ', '_', $naujasVardas); 
        // istrinti ne lotyniskus simbolius
        $naujasVardas = filter_var($naujasVardas, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
    }
    
    $destination = '../masyvai/failai/' . $naujasVardas;
    
    return move_uploaded_file($failoInformacija['tmp_name'], $destination);
}
if (isset($_FILES['failas'])) {
    if (imageUploader($_FILES['failas']) == false) {
        echo "Ivyko klaida ikeliant faila";
    }
}
?>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="failas">
    
    <input type="submit" value="Upload">
</form>