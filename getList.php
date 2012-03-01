<?php
error_reporting(E_ALL || ~E_NOTICE || ~E_WARNING);
include("../../../wp-config.php");
global $wpdb;
 /* Gets all users with lastActiveTime within the last 100 seconds */

$online_time = 10;
$seconds_ago = (current_time( 'timestamp') - absint((100)));
$query = "select DISTINCT(ip_address) from ".$wpdb->prefix."tts_online_status where last_active_time > '$seconds_ago'";
$result = $wpdb->get_results($query, OBJECT);

$output .= "Visitors Online&nbsp;&nbsp;&nbsp;".count($result);

print $output;
?>