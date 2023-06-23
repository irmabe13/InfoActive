<?php if(!$GLOBALS['domain']) exit;?>

<section class="bg-color fs-clamp pam pbl">

	<div class="mw960p ptm pbm">

		<?h1('titre','mw960p left')?>
		
		<?php txt('texte', 'mw640p right')?>
		

		<nav class="mw640p right ptm" aria-label="Dévouvrir l'association">

			<ul class="unstyled pan man">

				<li class="inbl"><a <?href('')?> class="cta__primary">L'association</a></li>
				<li class="inbl"><a <?href('')?> class="cta__secondary">Nos actions</a></li>
				<li class="inbl"><a <?href('')?> class="cta__secondary">Les membres</a></li>
			
			</ul>
	
		</nav>

	</div>

</section>

<section class="actus fs-clamp mw960p ptl pbl">

	<hgroup class="actus__header">

		<?h2('actus-titre','color mbn inbl')?>

		<aside>

			<a href="http://" class="cta__tertiary">Toutes nos actalités</a>

		</aside>

	</hgroup>

	<div class="actus__liste mw640p right pbl">

		<?php
        // Si on n'a pas les droits d'édition des articles on affiche uniquement ceux actifs
        if (!@$_SESSION['auth']['edit-article']) $sql_state = "AND state='active'";
        else $sql_state = "";
		

        // Construction de la requête
        $sql = "SELECT SQL_CALC_FOUND_ROWS ".$tc.".id, ".$tc.".* FROM ".$tc
        ." WHERE (".$tc.".type='article') AND ".$tc.".lang='".$lang."' ".$sql_state."
		ORDER BY ".$tc.".date_insert DESC
		LIMIT 0,3";
		
        $sel_fiche = $connect->query($sql);

        $num_total = $connect->query("SELECT FOUND_ROWS()")->fetch_row()[0]; // Nombre total de fiche
		
        while ($res_fiche = $sel_fiche->fetch_assoc()) {

			// Affichage du message pour dire si l'article est invisible ou pas
            if ($res_fiche['state'] != "active") $state = " <span class='deactivate pat'>".__("Article d&eacute;sactiv&eacute;")."</span>";
            else $state = "";
			
            $content_fiche = json_decode((string)$res_fiche['content'], true);
			
            ?>

			<a href="<?= make_url($res_fiche['url'], array("domaine" => true)); ?>" class="tdn actus__article">

				<article class="ptl pbl">

					<h3 class="mbn"><?= $res_fiche['title'] ?> <?=(@$state ? '<aside>'.$state.'</aside>':null)?></h3>

					<time class="monospace bold" datetime="<?=$res['date_insert']?>" aria-label="date de publication"><?=strftime('%d %B %Y', strtotime(@$res['date_insert']))?></time>

					<div class="tr">

						<a href="<?=make_url($res_fiche['url'], array("domaine" => true));?>" class="cta__tertiary"><?php _e("Lire l'article")?></a>

					</div>
					
				</article>

			</a>

			<?php
        }
		
		?>

	</div>

</section>