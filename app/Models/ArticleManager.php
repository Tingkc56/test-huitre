<?php 
namespace Project\Models;

class ArticleManager extends Manager{


    //connection Users
    public function newArticle($title,$category,$content,$alt,$target_file){
        $bdd = $this->bdConnect();
        $newArticle = $bdd->prepare('INSERT INTO articles(title,category,content,alt,img) VALUE(?,?,?,?,?)');
        $newArticle -> execute(array($title,$category,$content,$alt,$target_file));
        return $newArticle;
    }


    public function getArticles(){
        $bdd = $this->bdConnect();
        $req = $bdd->query('SELECT * FROM articles');
        return $req;
    }

    public function deleteArticle($id){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('DELETE FROM articles WHERE id=?');
        $req->execute(array($id));
        
        return $req;
    }

    public function updateArticle($id,$title,$category,$content,$target_file){
        $bdd = $this->bdConnect();
        $updateArticle = $bdd->prepare("UPDATE articles SET title = :title , category = :category, content = :content , img = :img WHERE id = :id");
        $updateArticle ->execute([
            'id' => $id,
            'title' => $title,
            'category' => $category,
            'content' => $content,
            'img' =>$target_file
            ]); 
            return $updateArticle;
        }


    public function getArticle($id){
    $bdd = $this->bdConnect();
    $req = $bdd->prepare('SELECT * FROM articles WHERE id=?');
    $req->execute(array($id));
    return $req->fetch();
    }

}