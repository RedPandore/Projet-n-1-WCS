<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>CV Ivern Roncepied</title>
</head>
<body>

<?php require_once('php/header.php'); ?>
  
    <div class="outer-wrapper">
        <div class="wrapper">

            <?php require_once('php/info.php'); ?>
            <?php require_once('php/experience.php'); ?>
            <?php require_once('php/competence.php'); ?>
            <?php require_once('php/form.php'); ?>
            
        </div>
    </div>

    <?php js($js);?>        
    <?php require_once('php/footer.php'); ?>
    <script src='script/script.js'></script>
</body>
</html>