<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-
		scale=1, minimum-scale=1, maximum-scale=1">
		<title>E-cole</title>
	</head>
	<body>
		<section class="inscription">
			<div class="faneva">
				<img class="logo" src="../img/logo_ispm.png">
				<div>Fahaizana-Fampadrosoana-Fihavanana</h4>
			</div>
			<form action="inscription_.php" method="POST">
				<div class="name">
					<label>Nom :</label>
					<input type="text" name="nom" placeholder="RANDRIANATOADRO">
				</div>
				<div class="prename">
					<label>Prenom :</label>
					<input type="text" name="prenom" placeholder="Masoandro">
				</div>
				<div class="email">
					<label>Tel :</label>
					<input type="text" name="telephone" placeholder="03********">
					<label>E-mail :</label>
					<input type="text" name="email" placeholder="Exemple@gmail.com" required>
				</div>
				<div>
					<label>Matricule :</label>
					<input type="text" name="matricule" placeholder="23 - 00154/30">
				</div>
				<div>
					<label>Fonction :</label>
					<div>
						<label>Prof :</label>
						<input type="checkbox" name="prof" value="Prof">
						<label>Etudiant :</label>
						<input type="checkbox" name="etudiant" value="Etudiant(e)">
					</div>
					<div class="cached">
						<div class="Filiere">
							<label>Filiere :</label>
							<select name="filiere">
								<option value="esiia">ESIIA</option>
								<option value="imticia">IMTICIA</option>
								<option value="isaia">ISAIA</option>
								<option value="igglia">IGGLIA</option>
								<option value="tour">TOUR</option>
								<option value="dtja">DTJA</option>
							</select>
						</div>
						<div class="matiere">
							<label>Matiere :</label>
							<select name="matiere">
								<option value="tdn">TDN</option>
								<option value="mvc">MVC</option>
								<option value="is">IS</option>
								<option value="sd">SD</option>
								<option value="tdl">TDL</option>
								<option value="tds">TDS</option>
							</select>
						</div>
					</div>
				</div>
				<div class="passwd">
					<label>Nouveau mot de passe :</label>
					<input type="password" name="pass" placeholder="******" required>
					<label>confirme mot de passe :</label>
					<input type="password" name="pass_W" placeholder="******" required>
				</div>
				<button type="submit" class="connecter">INSCRIPTION</button>
				<div class="inscri">
					<p>Si vous avez une compte</p>
					<a href="../index.php" target="_self">se connecter</a>
				</div>
			</from>
		</section>
	</body>
</html>