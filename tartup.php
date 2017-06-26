<!doctype html>
<html class="no-js" lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>startuparticle</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Damion|Jura|Mogra|Press+Start+2P|Slackey" rel="stylesheet">


        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
         <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/normalize.css">
       
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
                     <!-- Start header -->


                 
                   
    <header id="entete">
        <aside class="logoblog">
            <span class="logo">DayTech</span>
        </aside>
        <nav class="menulaptop hidden-sm-down">
           <ul id="menulap">
                <li><a href="#accuiel">Accuiel</a></li>
                <li><a href="#apropos">Nouvelles-techno</a></li>
                <li><a href="#apropos">Innovations/web</a></li>
                <li ><a href="#apropos">Outils&Astuces</a></li>

                <li id="dernierlist"><a href="#contact">Contact</a></li>
               
            </ul> 
        </nav>
        <nav class="menumobile hidden-md-up">
          <button class="menubouton" onclick="affichmenudrop()">Menu</button> 
          <ul id="meunudropdown" class="menudrop"">
               <li><a href="#accuiel">Accuiel</a></li>
                <li><a href="#apropos">Nouvelles-techno</a></li>
                <li><a href="#apropos">Innovations/web</a></li>
                <li ><a href="#apropos">Outils&Astuces</a></li>
                <li><a href="#contact">Contact</a></li>
          </ul>

        </nav>

    </header>
    <section class="lesarticles row justify-content-around">

        <section class="articles col-12 col-md-8">
        <section class="articlecont" id="sartupart">
           
            <article class="card">
              <div class="entet-card">
                  <img class="card-img-top img-fluid" src="img/starup.jpg" alt="start-up-deviolet" onmouseover="affichalt(this)" onmouseout="cacheralt(this)">
                 
               </div>    
              <div class="card-block">
                <h4 class="card-title">Start-Up-Deviolet</h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, saepe optio deleniti quisquam earum ducimus numquam, culpa exercitationem, debitis blanditiis veniam odit vitae laudantium, quasi nam modi! Libero, tempore, quibusdam.</p>
                <p class="date"> <span class="ion-ios-clock-outline"> </span><span class="affichdate"></span></p>
                     <!-- date et comment part -->
                <div class="date-comment">
                   
                   <p><span class="ion-ios-personadd"></span></p>
                   <p class="comment"><span class="ion-android-chat icon"></span><span class="acout-comment"></span></p>
                </div>
                     <!-- button part -->
                <div class="partage">
                  <a href="#" class="btn"><span class="ion-social-facebook-outline icon"></span> Share</a>

                  <a href="#" class="btn"><span class="ion-social-twitter-outline icon icon"> </span> Tweet</a>
                  <a href="#" class="btn"><span class="ion-social-googleplus-outline icon"> </span> Share</a>
                </div> 
               <a href="#" class="learn">Learn More <span class="ion-android-arrow-dropright-circle icon"></span></a>
              </div> 

            </article>
    
         </section>
         </section>                 


            <!--  start aside  -->
      <aside class="le-plus-lit col-12 col-md-3">
        <article class="aside-article">
             <!--  <div class="media">
                 
                  <div class="media-body">
                     <h5 class="mt-0">A propos</h5>
                     Passionné de nouvelles technologies, je vous fais découvrir des innovations technologiques qui impactent notre quotidien, ainsi que des astuces & outils pour simplifier notre vie.
                </div>
              </div> -->
            <div class="titre">
                <div class="titre-aside">
                 <h3>A propos</h3>
                </div>
              <img class="img-apropos" src="img/touche.gif" alt="image_animé" style>
              Passionné de nouvelles technologies, je vous fais découvrir des innovations technologiques qui impactent notre quotidien, ainsi que des astuces & outils pour simplifier notre vie.
              
            
            </div>
            
        </article>
        <article class="aside-article">
            <div class="titre-aside">
              <h3 >News lettres</h3>
                
            </div>
            <div class=texte-aside>
              <form>
               <div class="form-group">
                <label for="exampleInputEmail1">EMAIL*</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
               </div>
               <button type="submit" class="btn">JE M'ABONNE!</button>
              </form>
                
            </div>
        </article>
        <article class="aside-article">
            <div class="titre-aside">
              <h3>Dans ce blog</h3>
                
            </div>
            <div class=texte-aside>
              <ul class="blog-list">
                  <li><a href="#">Nouvelles technologies</a></li>
                  <li><a href="#">Inovations/web/technologie</a></li>
                  <li><a href="#">Astuce divers</a></li> 
                  <li><a href="#">Contact</a></li>
              </ul>
            </div>
        </article>
        <article class="aside-article">
            <p class="afficdate"> JE SUIS LA PENDANT: </p>
            <p id="tp"></p>
        </article>
           
          
      </aside>
   
        
    </section>








    <!--================Star footer================-->
                     <!-- ========================================== -->

   <footer>
      <div class="row align-items-center justify-content-center">
       <div class="reseau col-12 col-md-3">
            <ul class="reseau-footer align-s"> 
                <li><a href="#"><span class="ion-social-facebook"></span></a></li>
                <li><a href="#"><span class="ion-social-twitter"></span></a></li>
                <li><a href="#"><span class="ion-social-googleplus"></span></a></li>
             </ul>  
       </div>
       <div class="texte-footer col-12 col-md-6">
           <p>Infos sur le site Daytech ©2017 Le contenu de ce blog est protégé par les lois en vigueur sur la propriété intellectuelle et n'est pas libre de droits.. Consulter les mentions légales</p>
       </div>
       <div class="haut-page align-self-center col-12 col-md-3">
           <a href="#entete" class="haut"> <span class="ion-android-navigate icon"></span></a>
       </div>
    </div>
   </footer>







        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
         <script src="js/bootstrap.min.js"></script>

    </body>
</html>
