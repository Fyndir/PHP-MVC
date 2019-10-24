<?PHP
require_once('Services/PathoService.php');
class SearchControler
{
  public static Function GetAllPatho()
  {
    $resultat=PathoService::GetAllPatho();
    return $resultat;
  }

  public static Function GetAllMeridien()
  {
    $resultat=PathoService::GetAllMeridien();  
    return $resultat;
  }

  public static function GetDetails()
  {
    $id=$_GET["idPatho"];
    $patho=PathoService::GetPatho($id);
    PathoService::GetKeywords($patho);
    PathoService::GetSymptomes($patho);
    return $patho;
  }
}
?>
