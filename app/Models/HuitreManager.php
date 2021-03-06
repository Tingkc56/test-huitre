<?php 
namespace Project\Models;

class HuitreManager extends Manager{


    public function newHuitre($nomHuitre,$content,$alt,$target_file){
        $bdd = $this->bdConnect();
        $newHuitre = $bdd->prepare('INSERT INTO huitres(h_name,h_content,alt,img) VALUES (?,?,?,?)');
        $newHuitre -> execute(array($nomHuitre,$content,$alt,$target_file));
        return $newHuitre;
    }


//back admin huitres
    public function getHuitres(){
        $bdd = $this->bdConnect();
        $req = $bdd->query('SELECT id,h_name,h_content,alt,img FROM huitres');
        return $req;
    }



    public function deleteHuitre($id){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('DELETE FROM huitres WHERE id=?');
        $req->execute(array($id));
        
        return $req;
    }


    public function updateHuitre($id,$nomHuitre,$content,$target_file){
        $bdd = $this->bdConnect();
        var_dump($bdd);
        $updateHuitre = $bdd->prepare("UPDATE huitres SET h_name = :h_name , h_content = :h_content , img = :img WHERE id = :id");
        var_dump($updateHuitre);
        $updateHuitre ->execute([
            'id' => $id,
            'h_name' => $nomHuitre,
            'h_content' => $content,
            'img' => $target_file
            ]); 
            return $updateHuitre;
        }

        public function getHuitre($id){
            $bdd = $this->bdConnect();
            $req = $bdd->prepare('SELECT id, h_name, h_content, img, alt FROM huitres WHERE id=?');
            $req->execute(array($id));
            return $req->fetch();
            }

}