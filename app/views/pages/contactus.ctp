<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>
		Chicken House
	</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>
<body>
	<div class="main">
		<div class="mainbody">
				<table>
				<td>
					<span id="logo"><img src="img/logohouse.png"/></span>
				</td>
				<td class="headertable2">
				Working Hours: 24x7/365 days<br>
				Contact Us: 040-64627227
				<div class="likebuttons">
					<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
					<a class="addthis_button_preferred_1"></a>
					<a class="addthis_counter addthis_bubble_style"></a>
					<a class="addthis_button_preferred_2"></a>
					<a class="addthis_counter addthis_bubble_style"></a>
					<a class="addthis_button_compact"></a>
					<a class="addthis_counter addthis_bubble_style"></a>
					</div>
					<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4f2904794bb9048f"></script>
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
					<div class="demo">
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
						<select class=contactboxes name=delivery type=text>
						  <option value="pick">Pick</option>
						  <option value="home delivery">Home delivery</option>
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
						<textarea style="max-width: 250px" cols="30" rows="3" class=contactboxes2 name=feedback type=text placeholder="&nbsp;Notes, if any"></textarea>
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
				<footer>&#169; 2012 Chicken House. All rights reserved.<footer>
			</div>	
		</div>
	</div>
	
</body>
</html>
