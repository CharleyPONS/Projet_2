<?php

session_start();

require ('controllers/frontend.php');
require ('controllers/backend.php');
//require ('models/PostsManager.php');
require ('Autoloader.php');

Autoloader::register();

if (!empty($_GET['action'])) {

    if($_GET['action'] == 'about'){
        require('views/frontend/about.html');
    }

    if($_GET['action'] == 'contact'){
        require('views/frontend/contact.html');
    }
	
    if ($_GET['action'] == 'listPosts') {
        listPosts(5);
    }

    elseif ($_GET['action'] == 'listAllPosts') {
        listPosts(100);
    }
    
    elseif ($_GET['action'] == 'homepageBackend') {
        homepageBackend();
    }

    elseif ($_GET['action'] == 'addpostBackend') {
        addpostBackend();
    }

    elseif ($_GET['action'] == 'post') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            post();
        }
        else {
            throw new Exception('Pas d\'id de billet envoyé');
        }
    }

    elseif ($_GET['action'] == 'login') {
        UserManager::sessionExist();
        if (isset($_POST['pseudo']) && ($_POST['pass'])) 
        {
           getUser($_POST['pseudo'], $_POST['pass']) ; 
        } 
        else 
        {           
            require ('views/backend/loginView.php');
        }
    }

    elseif ($_GET['action'] == 'logout')
    {
        logOut();
    }

    elseif ($_GET['action'] == 'addPost')
    {
        addPost($_POST['titre'], $_POST['contenu']);
    }    

    elseif ($_GET['action'] == 'addComment')
    {
        if (isset($_GET['id']) && $_GET['id'] > 0) 
        {
            if (!empty($_POST['auteur']) && !empty($_POST['commentaire'])) 
            {
                addComment($_GET['id'], $_POST['auteur'], $_POST['commentaire']);
            }
            else 
            {
                echo 'Erreur : tous les champs ne sont pas remplis !';
            }
        }
        else 
        {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    }

    elseif ($_GET['action'] == 'postEdition')
    {
        postEdition($_GET['id'], $_POST['titre'], $_POST['contenu']);
    }

    elseif ($_GET['action'] == 'editshow')
    {
        editshow($_GET['id']);
    }

    elseif ($_GET['action'] == 'gestionPosts')
    {
        gestionPosts();
    }

    elseif ($_GET['action'] == 'postSuppression')
    {
        postSuppression($_GET['id']);
    }

    elseif ($_GET['action'] == 'postAdmin')
    {   
        UserManager::noSession();
        postAdmin();
    }

    elseif ($_GET['action'] == 'reportcomment')
    {
        reportcomment($_GET['id'], $_GET['report']);
    }

    elseif ($_GET['action'] == 'removereport')
    {
        removereport($_GET['id_comment']);
    }

    elseif ($_GET['action'] == 'commentSuppression')
    {
        commentSuppression($_GET['id']);
    }
}
else 
{
    listPosts(5);
}


