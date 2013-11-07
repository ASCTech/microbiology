<div id="node-<?php print $nid ?>" class="node<?php print ($sticky && $page == 0) ? " sticky" : ""; ?><?php print ($page == 0) ? " teaser" : " "; ?><?php print ' ' . ($node->type); ?><?php print ($submitted && !$page) ? " cal" : ""?>">

<div class="content">
	<?php print $content ?>
</div>
<?php if ($links && $page == 0){ ?>
  <div class="links">&raquo; <?php print $links ?></div>
<?php } ?>

</div>
