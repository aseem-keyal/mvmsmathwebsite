<?php
// fetch my stats
$user = $_COOKIE['user_id'];
$query = "select stats from users where id=$user;";
$mysqli = new mysqli("localhost", "mvmsmath", "mvmsmath", "mvmsmath_system");
$result = $mysqli->query($query) or die(mysql_error());
$userData = $result->fetch_assoc();
$result->free();
$mysqli->close();
parse_str($userData['stats'],$statsAssoc);

$query = "select stats from groups where members like '%$user%';";
$mysqli = new mysqli("localhost", "mvmsmath", "mvmsmath", "mvmsmath_system");
$result = $mysqli->query($query) or die(mysql_error());
$groupData = $result->fetch_assoc();
$result->free();
$mysqli->close();
parse_str($groupData['stats'],$statsAssoc2);
// replace nulls with zeros
if (!isset($statsAssoc['first'])){
    $statsAssoc['first'] = 0;
}
if (!isset($statsAssoc['second'])){
    $statsAssoc['second'] = 0;
}
if (!isset($statsAssoc['incorrect'])){
    $statsAssoc['incorrect'] = 0;
}
if (!isset($statsAssoc2['first'])){
    $statsAssoc2['first'] = 0;
}
if (!isset($statsAssoc2['second'])){
    $statsAssoc2['second'] = 0;
}
if (!isset($statsAssoc2['incorrect'])){
    $statsAssoc2['incorrect'] = 0;
}
// calculate percentages
function percentage($var, $array){
    $raw = ( $var / array_sum($array) ) * 100;
    $rounded = round($raw,2);
    return $rounded;
}
echo '
<div class="span4">
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<td>Statistic</td>
				<td>My Value</td>
				<td>My Percentage</td>
				<td>Group Value</td>
				<td>Group Percentage</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Correct on First Try</td>
				<td>' . $statsAssoc['first'] . '</td>
				<td>' . percentage($statsAssoc['first'],$statsAssoc) . '%</td>
				<td>' . $statsAssoc2['first'] . '</td>
				<td>' . percentage($statsAssoc2['first'],$statsAssoc2) . '%</td>
			</tr>
			<tr>
				<td>Correct on Second Try</td>
				<td>' . $statsAssoc['second'] . '</td>
				<td>' . percentage($statsAssoc['second'],$statsAssoc) . '%</td>
				<td>' . $statsAssoc2['first'] . '</td>
				<td>' . percentage($statsAssoc2['second'],$statsAssoc2) . '%</td>
			</tr>
			<tr>
				<td>Incorrect</td>
                <td>' . $statsAssoc['incorrect'] . '</td>
				<td>' . percentage($statsAssoc['incorrect'],$statsAssoc) . '%</td>
				<td>' . $statsAssoc2['first'] . '</td>
				<td>' . percentage($statsAssoc2['incorrect'],$statsAssoc2) . '%</td>
			</tr>
		</tbody>
	</table>
</div>';
?>
