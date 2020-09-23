<?php
include './../app/conf.php';
include './../app/Libraries/Router.php';
include './../app/Libraries/Controller.php';
include './../app/Libraries/Connection.php';

$connection = new Connection;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo APP_NAME; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href= "<?php echo URL ?>/public/css/style.css"/>
</head>
<body>

    <?php
        include APP.'/Views/header.php';
        $routes = new Router();
        include APP.'/Views/footer.php';
    
    ?>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="<?php URL; ?>/public/js/jquery.functions.js"> </script>
</body>
</html>