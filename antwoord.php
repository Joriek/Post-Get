<!DOCTYPE html>
 <html>
 <head>
 	<title>Oefening post-get</title>
 </head>
 <body>

<table>

<?php 
if (isset($_POST["name"])) {
	?>	
<form method="post">
</table>
<h1><?php 
echo "Naam (Post): " . htmlspecialchars_decode($_POST["name"])."<br/>";
echo "Gebuikersnaam (Post): " . htmlspecialchars_decode($_POST["username"])."<br/>";
echo "Wachtwoord (Post): " . htmlspecialchars_decode($_POST["password"])."<br/>";
?>
</h1>
<form>
<?php } ?> 
<?php 
if (isset($_GET["nameget"])) {
	?>	
<form method="get">
</table>
<h1><?php 
echo "Naam (Get): " . htmlspecialchars_decode($_GET["nameget"])."<br/>";
echo "Gebuikersnaam (Get): " . htmlspecialchars_decode($_GET["usernameget"])."<br/>";
echo "Wachtwoord (Get): " . htmlspecialchars_decode($_GET["passwordget"])."<br/>";
?>
</h1>
<form>
<?php } ?> 
 </body>
 </html>