<?php
require_once('lib/bd/bd.class.php');

class Patho
{
  public $id;
  public $desc;
  public $type;

  // a externaliser ?
  public $CodeMeridien;
  public $MeridienNom;
  public $MeridienElement;
  public $MeridienYin;

  // a init que sur un get

  public $symptomes;
  public $Motclef;

    // retourne tous les symptomes d'une patho dans l'attribut $symptomes
  public function getSymptomes()
  {
      $maBD = new BD();
      $symptomes = $maBD->requete("SELECT s.`desc` FROM `symptome` s join symptpatho sp on sp.ids=s.ids join patho p on p.idP=sp.idP where p.idp=$this->id");
      $this->symptome=$symptomes;
  }
  // retourne tous les mots clefs d'une patho dans l'attribut $symptomes
  public function GetKeywords()
  {
      $maBD = new BD();
      $Motclef = $maBD->requete("SELECT k.name FROM keywords k join keysympt ks on ks.idK=k.idK join `symptome` s on s.ids=ks.idS join symptpatho sp on sp.ids=s.ids join patho p on p.idP=sp.idP where p.idp=$this->id");
      $this->Motclef=$Motclef;
  }

  function __construct($id=null,$desc=null,$type=null,$CodeMeridien=null,$MeridienNom=null,$MeridienElement=null,$MeridienYin=null)
  {
    $this->id=$id;
    $this->desc=$desc;
    $this->type=$type;
    $this->CodeMeridien=$CodeMeridien;
    $this->MeridienNom=$MeridienNom;
    $this->MeridienElement=$MeridienElement;
    $this->MeridienYin=$MeridienYin;
  }


  public static Function GetAllPatho()
  {
    $maBD = new BD();
    $AllPatho = $maBD->requete("SELECT    idP as 'id',   `desc` as 'desc',   type as 'type',   `code` as 'CodeMeridien',   nom as MeridienNom,   element as MeridienElement,   yin as MeridienYin FROM `patho` p  join meridien m on m.code=p.mer ","Patho");
    return $AllPatho;
  }

  public static function SearchByKeywords($keyword)
  {

  }

  public static function SearchBySymptome($keyword)
  {

  }


}



?>
