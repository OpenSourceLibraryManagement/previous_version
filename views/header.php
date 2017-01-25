<!-- Header Starts -->
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Material Design</span>
          <!-- Displayed only in Mobile -->
          <div class="mdl-layout-spacer mdl-cell--hide-tablet mdl-cell--hide-desktop"></div>
          <!-- Search -->
          <!-- Displayed on Computer and Tablet -->
          <div class="mdh-expandable-search mdl-cell--hide-phone">
            <i class="material-icons">search</i>
            <form action="#">
              <input type="text" placeholder="Search" size="1">
            </form>
          </div>
          <!-- Displayed on mobile -->
          <div class="mdl-layout-spacer mdl-cell--hide-tablet mdl-cell--hide-desktop"></div>
          <!-- Search button -->
          <button class="mdh-toggle-search mdl-button mdl-js-button mdl-button--icon mdl-cell--hide-tablet mdl-cell--hide-desktop">
            <i class="material-icons">search</i>
          </button>  
          <!-- Notification icon -->
          <div class="notification" style="display:none;">
            <div class="material-icons mdl-badge mdl-badge--overlap" data-badge="1">message</div>
          </div>
      <?php if(isset($_GET['login']) && $_GET['login'] == true) { ?>    <!-- Log Out Button -->
          <div class="mdl-cell--hide-phone">
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent nav-button" id="logout">Log Out</button>
          </div>
          <div class="mdl-cell--hide-tablet mdl-cell--hide-desktop nav-button">
            <label class="mdl-button mdl-js-button mdl-button--icon material-icons" title="Logout">
              <i class="material-icons">power_settings_new</i>
            </label>            
          </div>
	  <?php } ?>
  </div>
      </header>
