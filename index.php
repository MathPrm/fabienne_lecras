

<?php get_header(); ?>

<main>
    <!-- Section Titre Principal -->
    <section class="hero">
          <img class="image" src="<?php echo get_template_directory_uri(); ?>/assets/image1.jpg" alt="ecriture">
    </section>

    <!-- Section Restauration et Créations -->
    <section class="two-columns">
        <div class="column">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/restauration.jpg" alt="Restauration">
            <h2>Restauration</h2>
        </div>
        <div class="column">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/creation.jpg" alt="Créations">
            <h2>Créations</h2>
        </div>
    </section>

    <!-- Section À Propos -->
    <section class="about">
        <div class="about-text">
            <h2>À PROPOS</h2>
            <p>Depuis l’âge de quatorze ans, j’ai suivi des <br>
             cours de dessin dans divers ateliers, puis <br>
             j’ai suivi un apprentissage en dorure en <br>
             atelier (obtention du CAP de dorure), et <br>
             enfin un apprentissage en restauration de<br>
              tableaux.<br>
              J’ai toujours peint sur chevalet, d’abord des <br>
              natures mortes à l’aquarelle et à la <br>
              tempera, sur bois. Puis je me suis mise à <br>
              combiner toutes les techniques sur un <br>
              même tableau, sur le thème du tissu et du <br>
              vêtement, en m’inspirant des laques chinoises <br>
              ou européennes que j’avais été <br>
              amenée à restaurer.</p>
            <a href="#contact" class="btn">Contactez-moi</a>
        </div>
        <div class="about-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/about.jpg" alt="À Propos">
        </div>
    </section>
    
</main>

<?php get_footer(); ?>


