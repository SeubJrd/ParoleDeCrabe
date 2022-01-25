# ParoleDeCrabe
template de base pour créer un thème wordpress

Commandes :

npm install 

npx gulp watch pour lancer le serveur

Indications : 

On écrit rien dans main.css, c’est gulp qui compile depuis les scss

Fonts : importer chaque fichier ttf dans styles > components > fonts

SCSS : chaque fichier est rangé dans le dossier components de styles, chacun est appelé via main.scss. Pour plus d’info voir le fichier en question. 
NE PAS TOUCHER A BOOTSTRAP, MAGNIFIC, ET MAIN.CSS !!!!!!

Globalement, on ne modifie et crée que des fichiers dans le dossier styles et à la racine du dossier. 

ACF : appeler des champs dans une page depuis le back : si ce n’est pas un sous champs, la ligne de code sera : <?php the_field( 'nom_du_champs' ); ?>


si groupe de champs avec des sous champs, on appelle une boucle en while pour afficher le groupe : 

<?php while ( have_rows( 'nom_groupe' ) ) : the_row(); ?>

        <h2><?php the_sub_field( 'sous_champs' ); ?></h2>

  <?php endwhile; ?>
