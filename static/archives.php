<div class="col_droite court">
    <h1 class="titre_principal">Archives</h1>


    <aside class="liste_etudiant">
        <ul class="liste_auteurs">
            <li><a class="lien" href="">Etudiant 1</a></li>
            <li><a class="lien" href="">Etudiant 2</a></li>
            <li><a class="lien" href="">Etudiant 3</a></li>
            <li><a class="lien" href="">Etudiant 4</a></li>
            <li><a class="lien" href="">Etudiant 5</a></li>

        </ul>

        <ul class="liste_expo">
            <li><a class="lien" href="/?r=traces">Juin 2014 : Traces</a></li>
            <li><a class="lien" href="/?r=organique">Mai 2014 : Organique</a></li>
        </ul>
    </aside>

    <aside class="bloc_icones">
        <?php
                if (!empty($_routes[$_r]['archives'])) {
                    include_once ROOT_DIR . '/vues/menu_organique.php' ;
                }
                ?>
        <?php
                if (!empty($_routes[$_r]['archives'])) {
                    include_once ROOT_DIR . '/vues/menu_traces.php' ;
                }
                ?>

    </aside>
</div>
