<?php

header( 'content-type: text/html; charset=utf-8' );

foreach ($listeAllTitle as $title_article)
{
?>
<h3 ><a rel="tooltip" title="texte pour récupérer l'info du serveur" href="articles-<?=$title_article['id'] ?>.html"><?=  utf8_decode($title_article->titre()) ?></a></h3><br>
			
<?php
}
