<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Mariage Fuki et Béa</title>

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/elegant-icon/style.css" rel="stylesheet">
        <link href="vendors/themify-icon/themify-icons.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        <link href="vendors/animate-css/animate.css" rel="stylesheet">

        <!-- Extra plugin css -->
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">

        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <!--================Search Area =================-->
        <section class="search_area">
            <div class="search_inner">
                <input type="text" placeholder="Enter Your Search...">
                <i class="ti-close"></i>
            </div>
        </section>
        <!--================End Search Area =================-->

        <!--================Header Menu Area =================-->
        <header class="main_menu_area">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand font-italic menu_logo" href="index.html">Mariage Fuki&Béa<br>6 Octobre 2018</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link" href="index.html">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link" href="programmation-journee.html">Programmation de la journée</a></li>
                        <li class="nav-item active"><a class="nav-link" href="formulaire-presence.php">Formulaire de présence</a></li>
                        <li class="nav-item"><a class="nav-link" href="informations-pratiques.html">Infos Pratiques</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contacts</a></li>
                    </ul>
                    
                </div>
            </nav>
        </header>
        <!--================End Header Menu Area =================-->

        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_text_inner">
                    
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->

        <!--================Static Area =================-->
        <section class="static_area">
            <div class="container">
                <div class="static_inner">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="static_main_content">

                            <?php

                                if(isset($_GET['present'])){
                                    $present = $_GET['present'];
                                }else{
                                    $present = null;
                                }


                                if($present=='oui'){

                            ?>


                                <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                                  <strong>Inscription avec succès !</strong> On te tient au courant pour la suite.
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                            <?php

                                }else if($present=='non'){
                            ?>

                                <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                                  <strong>Dommage tu ne seras pas présent : / </strong> En espérant te voir une prochaine fois ;)
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>

                            <?php

                                } 
                            ?>
                            	  <div class="static_text2">
                                    <h3>Confirme ta présence !</h3>
                                    <p>Partageras-tu ce moment de joie avec nous ?</p>
                                   
                                </div>
                                <div class="separation"></div>

                               <form class="col-sm-9" action="formulaire.php" method="post">

                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Nom</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="inputPassword3" name="nom" placeholder="Nom" required>
                                        </div>
                                      </div>

	                                <div class="form-group row">
									    <label for="inputPassword3" class="col-sm-2 col-form-label">Prénom</label>
									    <div class="col-sm-10">
									      <input type="text" name="prenom" class="form-control" id="inputPassword3" placeholder="Prénom" required> 
									    </div>
									</div>

								  <div class="form-group row">
								    <label for="inputEmail3" class="col-sm-2 col-form-label">Numéro de portable</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" pattern="^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$" name="portable" id="inputEmail3" placeholder="Numéro de portable" required>
								    </div>
								  </div>
								  <fieldset class="form-group">
								    <div class="row">
								      <legend class="col-form-label col-sm-2 pt-0">Alors</legend>
								      <div class="col-sm-10">
								        <div class="form-check">
								          <input class="form-check-input" type="radio" name="present" id="present_yes" value="oui" checked>
								          <label class="form-check-label" for="present_yes">
								            Je serai présent(e)
								          </label>
								        </div>
								        <div class="form-check">
								          <input class="form-check-input" type="radio" name="present" id="present_no" value="non">
								          <label class="form-check-label" for="present_no">
								            Je ne pourrai pas être là
								          </label>
								        </div>
								       
								      </div>
								    </div>
								  </fieldset>
								   <fieldset class="form-group" id="horaire">
								    <div class="row">
								      <legend class="col-form-label col-sm-2 pt-0">A partir de</legend>
								      <div class="col-sm-10">
								        <div class="form-check">
								          <input class="form-check-input" type="radio" name="horaire" id="gridRadios1" value="16h" checked>
								          <label class="form-check-label" for="gridRadios1">
								            Pour 16h (Cérémonie nuptiale)
								          </label>
								        </div>
								        <div class="form-check">
								          <input class="form-check-input" type="radio" name="horaire" id="gridRadios2" value="19h">
								          <label class="form-check-label" for="gridRadios2">
								            Pour 19h (Repas)
								          </label>
								        </div>
								       
								      </div>
								    </div>
								  </fieldset>

                                  <div class="form-group row" id="nb_people">
                                      <label for="example-number-input" class="col-2 col-form-label">Nombre de personnes en plus (si ajout en plus nous avertir avons pour confirmer)</label>
                                      <div class="col-10">
                                        <input class="form-control" name="nb_personnes" type="number" min="0" id="example-number-input">
                                      </div>
                                    </div>
								 
								
								      <input type="submit" class="btn btn-primary" value="Envoyer"/>
								 
								</form>               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Static Area =================-->
        <!--================Footer Area =================-->
        <footer class="footer_area">
            <div class="footer_widgets_area">
                <div class="container">
                    <div class="f_widgets_inner row">
                        <div class="col-lg-6 col-md-12">
                            <aside class="f_widget categories_widget">
                                <div class="f_w_title">
                                    <h3>Liens des Categories</h3>
                                </div>
                                <ul>
                                    <li><a href="index.html"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Accueil</a></li>
                                    <li><a href="programmation-journee.html"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Programmation de la journée</a></li>
                                    <!--<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Carte d'invitation</a></li>-->
                                    <li><a href="formulaire-presence.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Formulaire de présence</a></</li>
                                    <li><a href="informations-pratiques.html"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Infos Pratiques</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <aside class="f_widget contact_widget">
                                <div class="f_w_title">
                                    <h3>Contactez-nous</h3>
                                </div>

                                <a href="mailto:fukiwony@gmail.com">fukiwony@gmail.com</a>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy_right_area">
                <div class="container">
                    <div class="float-md-left">
                        <h5>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></h5>
                    </div>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->




        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <!-- Extra plugin css -->
        <script src="vendors/counterup/jquery.waypoints.min.js"></script>
        <script src="vendors/counterup/jquery.counterup.min.js"></script>
        <script src="vendors/counterup/apear.js"></script>
        <script src="vendors/counterup/countto.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/parallaxer/jquery.parallax-1.1.3.js"></script>
        <!--Tweets-->
        <script src="vendors/tweet/tweetie.min.js"></script>
        <script src="vendors/tweet/script.js"></script>

        <script src="js/theme.js"></script>

        <script src="js/form.js"/></script>
    </body>
</html>
