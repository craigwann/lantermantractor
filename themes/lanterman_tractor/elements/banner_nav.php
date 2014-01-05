<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>
<!-- Navigation -->
<div id="nav" class="sans">
<?php $a = new GlobalArea('Main Navigation'); 
$a->display($c); ?>
</div>
<!-- Logo -->
<div id="logo"><a href="<?php echo $this->getThemePath()?>" id="logolink"> Tulsa Landscaping by Lanterman Tractor
</a> </div>
<!-- Services Bar  -->
<div id="headerbar">
<ul>
    <li id="service1"><a href="tulsa-landscaping.php" title="Tulsa Landscaping">Landscaping</a></li>
    <li id="service2"><a href="tulsa-tractor-work.php" title="Tulsa Tractor Work">Tractor Work</a></li>
    <li id="service3"><a href="tulsa-storm-shelters.php" title="Tulsa Storm Shelters">Storm Shelters</a></li>
    <li id="service4"><a href="tulsa-lawn.php" title="Tulsa Home and Lawn">Home and Lawn</a></li>
    <li id="service5"><a href="tulsa-snow-removal.php" title="Tulsa Snow Removal">Snow Removal</a></li>
</ul>
</div>