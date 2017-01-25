<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('../views/meta.php'); ?>
    <!-- Title and Additional Metadata -->
    <title>Material Design | Authentication</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
  </head>
    
  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
      <?php include('../views/header.php'); ?>
      <main class="mdl-layout__content">
        <div class="page-content">
          <?php include('../views/authContent.php'); ?>
        </div>
      </main>
      <?php include('../views/footer.php'); ?>
    </div>
    <?php include('../views/script.php'); ?>
  </body>
</html>