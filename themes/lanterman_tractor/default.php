<?php defined('C5_EXECUTE') or die("Access Denied.");?>
<?php $this->inc('elements/header.php'); ?>
  <div id="subbannercontainer"><div id="subbanner">
    <div id="subbannercontent">
<?php $this->inc('elements/banner_nav.php'); ?>
<!-- Banner Content -->
    </div>
  </div>
</div>
<!-- Content Container -->
<div id="subbodycontainer">
  <div id="content">
    <!-- Quote Slider -->
    <!-- Main Content -->
<div id="maincontenttop"></div>
    <div id="maincontent">
      <!-- Sidebar -->
      <div id="sidebar">
        <?php
            $a = new Area('Sidebar');
            $a->display($c);
         ?>
      </div>
      <!-- Articles -->
      <div id="articles">
        <?php
            $a = new Area('Main Content');
            $a->display($c);
         ?>      
      </div>
      <div class="clearfix"></div>
    </div>
    <div id="maincontentbottom"></div>
    <?php $this->inc('elements/legal.php'); ?>
  </div>
</div>
<?php $this->inc('elements/footer.php'); ?>