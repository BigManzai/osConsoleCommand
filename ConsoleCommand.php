<!DOCTYPE html><html><head><meta charset="utf-8">

<!-- 
	OpenSim Console Commands V1.01 by Manfred Aabye
 -->
<title>OS Console</title>
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
	  <span class="w3-bar-item">OpenSimulator Console Commands</span>
	</div>

<?php if (!isset($_POST['telefon'])): ?>

<form class="w3-container" action="" method="post">
    <input type="hidden" name="telefon" value="1" />
	
<!-- OpenSim Einstellung --> 
	<div class="w3-row w3-section">
	<p><label class="w3-text"><i class="fa fa-cogs" style="font-size:48px;color:grey"></i></label></p>
	
    <p><label for="base" class="w3-label control-label"><i class="fa fa-pencil" style="font-size:24px"></i>  OpenSim IP:</b></label></p>
        <div class="w3-third">
            <p><input class="w3-input w3-border" type="text" placeholder="OpenSim IP" name="OpenSim_IP"/></p>
        </div>
    </div>
 
	<div class="w3-row w3-section">
    <p><label for="base" class="w3-label control-label"><i class="fa fa-pencil" style="font-size:24px"></i>  OpenSim Port:</b></label></p>
        <div class="w3-third">
            <p><input class="w3-input w3-border" type="text" placeholder="OpenSim Port" name="OpenSim_Port"/></p>
        </div>
    </div>

 	<div class="w3-row w3-section">
    <p><label for="base" class="w3-label control-label"><i class="fa fa-pencil" style="font-size:24px"></i>  OpenSim Password:</b></label></p>
        <div class="w3-third">
            <p><input class="w3-input w3-border" type="password" placeholder="OpenSim Password" name="OpenSim_Password"/></p>
        </div>
    </div>
	

<!-- Command Eingabe --> 
 	<div class="w3-row w3-section">
	<p><label class="w3-text"><i class="glyphicon glyphicon-file" style="font-size:48px;color:grey"></i></label></p>
	
    <p><label for="base" class="w3-label control-label"><i class="fa fa-pencil" style="font-size:24"></i>  OpenSim Command:</b></label></p>
        <div class="w3-third">
            <input class="w3-input w3-border w3-light-grey" type="text" placeholder="OpenSim Command" name="OpenSim_Command"/>
        </div>
    </div> 
	
<br>

<!-- Command Button -->
	
    <div class="w3-row w3-section">
	<div class="w3-third">
        <button class="w3-btn w3-blue-grey w3-half w3-border" type="submit" name="submit"><i class="fa fa-mail-forward" style="font-size:24px"></i>  Send OpenSim Command</button>
		<button class="w3-btn w3-blue-grey w3-half w3-border" type="reset" name="Reset"><i class="fa fa-mail-reply" style="font-size:24px"></i>  Data Reset</button>
	</div>
    </div>
	
</form>

<?php endif ?>
	
</div>

<?php
function senden() 
{
	if (isset($_POST['telefon']) AND $_POST['telefon'] == 1)
		{
			// wir schaffen unsere Variablen und alle Leerzeichen beiläufig entfernen	

			$OpenSim_IP   = trim($_POST['OpenSim_IP']);
			$OpenSim_Port   = trim($_POST['OpenSim_Port']);
			$OpenSim_Password  = $_POST['OpenSim_Password'];
			$OpenSim_Command   = trim($_POST['OpenSim_Command']);

			// Einlesen der RemoteAdmin Datei.
			include('RemoteAdmin.php');
			 
			// Mit OpenSim verbinden
			$myRemoteAdmin = new RemoteAdmin($OpenSim_IP, $OpenSim_Port, $OpenSim_Password);
			 
			// OpenSim Konsolenbefehl samt parameter senden
			$parameters = array('command' => $OpenSim_Command);
			$myRemoteAdmin->SendCommand('admin_console_command', $parameters);
			// Jetzt die Seite neu starten
			?><meta http-equiv="refresh" content="0; URL=./ConsoleCommand.php"><?php 
		}
}
// Die Funktion senden aufrufen
senden();
?>

</div>
</body>
</html>	
