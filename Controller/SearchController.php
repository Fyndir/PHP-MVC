<?PHP
require_once('Services/PathoService.php');
class SearchControler
{
  /// retourne toute les pathologie de la base sous forme de modele
  public static Function GetAllPatho()
  {
    $resultat=PathoService::GetAllPatho();
    return $resultat;
  }
  /// retourne tout les Meridiens de la base
  public static Function GetAllMeridien()
  {
    $resultat=PathoService::GetAllMeridien();
    return $resultat;
  }
  /// retourne tout les types de pathologie
  public static Function GetAllTypePatho()
  {
    $resultat=PathoService::GetAllTypePatho();
    return $resultat;
  }
  /// complete la pathologie passer dans l'url avec ces mots clef et ses sympthomes
  public static function GetDetails()
  {
    $id=$_GET["idPatho"];
    $patho=PathoService::GetPatho($id);
    PathoService::GetKeywords($patho);
    PathoService::GetSymptomes($patho);
    return $patho;
  }
  /// Fonction de recherche par mot clef des pathologies
  public static function SearchByKeywords()
  {
      $kw=$_GET["keywords"];
      $patho=PathoService::SearchByKeywords($kw);
      return $patho;
  }
  /// affecte les variables smarty AllMeridien et AllTypePatho
  public static function GetAllMeridienTypePatho($smarty)
  {
    $smarty->assign("AllMeridien",	SearchControler::GetAllMeridien());
    $smarty->assign("AllTypePatho",	SearchControler::GetAllTypePatho());
  }

}
?>
