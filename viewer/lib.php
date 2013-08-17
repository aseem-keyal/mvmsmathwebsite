<?php
	function cleanInput($input) {

	  $search = array(
    	  '@<script[^>]*?>.*?</script>@si',   // Strip out javascript
    	  '@<[\/\!]*?[^<>]*?>@si',            // Strip out HTML tags
    	  '@<style[^>]*?>.*?</style>@siU',    // Strip style tags properly
    	  '@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments
  	  );

    	  $output = preg_replace($search, '', $input);
    	  return $output;
  	}

  function sanitize($input) {
    if (is_array($input)) {
        foreach($input as $var=>$val) {
            $output[$var] = sanitize($val);
        }
    }
    else {
        if (get_magic_quotes_gpc()) {
            $input = stripslashes($input);
        }
        $input  = cleanInput($input);
        $output = mysql_real_escape_string($input);
    }
    return $output;
}

function setUserQuestionStatus($id, $user, $question, $usersStatusStr, $isCorrect) {
	$query = "select stats from users where id=$user;";
	$mysqli = new mysqli("localhost", "mvmsmath", "mvmsmath", "mvmsmath_system");
	$result = $mysqli->query($query) or die(mysql_error());
	$resultData = $result->fetch_assoc();
	$result->free();
	$mysqli->close();
     error_log(implode(",",$resultData),3,"/var/www/my-error.log");
	 parse_str($usersStatusStr, $usersStatusAssoc);
	 if ($isCorrect) {
	    if (array_key_exists($user, $usersStatusAssoc)) {
	       $usersStatusAssoc[$user] = (string)((int) $usersStatusAssoc[$user] + 1);
           updateQuestionDifficulty($id, $question, $usersStatusAssoc);
           updateUserStats($user,$resultData['stats'],2);
	    } else {
	       $usersStatusAssoc[$user] = "1";
           updateQuestionDifficulty($id, $question, $usersStatusAssoc);
           updateUserStats($user,$resultData['stats'],1);
	    }
	 } else {
	    if (array_key_exists($user, $usersStatusAssoc)) {
	       $usersStatusAssoc[$user] = (string)((int) $usersStatusAssoc[$user] + 2);
           updateQuestionDifficulty($id, $question, $usersStatusAssoc);
           updateUserStats($user,$resultData['stats'],0);
	    } else {
	       $usersStatusAssoc[$user] = "2";
	    }
	 }
	 $usersStatusStr = http_build_query($usersStatusAssoc);

	 $query = "update " . $id . " set users_status='$usersStatusStr' where id='$question'";
	 $mysqli = new mysqli("localhost", "mvmsmath", "mvmsmath", "mvmsmath_questions");
	 $mysqli->query($query);
	 $mysqli->close();
}

function updateUserStats($user, $usersStatsStr, $isCorrect) {
	 parse_str($usersStatsStr, $usersStatsAssoc);
     error_log(implode(",",$usersStatsAssoc),3,"/var/www/my-error.log");
	 if ($isCorrect === 1) {
	    if (array_key_exists('first' , $usersStatsAssoc)) {
            $usersStatsAssoc['first'] = (string)((int) $usersStatsAssoc['first'] + 1);
	    } else {
            $usersStatsAssoc['first'] = "1";
	    }
	 } elseif ($isCorrect === 2) {
	    if (array_key_exists('second' , $usersStatsAssoc)) {
            $usersStatsAssoc['second'] = (string)((int) $usersStatsAssoc['second'] + 1);
	    } else {
            $usersStatsAssoc['second'] = "1";
	    }
     } elseif ($isCorrect === 0) {
	    if (array_key_exists('incorrect' , $usersStatsAssoc)) {
            $usersStatsAssoc['incorrect'] = (string)((int) $usersStatsAssoc['incorrect'] + 1);
	    } else {
            $usersStatsAssoc['incorrect'] = "1";
	    }
     }
	 $usersStatsStr = http_build_query($usersStatsAssoc);

	 $query = "update users set stats='$usersStatsStr' where id='$user'";
	 $mysqli = new mysqli("localhost", "mvmsmath", "mvmsmath", "mvmsmath_system");
	 $mysqli->query($query);
	 $mysqli->close();
}

function updateQuestionDifficulty($id, $question, $usersStatusAssoc){
    foreach ($usersStatusAssoc as &$status){
        $status = intval($status);
        switch ($status) {
            case 1:
                $status = 0;
                break;
            case 3:
                $status = 5;
                break;
            case 4:
                $status = 10;
                break;
            default:
                unset($status);
                break;
        }
    }
    $total = array_sum($usersStatusAssoc);
    $avg = (int) $total / (int) count($usersStatusAssoc);
	 $query = "update $id set difficulty='$avg' where id='$question'";
	 $mysqli = new mysqli("localhost", "mvmsmath", "mvmsmath", "mvmsmath_questions");
	 $mysqli->query($query);
	 $mysqli->close();
}
/* Code below is a system that could replace the user_status system but is not
 * being used right now
function updateStats($id, $user, $question, $correctness){
    switch ($correctness) {
        case 1:
            $query = "update $id set users_firsttry = IFNULL(CONCAT(users_firsttry,$user),$user) where id='$question'";
            $query3 = "update users set correct_firsttry = IFNULL(CONCAT(correct_firsttry,'$id:$question'), '$id:$question') where id='$user'";
            break;
        case 3:
            $query = "update $id set users_secondtry = IFNULL(CONCAT(users_secondtry,$user),$user) where id='$question'";
            $query3 = "update users set correct_firsttry = IFNULL(CONCAT(correct_firsttry,'$id:$question'), '$id:$question') where id='$user'";
            break;
        case 4:
            $query = "update $id set users_incorrect = IFNULL(CONCAT(users_incorrect,$user),$user) where id='$question'";
            $query3 = "update users set incorrect = IFNULL(CONCAT(incorrect,'$id:$question'), '$id:$question') where id='$user'";
            break;
    }
    $query2 = "update $id set users_all = IFNULL(CONCAT(users_all,$user),$user) where id='$question'";
}
 */
?>
