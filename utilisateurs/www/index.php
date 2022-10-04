<?php require '..//vendor/autoload.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
<?php
    /*
        //page : definir la page a afficher.
        $_GET[] = valeurs transmises par l'url.
        // si le parametre 'page' dans l'url n'est pas vide
        echo '<pre>' . var_export($_GET , true) . '</pre>';
    */
    /*
        if (!empty($_GET['page']))
        {
            $page = $_GET['page'];
        }
        else
        {
            $page = 'home';
        }

        $page = !empty($GET['page']) ? $_GET['page'] : 'home';

        $tableau = [];

        $tableau[] = 'Toto';
        $tableau[] = 'Johnny';
        $tableau[1] = 'Gatien';

        $tableau['Johnny'] = 'stagiaire';

        echo $tableau[1];
        echo '<hr>';
        echo $tableau['Johnny'];


        echo '<pre>'.var_export($tableau , true);
    */
    $page = $_GET['page'] ?? 'home'; // null coalescing operator
    switch($page)
    {
        case 'home':
            $controller = new Users\Controllers\HomeController();
            $controller->index();
            break;
        case 'profile':
            $controller = new Users\Controllers\ProfileController();
            $controller->index();
            break;
        case 'groups':
            $controller = new Users\Controllers\GroupController();
            $controller->index();
            break;
        default:
            echo 'Erreur 404';
            break;
    }
    ?>
</body>
</html>

