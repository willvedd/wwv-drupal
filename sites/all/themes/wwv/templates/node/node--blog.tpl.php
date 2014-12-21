<?php include './'. path_to_theme() .'/templates/includes/header.tpl.php';?>
<main class="content_wrapper subpage">
  <article class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <?php print render($title_prefix); ?>
    <?php print render($title_suffix); ?>
    <?php print $messages; ?>
    <div class="inner_container">
    <h1><?php echo $title;?></h1>
    <p class="subtext">Trivial vs non-trivial losses</p>
      <div class="line"></div>
        <?php print render($page['content']); ?>
        
      </div>
    <div class="push"></div>
  </article>
</main>

<?php include './'. path_to_theme() .'/templates/includes/footer.tpl.php';?>
