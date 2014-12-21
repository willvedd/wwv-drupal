<article class="homepage">
  <?php include './'. path_to_theme() .'/templates/includes/header.tpl.php';?>
  <main class="content_wrapper">
    <?php print $messages; ?>
    <section class="message flex-contain-wrap">
      <div class="flex-item-1">
        <p>Philly native excited to make cool web things. Specializing in Drupal, but lover of all things technical.</p>
      </div>
    </section>
    <section class="content">
      <?php echo views_embed_view('homepage');?>
    </section>
    <div class="push"></div>
  </main><!--end wrapper-->
  <?php include './'. path_to_theme() .'/templates/includes/footer_front.tpl.php';?>
</article>



