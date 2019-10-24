<?php
require_once('lib/bd/bd.class.php');
require_once('Model/Patho.php');
class PathoService
{
  public static function GetSymptomes($patho)
  {
      $maBD = new BD();
      $symptomes = $maBD->requete("SELECT s.`desc` FROM `symptome` s join symptpatho sp on sp.ids=s.ids join patho p on p.idP=sp.idP where p.idp= $patho->id");
      $patho->Symptomes=$symptomes;
  }
  // retourne tous les mots clefs d'une patho dans l'attribut $symptomes
  public static function GetKeywords($patho)
  {
      $maBD = new BD();
      $Motclef = $maBD->requete("SELECT k.name FROM keywords k join keysympt ks on ks.idK=k.idK join `symptome` s on s.ids=ks.idS join symptpatho sp on sp.ids=s.ids join patho p on p.idP=sp.idP where p.idp=$patho->id");
      $patho->Motclef=$Motclef;
  }

  public static Function GetAllPatho()
  {
    $maBD = new BD();
    $AllPatho = $maBD->requete("SELECT    idP as 'id',   `desc` as 'desc',   type as 'type',   `code` as 'CodeMeridien',   nom as MeridienNom,   element as MeridienElement,   yin as MeridienYin FROM `patho` p  join meridien m on m.code=p.mer ","Patho");
    return $AllPatho;
  }
  public static Function GetPatho($id)
  {
    $maBD = new BD();
    $patho = $maBD->requete("SELECT    idP as 'id',   `desc` as 'desc',   type as 'type',   `code` as 'CodeMeridien',   nom as MeridienNom,   element as MeridienElement,   yin as MeridienYin FROM `patho` p  join meridien m on m.code=p.mer where p.idp=$id ","Patho");
    return $patho[0];
  }

  public static function SearchByKeywords($keyword)
  {

  }

  public static function SearchBySymptome($keyword)
  {

  }

  public static Function GetAllMeridien()
  {
    $maBD = new BD();
    $AllMeridien = $maBD->requete("SELECT `code`,`nom` FROM `meridien` ");
    return $AllMeridien;
  }

}

?>
