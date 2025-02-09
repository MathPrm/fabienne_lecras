<?php

require_once('../../../wp-load.php'); // Chemin vers wp-load.php

get_header(); 
?>


<style>
    /* Styles globaux */

    h1 {
        text-align: center;
        margin-top: 50px;
        font-size: 2.5rem;
    }

    /* Conteneur principal */
    .mentions-legales-container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        line-height: 1.8;
        font-size: 1rem;
    }

    .mentions-legales-container h2 {
        font-size: 1.5rem;
        margin-top: 30px;
        color: rgb(22, 21, 21);
        margin-bottom: 15px; /* Ajout d'un espace sous chaque titre */
    }

    .mentions-legales-container p {
        margin: 10px 0;
        margin-top: 10px; /* Ajout d'un espace au-dessus de chaque paragraphe */
        color: black;
    }

    /* Ajout d'indentation pour les listes spécifiques */
    .mentions-legales-container ul {
        padding-left: 30px; /* Ajoute un décalage à gauche pour les listes */
        color: black;
    }

    .mentions-legales-container li {
        margin-bottom: 10px; /* Espacement entre chaque élément de liste */
    }

   
    /* Responsiveness */
    @media (max-width: 768px) {
        .mentions-legales-container {
            padding: 10px;
        }

       
    }
</style>

<main id="main-content">
    <h1>Mentions Légales et Politiques de Confidentialité</h1>

    <div class="mentions-legales-container">
    <h2> Mentions légales et Politiques de confidentialité</h2>
<p>Fabienne Lecras, soucieuse des droits des visiteurs de son site et dans un souci de transparence, met en place cette politique pour détailler les traitements des données effectués, les finalités poursuivies et les droits des utilisateurs.</p>
<p>La poursuite de la navigation sur ce site vaut acceptation sans réserve des dispositions et conditions d’utilisation suivantes.</p>

<h3>Article 1 – Mentions légales</h3>
<ul>
    <li><strong>1.1 Site :</strong> </br>Nom du site : fabienne-lecras-tanguy</li>
    <li><strong>1.2 Éditeur :</strong> </br>Fabienne Lecras, entrepreneur individuel,</br> Adresse : 181 Route des Bois de Fains 27230 - Saint-Mards-de-Fresne France </br> Contact : <a href="lecras.fabienne@gmail.com">lecras.fabienne@gmail.com</a> | +33 6 82 05 32 83 </br>Immatriculation au RNE ou RCS : [à préciser]</br> Numéro de TVA intracommunautaire : [si applicable].</li>
    <li><strong>1.3 Hébergeur :</strong></br> Nom de l’hébergeur : O2SWITCH, </br>Adresse : Chemin des Pardiaux 63000 Clermont-Ferrand</br> Numéro de téléphone : 04 44 44 60 40</li>
    <li><strong>1.4 Créateur :</strong> </br>Nom : Groupe 9 projet WordPress Warrior Digital Campus</br> Contact : wwp.groupe9@gmail.com</li>
</ul>

<h3>Article 2 – Propriété intellectuelle</h3>
<p>Les contenus (textes, photographies, illustrations, vidéos, etc.) présents sur le site sont protégés par le droit de la propriété intellectuelle. Toute reproduction, distribution, modification ou adaptation est interdite sans autorisation préalable de l’éditeur ou des ayants droit concernés.</p>

<h3>Article 3 – Gestion du site</h3>
<p>L’éditeur se réserve le droit de suspendre, modifier ou supprimer l’accès au site ou à certaines parties en cas de besoin (maintenance, mises à jour, etc.).</p>

<h3>Article 4 – Données personnelles et politique de confidentialité</h3>
<h4>Collecte des données</h4>
<ul>
    <li>Nom et prénom</li>
    <li>Adresse email</li>
    <li>Messages envoyés via le formulaire de contact</li>
</ul>
<h4>Utilisation des données</h4>
<p>Ces données sont utilisées pour :</p>
<ul>
    <li>La gestion des relations avec les visiteurs (réponses aux demandes)</li>
    <li>La personnalisation de l’expérience utilisateur</li>
    <li>L’amélioration des services du site</li>
</ul>

<h4>Droits des utilisateurs</h4>
<p>Conformément au RGPD, les utilisateurs disposent des droits suivants :</p>
<ul>
    <li>Accès, rectification ou suppression des données</li>
    <li>Opposition au traitement ou limitation du traitement</li>
    <li>Portabilité des données</li>
</ul>
<p>Pour exercer ces droits, contactez-nous à l’adresse : lecras.fabienne@gmail.com. Toute demande doit être accompagnée d’un justificatif d’identité valide.</p>

<h3>Article 5 – Responsabilités</h3>
<p>L’éditeur ne saurait être tenu responsable des dommages liés à l’utilisation du site, de pannes techniques ou de virus.</p>

<h3>Article 6 – Contact</h3>
<p>Pour toute question relative aux mentions légales ou à la politique de confidentialité, contactez-nous :  <a href="lecras.fabienne@gmail.com">lecras.fabienne@gmail.com</a> </p>

<h3>Modifications</h3>
<p>Cette politique de confidentialité peut-être modifiée afin de maintenir la conformité avec la loi et de tenir compte de tout changement au processus de collecte de données. Il est donc recommandé aux utilisateurs de vérifier cette politique de confidentialité de temps à autre pour s’assurer qu’ils soient informés de toute mise à jour.</p>

    </div>
</main>














<?php
get_footer();
?>
