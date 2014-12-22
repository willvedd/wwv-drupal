<?php 
  $node_wrapper = entity_metadata_wrapper('node', $node);
  $body = $node_wrapper->body->value();
  $subhead = $node_wrapper->field_subhead->value();
  $date = $node->created;
  $date_formatted = date('M j Y',$date);
?>

<main class="content_wrapper subpage">
  <article class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <?php print render($title_prefix); ?>
    <?php print render($title_suffix); ?>
    <div class="inner_container">
      <h1><?php echo $title;?></h1>
      <?php if($subhead):?>
      <p class="subtext"><?php echo $subhead;?></p>
      <?php endif;?>
      <div class="line"></div>
      <?php print render($content['body']); ?>
      <p>Published: <?php echo $date_formatted;?></p>
    </div>
    <div class="push"></div>
  </article>
</main>
