<?php 
    require_once('parts/header.php');
    $connecteur = new PDO('mysql:host=localhost;dbname=lasalle','root','');
?>

    <section class="fluid-container row justify-content-around" id="admin">
    	<article class="col-md-5" id="inscription">
        	<div class="col-md-9 offset-md-2 cadre">
                <h2 class="text-center title heading-semi-bold">Ajouter un Client :</h2>
                <form class="container form-horizontal" method="post" action="form/inscription.php">
                    <div class="text-center mt-4">
                       <div class="form-group row">
                            <label class="control-label col-md-3" for="numclient">N°Client :</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="numclient" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3" for="nom">Nom :</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="nom" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3" for="prenom">Prenom :</label>
                            <div class="col-md-9">  
                                <input type="text" class="form-control" name="prenom" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3" for="mail">Mail :</label>
                            <div class="col-md-9">  
                                <input type="text" class="form-control" name="mail" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3" for="mdp">Mot de passe :</label>
                            <div class="col-md-9">  
                                <input type="password" class="form-control" name="mdp" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <button type="submit" class="form-control btn btn btn-outline-secondary btn-round col-md-4 offset-md-5">
                                <i class="fa fa-check" aria-hidden="true"></i>
                                    Envoyer
                            </button>
                        </div>                        
                    </div>
                </form>
            </div>	
    	</article>
        <article class="col-md-5" id="seance">
            <div class="col-md-9 offset-md-2 cadre">
                <h2 class="text-center title heading-semi-bold">Créer une séance :</h2>
                <form class="container form-horizontal" method="post" action="form/seance.php">
                    <div class="text-center mt-4">
                        <div class="form-group row">
                            <label class="control-label col-md-3" for="intitule">Intitulé :</label>
                            <div class="col-md-9">
                                <select class="form-control" name="intitule" required>
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
                        <div class="form-group row">
                            <label class="control-label col-md-3" for="coach">Coach :</label>
                            <div class="col-md-9">
                                <select class="form-control" name="coach" required>
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
                        <div class="form-group row">
                            <label class="control-label col-md-3" for="salle">Salle :</label>
                            <div class="col-md-9">
                                <select class="form-control" name="salle" required>
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
<!--                    <div class="form-group row">
                            <label class="control-label col-md-3" for="dated">Date Heure debut :</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="date" placeholder="20YY-MM-JJ HH:MM:SS" required>
                            </div>
                        </div> -->


                        <div class="form-group row">
                            <label class="control-label col-md-3" for="dated">Date Heure debut :</label>
                            <div class="col-md-9">
                                <div class='input-group date' id='timepicker3'>
                                    <input type='text' name="date" class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="fa fa-calendar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>



                        <div class="form-group row">
                            <button type="submit" class="form-control btn btn btn-outline-secondary btn-round col-md-4 offset-md-4">
                                <i class="fa fa-check" aria-hidden="true"></i>
                                Envoyer
                            </button>
                        </div>
                    </div>
                </form>
            </div>     
        </article>
 
        <article class="col-md-5" id="activite">
            <div class="col-md-9 offset-md-2 cadre">
                <h2 class="text-center title heading-semi-bold">Créer une nouvelle activité :</h2>
                <form class="container form-horizontal" method="post" action="form/factivite.php">
                    <div class="text-center mt-4">
                        <div class="form-group row">
                            <label class="control-label col-md-3" for="intitule">Intitulé :</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="intitule" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3" for="description">Description :</label>
                            <div class="col-md-9">
                                <textarea type="text" class="form-control" maxlength="1000" name="description" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <button type="submit" class="form-control btn btn btn-outline-secondary btn-round col-md-4 offset-md-4">
                                <i class="fa fa-check" aria-hidden="true"></i>
                                Envoyer
                            </button>
                        </div>
                    </div>
                </form>
            </div>     
        </article>        

        <article class="col-md-5" id="coach">
            <div class="col-md-9 offset-md-2 cadre">
                <h2 class="text-center title heading-semi-bold">Ajouter un nouveau coach :</h2>
                <form class="container form-horizontal" method="post" action="form/coach.php">
                    <div class="text-center mt-4">
                        <div class="form-group row">
                            <label class="control-label col-md-3" for="intitule">Nom complet :</label>
                            <div class="col-md-9">
                                <input type="text" name="nom" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                        <label class="control-label col-md-3" for="coach">Email :</label>
                            <div class="col-md-9">
                                <input type="text" name="email" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3" for="nlicense">N° License :</label>
                            <div class="col-md-9">
                                <input type="text" name="nlicense" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                        <label class="control-label col-md-3" for="coach">Heure début :</label>
                            <div class="col-md-9">
                                <div class='input-group time' id='timepicker'>
                                <input type='text' name="heured" class="form-control" />
                                <span class="input-group-addon">
                                    <span class="fa fa-clock-o"></span>
                                </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                        <label class="control-label col-md-3" for="coach">Heure fin :</label>
                            <div class="col-md-9">
                                <div class='input-group time' id='timepicker2'>
                                <input type='text' name="heuref" class="form-control" />
                                <span class="input-group-addon">
                                    <span class="fa fa-clock-o"></span>
                                </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <button type="submit" class="form-control btn btn btn-outline-secondary btn-round col-md-4 offset-md-4">
                                <i class="fa fa-check" aria-hidden="true"></i>
                                Envoyer
                            </button>
                        </div>
                    </div>
                </form>
            </div>     
        </article> 
    </section>

<?php 
    require_once('parts/footer.php');
?>