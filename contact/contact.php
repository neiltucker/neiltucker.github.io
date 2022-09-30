<?php
	$tsdate = date("m/d/y g:i a");
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$email = $_POST["email"];
	$company = $_POST["company"];
	$phone = $_POST["phone"];
	$message = $_POST["message"];
$attr1 = "width= 648 border=2 bordercolor=#00746B cellpadding=0 cellspacing=0";
$attr2 = "width=644 border=0 cellpadding=10 cellspacing=10";
$wid1 = "width=225";
$wid2 = "width=348";
$image = "src=http://www.softwaretutorialservices.com/images/logo.gif height=80 width=214";
$font1 = "color=#00746B size=+2 face=Calibri";
$font2 = "color=#00746B face=Arial size=-1";
$colspan = "colspan=2";
$hr = "color=#00746B";
$msg = "<table $attr1><tr><td><table $attr2><tr><td $wid1><img $image></td>";
$msg .= "<td><b><u><font $font1>Contact at Website</font></u></b></td></tr>";
$msg .= "<tr><td $colspan><hr $hr/></td></tr>";
$msg .= "<tr><td $wid1><b><font $font2>Name: </font></b></td><td $wid2><font $font2>$fname $lname</font></td></tr>";
$msg .= "<tr><td $wid1><b><font $font2>Company: </font></b></td><td $wid2><font $font2>$company</font></td></tr>";
$msg .= "<tr><td $wid1><b><font $font2>Email: </font></b></td><td $wid2><font $font2>$email</font></td></tr>";
$msg .= "<tr><td $wid1><b><font $font2>Phone: </font></b></td><td $wid2><font $font2>$phone</font></td></tr>";
$msg .= "<tr><td $wid1><b><font $font2>How can we help you?</font></b></td><td $wid2><font $font2>$message</font></td></tr>";
$msg .= "<tr><td $wid1><b><font $font2>Submission Time: </font></b></td><td $wid2><font $font2>$tsdate</font></td></tr>";
$msg .= "</td></table></tr></table>";

$recipient = "support@softwaretutorialservices.com";
$subject = "Website Submission"; 
$mailheaders = "From:Software Tutorial Services <support@softwaretutorialservices.com>\r\nContent-type: text/html; charset=us-ascii";  
if(mail($recipient,$subject,$msg,$mailheaders))
		{
		$msg = "Thank you for your interest in our services. We will contact you shortly.";
		}
else
		{
		//echo("mail not send");
		}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Software Tutorial Services | Contact Us </title>
<link href="css/neil.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
	background-image: url(../images/bg_pattern.gif);
	background-repeat: repeat;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
<link href="../css/neil.css" rel="stylesheet" type="text/css" />
<body>
<table width="850" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="850" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="left" valign="top"><table width="850" border="0" cellspacing="0" cellpadding="0">
          <tr>
           <td width="214" align="left" valign="top" bgcolor="#FFFFFF"><a href="../index.html"><img src="../images/logo.gif" alt="logo" width="214" height="80" border="0" /></a></td>
            <td width="230" align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
            <td width="406" align="left" valign="middle" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr class="menu">
               <td width="101" align="center" valign="top"><a href="../index.html">HOME</a></td>
                <td align="center" valign="top"><a href="../services/index.html">SERVICES</a></td>
                <td width="101" align="center" valign="top"><a href="../samples/index.html">SAMPLES</a></td>
                <td width="102" align="center" valign="top"><a href="../contact/index.html">CONTACT US</a></td>

              </tr>
            </table>
            
            </tr>
        </table></td>
      </tr>
      
      <tr>
        <td height="10" align="left" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="left" valign="top"><img src="../images/contact_a.jpg" width="268" height="153" /></td>
            <td align="left" valign="top"><img src="../images/contact_b.jpg" width="300" height="153" /></td>
            <td align="left" valign="top"><img src="../images/contact_c.jpg" width="282" height="153" /></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="15" align="left" valign="top" bgcolor="#FFFFFF"></td>
      </tr>
      <tr>
        <td align="left" valign="top" bgcolor="#FFFFFF"><table width="850" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="188" height="" align="left" valign="top"><table width="188" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="20" align="left" valign="top" bgcolor="#ACC8D4"></td>
              </tr>
              <tr>
                <td align="left" valign="top" bgcolor="#FFFFFF"><table width="188" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td height="400" align="left" valign="top" bgcolor="#FFFFFF" class="navigation_left">
                    <ul>
                    	<li><a href="../index.html">Home</a></li>
                        <li><a href="../services/index.html">Services</a></li>
                    	<li><a href="../samples/index.html">Samples</a></li>
                    	<li><a href="../contact/index.html">Contact Us</a></li>
                    </ul></td>
                    
                    <td width="20" align="left" valign="top" bgcolor="#ACC8D4"></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td height="20" align="left" valign="top" bgcolor="#ACC8D4"></td>
              </tr>
            </table></td>
            <td width="4" align="left" valign="top" bgcolor="#FFFFFF"><img src="../images/spacer.gif" width="4" height="1" /></td>
            <td width="634" align="left" valign="top" bgcolor="#FFFFFF"><div class="content_area">
              <table width="634" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="22" align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
                  <td align="left" valign="top"><table width="582" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="582" align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="left" valign="top" bgcolor="#FFFFFF"><div class="heading1" id="slogan">Contact Us</div></td>
                    </tr>
                    <tr>
                      <td height="7" align="left" valign="top" class="bodytext"></td>
                    </tr>
                    
                    <tr>
                      <td height="40" align="left" valign="top" bgcolor="#FFFFFF" class="bodytext">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="40" align="left" valign="top" bgcolor="#FFFFFF" class="bodytext">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="40" align="center" valign="top" bgcolor="#FFFFFF" class="bodytext"><b><?php echo $msg; ?></b></td>
                    </tr>
                    <tr>
                      <td height="40" align="left" valign="top" bgcolor="#FFFFFF" class="bodytext">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="40" align="left" valign="top" bgcolor="#FFFFFF" class="bodytext">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="40" align="left" valign="top" bgcolor="#FFFFFF" class="bodytext">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="40" align="left" valign="top" bgcolor="#FFFFFF" class="bodytext">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="40" align="left" valign="top" bgcolor="#FFFFFF" class="bodytext">&nbsp;</td>
                    </tr>
                    
                  </table></td>
                  <td width="22" align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
                </tr>
              </table>
            </div></td>
            <td width="4" align="left" valign="top" bgcolor="#FFFFFF"><img src="../images/spacer.gif" width="4" height="1" /></td>
            <td width="20" align="left" valign="top" bgcolor="#ACC8D4">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" bgcolor="#CCCCCC"><table width="850" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="left" bgcolor="#333333" class="copyrights">© 2011 Neil Tucker LLC.  All rights reserved.</td>
            <td align="right" bgcolor="#333333"><span class="designedby">Designed &amp; Developed by </span><span class="glocaledge"><a href="http://www.glocaledge.com/" title="Glocaledge | SEM, Internet Marketing, Analytical Marketing, Offshore Marketing" target="_blank">GlocalEdge.com</a></span></td>
          </tr>
        </table></td>
      </tr>
      
    </table></td>
  </tr>
</table>
</body>
</html>
