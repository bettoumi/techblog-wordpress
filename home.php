
       <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
       <html xmlns="http://www.w3.org/1999/xhtml"> 
       <head profile="http://gmpg.org/xfn/11">   <title><?php bloginfo('name') ?><?php if ( is_404() ) : ?> &raquo; <?php _e('Not Found') ?><?php elseif ( is_home() ) : ?> &raquo; <?php bloginfo('description') ?><?php else : ?><?php wp_title() ?><?php endif ?></title>   <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" /> <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats --> <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" /> <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" /> <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" /> <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" /> <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /><?php wp_head(); ?>   <?php wp_get_archives('type=monthly&format=link'); ?> <?php //comments_popup_script(); <?php wp_head(); ?> 
       <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
       <link href="https://fonts.googleapis.com/css?family=Damion|Jura|Mogra|Press+Start+2P|Slackey" rel="stylesheet">
       <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'style.css' ); ?>" />
       
       
        </head> 
    
       <body> 
        
    <header id="entete">
         <?php wp_nav_menu( array( 'theme_location' => 'Topmenu' ) ); ?>
        <aside class="logoblog">
            <span class="logo">DayTech</span>
        </aside>
        <nav class="menulaptop hidden-sm-down">
           <ul id="menulap">
                <li><a href="#accuiel">Accuiel</a></li>
                <li><a href="#ntech">Nouvelles-techno</a></li>
                <li><a href="#innov">Innovations/web</a></li>
                <li ><a href="#outAst">Outils&Astuces</a></li>

                <li id="dernierlist"><a href="#contact">Contact</a></li>
               
            </ul> 
        </nav>
        <nav class="menumobile hidden-md-up">
          <button class="menubouton" onclick="affichmenudrop()">Menu</button> 
          <ul id="meunudropdown" class="menudrop">
               <li><a href="#accuiel">Accuiel</a></li>
                <li><a href="#ntech">Nouvelles-techno</a></li>
                <li><a href="#innov">Innovations/web</a></li>
                <li ><a href="#outAst">Outils&Astuces</a></li>
                <li><a href="#contact">Contact</a></li>
          </ul>


        </nav>

    </header>
   
                       <!-- start slider section -->
   <!--  <section class="slidsection hidden-md-down">
        
    </section>
 -->
                       <!-- Start articles section -->
    <section class="lesarticles row justify-content-around">
        
      <section class="articles col-12 col-md-8">
        <section class="articlecont" id="ntech">
            <h2><span class="ion-ios-grid-view-outline"></span>Nouvelles technologies</h2>
           <div class="row">
            
              <?php while(have_posts()) : the_post();?>
            <article class="card col-12 col-md-6">
              <div class="entet-card">
                  
                  <img class="card-img-top img-fluid" src="<?php echo esc_url (get_template_directory_uri() );?>/img/starup.jpg" alt="start-up-deviolet" onmouseover="affichalt(this)" onmouseout="cacheralt(this)">
                 
               </div>    
              <div class="card-block">
                <h4 class="card-title"> <?php the_title(); ?> </h4>
                <p class="card-text" <?php the_content(); ?></p>
                <p class="date" <?php the_time("j M Y");?> > <span class="ion-ios-clock-outline"> </span><span class="affichdate"></span></p>
                     <!-- date et comment part -->
                <div class="date-comment">
                   
                   <p><span class="ion-ios-personadd"></span></p>
                   <p class="comment"><span class="ion-android-chat icone"></span><span class="acout-comment"></span></p>
                </div>
                     <!-- button part -->
                <div class="partage">
                  <a href="#" class="btn"><span class="ion-social-facebook-outline icone"></span> Share</a>

                  <a href="#" class="btn"><span class="ion-social-twitter-outline icone "> </span> Tweet</a>
                  <a href="#" class="btn"><span class="ion-social-googleplus-outline icon"> </span> Share</a>
                </div> 
               <a href="tartup.html" <?php the_permalink();  ?> class="learn">Learn More <span class="ion-android-arrow-dropright-circle icone"></span></a>
              </div> 
            </article>
               <?php endwhile; ?>
       
                  
            </div>
               <!-- end of article -->
         </section> 



             
      </section>

                             <!--  start aside  -->
      <aside class="le-plus-lit col-12 col-md-3">
        <article class="aside-article">
             
            <div class="titre">
                <div class="titre-aside">
                 <h3>A propos</h3>
                </div>
              <img class="img-apropos"  src="<?php echo esc_url (get_template_directory_uri() );?>/img/touche.gif" alt="image_animé" style>
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
                <input type="email" class="form-control" id="exampleInputEmail1"  placeholder="Enter email">
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
                     <!-- End  articles section -->

                     <!--================Star tabs================-->
                     <!-- ========================================== -->
    <section class="tabs">
        
       

        <!-- Tab panes -->
      <div class ="tab">       

        <div class="natab">
          <button class="btn cliquebtn" onclick="affich('dernier')">dernier Article</button>
          <button class="btn cliquebtn" onclick="affich('reston')">Restons connecté</button>
          <button class="btn cliquebtn" onclick="affich('tech')">Meilleurs tech</button>
            
        </div>

        <div class="lecontenu">
          <div class="tabcontenu" id="dernier"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia consequatur consectetur similique maxime quisquam possimus suscipit porro at non iure delectus nihil architecto ex ullam, velit quae, libero officiis quasi?
          </div>
          <div class="tabcontenu" id="reston"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia consequatur consectetur similique maxime quisquam possimus suscipit porro at non iure delectus nihil architecto ex ullam, velit quae, libero officiis quasi?
          </div>
          <div class="tabcontenu" id="tech"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia consequatur consectetur similique maxime quisquam possimus suscipit porro at non iure delectus nihil architecto ex ullam, velit quae, libero officiis quasi?
          </div>
          
        </div> 
        </div>

    </section>


                     <!--================Star contact================-->
                     <!-- ========================================== -->
    <section class ="contact" id="contact">
         <form class="formulaire">
            <div class="form-group">
               <label  class="labelform" for="formGroupExampleInput">Nom/Prénom</label>
              <input type="text" class="form-control" id="formGroupExampleInput" >
            </div>
            <div class="form-group">
               <label  class="labelform" for="Email1">Email</label>
               <input type="email" class="form-control" id="Email1">
              
              </div>
  
  
            <div class="form-group">
              <label class="labelform" for="exampleTextarea">Message</label>
              <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
             </div>
   
  
            <button type="submit" class="btn" onclick="confirmer()">Envoyer</button>
         </form>
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

   <script src="<?php echo get_bloginfo('template_directory'); ?>/js/plugins.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/main.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery-3.2.1.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/tether.min.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/bootstrap.js"></script>
<link src="<?php echo get_bloginfo('template_directory'); ?>/css/main.css"></link>
</body>
</html>





        