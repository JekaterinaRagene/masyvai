<?php
require 'functions.php';
head();
grizti();
logout();

if (isset($_GET['paveikslas'])) {    
    $keliasIkiFailo = $_GET['paveikslas'];
   }    

?>

<body>  
    <img src="<?php echo $keliasIkiFailo; ?>">
</body>
<?php
footer();
?>