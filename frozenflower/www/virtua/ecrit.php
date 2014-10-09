<?
////////////////////////////////////////////////////////////////////////////////
// Nom : $Source: /vhosts/virtua/php/scripts/decode_access97_pwd.php,v $
// $Revision: 1.1 $ - $Date: 2005/04/08 15:46:19 $ - $Author: raphael $
// Auteur : Raphael Augustin - Virtua SA <raphael.augustin@virtua.ch>
// Client : Virtua SA
// Usage : Custom
// Br�ve description : Mise en situation PHP � l'attention des nouveaux candidats
//                     dev de Virtua.
// Dependances : n/a
////////////////////////////////////////////////////////////////////////////////

// Question 1 //////////////////////////////////////////////////////////////////
// Donn�e : R�diger le code qui permet d'afficher toutes les valeurs num�riques ? (11, 12, 21, 22)

$ary['one']['one'] = 11;
$ary['one']['two'] = 12;
$ary['two']['one'] = 21;
$ary['two']['two'] = 22;

// R�ponse 1

foreach ($ary as $key => $value) {
  foreach ($ary[$key] as $key2 => $value2) {
    echo ($ary[$key][$key2])."<br>\n";
    
  }
}

echo ("<br>\n");

// Question 2 //////////////////////////////////////////////////////////////////
// Donn�e : R�diger le code permettant d'alt�rner successivement deux couleurs (Exemple : 1�re ligne rouge, 2�me ligne blanc, 3�me ligne rouge et ainsi de suite)

// R�ponse 2
for ($i = 1; $i < 6; $i++) {
  if ($i % 2) {
    echo("<font color=\"red\">text</font><br>\n");
  } else {
    echo("<font color=\"lime\">text</font><br>\n");
  }
}

echo ("<br>\n");

// Question 3 //////////////////////////////////////////////////////////////////
// Donn�e : R�digez le code permettant de d'utiliser la classe 'cls_third' pour
//          imprimer le texte 'Bonjour John Smith'.

class cls_third
{
  public $firstname = 'John';  
  public $name = 'Doe';

  public function mth_say_hello($pi_prefix = 'Hello ')
  {
    echo $pi_prefix . $this->firstname . ' ' . $this->name;
  }
}

// R�ponse 3

$a = new cls_third();
$a->mth_say_hello('Bonjour ');
echo ("<br>\n");
echo ("<br>\n");

// Question 4 //////////////////////////////////////////////////////////////////
// Donn�e : D�river la classe (en choisissant le nom de votre choix) pour
//          y ajouter une propri�t� publique 'middle_name'

class cls_third2
{
  // member declaration
  public $firstname = 'John';  
  public $name = 'Doe';

  // method declaration
  public function mth_say_hello($pi_prefix = 'Hello ')
  {
    echo $pi_prefix . $this->firstname . ' ' . $this->name;
  }
}

// R�ponse 4

class cls_third3 extends cls_third2 {
  public $middle_name = 'Silver';
}


// Question 5 //////////////////////////////////////////////////////////////////
// Donn�e : R�diger une fonction qui permet de recevoir en param�tre un texte 
//          et �crit ce dernier dans un fichier � la mani�re d'un log
//          avec mention de la date et de l'heure de l'entr�e.
// Exemple de r�sultat souhait� : 
// [14.01.2007 - 14:25:32] xxxxxxxx
// [14.01.2007 - 14:26:22] yyyyyyyy
// [14.01.2007 - 14:28:01] zzzzzzzz

// R�ponse 5

function logx ($text) {
  $fh = fopen('test.log', 'w+');
  
  fwrite($fh, '['.date("d.m.Y H:M:S")."] $text");

  fclose ($fh);
}

logx('Virtua');

?>
