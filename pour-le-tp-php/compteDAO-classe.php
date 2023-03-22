<?php
    

class compteDAO {
    public $compte;

    function __construct($compte) {
        $this->compte = $compte;
    }


    function exist() {
      $host = 'localhost';
      $dbname = 'bdd_compte';
      $username = 'root';
      $password = '';

       
      try{
        $pdo =new PDO('mysql:host=localhost;dbname=bdd_compte', $username, $password); 
        // récupérer tous les utilisateurs

        $stmt = $pdo->prepare("SELECT * FROM `bdd_comptes` where nom=? and password=?");
        $stmt->bindValue(1, $this->compte->username);
        $stmt->bindValue(2, $this->compte->password);

        $stmt->execute();

        if( $stmt->rowCount()==0){
          return False;

        }else{
          return True;
        }

   
      }catch (PDOException $e){
        echo $e->getMessage();
      }

    }

    static function lister() {
      $host = 'localhost';
      $dbname = 'bdd_compte';
      $username = 'root';
      $password = '';

      $pdo =new PDO('mysql:host=localhost;dbname=bdd_compte', $username, $password); //tu te connectes à la bdd
      $stmt = $pdo->prepare("SELECT * FROM `bdd_comptes`"); // tu lui dis quoi faire
      $stmt->execute(); // il execute

      $tab=$stmt->fetchAll(); // il affiche et stock dans un tableau
      echo "<h2> login" . " | " . "mot de passe" . "<br></h2>";
      foreach($tab as $ligne){ // boucle qui met le stock du tableau dans l'obj ligne
        
        echo $ligne['nom'] . " | " .$ligne['password']." ". "<a href='suppr.php?id=" . $ligne['id'] . "'' style='color:#B90202;'>Supprimer</a><a href='modif.php?id=" . $ligne['id'] . "'' style='color:#02b92e;'>Modifier</a> <br>" ;  // affiche toutes les lignes contenant nom et password
      
      }

      

    }


    function recup() {
      $host = 'localhost';
      $dbname = 'bdd_compte';
      $username = 'root';
      $password = '';

      $pdo =new PDO('mysql:host=localhost;dbname=bdd_compte', $username, $password); //tu te connectes à la bdd
      $stmt = $pdo->prepare("SELECT * FROM `bdd_comptes` where id=?"); // tu lui dis quoi faire
      $stmt->bindValue(1, $this->compte->id);

      $stmt->execute(); // il execute

      $tab=$stmt->fetchAll(); // il affiche et stock dans un tableau
      
      foreach($tab as $ligne){ // boucle qui met le stock du tableau dans l'obj ligne
        
        $this->compte->username=$ligne['nom'];
        $this->compte->password=$ligne['password'];

      }
      return $this->compte;
    }

    function delete() {
      $host = 'localhost';
      $dbname = 'bdd_compte';
      $username = 'root';
      $password = '';

      $pdo =new PDO('mysql:host=localhost;dbname=bdd_compte', $username, $password); //tu te connectes à la bdd
      $stmt = $pdo->prepare("DELETE FROM `bdd_comptes` where id=?"); // tu lui dis quoi faire

      

      $stmt->bindValue(1, $this->compte->id);
      $stmt->execute(); // il execute
    }



    function modifier() {
      $host = 'localhost';
      $dbname = 'bdd_compte';
      $username = 'root';
      $password = '';

      $pdo =new PDO('mysql:host=localhost;dbname=bdd_compte', $username, $password); //tu te connectes à la bdd
      $stmt = $pdo->prepare("UPDATE `bdd_comptes` SET `nom` = :nom, `password` =:password WHERE id=:id"); // tu lui dis quoi faire
      //UPDATE `bdd_compte`.`bdd_comptes` SET `nom` = 'teste', `password` = 'teste' WHERE `bdd_comptes`.`id` = 7;
      

          
      
      $stmt->bindValue(":nom", $this->compte->username);
      $stmt->bindValue(":password", $this->compte->password);
      $stmt->bindValue(":id", $this->compte->id);

      $stmt->execute(); // il execute
      

      }

    
}
   


// creer fonction delete
// elle suprime le compte qui a pour ID machin 
// lien hypertexte aref supprimer dans accueil
?>