<!DOCTYPE html>
<!--
 * index.php
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
-->
<html>
<head>
	<title>Apache Log Viewer</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<h1>Apache Log Viewer</h1>
		<form action="index.php" method="get">
			<label for="filter">Temukan:</label>
			<input type="text" name="filter" placeholder="Masukkan Kata...">
			<button type="submit">Filter</button>
		</form>
		<table>
			<thead>
				<tr>
					<th>Date</th>
					<th>IP Address</th>
					<th>Request Method</th>
					<th>Request URI</th>
					<th>Status Code</th>
					<th>User Agent</th>
				</tr>
			</thead>
			<tbody>
				<?php include 'log_parser.php'; ?>
			</tbody>
		</table>
		<div id="chart"></div>
	</div>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript" src="script.js"></script>
</body>
</html>

