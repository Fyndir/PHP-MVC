<?php
class UserService
{
  /// Ajoute un user dans la bdd
  public static Function AddUser($Mail,$Password,$Nom,$Prenom)
  {
    // je ne sais pas si la verif est necessaire
    if(!empty($Mail) && !empty($Password) && !empty($Nom) && !empty($Prenom))
    {
      $Secure_password=password_hash($Password, PASSWORD_BCRYPT);
      $Sql = "INSERT INTO users (email,password,nom,prenom,is_admin) VALUES ('$Mail','$Secure_password','$Nom','$Prenom',0)";
      $maBD = new BD();
      $resultat = $maBD->requete($Sql);
    }
  }

  /// Verifie que l'utilisateur correspond au parametre et le retourne
  public static Function log_user($mail,$password)
  {
      $maBD = new BD();
      $verifPassword = $maBD->requete("SELECT password FROM users where email='$mail';");
      $bddPass=$verifPassword[0]["password"];
      $resultat=null;
      if (password_verify($password,$bddPass))
      {
        $resultat=$maBD->requete("SELECT * FROM users where email='$mail';","User");

      }
      return isset($resultat[0])?$resultat[0]:null;

  }

  /// met a jour les données de l'utilisateur passer en parametre
  public static function update_user($user)
  {
    if(!empty($user->email) && !empty($user->password) && !empty($user->nom) && !empty($user->prenom))
    {
        $maBD = new BD();
        $maBD->requete("update users set nom='$user->nom',prenom='$user->prenom',email='$user->email' where email='$user->email';");
    }
    else
    {
      // implementation d'une exception
    }
  }

}
