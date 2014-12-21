<?php 
  $node_wrapper = entity_metadata_wrapper('node', $node);
  //$subhead = $node_wrapper->field_subhead->value();
?>

  <main class="content_wrapper subpage node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <?php print render($title_prefix); ?>
    <?php print render($title_suffix); ?>
    <div class="inner_container">
    <h1><?php echo $title;?></h1>
    <?php if($subhead):?>
    <p class="subtext"><?php echo $subhead;?></p>
    <?php endif;?>
    <div class="line"></div>
    </div>
  <div class="push"></div>
