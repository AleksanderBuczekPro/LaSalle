<?php 
    require_once('parts/header.php');
?>

    <section class="fluid-container row justify-content-around" id="admin">
    	<article class="col-md-5" id="inscription">
    		<form class="container form-horizontal" action="php/client.php">
                <h2 class="text-center">Client</h2>
                <div class="form-group">
                    <label class="control-label col-md-3" for="numclient">N°Client :</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="numclient" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3" for="nom">Nom :</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="nom" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3" for="prenom">Prenom :</label>
                    <div class="col-md-9">  
                        <input type="text" class="form-control" id="prenom" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3" for="mail">Mail :</label>
                    <div class="col-md-9">  
                        <input type="text" class="form-control" id="mail" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3" for="mdp">Mot de passe :</label>
                    <div class="col-md-9">  
                        <input type="password" class="form-control" id="mdp" required>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="form-control btn btn-success col-md-3 offset-md-3">Envoyer</button>
                </div>
            </form>		
    	</article>
    	<article class="col-md-5" id="activite">
    		<form class="cointainer form-horizontal" action="php/activite.php">
                <h2 class="text-center">Activité</h2>
                <div class="form-group">
                    <label class="control-label col-md-3" for="intitule">Intitulé :</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="intitule" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3" for="coach">Coach :</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="coach" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3" for="dated">Date Heure debut :</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="dated" placeholder="20YY-MM-JJ HH:MM:SS" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3" for="datef">Date Heure fin :</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="datef" placeholder="20YY-MM-JJ HH:MM:SS" required>
                    </div>
                </div>
                <div class="form-group">
                        <button type="submit" class="form-control btn btn-success col-md-3 offset-md-3">Envoyer</button>
                </div>
            </form>
    	</article>
    </section>

<?php 
    require_once('parts/footer.php');
?>