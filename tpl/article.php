<?php
if(!$GLOBALS['domain']) exit;
if(!@$GLOBALS['content']['titre']) $GLOBALS['content']['titre'] = $GLOBALS['content']['title'];
?>

<article class="fs-clamp mw960p center ptl pbl">


	<hgroup class="mbl">

		<?php media('visuel', '250')?>

		<?php h1('titre','h2 mbn')?>

		<p class="monospace bold">
			Article publié le 
			<time class="" datetime="<?=$res['date_insert']?>"><?=strftime('%d %B %Y', strtotime(@$res['date_insert']))?></time>
		</p>
		
		<?php tag('actualites')?>
		
	</hgroup>
		
		
	<?php txt('texte', ['class' => '','dir'=>'actu'])?>


	<aside class="ptl">

		<a href="./actualite" class="cta__primary">Retour au blog</a>
		
	</aside>

</article>