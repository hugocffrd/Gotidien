<?php

		//var_dump($_POST);

if (isset($_POST['valid']))
		{
			if (isset($_POST['nom']) && !empty($_POST['nom']))
					{$Nom=$_POST['nom'];}
			else {$Nom="nom inconnu";}

			if (isset($_POST['mail']) && !empty($_POST ['mail']))
					{$Email=$_POST ['mail'];}
			else {$Email="mail inconnu";}

			
			if (isset($_POST['tel']) && !empty($_POST ['tel']))
					{$Tel=$_POST ['tel'];}
			else {$Tel="pas de tel";}

			if (isset($_POST['choix'])
				if (isset($_POST['bug'])
					{$Choix=$_POST ['bug'];}
				else
					if (isset($_POST['amelio'])
						{$Choix=$_POST ['amelio'];}
					else (isset($_POST['autre'])
						{$Choix=$_POST ['autre'];}

						
			if (isset($_POST['message']) && !empty($_POST ['message']))
					{$Tel=$_POST ['message'];}
			else {$Message="pas de message";}

			


			echo "<br> Le nom: " .$Nom. ", l'email: " .$Email. ", le telephone: " .$Tel. ", pour la raison: " .$Choix. ", le message: " .$Message. "<br/>";
		}
else
		echo "Faire une saisie svp <br/>";

?>