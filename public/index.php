<?php
include './../app/conf.php';
include './../app/autoload.php';


//$db = new Connection;


// TESTANDO o funcionamento das querys

/* $db->query("INSERT INTO posts(user_id, title, text) VALUES(:user_id, :title, :text)");
$db->bind(":user_id", $user_id);
$db->bind(":title", $title);
$db->bind(":text", $text);

$db->execute();

echo '<p> O máximo de linhas encontradas: '.$db->maxRow().'</p>';
echo '<p> O último id inserido: '.$db->lastId().'</p>'; */

/* $db->query("SELECT * FROM posts");
$db->result();
$db->execute();

 echo $db->result()->title;

 echo '<br /> Resultados encontrados: '.$db->maxRow();

*/

/* $db->query("SELECT * FROM posts ORDER BY id ASC");
$db->execute();

foreach($db->resultsAll() as $post) {
    echo $post->id.'-'.$post->title.'<br />';
}

echo '<br />Resultados encontrados: '.$db->maxRow();

*/

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