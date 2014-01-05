<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="../../style.css" rel="stylesheet" type="text/css" />
</head>

<body style="background-color:white;">

<!-- Fit Facebook iFrame to height -->
<div id="fb-root"></div>
<script src="http://connect.facebook.net/en_US/all.js"></script>
<script>
FB.init({
 appId  : 'your APP ID Goes Here',
 status : true, // check login status
 cookie : true, // enable cookies to allow the server to access the session
 xfbml  : true// parse XFBML
 });

 FB.Canvas.setAutoResize(7);

 </script>

<div style="width:508px;">
<h1 style="font-family:Verdana, Arial, Helvetica, sans-serif;"><img src="../../images/logo.png" width="233" height="140" /></h1>
<h1 style="font-family:Verdana, Arial, Helvetica, sans-serif;">Estimate Request</h1>
<div class="colcontainer">
          <div class="column">
            <h3 style="font-family:Verdana, Arial, Helvetica, sans-serif;">Get Started </h3>

            <form id="contact" name="contact" action="http://www.wanndesign.com/FormMail/phpformmail/formmail.php" method="post" class="contact">
		 <input type="hidden" name="subject" value="Lanterman Tractor - Facebook Estimate Request"/>
          <input type="hidden" name="redirect" value="http://www.tulsalandscaping.net/thankyou.html"/>
          <input type="hidden" name="recipient" value="bill@billlanterman.com"/>

			  <label>Name<br />
              <input type="text" name="Name" />
              </label>
			  <label>Company<br />

              <input type="text" name="company" />
              </label>
			  
			  <label>Address<br />
			  <input type="text" name="Address" />
			  </label>
			  
              <label>City<br />
              <input type="text" name="City" />
              </label>

              <label>State<br />
              <input type="text" name="State" />
              </label>
              <label>Zip<br />
              <input type="text" name="Zip" />
              </label>
              <label>Phone <br />

              <input type="text" name="Phone" />
              </label>
              <label>Email<br />
              <input type="text" name="email" />
              </label>
              <label>Project Location <br />
              <input type="text" name="projectlocation" />
              </label>

              <label>Project Description <br />
              <textarea name="projectdescription" cols="" rows=""></textarea></label>
			  <input name="submit" type="submit" value="Submit" />
            </form>
            
          </div>
		  <div class="column">
		    <p>Getting started is easy. Just fill out our form to request an estimate online, or contact us using the information below. We will review your request and respond accordingly. </p>

		    <h3 style="font-family:Verdana, Arial, Helvetica, sans-serif;">Contact Information </h3>
		    <p>13379 S. 353rd E. Ave,<br />
		            Coweta OK, 74429<br />
		            (918) 808-6404<br />
		            <br />
		    <a href="mailto:bill@billlanterman.com">bill@billlanterman.com</a></p>

	      </div>
          <div class="clearfix"></div>
  </div>
</div>
</body>
</html>
