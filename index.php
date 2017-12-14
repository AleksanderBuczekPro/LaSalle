<?php 
    require_once('parts/header.php');
?>
<!--header section-->
<div class="wrapper">
    <section class="hero-header" id="home" style="background-image: url(img/accueil.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="brand">
                        <h1 class="heading-light">La salle</h1>
                        <p class="lead mb-5">
                            Salle de sport sur dijon
                        </p>
                        <a href="#features" class="btn btn-outline-white btn-round btn-md page-scroll">
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

            <!--features-->
            <?php 
                require_once('parts/header.php');
            ?>
    <section class="bg-alt" id="features">
        <div class="fluid-container">
            <div class="row">
                <article class="offset-lg-1 col-lg-4">
                        <div class="image">
                            <img src="img/salle.jpg" alt="" />
                        </div>
                        <div class="content">
                            <header class="text-center">
                                <h2>La salle</h2>
                            </header>
                            <p> Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor velit. Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat lacus placerat malesuada.</p>
                            <footer class="text-center">
                                <a href="salle.php" class="btn btn-outline-secondary">En savoir plus</a>
                            </footer>
                        </div>
                </article>

                <article class="offset-lg-2 col-lg-4 offset-lg-1">
                        <div class="image">
                            <img src="img/activite.jpg" alt="" />
                        </div>
                        <div class="content">
                            <header class="text-center">
                                <h2>Les activités</h2>
                            </header>
                            <p> Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor velit. Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat lacus placerat malesuada.</p>
                            <footer class="text-center">
                                <a href="activite.php" class="btn btn-outline-secondary">Voir le calendrier</a>
                            </footer>
                        </div>
                </article>
            </div>
        </div>
    </section>
    <!--Contact-->
    <section class="bg-alt" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="title text-center">
                        <h2 class="heading-semi-bold">Contactez Nous</h2>
                        <p class="lead text-muted">
                            Vous voulez en savoir plus.
                        </p>
                    </div>
                </div>
            </div>

            <form action="form/contact.php" method="post">

                <div class="row text-center mt-4">
                    <div class="col-md-8 offset-md-2">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="nom" class="form-control" placeholder="Votre Nom" required/>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control" placeholder="Votre Adresse Mail" required/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-4">
                            <textarea class="form-control" name="message" max-length="2000" placeholder="Que voulez vous savoir" rows="5" required></textarea>
                        </div>
                        <div class="form-group mt-4">
                            <input type="submit" class="btn btn-primary btn-round" value="Envoyez votre message" />
                        </div>
                    </div>
                </div>
            </form>
        
        </div>
    </section>
</div>

<?php 
    require_once('parts/footer.php');
?>