
  <?php include './'. path_to_theme() .'/templates/includes/header.tpl.php';?>
  <main class="content_wrapper subpage">
    <div class="inner_container">
      <?php print $messages; ?>
      <?php print render($page['content']); ?>
    </div>
  <div class="push"></div>
  </main>

  <?php include './'. path_to_theme() .'/templates/includes/footer.tpl.php';?>
