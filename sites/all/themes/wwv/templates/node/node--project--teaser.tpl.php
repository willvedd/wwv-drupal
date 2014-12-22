<?php 
  $node_wrapper = entity_metadata_wrapper('node', $node);
  $image = $node_wrapper->field_image->value();
  $image_url = image_style_url('project',$image['uri']);
  $link = $node_wrapper->field_project_link->value();
?>

<article id="jawn" class="project node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <div class="feature flex-contain-wrap">
  <?php print render($title_prefix); ?>
  <?php print render($title_suffix); ?>
    <div class="image flex-item-3">
      <img alt="Septajawn project example image" src="<?php echo $image_url;?>"/> 
    </div>
    <div class="copy flex-item-2">
      <?php if($link):?>
      <a href="<?php echo $link['url'];?>"><h1><?php echo $title;?></h1></a>
      <?php else:?>
      <h1><?php echo $title;?></h1>
      <?php endif;?>
      <p><?php echo render($content['body']);?></p>
    </div>
  </div>
</article>
