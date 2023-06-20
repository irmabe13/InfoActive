<?php if (!$GLOBALS['domain']) exit; ?>
    <section class="mw960p mod center mtm mbl">
        <?php h1('titre', 'tc mbl ')?>
            <article class="propos">
                <?php media('media-2', '500')?>
                <?php h2('titre-2', 'mbn tdn tc ')?>
                <?php txt('txt-2', 'w80 center block')?>
            </article>
    </section>
    <section>
        <?php h2('titre-3', 'mbn tdn tc ')?>
        <div class="container">
            <div class="actions">
                <?php h2('titre-4', 'mbn tdn tc ')?>
                <?php txt('txt-3',)?>
            </div>
            <div class="actions">
                <?php h2('titre-5', 'mbn tdn tc ')?>
                <?php txt('txt-4')?>
            </div>
            <div class="actions">
                <?php h2('titre-6', 'mbn tdn tc ')?>
                <?php txt('txt-5')?>

            </div>
        </div>
    </section>
    <section class="mw960p mod center mtm mbl">
        <?php h2('titre-7', 'mbn tdn tc ')?>
        <?php h3('titre-8', 'mbn tdn tc ')?>
        <article>
            <ul>
                <li>
                    <div class="rectangle">
                        <div class="person-info">
                            <?php h3('titre-9', 'mbn tdn tc ')?>
                            <?php txt('txt-6', 'w50 center block')?>
                        </div>
                        <div class="person-sentence">
                            <?php txt('txt-7', 'w50 center block')?>
                        </div>
                    </div>
                </li>
            </ul>
        </article>
        <?php h3('titre-10', 'mbn tdn tc ')?>
        <article>
            <?php $module = module("equipes"); ?>
            <ul id="equipes" class="module">
                <?php foreach($module as $key => $val){ ?>
                    <li>
                        <div class="rectangle">
                            <div class="person-info">
                                <h3><?php txt('equipes-nom-prenom-'.$key) ?></h3>
                                <?php txt('equipes-status-'.$key) ?>
                            </div>
                            <div class="person-sentence">
                                <?php txt('equipes-discours-'.$key) ?>
                            </div>
                        </div>
                    </li>
                <? } ?>
            </ul>
        </article>
    </section>


