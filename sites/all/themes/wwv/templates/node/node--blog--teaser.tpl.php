<?php 
  $node_wrapper = entity_metadata_wrapper('node', $node);
  //$subhead = $node_wrapper->field_subhead->value();
  $date = $node->created;
  $date_formatted = date('M j, Y',$date);
?>
<article class="blog blog-teaser node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <?php print render($title_prefix);print render($title_suffix);?>
  <span class="date"><time><?php echo $date_formatted;?></time></span>
  <a href="<?php echo nid_url($nid);?>">
    <h1><?php echo $title;?></h1>
  </a>
  <?php echo render($content['body']);?>
</article>
