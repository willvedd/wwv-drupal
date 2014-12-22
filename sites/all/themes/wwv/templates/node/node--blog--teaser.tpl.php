<?php 
  $node_wrapper = entity_metadata_wrapper('node', $node);
  $subhead = $node_wrapper->field_subhead->value();
  $date = $node->created;
  $date_formatted = date('M j Y',$date);
?>
  <article class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <?php print render($title_prefix); ?>
    <?php print render($title_suffix); ?>
    <h2><?php echo $date_formatted;?></h2>
    <a href="<?php echo nid_url($nid);?>">
      <h1><?php echo $title;?></h1>
    </a>
    <?php if($subhead):?>
    <p class="subtext"><?php echo $subhead;?></p>
    <?php endif;?>
  </article>
