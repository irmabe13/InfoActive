<?php if (!$GLOBALS['domain']) exit; ?>
    <section class="mw960p mod center mtm mbl">
        <?php h1('titre', 'tc mbl ')?>
            <article class="propos">
                <?php media('media-2', '500')?>
                <?php h2('titre-2', 'mbn tdn tc ')?>
                <p>L’association « Info Activ », dirigée par des membres du BTS SIO au Lycée La Colinière, contribue significativement à l’amélioration de la vie quotidienne des étudiants en créant une plateforme d’échange et de partage enrichissante, notamment en favorisant les interactions avec d’anciens étudiants du BTS.
                    De plus, cette association joue un rôle clé dans le renforcement des liens sociaux et de la convivialité entre les étudiants, créant ainsi une communauté dynamique et solidaire dédiée à
                    l’informatique au sein du lycée. Cette dynamique est rendue possible grâce au foyer, qui offre un espace propice aux échanges et à la création de liens entre les étudiants.
                </p>
            </article>
    </section>
    <style>
        .propos{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .actions {
            border-radius: initial;
            position: relative;
            margin-right: 30px;
            margin-left: 30px;
            border: 1px solid black;
            text-align: center;
            flex: 1;
            padding: 0 1rem 0 1rem;
        }
        .container {
            display: flex;
            flex-direction: row;
            justify-content: space-between;

        }
    </style>
    <section>
        <?php h2('titre-3', 'mbn tdn tc ')?>
        <div class="container">
            <div class="actions">
                <h3>Semaine intégration</h3>
                <p>l'association a aidé pour la semaine d'intégration entre les premières et les deuxièmes années</p>
            </div>
            <div class="actions">
                <h3>Le foyer</h3>
                <p>L'association aide le foyer au niveau matériel pour que les étudiants du BTS SIO aient un lieu de détente, de travail, etc.</p>
            </div>
            <div class="actions">
                <h3>Les verres</h3>
                <p>L'association a créé avec leur partenaire Toma Intérim.</p>
            </div>
        </div>
    </section>

    <section class="mw960p mod center mtm mbl">
        <?php h2('titre-4', 'mbn tdn tc ')?>
        <?php h3('titre-5', 'mbn tdn tc ')?>
        <article>
            <ul>
                <li>

                    <div class="rectangle">
                        <?php media('media-5', '200')?>
                        <div class="person-info">
                            <h3 class="person-name">Richard Yann</h3>
                            <p class="person-profession">Développeur 2ème année</p>
                        </div>
                        <div class="person-sentence">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at magna ullamcorper, convallis felis non, tristique metus.</p>
                        </div>
                    </div>
                </li>
            </ul>
        </article>
        <?php h3('titre-6', 'mbn tdn tc ')?>
        <article>
            <ul>
                <li>
                    <div class="rectangle">
                        <?php media('media-6', '150')?>
                        <div class="person-info">
                            <h3 class="person-name">Mousnier Théo</h3>
                            <p class="person-profession">Développeur 1er année </p>
                        </div>
                        <div class="person-sentence">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at magna ullamcorper, convallis felis non, tristique metus.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="rectangle">
                        <?php media('media-7', '100')?>
                        <div class="person-info">
                            <h3 class="person-name">Ben Ahamadi Irma</h3>
                            <p class="person-profession">Développeur 1er année</p>
                        </div>
                        <div class="person-sentence">
                            <p>Ut feugiat enim nec consectetur iaculis. Vivamus sit amet efficitur mauris.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="rectangle">
                        <?php media('media-7', '100')?>
                        <div class="person-info">
                            <h3 class="person-name">Koudjowa Winniga</h3>
                            <p class="person-profession">Développeur 1er année</p>
                        </div>
                        <div class="person-sentence">
                            <p>Sed vel elit finibus, interdum lacus non, ultricies ligula. Aliquam lacinia luctus elit nec consequat.</p>
                        </div>
                    </div>
                </li>
            </ul>
        </article>
    </section>
    <style>
        .rectangle {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
            padding: 1rem;
            background-color: #f2f2f2;
            border: 1px solid black;
        }
        .person-info {
            flex: 1;
        }
        .person-name {
            font-weight: bold;
            margin-bottom: 0.5rem;
        }
        .person-profession {
            font-style: italic;
            color: #999;
            margin-left: 4rem;
        }
        .person-sentence {
            flex: 2;
        }
        article ul li {
            list-style: none;
        }
    </style>


