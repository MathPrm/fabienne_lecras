<footer>
    <div class="footer-content">
        <nav class="footer-navigation">
            <ul>
               <a href="/">Créations</a>
               <a href="/">Restauration</a>
               <a href="/">Contact</a>
            </ul>
            </nav>

            <div class="footer-logo">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/logo_foo.jpg" alt="Logo Footer">
                </a>
            </div>

           <div class="footer-mentions">
                <ul>
                    <a href="/">Mentions légales</a>
                    <a href="/">Politique de confidentialité</a>
                    <a href="/">Gestion des dennées</a>
                </ul>
           </div>
      
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
