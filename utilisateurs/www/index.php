<?php require '..//vendor/autoload.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Home</title>
</head>
<body class="body">
    <div class="element">
    <?php require 'nav-bar.php'; ?>
    </div>
    <div class="element">
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
                case 'group-create':
                    $controller = new Users\Controllers\GroupCreateController();
                    $controller->index();
                    break;
                case 'group-edit':
                    $controller = new Users\Controllers\GroupEditController();
                    $controller->index();
                    break;
                case 'group-delete':
                    $controller = new Users\Controllers\GroupDeleteController();
                    $controller->index();
                    break;
                case 'group-list':
                    $controller = new Users\Controllers\GroupListController();
                    $controller->index();
                    break;
                case 'group-details':
                    $controller = new Users\Controllers\GroupDetailsController();
                    $controller->index();
                    break;
                default:
                    echo 'Erreur 404';
                    break;
            }
            ?>
    </div>
    </body>
</html>

