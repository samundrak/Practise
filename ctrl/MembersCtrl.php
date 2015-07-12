<?php 
include 'src/Members.php';
$members = new Members();
$members->setDB();
$members->redirect(); 
$members->fetchData($members->getSessionUser());

?>