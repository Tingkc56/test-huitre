<?php 

require_once('./vendor/autoload.php');

use Project\Controllers\Front\FrontController;

session_start();


if($_SERVER['HTTP_HOST'] !=  "test-huitre.herokuapp.com") {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
}


try{
    $frontController = new FrontController();

    if(isset($_GET['action']))
    {
        // get into the main pages
        if($_GET['action']=='blog'){
            $frontController->blog(); 
        }elseif($_GET['action']=='huitres'){
            $frontController->huitres(); 
        }elseif($_GET['action']=='producers'){
            $frontController->producers(); 
        }elseif($_GET['action']=='contact'){
            $frontController->contact(); 
        }
        elseif($_GET['action']=='contact'){
            $frontController->contact(); 
        }
        elseif($_GET['action']=='connect'){
            $frontController->connect(); 
        }
        //user connection
        elseif($_GET['action'] == 'creatUser'){
            $pseudo = $_POST['Pseudo'];
            $mail = $_POST['mail'];
            $mdp = $_POST['pass'];
            $pass = password_hash($mdp, PASSWORD_DEFAULT);
            $frontController ->creatUser($pseudo,$mail,$pass);
        }elseif($_GET['action'] == 'connexionUser'){
            $mail = $_POST['mail'];
            $pass = $_POST['pass'];

            if(!empty($mail) && !empty($pass)){
                $frontController->connexionUser($mail,$pass);
            }else{
                throw new Exception('Renseigner vos identifiant');
            }
        }elseif($_GET['action'] == 'disConnect'){
            $frontController ->disConnect();
        }
        elseif($_GET['action']=='userInfos'){
            $frontController->userInfos(); 
        }
        // get messages
        elseif($_GET['action'] == 'getMessage'){
            $name = $_POST['name'];
            $mail = $_POST['mail'];
            $sujet = $_POST['sujet'];
            $message = $_POST['content'];
            //var_dump($name);
            $frontController->getMessage($name,$mail,$sujet,$message);
        }
        //single the article page
        elseif($_GET['action']=='article'){
            $id = $_GET['id'];
            $frontController->article($id); 
        }
        elseif($_GET['action'] == 'commentaire'){
            $id = $_GET['id'];
            $name = $_POST['name'];
            $comment = $_POST['comment'];
            $frontController->getComment($name,$comment,$id);
        }
        //single oyster page
        elseif($_GET['action']=='huitre'){
            $id = $_GET['id'];
            $frontController->huitre($id); 
        }
        //single producer page
        elseif($_GET['action']=='producer'){
            $id = $_GET['id'];
            $frontController->producer($id); 
        }
        //mention page
        elseif($_GET['action']=='mention'){
            $frontController->mention(); 
        }

    }else{
        $frontController->accueil();
    }
    
} catch(Exception $e){
    die('Erreur: ' .$e->getMessage());
}
