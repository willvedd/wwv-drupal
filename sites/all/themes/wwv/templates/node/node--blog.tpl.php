<?php 
  $node_wrapper = entity_metadata_wrapper('node', $node);
  $body = $node_wrapper->body->value();
  $subhead = $node_wrapper->field_subhead->value();
?>
<article class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <?php print render($title_prefix); ?>
  <?php print render($title_suffix); ?>
  <h1><?php echo $title;?></h1>
  <?php if($subead):?>
  <p class="subtext"><?php echo $subhead;?></p>
  <?php endif;?>
  <div class="line"></div>
  <?php print render($content['body']); ?>
</article>
