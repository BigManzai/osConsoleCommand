<!DOCTYPE html><html><head><meta charset="utf-8">

<!-- 
	OpenSim Console Commands V1.00 by Manfred Aabye
 -->
<title>Console</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body class="w3-theme-l4">

<div style="min-width:400px">

<!-- Kopfzeile -->
	<div class="w3-bar w3-large w3-theme-d4">
	  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-bars"></i></a>
	  <span class="w3-bar-item">Console Commands</span>
	</div>

<?php if (!isset($_POST['telefon'])): ?>

<form class="w3-container" action="" method="post">
    <input type="hidden" name="telefon" value="1" />
	
<!-- Server Einstellung --> 
	<div class="w3-row w3-section">
	<p><label class="w3-text"><i class="fa fa-cogs" style="font-size:48px;color:grey"></i></label></p>
	
    <p><label for="base" class="w3-label control-label"><i class="fa fa-pencil" style="font-size:24px"></i>  Server IP:</b></label></p>
        <div class="w3-third">
            <p><input class="w3-input w3-border" type="text" placeholder="Server IP" name="Server_IP"/></p>
        </div>
    </div>
 
	<div class="w3-row w3-section">
    <p><label for="base" class="w3-label control-label"><i class="fa fa-pencil" style="font-size:24px"></i>  Server Port:</b></label></p>
        <div class="w3-third">
            <p><input class="w3-input w3-border" type="text" placeholder="Server Port" name="Server_Port"/></p>
        </div>
    </div>

 	<div class="w3-row w3-section">
    <p><label for="base" class="w3-label control-label"><i class="fa fa-pencil" style="font-size:24px"></i>  Server Password:</b></label></p>
        <div class="w3-third">
            <p><input class="w3-input w3-border" type="password" placeholder="Server Password" name="Server_Password"/></p>
        </div>
    </div>
	

<!-- Command Eingabe --> 
 	<div class="w3-row w3-section">
	<p><label class="w3-text"><i class="glyphicon glyphicon-file" style="font-size:48px;color:grey"></i></label></p>
	
    <p><label for="base" class="w3-label control-label"><i class="fa fa-pencil" style="font-size:24"></i>  Server Command:</b></label></p>
        <div class="w3-third">
            <input class="w3-input w3-border w3-light-grey" type="text" placeholder="Server Command" name="Server_Command"/>
        </div>
    </div> 
	
<br>

<!-- Command Button -->
	
    <div class="w3-row w3-section">

            <button class="w3-btn w3-blue-grey w3-third" type="submit" name="submit"><i class="fa fa-mail-forward" style="font-size:24px"></i>  SendCommand</button>

    </div>
	
</form>

<?php endif ?>
	
</div>

<?php
if (isset($_POST['telefon']) AND $_POST['telefon'] == 1)
{
    // wir schaffen unsere Variablen und alle Leerzeichen beiläufig entfernen	

	$Server_IP   = trim($_POST['Server_IP']);
	$Server_Port   = trim($_POST['Server_Port']);
    $Server_Password  = $_POST['Server_Password'];
    $Server_Command   = trim($_POST['Server_Command']);

	// Einlesen der RemoteAdmin Datei.
	include('RemoteAdmin.php');
	 
	// Mit OpenSim verbinden
	$myRemoteAdmin = new RemoteAdmin($Server_IP, $Server_Port, $Server_Password);
	 
	// OpenSim Konsolenbefehl samt parameter senden
	$parameters = array('command' => $Server_Command);
	$myRemoteAdmin->SendCommand('admin_console_command', $parameters);
}
?>

</div>
</body>
</html>	
