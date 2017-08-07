<html>
<?php 
    session_start();	
	$_SESSION["shape"]=$_GET['shape'];
?>
<head>
<title>layers</title>
<!<link type="text/css" rel="stylesheet" href="style.css">
</head>

<body bgcolor="#ffe5ff">
<div style="color:#ffccff"; "width: 1330px; background: #ffffff; border: 2px solid #8482be; min-height: 560px;">
						<div style="width: 1330px; padding: 15px 10px 10px 10px;"></div>
				

<h2><center><font color= "#00001a">Design Your Own Cake</center></h2>

<br>
<h3><center><font color="#00001a">2) Choose the number of layers</font></center></h3>
<br><br><br><br>

<table  bgcolor="#ffe5e5" style="width: 100%;" cellspacing="0" cellpadding="0" border="0">
	<tbody><tr>
		<td width="25%" align="center" valign="top">
			<a href="\bakerytest\type.php?layer=10"><img src="\bakerytest\IMAGES\1tier.png" style="border: 2px solid #000000;" width="250" height="200" border="0" alt="Sponge Cake" title="Sponge Cake"><br>
			<span style="font-size: 16px; font-weight: bold;">1 tier $10</span></a><br>
		</td>
		<td width="25%" align="center" valign="top">
			<a href="\bakerytest\type.php?layer=20"><img src="\bakerytest\IMAGES\2tier.jpg" style="border: 2px solid #000000;" width="250" height="200" border="0" alt="Mud Cake" title="Mud Cake"><br>
			<span style="font-size: 16px; font-weight: bold;">2 tier $20</span></a><br>
		</td>
		<td width="25%" align="center" valign="top">
			<a href="\bakerytest\type.php?layer=30"><img src="\bakerytest\IMAGES\3tier.png" style="border: 2px solid #000000;" width="250" height="200" border="0" alt="Ice Cream Cake" title="Ice Cream Cake"><br>
			<span style="font-size: 16px; font-weight: bold;">3 tier $30</span></a><br>
		</td>
	</tr>
</tbody></table>


						</div>
</div>
</body>
</html>



						
	