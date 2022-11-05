<?php 
include "includes/sessions.php";
?>

<?php 
session_destroy();
header("Location: index.php")

?>