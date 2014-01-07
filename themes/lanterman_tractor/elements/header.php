<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="<?php echo $this->getStyleSheet('reset.css')?>" rel="stylesheet" type="text/css" media="screen"/>
<link href="<?php echo $this->getStyleSheet('style.css')?>" rel="stylesheet" type="text/css" media="screen"/>
<!--[if lt IE 7.]><link href="<?php echo $this->getStyleSheet('ie.css')?>" rel="stylesheet" type="text/css" media="screen"/><![endif]-->

<?php  Loader::element('header_required'); ?>

<script src="<?php echo $this->getThemePath()?>/scripts/cufon-yui.js" type="text/javascript"></script>
<script src="<?php echo $this->getThemePath()?>/scripts/Raleway_250.font.js" type="text/javascript"></script>
<script src="<?php echo $this->getThemePath()?>/scripts/League_Gothic_400.font.js" type="text/javascript"></script>
<script type="text/javascript">
             Cufon.replace('h1', { fontFamily: 'Raleway' });
      Cufon.replace('h2', { fontFamily: 'League Gothic' });
    </script>
   
<script src="<?php echo $this->getThemePath()?>/scripts/easySlider.packed.js" type="text/javascript"></script>

<!--[if lt IE 7.]>
<script defer type="text/javascript" src="scripts/pngfix.js"></script>
<![endif]-->

<script type="text/JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</head>

<body onload="MM_preloadImages('<?php echo $this->getThemePath()?>/images/servicelink_1_over.png','<?php echo $this->getThemePath()?>/images/servicelink_2_over.png','<?php echo $this->getThemePath()?>/images/servicelink_3_over.png','<?php echo $this->getThemePath()?>/images/servicelink_4_over.png','<?php echo $this->getThemePath()?>/images/servicelink_5_over.png','<?php echo $this->getThemePath()?>/images/button_rev.png','<?php echo $this->getThemePath()?>/images/social_facebook_over.png','<?php echo $this->getThemePath()?>/images/social_twitter_over.png')">

<!-- Header -->

<div id="headercontainer">
  <div id="header">
  
<!-- Phone -->

    <div id="phone">
      <p class="sans nomargins"><strong>Tulsa, Oklahoma </strong></p>
      <span class="sans nomargins">(918) 808-6404</span>    </div>
  <div class="social">
  <a href="http://www.facebook.com/pages/Lanterman-Tractor/132773260131572" title="Like us on Facebook" target="_blank" class="social_facebook"></a>
  <a href="http://www.twitter.com/tulsatractor" title="Follow us on Twitter" target="_blank" class="social_twitter"></a>
  </div>
  </div>
</div>