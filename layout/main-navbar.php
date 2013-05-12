<?php include 'initialize-links.php';?>

<div class="navbar navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="brand" href="<?php echo $home_link;?>">Alok's Tennis Club</a>
      <div class="nav-collapse collapse">
        <ul class="nav pull-right">
          <li><a href="<?php echo $home_link;?>"><i class="icon-home icon-white"></i> Home</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">About <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo $info_link;?>">Club Info</a></li>
              <li><a href="<?php echo $faq_link;?>">FAQ</a></li>
            </ul>
          </li>
          <li><a href="<?php echo $news_link;?>">News</a></li>
          <li><a href="<?php echo $events_link;?>">Events</a></li>
          <li><a href="<?php echo $contacts_link;?>">Contact</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Extras <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo $stats_link;?>">Club Stats</a></li>
              <li><a href="<?php echo $pictures_link;?>">Pictures</a></li>
              <li><a href="<?php echo $credits_link;?>">Credits</a></li>
              <li class="divider"></li>
              <li class="nav-header">Admin</li>
              <li><a href="<?php echo $admin_link;?>"><i class="icon-user icon-white"></i> Admin Login</a></li>
            </ul>
          </li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
</div>