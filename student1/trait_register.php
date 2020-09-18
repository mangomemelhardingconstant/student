
 <?php
 include("bd.php");
 function verifie($donnees){
 
   $donnees = (string) $donnees;
         if (isset($donnees) && !empty($donnees)) {
           return $donnees;
         }
         else {
           return false;
         }

 }

$answer= null;

if (isset($_POST))
{
  $message= ' ';
	$nom = $_POST['nom'];
	$email = $_POST['email'];
	$mdp =  sha1($_POST['mdp']);
	$mdp2 = sha1($_POST['mdp']);
   /* on test si les champ sont bien remplis */
    if(verifie($_POST['nom']) and verifie($_POST['email'])  and verifie($_POST['mdp']) and verifie($_POST['mdp2']))
    {
       
        /* on test si le mdp contient bien au moins 6 caractère */
        if (strlen($_POST['mdp'])>=6)
        {
            /* on test si les deux mdp sont bien identique */
            if ($_POST['mdp']==$_POST['mdp2'])
            {
                // On crypte le mot de passe
                $_POST['mdp'] = md5($_POST['mdp2']);
                // on se connecte à MySQL et on sélectionne la base
                include('bd.php');
                //On créé la requête
                $sql = 'INSERT INTO etudiant(nom,email,mdp) VALUES ("'.$nom.'","'.$email.'","'.$mdp.'")';
                $result= $conn->query($sql);
                /*$result= mysqli_query($conn,$sql);*/ //version mysqli

            	if (!$result) {

            		$answer= "Query Failed";

            	}else {
                $answer='ok';
              }

            }
            else $answer= "Les mots de passe ne sont pas identiques";
        }
        else $answer= "Le mot de passe est trop court !";
      // }
      // else  $answer= "Cet mail a déjà été utilisé pour un autre compte";
    }
    else $answer= "Veuillez saisir tous les champs !"; 
}

$output=array('msg'=>$answer); 

echo json_encode($output);

//  puisque les reponses qu'on doit envoyer a javscript doivent etre en format json tel qu'ils sont venus, on crée une variable $answer qui sera null au depart, ensuite on va affecter les differentes reponses qui s'affichaient avant avec "echo"; en troisieme partie creer un tableau array qui va contenir la clé que nous a nommé 'msg' (les index qui sont dans les tableau); qui comprend egalement la variable $anwer ( je m'explique le msg qui est le numero de ligne dans un tableau php c'est a dire la clé, va vrier en fonction de la valeur que va prendre $answer qui contient les reponses que va renvoyer php)
?>