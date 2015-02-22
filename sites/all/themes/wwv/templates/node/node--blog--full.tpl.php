<?php 
  $node_wrapper = entity_metadata_wrapper('node', $node);
  $body = $node_wrapper->body->value();
  $subhead = $node_wrapper->field_subhead->value();
  $date = $node->created;
  $date_formatted = date('M j Y',$date);
?>

<article class="blog node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <?php print render($title_prefix); ?>
  <?php print render($title_suffix); ?>
  <span class="date"><time><?php echo $date_formatted;?></time></span>
  <h1><?php echo $title;?></h1>
  <?php if($subhead):?>
  <p class="subtext"><?php echo $subhead;?></p>
  <?php endif;?>
  <div class="line"></div>
  <?php print render($content['body']); ?>
</article>
