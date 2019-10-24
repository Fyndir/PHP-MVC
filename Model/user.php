<?php

require_once('lib/bd/bd.class.php');
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
}

  ?>
