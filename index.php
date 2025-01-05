

<?php get_header(); ?>

<main>
    <!-- Section Titre Principal -->
    <section class="hero">
          <h1 class = "h1">FABIENNE</h1>
          <h1 class = "h1">LECRAS TANGUY</h1>
          <h2 class = "h2">ARTISANTE-RESTAURATRICE-DOREUSE</h2>
          <h2 class = "h3">Art Dorrure</h2>
          <a href="#contact" class="btn">Contactez-moi</a>
    </section>

    <!-- Section Restauration et Créations -->
    <h1>Mes services</h1>
    <section class="two-columns">
        <div class="column">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/restauration.jpg" alt="Restauration">
            <h2>Restauration</h2>
            <p>Lorem ipsum dolor sit amet consectetur. <br>
                 Lobortis diam in risus magna lectus arcu <br>
                 ultrices tellus.Odio risus adipiscing nunc <br>
                  lacus pulvinar pellentesque vitae eu. <br>
                </p>
        </div>
        <div class="column">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/creation.jpg" alt="Créations">
            <h2>Créations</h2>
            <p>Lorem ipsum dolor sit amet consectetur. <br>
                 Lobortis diam in risus magna lectus arcu <br>
                 ultrices tellus.Odio risus adipiscing nunc <br>
                  lacus pulvinar pellentesque vitae eu. <br>
                </p>
        </div>
    </section>

    <!-- Section Video-->
    <h2>Titre</h2>
    <section id="video">
    <video controls width="70%">
        <source src="<?php echo get_template_directory_uri(); ?>/assets/video.mp4" type="video/mp4">
    </video>
   </section>
   

    <!-- Section À Propos -->
    <section class="about">
        <div class="about-text">
            <h2>À PROPOS</h2>
            <p>Depuis l’âge de quatorze ans, j’ai suivi des <br>
             cours de dessin dans divers ateliers, puis j’ai<br>
              suivi un apprentissage en dorure en  atelier <br>
             (obtention du CAP de dorure), et enfin un<br>
              apprentissage en restauration de tableaux.<br>
              J’ai toujours peint sur chevalet, d’abord des <br>
              natures mortes à l’aquarelle et à la tempera,<br>
               sur bois. Puis je me suis mise à combiner <br>
              toutes les techniques sur un même tableau, <br>
               sur le thème du tissu et du vêtement, en <br>
               m’inspirant des laques chinoises ou <br>
              européennes que j’avais été amenée à <br>
              restaurer.</p>
            <a href="#contact" class="btn">Contactez-moi</a>
        </div>
        <div class="about-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/about.jpg" alt="À Propos">
        </div>
    </section>
    
</main>

<?php get_footer(); ?>


