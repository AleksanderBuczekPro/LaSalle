<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>La salle</title>
        <meta name="description" content="La salle" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Bootstrap 4-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <!--custom css-->
        <link rel="stylesheet" href="css/components.css" />
        <link rel="stylesheet" href="css/colors.css" />
        <link rel="stylesheet" href="css/index.css" />

    </head>
    <body>

        <!--header-->
        <nav class="navbar navbar-toggleable-md sticky-navigation">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img id="logo" src="img/logo.png" class="nav-brand-logo" />
                </a>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="index.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="salle.php">La salle</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="activite.php">Les activités</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="index.php#contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll text-primary" data-toggle="modal" data-target="#myModal" href="#myModal">Connexion</a>
                            <!-- Modal -->
                            <div id="myModal" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <form  class="container form-horizontal" action="parts/connexion.php">
                                                <h2 class="text-center">Connexion</h2>
                                                <div class="row form-group">
                                                    <label class="control-label col-md-3" for="email">Email :</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="email" class="form-control" placeholder="Adresse mail" required/>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <label class="control-label col-md-3" for="mdp">Mot de passe :</label>
                                                    <div class="col-md-9">  
                                                        <input type="password" name="mdp" class="form-control" placeholder="Password" required/>
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                <button type="submit" class="btn btn-outline-secondary">Connexion</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>