Checkout Form
<!DOCTYPE html>
<?php
session_start()
?>
<html>
<head>
<title>Mac Apple</title>
<style type="text/css">
* 
{ 
margin:0; 
padding:0; 
}

.maindivone
{
position: relative;
background-color:#353333;
height:43px;
}
.minone
{
position: relative;
left:400px;
top:10px;
width:50px;
}
.mintwo
{
position: relative;
background-color:#353333;
font-family:Calibri;
left:600px;
top:-20px;
width:50px;
}
.minthree
{
position: relative;
background-color:#353333;
font-family:Calibri;
left:700px;
top:-38px;
width:50px;
}
.minfour
{
position: relative;
background-color:#353333;
font-family:Calibri;
left:800px;
top:-58px;
width:50px;
}
.minfive
{
position: relative;
left:900px;
top:-83px;
width:50px;
}
.checkout
{
position:relative;
width:845px;
margin-top:-15px;
margin-left:97px;
border-bottom:1px solid #d6d6d6;
padding-left:100px;
padding-top:24px;
}
.maindivtwo
{
margin-bottom:60px;
}
.heading
{
font-size: 40px;
    line-height: 1.1;
    letter-spacing: -2px;
    font-family: SF Pro Display,SF Pro Icons,AOS Icons,Helvetica Neue,Helvetica,Arial,sans-serif;
    font-weight: 600;
    display: block;
    margin-top: 65px;
    margin-bottom: 52px;
	margin-left:140px;
}
.form
{
position: relative;
width:411px;
margin-left: 144px;
    margin-top: -35px;
}
.n
{
font-size: 17px;
    line-height: 1.23543;
    font-weight: 400;
    letter-spacing: -.022em;
    font-family: SF Pro Text,SF Pro Icons,AOS Icons,Helvetica Neue,Helvetica,Arial,sans-serif;
    display: inline-block;
    box-sizing: border-box;
    vertical-align: top;
    width: 100%;
    height: 3.3em;
    margin-bottom: .82353rem;
    padding-top: 1.05882rem;
    padding-left: .94118rem;
    padding-right: .94118rem;
	padding-bottom: 1rem;
    color: #333;
    text-align: left;
    border: 1px solid #d6d6d6;
    border-radius: 4px;
    background: rgba(255,255,255,.8);
    background-clip: padding-box;
    -webkit-appearance: textfield;
}
.picture
{
position: relative;
width:308px;
margin-left: 611px;
    margin-top: -211px;
}
.needhelp
{
position:relative;
margin-top:155px;
border-top: 1px solid #d6d6d6;
border-bottom:1px solid #d6d6d6;
padding-left:100px;
padding-top:24px;
padding-bottom:18px;

}
.text
{
position:relative;
margin-top:15px;
padding-left:32px;
padding-top:11px;
background-color: #f2f2f2;
}
.footer
{
position:relative;
width:1020px;
margin-top:15px;
border-top:1px solid #d6d6d6;
padding-left:15px;
padding-top:11px;
padding-bottom:25px;</script

background-color: #f2f2f2;
}
</style>
<script>
	let name = /^[a-z A-Z]{3,40}$/;
	let zip= /^[0-9]{5}$/;
	let city= /^[a-z A-Z]{3,40}$/;
	let phone= /^03[0-9]{2}-[0-9]{7}$/;
	let em=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/;
	function validate()
	{
		let name11 = n.value;
		let email1 = n1.value;
		let zips = n4.value;
		let phones = n8.value;
		let citys=n5.value;
		let flag=true;
		a.innerHTML="";
		b.innerHTML="";
		c.innerHTML="";
		d.innerHTML="";
		e.innerHTML="";
		f.innerHTML="";
		if (!name.test(name11)) {
		n.innerHTML="Invalid format";
		n.style.color="red";
		n.style.fontSize="0.85em";
		flag=false;
		 }
		 
		 if(!em.test(email1)) {
		e.innerHTML="Invalid format";
		e.style.color="red";
		e.style.fontSize="0.85em";
		flag=false;
		 }
		 if (!zip.test(zips)) {
		b.innerHTML="Invalid format";
		b.style.color="red";
		b.style.fontSize="0.85em";
		flag=false;
		 }
		 if (!phone.test(phones)) {
		f.innerHTML="Invalid format";
		f.style.color="red";
		f.style.fontSize="0.85em";
		flag=false;
		 }
		 if (!city.test(citys)) {
		c.innerHTML="Invalid format";
		c.style.color="red";
		c.style.fontSize="0.85em";
		flag=false;
		 }
		 
		  return flag;
	}
</script>
</head>
<body>
<div  style="background-color:black;padding:15px;
	text-align:center;
	width:100%;
	height:30px;">
			<center><table  style="text-align:center;">
				<tr>
					<td width="20%" style="padding-right:20px"><a href="mainpage.html"><img src="images/appleicon.jpg" alt="no image" width="12%" /></a></td>
					<td ><a href="page1.html" style="color:white;font-size:17px">Mac</td>
					<td  ><a href="Project.html" style="color:white;font-size:17px">iPhone</td>
					<td ><a href="http://localhost/viewcart.php" style="color:white;font-size:17px">Bag</a></td>
					<td><a href="http://localhost/WebProject.html" style="color:white;font-size:17px">Order</a></td>
				</tr>
			</table></center>
		</div>

<div class="checkout">
<p style="font-size: 30px;
    line-height: 1.47059;
    font-weight: 400;
    letter-spacing: -.022em;
    font-family: SF Pro Text,SF Pro Icons,AOS Icons,Helvetica Neue,Helvetica,Arial,sans-serif;"/>Checkout</p>
</div>
<div class="maindivtwo">
<h1 class="heading">Where should we send your order?</h1>
</div>
<div class="form">
<form action="addinfo.php" method="get" onsubmit="return validate();">
<p style="font-size: 24px;
    line-height: 1.16667;
    font-weight: 600;
    letter-spacing: .009em;
    font-family: SF Pro Display,SF Pro Icons,AOS Icons,Helvetica Neue,Helvetica,Arial,sans-serif;
    margin-bottom: 9px;
	padding: 12px 0 21px;"/>Enter your name and address:</p>
<input class="n" type="text" size="25" maxlength="30" value="First Name" name="n" id="n" required><span id="a" style="color:red"></span><br>
<input class="n" type="text" size="25" maxlength="30" value="Last Name" name="n2" id="n2" required><br>
<input class="n" type="text" size="25" maxlength="30" value="Street Address" name="n3"  required><br>
<input class="n" type="text" size="25" maxlength="30" value="Zip code" name="n4" id="n4" required><span id="b" style="color:red"></span>
<input class="n" type="text" size="25" maxlength="30" value="City" name="n5" id="n5" required><span id="c" style="color:red"></span>
<input class="n" type="text" size="25" maxlength="30" value="Country" name="n6" id="n6" required><span id="d" style="color:red"></span>
<p style="font-size: 24px;
    line-height: 1.16667;
    font-weight: 600;
    letter-spacing: .009em;
    font-family: SF Pro Display,SF Pro Icons,AOS Icons,Helvetica Neue,Helvetica,Arial,sans-serif;
    margin-bottom: 9px;
	padding: 12px 0 21px;"/>What's your contact information?</p>
<input class="n" type="email" size="25" maxlength="40" value="Email" name="n1" id="n1" required><span id="e" style="color:red"></span>
<input class="n" type="text" size="25" maxlength="30" value="Phone Number" name="n8" id="n8" required><span id="f" style="color:red"></span><br><br>
<button style="font-size: 17px;
    line-height: 1.47059;
    font-weight: 400;
    letter-spacing: -.022em;
    font-family: SF Pro Text,SF Pro Icons,AOS Icons,Helvetica Neue,Helvetica,Arial,sans-serif;
    background-color: #0070c9;
    background: linear-gradient(#42a1ec,#0070c9);
    border-color: #07c;
    border-width: 1px;
    border-style: solid;
    border-radius: 4px;
    color: white;
    cursor: pointer;
    display: inline-block;
    min-width: 30px;
    padding-left: 15px;
    padding-right: 15px;
    padding-top: 4px;
    padding-bottom: 4px;
    text-align: center;
    white-space: nowrap;
	width: 100%;
    box-sizing: border-box;
    padding: .76471rem .88235rem .82353rem;
    padding-top: 0.76471rem;
    padding-right: 0.88235rem;
    padding-bottom: 0.82353rem;
    padding-left: 0.88235rem;" type="submit"  >Checkout</button><br>
</div>
<div class="picture">
<img src="images/ss1.png" />
</div>
<div class="needhelp">
<p style="font-size: 17px;
    line-height: 1.47059;
    font-weight: 400;
    letter-spacing: -.022em;
    font-family: SF Pro Text,SF Pro Icons,AOS Icons,Helvetica Neue,Helvetica,Arial,sans-serif;
    color: #333;"/>Need more help? Call 1-800-MY-APPLE.</p>
</div>
<div class="text">
<p style="font-size: 11px;
    line-height: 1.36364;
    font-weight: 400;
	color: #888;
    letter-spacing: -.008em;
    font-family: SF Pro Text,Myriad Set Pro,SF Pro Icons,Helvetica Neue,Helvetica,Arial,sans-serif;"/>
    The Apple Online Store uses industry-standard encryption to protect the confidentiality of the information you submit. 
	Learn more about our Security Policy.</p>
	<div class="footer">
	<p style="font-size: 11px;
    line-height: 1.36364;
    font-weight: 400;
	color: #888;
    letter-spacing: -.008em;
    font-family: SF Pro Text,Myriad Set Pro,SF Pro Icons,Helvetica Neue,Helvetica,Arial,sans-serif;"/>
	More ways to shop: Visit an Apple Store, call 1-800-MY-APPLE, or find a reseller.<br><br>
	Copyright © 2019 Apple Inc.  All rights reserved.          Privacy Policy  |  Terms of use | Sales and Refunds | Site Map
	</p>
	</div>
</div>
</body>
</html>
