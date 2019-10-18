<?PHP
require_once('lib/bd/bd.class.php');
require_once('Model/Patho.php');
class SearchControler
{
  public static Function GetAllPatho()
  {
    $maBD = new BD();
    $resultat = $maBD->requete("SELECT `desc` FROM patho");
    return $resultat;
  }

  public static Function SearchPatho($patho)
  {
    $maBD = new BD();
    $resultat=Patho::GetAllPatho();
    //$resultat = $maBD->requete("SELECT `desc` FROM patho where `desc` like '%$patho%'");
    return $resultat;
  }
}
?>
