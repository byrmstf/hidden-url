<?php
$hash = "05edd57091ad570303df856c652a7a174554a148";
?>
<!DOCTYPE html>
<html lang="tr" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title>TEST</title>
    </head>
    <body>
        <h1>PDF hidden URL</h1>
        <object data="/img.php?h=<?= $hash ?>" type="application/pdf" width="100%" height="800px">
            <embed width="100%" height="1000px" src="/img.php?h=<?= $hash ?>"/>
        </object>
    </body>
</html>