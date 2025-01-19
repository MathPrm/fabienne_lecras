




document.addEventListener('DOMContentLoaded', function () {
    const videoContainer = document.querySelector('#header-video'); // Conteneur vidéo
    const siteTitleHeaderH1 = document.querySelector('#site-title-header-h1'); // H1
    const siteTitleHeaderH2_1 = document.querySelector('#site-title-header-h2-1'); // H2-1
    const siteTitleHeaderH2_2 = document.querySelector('#site-title-header-h2-2'); // H2-2

    if (videoContainer && siteTitleHeaderH1 && siteTitleHeaderH2_1 && siteTitleHeaderH2_2) {
        // S'assure que le conteneur vidéo est en position relative
        videoContainer.style.position = 'relative';

        const videoElement = videoContainer.querySelector('video'); // Sélectionne l'élément vidéo
        if (videoElement) {
            let previousTime = 0;

            // Masquer les titres au tout début
            siteTitleHeaderH1.style.display = 'none';
            siteTitleHeaderH2_1.style.display = 'none';
            siteTitleHeaderH2_2.style.display = 'none';

            // Afficher les titres après 9 secondes pour la première lecture
            setTimeout(() => {
                siteTitleHeaderH1.style.display = 'block';
                siteTitleHeaderH2_1.style.display = 'block';
                siteTitleHeaderH2_2.style.display = 'block';
            }, 9000);

            const checkVideoState = () => {
                const currentTime = videoElement.currentTime;

                // Si la vidéo revient à 0:00 (avec une marge pour éviter les erreurs)
                if (currentTime < 0.1 && previousTime > 0.1) {
                    // Masquer les titres
                    siteTitleHeaderH1.style.display = 'none';
                    siteTitleHeaderH2_1.style.display = 'none';
                    siteTitleHeaderH2_2.style.display = 'none';

                    // Afficher les titres après 9 secondes
                    setTimeout(() => {
                        siteTitleHeaderH1.style.display = 'block';
                        siteTitleHeaderH2_1.style.display = 'block';
                        siteTitleHeaderH2_2.style.display = 'block';
                    }, 9000);
                }

                // Mémorise le temps actuel
                previousTime = currentTime;
            };

            // Vérifie l'état de la vidéo toutes les 100ms
            setInterval(checkVideoState, 100);
        }
    }
});



































