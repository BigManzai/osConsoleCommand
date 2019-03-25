<!DOCTYPE html><html><head><meta charset="utf-8">
<!-- 
	OpenSim Console Commands V1.02 by Manfred Aabye
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
	<div class="w3-button w3-bar w3-large w3-theme-d4" onclick="w3_open()"><a href="#" class="w3-bar-item w3-button"><i class="fa fa-bars"></i></a></button>
	<span class="w3-bar-item">OpenSimulator Console Commands</span>
	</div>

<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="width:300px;display:none" id="commandsbar">
  <button onclick="w3_close()" class="w3-bar-item w3-button w3-large">Close &times;</button>
	<span class="w3-bar-item">alert</span>
	<span class="w3-bar-item">alert-user</span>
	<span class="w3-bar-item">appearance find</span>
	<span class="w3-bar-item">appearance rebake</span>
	<span class="w3-bar-item">appearance send</span>
	<span class="w3-bar-item">backup</span>
	<span class="w3-bar-item">bypass permissions</span>
	<span class="w3-bar-item">change region</span>
	<span class="w3-bar-item">clear image queues</span>
	<span class="w3-bar-item">command-script</span>
	<span class="w3-bar-item">config get</span>
	<span class="w3-bar-item">config save</span>
	<span class="w3-bar-item">config set</span>
	<span class="w3-bar-item">create region</span>
	<span class="w3-bar-item">debug attachments log</span>
	<span class="w3-bar-item">debug eq</span>
	<span class="w3-bar-item">debug groups messaging verbose</span>
	<span class="w3-bar-item">debug groups verbose</span>
	<span class="w3-bar-item">debug http</span>
	<span class="w3-bar-item">debug jobengine</span>
	<span class="w3-bar-item">debug permissions</span>
	<span class="w3-bar-item">debug scene set</span>
	<span class="w3-bar-item">debug scripts log</span>
	<span class="w3-bar-item">debug threadpool level</span>
	<span class="w3-bar-item">debug threadpool set</span>
	<span class="w3-bar-item">debug xengine log</span>
	<span class="w3-bar-item">delete object creator</span>
	<span class="w3-bar-item">delete object id</span>
	<span class="w3-bar-item">delete object name</span>
	<span class="w3-bar-item">delete object outside</span>
	<span class="w3-bar-item">delete object owner</span>
	<span class="w3-bar-item">delete object pos</span>
	<span class="w3-bar-item">delete-region</span>
	<span class="w3-bar-item">dump asset</span>
	<span class="w3-bar-item">dump object id</span>
	<span class="w3-bar-item">edit scale</span>
	<span class="w3-bar-item">estate create</span>
	<span class="w3-bar-item">estate link region</span>
	<span class="w3-bar-item">estate set name</span>
	<span class="w3-bar-item">estate set owner</span>
	<span class="w3-bar-item">export-map</span>
	<span class="w3-bar-item">generate map</span>
	<span class="w3-bar-item">get log level</span>
	<span class="w3-bar-item">j2k decode</span>
	<span class="w3-bar-item">kick user</span>
	<span class="w3-bar-item">land clear</span>
	<span class="w3-bar-item">link-mapping</span>
	<span class="w3-bar-item">link-region</span>
	<span class="w3-bar-item">load iar</span>
	<span class="w3-bar-item">load oar</span>
	<span class="w3-bar-item">load xml</span>
	<span class="w3-bar-item">load xml2</span>
	<span class="w3-bar-item">login disable</span>
	<span class="w3-bar-item">login enable</span>
	<span class="w3-bar-item">physics get</span>
	<span class="w3-bar-item">physics set</span>
	<span class="w3-bar-item">region restart abort</span>
	<span class="w3-bar-item">region restart bluebox</span>
	<span class="w3-bar-item">region restart notice</span>
	<span class="w3-bar-item">remove-region</span>
	<span class="w3-bar-item">reset user cache</span>
	<span class="w3-bar-item">restart</span>
	<span class="w3-bar-item">rotate scene</span>
	<span class="w3-bar-item">save iar</span>
	<span class="w3-bar-item">save oar</span>
	<span class="w3-bar-item">save prims xml2</span>
	<span class="w3-bar-item">save xml</span>
	<span class="w3-bar-item">save xml2</span>
	<span class="w3-bar-item">scale scene</span>
	<span class="w3-bar-item">scripts resume</span>
	<span class="w3-bar-item">scripts start</span>
	<span class="w3-bar-item">scripts stop</span>
	<span class="w3-bar-item">scripts suspend</span>
	<span class="w3-bar-item">set log level</span>
	<span class="w3-bar-item">set terrain heights</span>
	<span class="w3-bar-item">set terrain texture</span>
	<span class="w3-bar-item">set water height</span>
	<span class="w3-bar-item">shutdown</span>
	<span class="w3-bar-item">sit user name</span>
	<span class="w3-bar-item">stand user name</span>
	<span class="w3-bar-item">sun current_time</span>
	<span class="w3-bar-item">sun day_length</span>
	<span class="w3-bar-item">sun day_night_offset</span>
	<span class="w3-bar-item">sun day_time_sun_hour_scale</span>
	<span class="w3-bar-item">sun update_interval</span>
	<span class="w3-bar-item">sun year_length</span>
	<span class="w3-bar-item">teleport user</span>
	<span class="w3-bar-item">terrain bake</span>
	<span class="w3-bar-item">terrain effect</span>
	<span class="w3-bar-item">terrain elevate</span>
	<span class="w3-bar-item">terrain fill</span>
	<span class="w3-bar-item">terrain flip</span>
	<span class="w3-bar-item">terrain load</span>
	<span class="w3-bar-item">terrain load-tile</span>
	<span class="w3-bar-item">terrain lower</span>
	<span class="w3-bar-item">terrain max</span>
	<span class="w3-bar-item">terrain min</span>
	<span class="w3-bar-item">terrain modify</span>
	<span class="w3-bar-item">terrain multiply</span>
	<span class="w3-bar-item">terrain newbrushes</span>
	<span class="w3-bar-item">terrain rescale</span>
	<span class="w3-bar-item">terrain revert</span>
	<span class="w3-bar-item">terrain save</span>
	<span class="w3-bar-item">terrain save-tile</span>
	<span class="w3-bar-item">tree active</span>
	<span class="w3-bar-item">tree freeze</span>
	<span class="w3-bar-item">tree load</span>
	<span class="w3-bar-item">tree plant</span>
	<span class="w3-bar-item">tree rate</span>
	<span class="w3-bar-item">tree reload</span>
	<span class="w3-bar-item">tree remove</span>
	<span class="w3-bar-item">unlink-region</span>
	<span class="w3-bar-item">vivox debug</span>
	<span class="w3-bar-item">wind base wind_update_rate</span>
	<span class="w3-bar-item">wind ConfigurableWind avgDirection</span>
	<span class="w3-bar-item">wind ConfigurableWind avgStrength</span>
	<span class="w3-bar-item">wind ConfigurableWind rateChange</span>
	<span class="w3-bar-item">wind ConfigurableWind varDirection</span>
	<span class="w3-bar-item">wind ConfigurableWind varStrength</span>
	<span class="w3-bar-item">wind SimpleRandomWind strength</span>
	<span class="w3-bar-item">windlight disable</span>
	<span class="w3-bar-item">windlight enable</span>
	<span class="w3-bar-item">windlight load</span>
	<span class="w3-bar-item">.</span>
	<span class="w3-bar-item">.</span>
</div>

<!-- Post es klingelt das Telefon -->
<?php if (!isset($_POST['telefon'])): ?>

<!-- Start Abfrage Nutzer -->
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
    <p><label for="base" class="w3-label control-label"><i class="fa fa-pencil" style="font-size:24px"></i>  OpenSim Command:</b></label></p>
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
// Eingaben auswerten und Senden
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

<!-- Sidebar abfrage -->
<script>
function w3_open() {
  document.getElementById("commandsbar").style.display = "block";
}

function w3_close() {
  document.getElementById("commandsbar").style.display = "none";
}
</script>

</div>
</body>
</html>	
