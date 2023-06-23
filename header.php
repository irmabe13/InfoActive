<?php if(!$GLOBALS['domain']) exit;?>


<header role="banner" class="plm prm relative">

	<aside class="header__accessibilite relative">

		<nav role="navigation" aria-label="<?php _e("Quick access")?>" class="inline mlt">
			
			<ul class="unstyled pan man">
				<li><a href="#main" class="acces-rapide"><?php _e("Skip to content")?></a></li>
				<li><a href="contact" class="acces-rapide"><?php _e("Contact")?></a></li>
			</ul>
		
		</nav>

		<div>

			<input type="checkbox" name="high-contrast" id="high-contrast"<?=(@$_COOKIE['high-contrast']?'checked="checked"':'')?>> 
			<label for="high-contrast" class="monospace"><?php _e("Enhanced contrast")?></label>
		
		</div>

	</aside>

	<section class="header__menu relative">

		<div class="big monospace bold">
			<a href="./">Info'Activ</a>
		</div>
		
		<nav role="navigation" class="mtm mbm tc" aria-label="<?php _e("Browsing menu")?>">
		
			<ul id="main-navigation" class="unstyled pan man up bold">
				<?php
				// Extraction du menu
				foreach($GLOBALS['nav'] as $cle => $val)
				{
					// Menu sélectionné si page en cours ou article (actu)
					if(get_url() == $val['href'] or (@$res['type'] == "article" and $val['href'] == "actualites"))
						$selected = " selected";
					else
						$selected = "";
		
					echo"<li><a href=\"".make_url($val['href'], array("domaine" => true))."\"".($val['id']?" id='".$val['id']."'":"")."".($val['target']?" target='".$val['target']."'":"")." class='".$selected."'".($selected?' title="'.$val['text'].' - '.__("current page").'"':'').">".$val['text']."</a></li>";
				}
				?>
			</ul>
		
		</nav>

	</section>

</header>
