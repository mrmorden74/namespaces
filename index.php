<?php
declare(strict_types=1);
namespace SuperUtilities;
?>

<!doctype html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <title>Namespaces</title>
    </head>
    <body>
<?php
 require './Form/Form.class.php';
 require './SuperForm/SuperForm.class.php';
 $f = new Form();
 $f->isValid();

 $f2 = new \Wifi\Form\Form();
 $f2->validate();
  
 
?>
    </body>
</html>