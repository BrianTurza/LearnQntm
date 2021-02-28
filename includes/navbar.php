<header style="background-color: #3827a9" class="header_area" >
    <div  class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="index.html"><h2 style="color:white"><?php echo $lang['PAGE_TITLE'] ?></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item active"><a class="nav-link" href="<?php echo str_repeat("../", count(explode("/", $_SERVER['REQUEST_URI'])) - 3)?>"><?php echo $lang['NAV_HOME'] ?></a></li> 
              <li class="nav-item"><a class="nav-link" href="<?php echo str_repeat("../", count(explode("/", $_SERVER['REQUEST_URI'])) - 3)?>about/"><?php echo $lang['NAV_ABOUT'] ?></a></li> 
              <li class="nav-item"><a class="nav-link" href="<?php echo str_repeat("../", count(explode("/", $_SERVER['REQUEST_URI'])) - 3)?>learn/"><?php echo $lang['NAV_LEARN'] ?></a>
            </ul>

            <ul class="navbar-right">
              <li class="nav-item">
              <?php if (isset($_SESSION['username'])) : ?>
                  <a href="<?php echo str_repeat("../", count(explode("/", $_SERVER['REQUEST_URI'])) - 3)?>problems/"><button class="button button-header bg"><i class="fas fa-user"></i> <?php echo $lang['NAV_PROFILE'] ?></button></a>
              <?php elseif (!isset($_SESSION['username'])) : ?>
                  <a href="login/"><button class="button button-header bg"><i class="fas fa-user"></i> <?php echo $lang['NAV_SIGN_IN'] ?></button></a>
              <?php endif ?>
              </li>
            </ul>
            <ul class="nav" style="margin-left: 50px">
             <li class="nav-item dropdown show">
                 <a class="nav-link dropdown-toggle" href="" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><img data-src="<?php echo str_repeat("../", count(explode("/", $_SERVER['REQUEST_URI'])) - 3)?>images/language.png" class="lazy loaded" style="width: 24px; height: 24px;" src="<?php echo str_repeat("../", count(explode("/", $_SERVER['REQUEST_URI'])) - 3)?>images/language.png" data-was-processed="true"></a>
                   <div class="dropdown-menu show" aria-labelledby="dropdown09">
                    <?php if (isset($_GET['lang'])) : ?>
                      <a class="dropdown-item<?php echo ($_GET['lang'] == 'en' ? ' active' : '') ?>" href="?lang=en"><span class="flag-icon flag-icon-us"> </span>  English</a>
                      <a class="dropdown-item<?php echo ($_GET['lang'] == 'sk' ? ' active' : '') ?>" href="?lang=sk"><span class="flag-icon flag-icon-sk"> </span>  Slovensky</a>
                      <a class="dropdown-item<?php echo ($_GET['lang'] == 'cz' ? ' active' : '') ?>" href="?lang=cz"><span class="flag-icon flag-icon-cz"> </span>  Česky</a>
                    <?php else : ?>
                      <a class="dropdown-item active" href="?lang=en"><span class="flag-icon flag-icon-us"></span>  English</a>
                      <a class="dropdown-item" href="?lang=sk"><span class="flag-icon flag-icon-sk"></span>  Slovensky</a>
                      <a class="dropdown-item" href="?lang=cz"><span class="flag-icon flag-icon-cz"></span>  Česky</a>
                    <?php endif ?>
                    </div>
              </li>
            </ul>  

          </div> 
        </div>
      </nav>
    </div>
  </header>