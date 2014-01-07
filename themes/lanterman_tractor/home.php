<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php $this->inc('elements/header.php'); ?>
<!-- Slider -->
<script type="text/javascript">
$(document).ready(function(){ 
	$("#slider").easySlider({
		prevText: '',
		nextText: ''
	});
});
</script>

  <div id="bannercontainer">
      <div id="banner">
        <div id="bannercontent">
        <?php $this->inc('elements/banner_nav.php'); ?>
            <img src="<?php echo $this->getThemePath() ?>/images/banner-photos-1.png" name="bannerphoto1" width="222" height="219" id="bannerphoto1" alt=""/>
            <img src="<?php echo $this->getThemePath() ?>/images/banner-photos-2.png" width="222" height="219" id="bannerphoto2" alt=""/>

            <div id="description">
                <?php
                $a = new Area('Banner Copy');
                $a->display($c);
                ?>  
                <div id="getstarted">
                    <p><a href="/get-started/" title="Get Started">Get Started!</a></p>
                </div>    
            </div>
            <a href="/get-started/" id="freeestimate" title="Get Started"><img src="<?php echo $this->getThemePath() ?>/images/freeestimate.png" width="176" height="51" alt="Get Started"/></a>
        </div>
    </div>
</div>
<div id="bodycontainer">
  <div id="content">
    <!-- Quote Slider -->
    <div id="quotes">
      <div id="slider"> 
          <span class="slideright"></span>
          <span class="slideleft"></span>
          <ul>
            <li>
              <h3>Everyone was very <b>polite, honest, on time and fair</b> <br />
                they also made sure our <b>yard was clean</b> when they left. I would use them again. </h3>
              <p>Suzanne R. in Broken Arrow, Oklahoma</p>
            </li>
            <li>
              <h3>Did <b>what I asked when I wanted it done</b> in a timely fashion. <br />
                Couldn't ask for much more than that.</h3>
              <p>Robert D. in Claremore, Oklahoma</p>
            </li>
            <li>
              <h3><b>Excellent job done, and very timely.</b> <br />
                I would certainly use Lanterman Enterprises again.</h3>
              <p>Spencer O. in Tulsa, Oklahoma</p>
            </li>
            <li>
              <h3><b>I'm really glad we went with these guys.</b> They didn't do what we<br />
                thought
                we needed, but came up with a great alternative that<br />
                we would never have thought of.</h3>
              <p>Colleen D. in Tulsa, Oklahoma</p>
            </li>
            <li>
              <h3>I would recommend Bill to anyone who appreciates <b>fast, courteous service with excellent follow-up</b>. He's not happy until you are.</h3>
              <p>Paul D. in Claremore, Oklahoma</p>
            </li>
            <li>
              <h3>They <b>showed up when they said they would be here and were flexible when I needed them to be</b>. I really can't imagine that anybody would out-perform them.</h3>
              <p>Tom W. in Tulsa, Oklahoma</p>
            </li>
            <li>
              <h3>These guys are real pros. If you need something <b>done right</b>, <br />
                I highly recommend Lanterman.</h3>
              <p>Chris O. in Jenks, Oklahoma</p>
            </li>
          </ul>
      </div>
    </div>
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