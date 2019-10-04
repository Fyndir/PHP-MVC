<?php
class User
{
  public $nom;
  public $prenom;
  public $email;
  public $password;
  public $is_admin;



  function __construct($nom=null,$prenom=null,$email=null,$password=null,$is_admin=0)
  {
    $this->nom=$nom;
    $this->prenom=$prenom;
    $this->email=$email;
    $this->password=$password;
    $this->is_admin=$is_admin;
  }

  public static Function AddUser($Mail,$password,$Nom,$Prenom)
  {
    // je ne sais pas si la verif est necessaire
    if(!empty($Mail) && !empty($password) && !empty($Nom) && !empty($Prenom))
    {
      $secure_password=password_hash($password, PASSWORD_BCRYPT);
      $sql = "INSERT INTO users (email,password,nom,prenom,is_admin) VALUES ('$Mail','$secure_password','$Nom','$Prenom',0)";
      $maBD = new BD();
      $resultat = $maBD->requete($sql);
    }
  }

  public static Function log_user($user,$password)
  {
      $maBD = new BD();
      $verifPassword = $maBD->requete("SELECT password FROM users where email='$user';");
      $bddPass=$verifPassword[0]["password"];
      $resultat=null;
      if (password_verify($password,$bddPass))
      {
        $resultat=$maBD->requete("SELECT * FROM users where email='$user';","User");
      }
      return isset($resultat[0])?$resultat[0]:null;

  }
}

  ?>
