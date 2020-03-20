<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php if(isset($title)){ echo " - " . $title; } ?></title>
  </head>
  <body>
    <?php if(isset($content)){ echo $content; } ?>
  </body>
</html>
