<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('../views/meta.php'); ?>
    <!-- Title and Additional Metadata -->
    <title>Material Design | User Dashboard</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
  </head>
    
  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
      <?php include('../views/header.php'); ?>
      <?php include('../views/drawer.php'); ?>
      <main class="mdl-layout__content">
        <!-- Loading Sign [is-active] -->
        <div class="mdl-spinner mdl-js-spinner" id="loading"></div>
        <div class="page-content">	
        	<!-- PAGE CONTENTS HERE -->
        </div>
      </main>
      <?php include('../views/footer.php'); ?>
    </div>
    <?php include('../views/script.php'); ?>
  </body>
</html>