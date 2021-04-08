<?php 
namespace Project\Models;

class CommentManager extends Manager{

    public function getComment($name,$comment,$id){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('INSERT INTO commentaires(name,content,article_id) VALUES (?,?,?)');
        $req -> execute(array($name,$comment,$id));
        return $req;
    }

    public function showComments(){
        $bdd = $this->bdConnect();
        $req = $bdd->query('SELECT a.title, a.id as article_id, a.content as article ,c.content , c.id as id, c.name as nom, c.time as cmt_time FROM articles a INNER JOIN commentaires c ON a.id=c.article_id ORDER BY c.time DESC' );
        return $req;
    }

    public function deletComment($id){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('DELETE FROM commentaires WHERE id=?');
        $req->execute(array($id));
        
        return $req;
    }

    public function getArticleComments($id){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('SELECT name, time, content
        FROM commentaires 
        WHERE article_id=?' 
        );
        $req->execute(array($id));
        
        return $req;
    }

}