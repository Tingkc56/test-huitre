<?php 
namespace Project\Models;

class ProducerManager extends Manager{


    public function getproducers(){
        $bdd = $this->bdConnect();
        $req = $bdd->query('SELECT * FROM producers');
        return $req;
    }

    
    public function updateProducer($id,$nomproducteur,$adresse,$tel,$huitre_n,$content,$alt,$target_file){
        $bdd = $this->bdConnect();
        $updateProducer = $bdd->prepare("UPDATE producers SET p_name = :p_name , adresse = :adresse ,P_content = :P_content , tel = :tel , alt = :alt , img = :img, huitre_id = :huitre_id WHERE id = :id");
        $updateProducer ->execute([
            'id' => $id,
            'p_name' => $nomproducteur,
            'adresse' => $adresse,
            'img' =>$target_file,
            'P_content' => $content,
            'alt' => $alt,
            'tel' => $tel,
            'huitre_id' =>$huitre_n
            ]); 
            return $updateProducer;
        }

    public function newProducer($nomproducteur,$adresse,$tel,$huitre_n,$content,$alt,$target_file){
        $bdd = $this->bdConnect();
        $newProducer = $bdd->prepare('INSERT INTO producers (p_name,adresse,tel,P_content,alt,img,huitre_id) 
                                    VALUE (?,?,?,?,?,?,?)');
        $newProducer -> execute(array($nomproducteur,$adresse,$tel,$content,$alt,$target_file,$huitre_n));
        var_dump($newProducer);
        return $newProducer;
    }



    public function deleteProducer($id){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('DELETE FROM producers WHERE id=?');
        $req->execute(array($id));

        return $req;
    }


    public function getProducer($id){
    $bdd = $this->bdConnect();
    $req = $bdd->prepare('SELECT * FROM producers WHERE id=?');
    $req->execute(array($id));

    return $req->fetch();
    }

    public function getHuitreProducer($id){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('SELECT id, p_name, img, huitre_id
        FROM producers 
        WHERE huitre_id=?' 
        );
        $req->execute(array($id));
        
        return $req;
    }

}