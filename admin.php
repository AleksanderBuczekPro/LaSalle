<?php 
    require_once('parts/header.php');
    $connecteur = new PDO('mysql:host=localhost;dbname=salledesport','root','');
?>

    <section class="fluid-container row justify-content-around" id="admin">
    	<article class="col-md-5" id="inscription">
    		<form class="container form-horizontal" method="post" action="form/inscription.php">
                <h2 class="text-center">Client</h2>
                <div class="form-group">
                    <label class="control-label col-md-3" for="numclient">N°Client :</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="numclient" name="numclient" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3" for="nom">Nom :</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="nom" name="nom" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3" for="prenom">Prenom :</label>
                    <div class="col-md-9">  
                        <input type="text" class="form-control" id="prenom" name="prenom" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3" for="mail">Mail :</label>
                    <div class="col-md-9">  
                        <input type="text" class="form-control" id="mail" name="mail" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3" for="mdp">Mot de passe :</label>
                    <div class="col-md-9">  
                        <input type="password" class="form-control" id="mdp" name="mdp" required>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="form-control btn btn-success col-md-3 offset-md-3">Envoyer</button>
                </div>
            </form>		
    	</article>
    	<article class="col-md-5" id="Séance">
    		<form class="container form-horizontal" method="post" action="form/seance.php">
                <h2 class="text-center">Séance</h2>
                <div class="form-group">
                    <label class="control-label col-md-3" for="intitule">Intitulé :</label>
                    <div class="col-md-9">
                        <select class="form-control" name="intitule" id="intitule" required>
                            <?php
                                $intitule = $connecteur->query('SELECT intitule FROM activite');
                                while ($donnees = $intitule->fetch()) 
                                    { 
                            ?>
                                        <option value="<?php echo $donnees['intitule']; ?>"> <?php echo $donnees['intitule']; ?> </option> 
                            <?php   } ?>

                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3" for="coach">Coach :</label>
                    <div class="col-md-9">
                        <select class="form-control" name="coach" id="coach" required>
                            <?php
                                $coach = $connecteur->query('SELECT nomcomplet FROM coach');
                                while ($donnees = $coach->fetch()) 
                                    { 
                            ?>
                                        <option value="<?php echo $donnees['nomcomplet']; ?>"> <?php echo $donnees['nomcomplet']; ?> </option> 
                            <?php   } ?>

                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-3" for="salle">Salle :</label>
                    <div class="col-md-9">
                        <select class="form-control" name="salle" id="salle" required>
                            <?php
                                $salle = $connecteur->query('SELECT nom FROM salle');
                                while ($donnees = $salle->fetch()) 
                                    { 
                            ?>
                                        <option value="<?php echo $donnees['nom']; ?>"> <?php echo $donnees['nom']; ?> </option> 
                            <?php   } ?>

                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3" for="dated">Date Heure debut :</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="dated" id="dated" placeholder="20YY-MM-JJ HH:MM:SS" required>
                    </div>
                </div>
                <div class="form-group">
                        <button type="submit" class="form-control btn btn-success col-md-3 offset-md-3">Envoyer</button>
                </div>
            </form>
    	</article>

        <article class="col-md-5" id="Activité">
            <form class="container form-horizontal" method="post" action="form/factivite.php">
                <h2 class="text-center">Activité</h2>
                <div class="form-group">
                    <label class="control-label col-md-3" for="intitule">Intitulé :</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="intitule" id="intitule" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3" for="description">Description :</label>
                    <div class="col-md-9">
                        <textarea type="text" class="form-control" maxlength="1000" name="description" id="description" required></textarea>
                    </div>
                </div>
                <div class="form-group">
                        <button type="submit" class="form-control btn btn-success col-md-3 offset-md-3">Envoyer</button>
                </div>
            </form>
        </article>
        
        <article class="col-md-5" id="coach">
            <form class="cointainer form-horizontal" action="php/coach.php">
                <h2 class="text-center">Ajouter nouveau coach</h2>
                <div class="form-group">
                    <label class="control-label col-md-3" for="intitule">Nom complet :</label>
                    <div class="col-md-9">
                        <input type="text" name="nom" class="form-control" id="intitule" required>
                    </div>
                </div>
                <div class="form-group">
                <label class="control-label col-md-3" for="coach">Email :</label>
                    <div class="col-md-9">
                        <input type="text" name="email" class="form-control" id="coach" required>
                    </div>
                </div>

                <div class="form-group">
                <label class="control-label col-md-3" for="coach">Heure début :</label>
                    <div class="col-md-9">
                        <div class='input-group time' id='timepicker'>
                        <input type='text' class="form-control" />
                        <span class="input-group-addon">
                            <span class="fa fa-clock-o"></span>
                        </span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                <label class="control-label col-md-3" for="coach">Heure fin :</label>
                    <div class="col-md-9">
                        <div class='input-group time' id='timepicker2'>
                        <input type='text' class="form-control" />
                        <span class="input-group-addon">
                            <span class="fa fa-clock-o"></span>
                        </span>
                        </div>
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