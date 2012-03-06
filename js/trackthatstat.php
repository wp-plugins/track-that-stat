<?php
error_reporting(E_ALL || ~E_NOTICE || ~E_WARNING);

include("../../../../wp-config.php");
	$path = WP_PLUGIN_URL."/".TRACK_PLUGIN_NAME."/";
			$new_content .= '
				$(document).ready(function(){
					$.post("'.$path.'registerPageSession.php",{ '.$data.' }); 
					$.post("'.$path.'update.php",{ ajax: "ajax" });
					setInterval("updateOnlineStatus()", 50000); // Update every 50 seconds
				});
				function updateOnlineStatus() {
				  $.post("'.$path.'update.php",{ ajax: "ajax" });
				}
			';
			echo($new_content );
?>