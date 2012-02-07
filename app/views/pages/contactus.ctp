<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Chicken House Online Order Form - Fresh Chicken@Best Price</title>
	<meta name="language" content="EN" />

	<meta name="description" content="Chicken House - ContactUs for Order and get Home Delivery" />
	<meta name="keywords" content="Fresh Chicken, Chicken Shop, Fresh Frozen Chicken, Skinless Chicken, Chicken Shops, Fresh Meat" />
	<meta name="author" content="chickenhouse.co.in">
	<meta name="robots" content="index, follow">
	<meta name="revisit-after" content="7 days">
	<meta name="msvalidate.01" content="F85A57D9955372C1B336AE5022CFA3A2" />

	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<link rel="shortcut icon" href="img/chickenlogo.ico" type="image/x-icon" />  
	
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-25285304-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>	
</head>
<body>
	<div class="main">
		<div class="mainbody">
				<table>
				<td>
					<span id="logo"><img src="img/logo.png"/></span>
				</td>
				<td class="headertable2">
				Working Hours: 24x7/365 days<br>
				Contact Us: 040-64627227
				<div class="likebuttons">
						<div class="addthis_toolbox addthis_default_style ">
							<div id="facebook"><a class="addthis_button_facebook_like" addthis:url="http://localhost/chicken_house/"></a></div>
							<div id="tweet"><a class="addthis_button_tweet" addthis:url="http://localhost/chicken_house/"></a></div>
							<div id="share"><a class="addthis_counter addthis_pill_style" addthis:url="http://localhost/chicken_house/"></a></div>
						</div>
						<script type="text/javascript" src="js/likebuttons.js"></script>
				</div>
				</td>
			</table>
			<div id="menubar">
				<ul id="menu">
					<li>
						<a href="Home">Home</a>
					</li>
					<li>
						<a href="AboutUs">About Us</a>
					</li>
					<li>
						<a href="ContactUs"><span class="menuselected">Order Here</span></a>
					</li>
					<li>
						<a href="Locations">Locations</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	
		<div class="mainbody2">	

		<link type="text/css" href="css/jquery-ui-1.8.17.custom.css" rel="stylesheet" />	
		<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.8.17.custom.min.js"></script>
			<div class="contactbox">
			<div class="heading">Order Form</div><br>
			<form name="orderform" method="post" onsubmit="return validateForm();" action="Submit">
				<table id="contacttablebox">
				<tr>
					<td>
						<div class=contactboxes1><label>Customer Name:<span class="star">*</span><br></div>
					</td>
					<td>
						<input class=contactboxes name=name type=text required placeholder="&nbsp;Customer name">
					</td>
				</tr>
				<tr>
					<td>
						<div class=contactboxes1><label>Phone Number:<span class="star">*</span><br></div>
					</td>
					<td>
						<input class=contactboxes name=phone type=int required placeholder="&nbsp;Phone number">
					</td>
				</tr>
				<tr>
					<td>
						<div class=contactboxes1><label>Item type:<span class="star">*</span></div>
					</td>
					<td>
						<select class=contactboxes name=item type=text>
						  <option id="selectoption" value="Skinless">Skinless</option>
						  <option id="selectoption" value="with Skin">With Skin</option>
						  <option id="selectoption" value="Boneless">Boneless</option>
						  <option id="selectoption" value="Drumsticks">Drumsticks</option>
						  <option id="selectoption" value="Lollipops">Lollipops</option>
						  <option  id="selectoption" value="Wings">Wings</option>
						  <option id="selectoption" value="Liver">Liver</option>
						  <option id="selectoption" value="Eggs">Eggs</option>
						</select> 
					</td>
				</tr>
				
				<tr>
					<td>
						<div class=contactboxes1><label>Quantity(kgs):<span class="star">*</span></div>
					</td>
					<td>
						<input class=contactboxes name=quantity type=int required placeholder="&nbsp;Quantity">
					</td>
				</tr>
				<tr>
					<td>
						<div class=contactboxes1><label>Date:<span class="star">*</span></div>
					</td>
					<td>
					<div>
						<input class=contactboxes id="datepicker" name=date type=date required placeholder="&nbsp;Date">
					</div>
						<script type="text/javascript">
						$(function(){

							// Accordion
							$("#accordion").accordion({ header: "h3" });
				
							// Tabs
							$('#tabs').tabs();

							// Datepicker
							$('#datepicker').datepicker({
								inline: true
							});
							
							
							
						});
					</script>
					</td>
				</tr>
				<tr>
					<td>
						<div class=contactboxes1><label>Time:<span class="star">*</span></div>
					</td>
					<td>
						<input class=contactboxes name=time type=time required placeholder="&nbsp;Time">
					</td>
				</tr>
				<tr>
					<td>
						<div class=contactboxes1><label>Delivery type:<span class="star">*</span></div>
					</td>
					<td>
						<select class=contactboxes name=deliverytype type=text>
						  <option id="selectoption" value="home delivery">Home delivery</option>
						  <option id="selectoption" value="pick">Pick</option>
						</select> 
					</td>
				</tr>
				<tr>
					<td>
						<div class=contactboxes1><label>Delivery address:<span class="star">*</span></div>
					</td>
					<td>
						<textarea style="max-width: 250px" cols="30" rows="3" class=contactboxes2 name=address type="text" required placeholder="&nbsp;Delivery address"></textarea>
					</td>
				</tr>
				<tr>
					<td>
						<div class=contactboxes1><label>Notes, if any:<span class="star">*</span></div>
					</td>
					<td>
						<textarea style="max-width: 250px" cols="30" rows="3" class=contactboxes2 name=notes type=text placeholder="&nbsp;Notes, if any"></textarea>
					</td>
				</tr>
				</table>
				<button  class="submitbutton" value="submit" type="submit">Submit</button>
			</form>
			</div>
		</div>
		
	<div class="footermain">
		<div class="mainbody3">
			<div id="footer">
				<div id="creditcards">
					<img src="img/creditcards1.png" height="50px;">
				</div>
				<footer>&#169; 2012 Chicken House. All rights reserved.</footer>
					<div id="footeradd">Powered by <a href="http://www.maisasolutions.com" target="_blank"><img src="img/poweredbylogo1.png"/></a><Maisa Solutions></div>
			</div>	
		</div>
	</div>
	
</body>
</html>
