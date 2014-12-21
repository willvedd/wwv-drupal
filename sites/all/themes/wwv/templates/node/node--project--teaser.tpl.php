

<article id="jawn" class="project node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <?php print render($title_prefix); ?>
  <?php print render($title_suffix); ?>
  <div class="feature flex-contain-wrap">
    <div class="image flex-item-3">
      <img alt="Septajawn project example image" src="img/septajawn.jpg"/> 
    </div>
    <div class="copy flex-item-2">
      <a href="http://www.septajawn.com"><h1><?php echo $title;?></h1></a>
      <p>Septajawn was my capstone project at Temple—an intuitive scheduler for Septa’s subway service that I designed and developed from conception to launch. Beyond its modest functionality, Septajawn is completely accurate and works flawlessly on all platforms, even on older devices (thanks to the Backbone.js framework). I’d like to think it’s nicer-looking and more reliable than a subway car. And if you need some light reading for your daily commute, look at the <a href='files/Will_Vedder_Capstone_Report.pdf'>full Septajawn report</a>.</p>
    </div>
  </div>
</article>
