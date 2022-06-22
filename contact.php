<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Mariage Pierre Louis & Cindy</title>

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
            <a class="navbar-brand font-italic menu_logo" href="index.html">Mariage Pierre Louis & Cindy<br>20 Aout 2022</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item "><a class="nav-link" href="index.html">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link" href="programmation-journee.html">Programmation de la journée</a></li>
                        <li class="nav-item"><a class="nav-link" href="formulaire-presence.php">Formulaire de présence</a></li>
                        <li class="nav-item"><a class="nav-link" href="informations-pratiques.html">Infos Pratiques</a></li>
                        <li class="nav-item active"><a class="nav-link" href="contact.php">Contacts</a></li>
                    </ul>
                    
                </div>
            </nav>
        </header>
        <!--================End Header Menu Area =================-->

        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_text_inner">
                    <h4>Contactez nous</h4>
                    <h5>Si vous avez des questions sur l'organisation contactez nous</h5>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->

        <!--================Contact Us Area =================-->
        <section class="contact_us_area">
            


            <div class="container">

                     <?php

                                if(isset($_GET['send'])){
                                    $send = $_GET['send'];
                                   
                                }else{

                                    $send = null;
                                }


                                if($send=='oui'){

                            ?>


                                <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                                  <strong>Mail envoyé avec succès !</strong> On te répondra au plus vite !
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                            <?php

                                }else if($send=='non'){
                            ?>

                                <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                                  <strong>Echec du mail :/.</strong> N'hésite pas à envoyer un mail à partir de ta messagerie : pierre.louirazin@gmail.com .
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>

                            <?php

                                }else{

                                }       
                            ?>

              
                <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d83805.57186970861!2d1.9274813623275335!3d48.973968801101414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x47e68c689d65c593%3A0x123e5d58bbbb5848!2sgoogle+maps+vernouillet+la+scene!3m2!1d48.97399!2d1.9975209999999999!5e0!3m2!1sfr!2sfr!4v1523526629332" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                
                <div class="contact_details_inner">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="contact_text">
                                <div class="main_title">
                                    <h2>Contactez nous</h2>
                                    <p>En cas de question sur l'organisation du mariage n'hésitez pas à nous contacter par mail ou contacter nos témoins :</p>
                                </div>
                                <div class="contact_d_list">
                                    <div class="contact_d_list_item">
                                    <h4>Nos témoins :</h4>
                                    <a href="tel:0629402084"> Foued : 06 29 40 20 84 </a>
                                    <a href="tel:0771107401"> Olivia : 07 71 10 74 01 </a>
                                    </div>
                                    <div class="contact_d_list_item">
                                        <a href="#">pierre.louirazin@gmail.com</a><a href="#">guerrier.cindy@gmail.com</a>
                                    </div>
                                    <div class="contact_d_list_item">
                                        <p>6 Chemin du Bout Large,<br />  78540 Vernouillet, France</p>
                                    </div>
                                    <div class="contact_d_list_item">
                                        <p>16h00-5h00 Samedi 20 Aout</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact_form">
                               
                                <form class="contact_us_form row" action="contact_process.php" method="post" id="contactForm">
                                    <div class="form-group col-lg-12">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Nom" required>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Votre email" required>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Sujet">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <textarea class="form-control" name="message" id="message" rows="1" placeholder="Message" required></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                          
                                        <input class="btn btn-secondary submit_btn" style="color: white;" value="Envoyer" id="fuki" type="submit"/>
                                    
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Contact Us Area =================-->
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

                                <a href="mailto:pierre.louirazin@gmail.com">pierre.louirazin@gmail.com</a>
                                <a href="mailto:guerrier.cindy@gmail.com">guerrier.cindy@gmail.com</a>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy_right_area">
                <div class="container">
                    <div class="float-md-left">
                    <h5>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This design is made by <a href="https://colorlib.com" target="_blank">Colorlib</a> | WebDeveloper : WONY Fuki</h5>
                    </div>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->
        <!--================Contact Success and Error message Area =================-->
        <div id="success" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Thank you</h2>
                        <p>Your message is successfully sent...</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modals error -->

        <div id="error" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Sorry !</h2>
                        <p> Something went wrong </p>
                    </div>
                </div>
            </div>
        </div>
        <!--================End Contact Success and Error message Area =================-->


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
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="js/gmaps.min.js"></script>

        <!-- contact js -->
        <script src="js/contact.js"></script>
       

        <script src="js/theme.js"></script>
    </body>
</html>
