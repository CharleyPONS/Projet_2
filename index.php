<?php

session_start();

require('controllers/frontend.php');
require('controllers/backend.php');
require('Autoloader.php');
Autoloader::register();

if (empty($_GET['action'])) {
    listPosts(5);
}
if (!empty($_GET['action'])) {
    $action = $_GET['action'];

    switch ($action) {
        case 'about':
            require('views/frontend/about.html');
            break;

        case 'contact':
            require('views/frontend/contact.html');
            break;

        case 'listPosts':
            listPosts(5);
            break;


        case 'listAllPosts':
            listPosts(100);
            break;

        case 'homepageBackend':
            homepageBackend();
            break;

        case 'addpostBackend':
            addpostBackend();
            break;

        case 'post':
            if (!empty($_GET['id']) && $_GET['id'] > 0) {
                post();
            } else {
                throw new Exception('Pas d\'id de billet envoyé');
            }
            break;

        case 'login':
            UserManager::sessionExist();
            if (isset($_POST['pseudo']) && ($_POST['pass'])) {
                getUser($_POST['pseudo'], $_POST['pass']);
            } else {
                require('views/backend/loginView.php');
            }
            break;

        case 'logout':

            logOut();
            break;

        case'addPost':

            addPost($_POST['titre'], $_POST['contenu']);
            break;

        case 'addComment':

            if (!empty($_GET['id']) && $_GET['id'] > 0) {
                if (!empty($_POST['auteur']) && !empty($_POST['commentaire'])) {
                    try {
                        addComment($_GET['id'], $_POST['auteur'], $_POST['commentaire']);
                    } catch (Exception $e) {
                        throw new Exception($e);
                    }
                } else {
                    echo 'Erreur : tous les champs ne sont pas remplis !';
                }
            } else {
                echo 'Erreur : aucun identifiant de billet envoyé';
            }

            break;

        case 'postEdition':

            postEdition($_GET['id'], $_POST['titre'], $_POST['contenu']);
            break;

        case 'editshow':

            editshow($_GET['id']);
            break;

        case 'gestionPosts':

            gestionPosts();
            break;

        case 'postSuppression':

            postSuppression($_GET['id']);
            break;

        case 'postAdmin':

            UserManager::noSession();
            postAdmin();
            break;

        case 'reportcomment':

            reportcomment($_GET['id'], $_GET['report']);
            break;

        case 'removereport':

            removereport($_GET['id_comment']);
            break;

        case 'commentSuppression':

            commentSuppression($_GET['id']);
            break;
    }
}
