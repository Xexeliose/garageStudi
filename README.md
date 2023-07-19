Execution en local (MAMP conseillé):

-Installer serveur local avec la version PHP 8.1
-Installer une base de donné type mySQL.
-Modifier le fichier dbConnect.php avec les informations de votre base de données (par default $username = "root"; $password = "root"; $dbname = "mydb";)
-Executer les commandes CREATE TABLE du fichier sql.txt pour générer la base de données
-Executer les commandes INSERT du fichier sql.txt pour générer les horraires ainsi que l'administrateur (Valeurs a modifié pour sa création)
-Modifier l'adresse de destination des emails de contact dans process.php, ligne 62.     $mail->AddAddress("MonEmail@exemple.com");
-Modifier l'adresse login administrateur dans le ficheir header.php ligne 8  if ($_SESSION['user_login'] == 'EmailLogin') 
	