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
	 parse_str($usersStatusStr, $usersStatusAssoc);
	 if ($isCorrect) {
	    if (array_key_exists($user, $usersStatusAssoc)) {
	       $usersStatusAssoc[$user] = (string)((int) $usersStatusAssoc[$user] + 1);
	    } else {
	       $usersStatusAssoc[$user] = "1";
	    }
	 } else {
	    if (array_key_exists($user, $usersStatusAssoc)) {	
	       $usersStatusAssoc[$user] = (string)((int) $usersStatusAssoc[$user] + 2);
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
?>