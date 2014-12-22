<div class="<?php print $classes; ?>">
  <div class="inner_container">
  <?php print render($title_prefix); ?>
  <?php print render($title_suffix); ?>

  <?php if ($exposed): ?>
    <div class="view-filters">
      <?php print $exposed; ?>
    </div>
  <?php endif; ?>

  <?php if ($rows): ?>
  	<?php print $rows; ?>
  <?php elseif ($empty): ?>
    <div class="view-empty">
      <?php print $empty; ?>
    </div>
  <?php endif; ?>

  <?php if ($pager): ?>
    <?php print $pager; ?>
  <?php endif; ?>
  </div>
</div>