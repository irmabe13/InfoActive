<?php
if(!$GLOBALS['domain']) exit;
if(!@$GLOBALS['content']['titre']) $GLOBALS['content']['titre'] = $GLOBALS['content']['title'];
?>

<article class="mw960p mod center mtm mbl">

	<div>

		<hgroup>

			<?php media('visuel', '250')?>

			<?php h1('titre')?>

			<p>
				Article publié le 
				<time class="" datetime="<?=$res['date_insert']?>"><?=strftime('%d %B %Y', strtotime(@$res['date_insert']))?></time>
			</p>
			
			<?php tag('actualites')?>
			
		</hgroup>
		
		
		<?php txt('texte', ['class' => '','dir'=>'actu'])?>

	</div>

	<aside>

		<a href="./actualite" class="">Retour au blog</a>
		
	</aside>

</article>