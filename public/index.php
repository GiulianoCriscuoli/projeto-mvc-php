<?php
include './../app/conf.php';
include './../app/Libraries/Router.php';
include './../app/Libraries/Controller.php';
include './../app/Libraries/Connection.php';

$db = new Connection;

$user_id = 10;
$title = 'Título';
$text = 'Texto do post';

$db->query("INSERT INTO posts(user_id, title, text) VALUES(:user_id, :title, :text)");
$db->bind(":user_id", $user_id);
$db->bind(":title", $title);
$db->bind(":text", $text);

$db->execute();

echo '<p> O máximo de linhas encontradas: '.$db->maxRow().'</p>';
echo '<p> O último id inserido: '.$db->lastId().'</p>';

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