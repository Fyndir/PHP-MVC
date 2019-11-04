<?php
require_once('lib/bd/bd.class.php');
require_once('Model/Patho.php');
class PathoService
{
  public static function GetSymptomes($patho)
  {
      $maBD = new BD();
      $symptomes = $maBD->requete("SELECT distinct s.`desc` FROM `symptome` s join symptPatho sp on sp.ids=s.ids join patho p on p.idP=sp.idP where p.idp= $patho->id");
      $patho->Symptomes=$symptomes;
  }
  // retourne tous les mots clefs d'une patho dans l'attribut $symptomes
  public static function GetKeywords($patho)
  {
      $maBD = new BD();
      $Motclef = $maBD->requete("SELECT distinct k.name FROM keywords k join keySympt ks on ks.idK=k.idK join `symptome` s on s.ids=ks.idS join symptPatho sp on sp.ids=s.ids join patho p on p.idP=sp.idP where p.idp=$patho->id");
      $patho->Motclef=$Motclef;
  }

  public static Function GetAllPatho()
  {
    $maBD = new BD();
    $AllPatho = $maBD->requete("SELECT   distinct idP as 'id',   `desc` as 'desc',   type as 'type',   `code` as 'CodeMeridien',   nom as MeridienNom,   element as MeridienElement,   yin as MeridienYin FROM `patho` p  join meridien m on m.code=p.mer ","Patho");
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
    if ($keyword =="")
    {
      return PathoService::GetAllPatho();
    }
    $arrayKeyWord=explode(" ",trim($keyword));
    $ClauseAndSQL = "where ";
    foreach ($arrayKeyWord as $key=>$value)
    {
      if(count($arrayKeyWord)==$key+1)
      {
          $ClauseAndSQL .= "k.name like '%$value%' group by p.idP,p.`desc`,  p.type, m.`code`,m.nom, m.element,m.yin having count(p.idP) = ".($key+1);
      }
      else
      {
          $ClauseAndSQL .= "k.name like '%$value%' or ";
      }
    }
    $maBD = new BD();
  //  var_dump("SELECT distinct p.idP as 'id', p.`desc` as 'desc', p.type as 'type', m.`code` as 'CodeMeridien', m.nom as MeridienNom, m.element as MeridienElement, m.yin as MeridienYin FROM `patho` p join meridien m on m.code=p.mer join symptPatho sp on p.idP= sp.idP join symptome s on s.idS= sp.idS join keySympt ks on ks.idS=s.idS JOIN keywords k on k.idK=ks.idK ".$ClauseAndSQL);exit;
    $patho = $maBD->requete("SELECT distinct p.idP as 'id', p.`desc` as 'desc', p.type as 'type', m.`code` as 'CodeMeridien', m.nom as MeridienNom, m.element as MeridienElement, m.yin as MeridienYin FROM `patho` p join meridien m on m.code=p.mer join symptPatho sp on p.idP= sp.idP join symptome s on s.idS= sp.idS join keySympt ks on ks.idS=s.idS JOIN keywords k on k.idK=ks.idK ".$ClauseAndSQL ,"Patho");
    return $patho;
  }

  public static Function GetAllMeridien()
  {
    $maBD = new BD();
    $AllMeridien = $maBD->requete("SELECT distinct `code`,`nom` FROM `meridien` ");
    return $AllMeridien;
  }

  public static Function GetAllTypePatho()
  {
    $maBD = new BD();
    $AllTypePatho = $maBD->requete("SELECT distinct `type` FROM `patho` ");
    return $AllTypePatho;
  }

}

?>
