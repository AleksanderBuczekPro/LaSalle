<?php 
    require_once('parts/header.php');
?>
            <!--header section-->
        <meta http-equiv="refresh" content="7;url=index.php">
            <!--features-->
            <!--features-->
            <?php 
                require_once('parts/header.php');
            ?>
            <section class="bg-alt" id="error">
                <div class="container" onload="decompte();">

                        <h2 class="text-center">Erreur</h2>

                    <div class="row">
                        <p id="Crono"></p>
                        <script>
                        var cpt = 7;
                         
                        timer = setInterval(function(){
                            if(cpt>0)
                            {
                                --cpt; // décrémente le compteur
                                document.getElementById("Crono").innerHTML = "Une erreur est survenue lors de votre connexion, l'adresse mail ou le mot de passe utilisé ne sont pas corrects.</br>Redirection dans " + cpt + " secondes..." ;
                            }
                            else
                            {
                                clearInterval(timer);
                            }
                        }, 1000);</script>
                    </div>
                </div>
            </section>
        </div>
<?php 
    require_once('parts/footer.php');
?>