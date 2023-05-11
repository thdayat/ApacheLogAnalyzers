<?php
/*
 * log_parser.php
 *
 * Apache Log Parser
 *
 * @category   Blue Team Tools
 * @package    Apache Log Analyzer
 * @author     0x545e
 * @copyright  2023 0x545e
 * @license    https://www.php.net/license/3_0.txt  PHP License 3.0
 * @version    1.0.0
 * @link       https://github.com/TaufikSharePoint/apacheloganalayzer
 *
 *
*/
// path to access log file
$log_file = '[your-directory]/log/sample-access.log';

// read log file into array
$log_array = file($log_file, FILE_IGNORE_NEW_LINES);

// filter log by keyword
if (isset($_GET['filter'])) {
	$filter = $_GET['filter'];
	$log_array = array_filter($log_array, function($line) use ($filter) {
		return strpos($line, $filter) !== false;
	});
}

// parse log into table rows
$rows = '';
foreach ($log_array as $line) {
	$parts = explode(' ', $line);
	$date = date('m-d-Y H:i:s', strtotime($parts[3] . ' ' . $parts[4]));
	$ip = $parts[0];
	$method = $parts[6];
	$uri = $parts[7];
	$status_code = $parts[9];
	$user_agent = urldecode(substr($line, strpos($line, $parts[11])));
	$rows .= '<tr>';
	$rows .= '<td>' . $date . '</td>';
	$rows .= '<td>' . $ip . '</td>';
	$rows .= '<td>' . $method . '</td>';
	$rows .= '<td>' . $uri . '</td>';
	$rows .= '<td>' . $status_code . '</td>';
	$rows .= '<td>' . $user_agent . '</td>';
	$rows .= '</tr>';
}

// print table rows
echo $rows;
?>

