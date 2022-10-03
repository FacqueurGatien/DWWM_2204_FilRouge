<?php 
//page : definir la page a afficher.

/*
$_GET[] = valeurs transmises par l'url.
*/

// si le parametre 'page' dans l'url n'est pas vide
echo '<pre>' . var_export($_GET , true) . '</pre>';

$page = $_GET['page'] ?? 'home'; // null coalescing operator
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
switch($page)
{
    case 'home':
        require '../View/home.php';
        break;
    case 'profile':
        require '../View/profile.php';
        break;
    case 'groups':
        require '../View/groups.php';
        break;
    default:
        echo 'Erreur 404';
        break;
}