<?php
if($_SERVER['HTTP_REFERER'] !== 'http://hide-url/')
    die();


$images = array(
    '05edd57091ad570303df856c652a7a174554a148' => 'sample.pdf',
);

$filehash = $_GET['h'];
$filename = "documents/".$images[$filehash];
header('Content-Type: application/pdf');
readfile($filename);
?>
