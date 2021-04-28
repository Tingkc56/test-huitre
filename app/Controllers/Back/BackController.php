<?php

namespace Project\Controllers\Back;
use Project\Models\UserManager;
use Project\Models\ArticleManager;
use Project\Models\HuitreManager;
use Project\Models\MessageManager;
use Project\Models\CommentManager;
use Project\Models\ProducerManager;

class BackController
{
// connection admin 
    function connexionAdmin(){
        require 'app/views/back/connexionAdmin.php';
    }


    function connexion($mail,$pass)
    {
        $isPasswordCorrect=false;
        
        $userManager = new UserManager();

        $connexAdm = $userManager->recupAdmin($mail, $pass);

        $result = $connexAdm->fetch();

        if($result){$isPasswordCorrect = password_verify($pass,$result['pass']);}



        if($isPasswordCorrect){

            $_SESSION['mail'] = $result['mail'];
            $_SESSION['[pass]'] = $result['pass'];
            $_SESSION['id'] = $result['id'];
            $_SESSION['name'] = $result['adminname'];
    
            require 'app/views/back/hbtable.php';
        }else{
            echo 'Vos identifients sont incorrect';
        }
    }

    function accueilAdmin(){
        require 'app/views/back/hbtable.php';
    }

    function deconnexion(){
        session_unset();
        require 'app/views/back/connexionAdmin.php';
    }



// blog and articles page
    function articles(){
        $articles = new ArticleManager();
        $allArticles = $articles->getArticles();

        require 'app/views/back/articles.php';
    }

    function addArticle(){
        require 'app/views/back/newArticle.php';
    }

    function updateArticle($id,$title,$category,$content,$alt,$target_file)
    {
        // get image
        $upfile=$_FILES["img"];
        //var_dump($_FILES['img']);
        // update without new image , use the original target_file (input hidden) 
        if($upfile["name"]!=''){ 
            //set upload type
            $typelist=array("image/jpeg","image/jpg","image/png","image/gif");
            // set upload path
            $path="app\public\back\images\hb";

                // dowload path
            $target_file = $path . basename($upfile["name"]);
           // var_dump($target_file);


            // if upload new image or keep old one?
            if (isset($_POST["submit"])) 
            {
                
                $check = getimagesize($upfile["tmp_name"]);
                    if ($check !== false) {
                    // Check file size
                        if($upfile['size']>500000){
                        }
                        // Allow certain file formats
                        if(!in_array($upfile["type"],$typelist)){
                            die("Seuls les formats JPG, JPEG, PNG & GIF files sont authorisés.");
                        }
                        if (move_uploaded_file($upfile["tmp_name"], $target_file)) {
                            
                //if else check if article exist to decide if a new or update
                    if($id>0){
                        $articles = new ArticleManager();
                        $updateArticle = $articles->updateArticle($id,$title,$category,$content,$target_file);
                
                        header('Location: hbAdmin.php?action=articles');
                    }else{
                    $articlesManager = new ArticleManager();
                    $newArticle = $articlesManager->newArticle($title,$category,$content,$alt,$target_file);

                    header('location: hbAdmin.php?action=articles');}
                }else
                {
                echo "Désolé, une erreur est survenue dans l'envoi de votre fichier. ";
                } 
                }
             
            } else {
                echo "Ce fichier n'est pas une image. ";
                }
        }else{     
            if($id>0){
                $articles = new ArticleManager();
                $updateArticle = $articles->updateArticle($id,$title,$category,$content,$target_file);
        
                header('Location: hbAdmin.php?action=articles');
            }else{
            $articlesManager = new ArticleManager();
            $newArticle = $articlesManager->newArticle($title,$category,$content,$alt,$target_file);

            header('location: hbAdmin.php?action=articles');}
        }
    }

    function deleteArticle($id){
        $articles = new ArticleManager();
        $deleteArticle = $articles->deleteArticle($id);
        header('Location: hbAdmin.php?action=articles');
    }

    function editArticle($id){
            $articles = new ArticleManager();
            $article = $articles->getArticle($id);
            //var_dump($article);
            require 'app/views/back/editArticle.php';
    }



// oyster page
    function huitres(){
        $huitres = new HuitreManager();
        $allHuitres = $huitres->getHuitres();

        require 'app/views/back/huitres.php';
    }

    function addHuitre(){
        require 'app/views/back/newHuitre.php';
    }

    function updateHuitre($id,$nomHuitre,$content,$alt,$target_file)
    {
                // same as article, need to do a ORM later
                $upfile=$_FILES["img"];
            if($upfile["name"]!=''){ 
                    $typelist=array("image/jpeg","image/jpg","image/png","image/gif");
                    $path="app\public\\front\images\\";

                    $target_file = $path . basename($upfile["name"]);

                    if (isset($_POST["submit"])) 
                    {
                        
                        $check = getimagesize($upfile["tmp_name"]);
                            if ($check !== false) {
                                if($upfile['size']>500000){
                                }
                                if(!in_array($upfile["type"],$typelist)){
                                    die("Seuls les formats JPG, JPEG, PNG & GIF files sont authorisés.");
                                }
                                if (move_uploaded_file($upfile["tmp_name"], $target_file)) {

                                    if($id>0){
                                        $huitres = new HuitreManager();
                                        $updateHuitre = $huitres->updateHuitre($id,$nomHuitre,$content,$target_file);
                                        var_dump($target_file);
                                        header('Location: hbAdmin.php?action=huitres');
                                    }else{
                                        $huitres = new HuitreManager();
                                        $newHuitre = $huitres->newHuitre($nomHuitre,$content,$alt,$target_file);
                                
                                    header('Location: hbAdmin.php?action=huitres');}
                                }else
                                {
                                echo "Désolé, une erreur est survenue dans l'envoi de votre fichier. ";
                                } 
                        }
                    
                    } else {
                        echo "Ce fichier n'est pas une image. ";
                        }
                }else{
                    if($id>0){
                        $huitres = new HuitreManager();
                        $updateHuitre = $huitres->updateHuitre($id,$nomHuitre,$content,$target_file);

                        header('Location: hbAdmin.php?action=huitres');
                    }else{
                        $huitres = new HuitreManager();
                        $newHuitre = $huitres->newHuitre($nomHuitre,$content,$alt,$target_file);

                    header('Location: hbAdmin.php?action=huitres');}
                }
    }
    
    function editHuitre($id){
        $huitres = new HuitreManager();
        $huitre = $huitres->getHuitre($id);
        require 'app/views/back/editHuitre.php';
}

    function deleteHuitre($id){
        $huitres = new HuitreManager();
        $deleteHuitre = $huitres->deleteHuitre($id);
        header('Location: hbAdmin.php?action=huitres');
    }



// producer pages
    function producers(){
        $producers = new ProducerManager();
        $allProducers = $producers->getproducers();
        require 'app/views/back/producers.php';
    }

    function addProducer(){
        $huitres = new HuitreManager();
        $allHuitres = $huitres->getHuitres();
        
        require 'app/views/back/newProducer.php';
    }

    function updateProducer($id,$nomproducteur,$adresse,$tel,$huitre_n,$content,$alt,$target_file)
    {

        // same as article, need to do a ORM later
            $upfile=$_FILES["img"];
        if($upfile["name"]!=''){ 
            $typelist=array("image/jpeg","image/jpg","image/png","image/gif");
            $path="app\public\\front\images\\";
            $target_file = $path . basename($upfile["name"]);
            if (isset($_POST["submit"])) 
            {
            $check = getimagesize($upfile["tmp_name"]);
            if ($check !== false)
            {
                if($upfile['size']>500000){
                 }
                if(!in_array($upfile["type"],$typelist)){
                    die("Seuls les formats JPG, JPEG, PNG & GIF files sont authorisés.");
                }
                if (move_uploaded_file($upfile["tmp_name"], $target_file)) {

                    if($id>0){
                        $producers = new ProducerManager();
                        $updateProducer = $producers->updateProducer($id,$nomproducteur,$adresse,$tel,$huitre_n,$content,$alt,$target_file);
                
                        header('Location: hbAdmin.php?action=producers');
                    }else{
                        $producers = new ProducerManager();
                        $newProducer = $producers->newProducer($nomproducteur,$adresse,$tel,$huitre_n,$content,$alt,$target_file);

                    header('location: hbAdmin.php?action=producers');}
                }else
                {
                echo "Désolé, une erreur est survenue dans l'envoi de votre fichier. ";
                } 
            }
        } else {
            echo "Ce fichier n'est pas une image. ";
        }
    }else{
        if($id>0){
            $producers = new ProducerManager();
            $updateProducer = $producers->updateProducer($id,$nomproducteur,$adresse,$tel,$huitre_n,$content,$alt,$target_file);
    
            header('Location: hbAdmin.php?action=producers');
        }else{
            $producers = new ProducerManager();
            $newProducer = $producers->newProducer($nomproducteur,$adresse,$tel,$huitre_n,$content,$alt,$target_file);

        header('location: hbAdmin.php?action=producers');}
    }
}

    function editProducer($id){
        $huitres = new HuitreManager();
        $allHuitres = $huitres->getHuitres();

        $producers = new ProducerManager();
        $producer = $producers->getProducer($id);
        require 'app/views/back/editProducer.php';
    }

    function deleteProducer($id){
        $producers = new ProducerManager();
        $producer = $producers->deleteProducer($id);
        header('Location: hbAdmin.php?action=producers');
    }



//contact page    
    function messages(){
        $messages = new MessageManager();
        $messages = $messages->showMessages();
        require 'app/views/back/messages.php';

    }
    function deletMessage($id){
        $messages = new MessageManager();
        $deleteMessage = $messages->deletMessage($id);
        header('Location: hbAdmin.php?action=messages');
    }

// comments page
    function comments(){
        $comments = new CommentManager();
        $allComments = $comments->showComments();
        // var_dump($allComments);
        require 'app/views/back/commentaires.php';
    }

    function deletComment($id){
        $comments = new CommentManager();
        $deleteMessage = $comments->deletComment($id);
        header('Location: hbAdmin.php?action=commentaires');
    }
    


}
        
