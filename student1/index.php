


<?php include("inc/header.php") ?><br><br>
<div class="col-md-3 p-0 row-cols-1 container">
<div class="text-primary col bg-warning text-light pt-auto pb-auto h2" style="height: 50px; text-align: center;" >
	INSCRIPTION
</div>


<div class="container admin-form shadow p-4 bg-success">
	<div class="row">
		<div class="col-md-6 offset-3 shadow p-1 bg-light">
             
			<form  id="register-form" method="POST" >
				<div id="message"></div>
				<div class="form-group">
                         <label for="" class="form-label text-bold text-primary">Nom et prenoms</label>
                              <input type="text" name="nom" id="fullname" class="form-control" placeholder="Saisissez nom et prenoms">
					
				</div>

				<div class="form-group">
                         <label for="" class="form-label text-bold text-primary">E-mail</label>
                              <input type="email" name="email" id="email" class="form-control" placeholder="Saisissez email">
					
				</div>

				<div class="form-group">
                         <label for="" class="form-label text-bold text-primary">Mot de passe</label>
                              <input type="password" name="mdp" id="mdp" class="form-control" placeholder="Saisissez mot de passe">
					
				</div>

				<div class="form-group">
                         <label for="" class="form-label text-bold text-primary">Confirmez mot de passe</label>
                              <input type="password" name="mdp2" id="mdp_c" class="form-control" placeholder="Confirmez mot de passe">
					
				</div>

				 
                           <button type="submit" class=" btn btn-secondary" id="mysubmit" name="send" value="send"> Enregistrement </button> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <br><a href="attendance.php"><button type="button" class="btn btn-primary">Signer</button></a>
                       
			</form>
			
		</div>
		
	</div>
	</div>
</div>
<?php include("inc/footer.php") ?>