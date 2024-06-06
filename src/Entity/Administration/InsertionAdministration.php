<!DOCTYPE html>
<HTML lang="en">
	<header>
		<meta charset="UTF-8">
		<title>Insertion</title>
	</header>
	<body>
		<form action="./ControllerAdministration.php" method="POST">
			<div>
				<p>E-mail</p>
				<input type="email" name="email"></input>
			</div>
			<div>
				<p>Nom utilisateur</p>
				<input type="text" name="nom"></input>
			</div>
			<div>
				<p>Sexe</p>
				<select name="sexe" required>
					<option disabled selected>sexe</option>
					<option value="Mascullin">Mascullin</option>
					<option value="Feminin">Feminin</option>
				</select>
			</div>
			<div>
				<p>Situation</p>
				<select name="situation" required>
					<option disabled selected></option>
					<option value="Marie(e)">Marie(e)</option>
					<option value="Celibataire">Celibataire</option>
				</select>
			</div>
			<div>
			<p>Numeros</p>
				<input type="text" name="tel"></input>
			</div>
			<div>
			<p>Mots de passe</p>
				<input type="password" name="mdp"></input>
			</div>
			<div>
			<p>Confirmation mots de passe</p>
				<input type="password" name="confmdp"></input>
			</div>
			<div><button type="submit" name="insertion">Envoyer</button></div>
		</form>
	</body>
</HTML>