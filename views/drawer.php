<?php if(isset($_GET['login']) && $_GET['login'] == true && isset($_GET['type'])){ ?>
<!-- Drawer Starts -->
      <div class="mdl-layout__drawer">
        <div class="mdl-layout-title">
          <!-- Contact Chip -->
          <span class="mdl-chip mdl-chip--contact">
              <img class="mdl-chip__contact" src="/images/default/<?=$_GET['type']?>.png"/>
              <span class="mdl-chip__text">John Smith</span>
          </span>
        </div>
    <?php if($_GET['type'] == 'user'){ ?>    <!-- Navigation Items for User -->
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="/dashboard/">Home</a>
          <a class="mdl-navigation__link" href="/dashboard/books">Books</a>
          <a class="mdl-navigation__link" href="/dashboard/membership">Membership</a>
          <a class="mdl-navigation__link" href="/dashboard/settings">Settings</a>
        </nav>
    <?php } else if($_GET['type'] == 'library'){ ?>    <!-- Navigation Items for Library -->
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="/dashboard/">Home</a>
          <a class="mdl-navigation__link" href="/dashboard/books">Books</a>
          <a class="mdl-navigation__link" href="/dashboard/members">Members</a>
          <a class="mdl-navigation__link" href="/dashboard/settings">Settings</a>
        </nav>
    <?php } ?>
  </div>
<?php } ?>
