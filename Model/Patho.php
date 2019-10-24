<?php

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
  public $Symptomes;
  public $Motclef;


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

}



?>
