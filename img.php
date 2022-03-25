<?php
if (!isset($_SERVER['HTTP_REFERER']) && strpos($_SERVER['HTTP_REFERER'], 'http://hidden-url/') === false) {
    die('None content');
}

$images = array(
    '05edd57091ad570303df856c652a7a174554a148' => 'sample.pdf',
);
$filehash = $_GET['h'];
$filename = "documents/".$images[$filehash];
$arrContextOptions = array(
    "ssl" => array(
        "verify_peer" => false,
        "verify_peer_name" => false,
    ),
);
$response = file_get_contents($filename, false, stream_context_create($arrContextOptions));
header("Content-Type: application/pdf");
echo $response;
?>
