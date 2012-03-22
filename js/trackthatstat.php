<?php
error_reporting(E_ALL || ~E_NOTICE || ~E_WARNING);

include("../../../../wp-config.php");
$data=base64_decode($_GET['data']);
	$path = WP_PLUGIN_URL."/".TRACK_PLUGIN_NAME."/";
			$new_content .= '
				jQuery(document).ready(function(){
					jQuery.post("'.$path.'registerPageSession.php",{ '.$data.' }); 
					jQuery.post("'.$path.'update.php",{ ajax: "ajax" });
					setInterval("updateOnlineStatus()", 50000); // Update every 50 seconds
				});
				function updateOnlineStatus() {
				  jQuery.post("'.$path.'update.php",{ ajax: "ajax" });
				}
			';
			echo($new_content );
?>