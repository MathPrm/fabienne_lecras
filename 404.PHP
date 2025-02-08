<?php
/**
 * The template for displaying 404 pages (not found)
 *
 */

get_header();
?>


<style>
   
    .error-404 {
        display: flex; 
    flex-direction: column; 
    justify-content: center; 
    align-items: center; 
    height: 80vh; 
    text-align: center;
    margin: 0; 
    }

    .error-404 h1 {
        margin-top: 40px;
        font-size: 4rem;
        margin: 0;
        margin-top: 20px;
        font-family: 'Baskerville';
        color: #0F2225;
    }
    .error-404 h2 {
        font-size: 2.7rem;
        margin: 0;
        margin-top: 20px;
        font-family: 'Baskerville';
        color:rgb(88, 84, 71);
    }

    
    .home-button {
    display: inline-block;
    background: #0F2225;
    color:rgb(175, 173, 162);
    padding: 15px 60px;
    text-decoration: none;
    font-family: 'Baskerville', serif;
    margin-top: 35px;
    border-radius: 20px;
    border: 1px solid #EAD296; 
    text-align: center;   
}
.home-button:hover{
    background:rgb(22, 52, 56);
}
    

    
    @media (max-width: 768px) {
        .error-404 h1 {
            font-size: 2rem;
        }
        .error-404 h2 {
            font-size: 2rem;
        }


        .home-button {
            padding: 10px 15px;
            font-size: 1rem;
        } 
    }

    @media (max-width: 480px) {
        .error-404 h1 {
            font-size: 3rem;
        }
        .error-404 h2 {
            font-size: 2rem;
        }

        .home-button {
            padding: 8px 12px;
            font-size: 0.9rem;
        } 
    }
</style>

<main id="primary" class="site-main">
    <section class="error-404 not-found">
            <h1 class="page-title"><?php esc_html_e( 'Oops ! ' ); ?></h1>
            <h2 class="page-title"><?php esc_html_e( '404 - Désolé, Page introuvable '); ?></h2>
       

        <div class="page-content">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="home-button"><?php esc_html_e( 'Page d\'accueil'); ?></a>
        </div>
    </section>


<?php
get_footer();
?>
