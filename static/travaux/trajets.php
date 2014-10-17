<div class="col_droite">
    <img class="image" src="" alt="Trajets de poche"/>

    <aside class="infos">
        <h4 class="strong"><a class="lien_col"href="index.php?r=lola_jacrot">Lola Jacrot</a>, Trajets de poche</h4>
        <p>
            Plans, papier calque, fil, Tailles variables
        </p>
    </aside>

<article class="article">
        <p>Procédé de ce travail en série : à chaque fois que je prends le train, je couds avec un fil rouge le trajet sur un plan qui correspond au chemin que j'effectue. Je cherche à représenter un trajet visuellement, mais également dans la durée : je trace le chemin en même temps que j'effectue le voyage, une dimension temporelle est présente par le procédé. Le but est d'interroger un trajet que je fais régulièrement, sans réfléchir. La répétition de chaque trajet (le rituel que j'effectue est le même pour tous) s'oppose à la singularité de chacun (j'utilise des cartes différentes, je précise la destination et le train que j'ai pris).</p>
    </article>


    <aside class="bloc_icones">
            <?php
                if (!empty($_routes[$_r]['archives'])) {
                    include_once ROOT_DIR . '/vues/menu_traces.php' ;
                }
            ?>
    </aside>
</div>
