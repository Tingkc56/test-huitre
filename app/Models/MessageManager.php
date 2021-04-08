<?php 
namespace Project\Models;

class MessageManager extends Manager{

    //connection Users
    public function getMessage($name,$mail,$sujet,$message){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('INSERT INTO messages(mname,mail,sujet,amessage) VALUES (?,?,?,?)');
        $req -> execute(array($name,$mail,$sujet,$message));
        return $req;
    }

    public function showMessages(){
        $bdd = $this->bdConnect();
        $req = $bdd->query('SELECT * FROM messages ORDER BY id DESC' );
        return $req;
    }

    public function deletMessage($id){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('DELETE FROM messages WHERE id=?');
        $req->execute(array($id));
        return $req;
    }

}